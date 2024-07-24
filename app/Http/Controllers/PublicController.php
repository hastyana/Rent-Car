<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Mobil;
use App\Models\Peminjaman;
use App\Models\User;

class PublicController extends Controller
{
    public function home () {
        $mobil = Mobil::all();
        return view('/users/home_login', ['mobil' => $mobil]);
    }

    public function peminjaman($id) {
        $mobils = Mobil::where('id', $id)->firstOrFail();
        $user = User::findOrFail(auth()->user()->id);
        return view('/users/peminjaman', ['mobils' => $mobils, 'user' => $user]);
    }
    public function peminjaman_save(Request $request, Mobil $mobil) {        

        $this->validate($request, [
            'nama' => 'required',
            'no_telp' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'plat' => 'required',
            'tarif' => 'required',
            'durasi' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'harga' => 'required',
            'keterangan' => 'nullable',
        ]);

        // $mobil = Mobil::findOrFail($request->mobil_id);
        $available = $mobil->jumlah - count($mobil->peminjaman);
        if ($request->jumlah > $available) {
            //tidak ada mobil tersedia
            return back()->with('success','Mobil Tidak Tersedia');
        }

        $peminjaman = Peminjaman::create([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'mobil_id' => $mobil->id,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'plat' => $request->plat,
            'tarif' => $request->tarif,
            'durasi' => $request->durasi,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'harga' => $request->tarif * $request->durasi,
            'keterangan' => 'Dirental',   
        ]);
        return redirect()->route('peminjaman_create', $mobil)->with('success', 'Peminjaman dikirim');
    }
    
    public function pengembalian_edit ($id) {
        $update = Peminjaman::find($id);
        return view('/users/pengembalian', compact('update'));
    }
    public function pengembalian_update (Request $request, $id) {
        $update = Peminjaman::find($id);
        $update->update([
            'plat' => $request->plat,
            'keterangan' => 'Kembali',
        ]);
        return redirect()->route('riwayat')->with('success', 'Kendaraan berhasil dikembalikan');
    }

    public function profil() {
        $profil = User::findOrFail(auth()->user()->id);
        return view('/users/profil', ['profil' => $profil]);
    }

    public function riwayat() {
        // $user = User::findOrFail(auth()->user()->id);
        // $riwayat = Peminjaman::where('nama', $user)->get();
        $riwayat = Peminjaman::all();
        return view('/users/riwayat', ['riwayat' => $riwayat]);
    }
}

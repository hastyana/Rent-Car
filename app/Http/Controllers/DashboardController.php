<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Mobil;
use App\Models\Peminjaman;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('admin/dashboard');
    }

    // Mobil
    public function show_mobil () {
        $mobil = Mobil::all();
        return view('/admin/mobil/mobil', ['mobil' => $mobil]);
    }

    public function create_mobil () {
        return view('/admin/mobil/mobil_add');
    }

    public function save_mobil (Request $request) {
        $this->validate($request, [
            'merk' => 'required',
            'model' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tahun' => 'required',
            'plat' => 'required',
            'tarif' => 'required',
            'jumlah' => 'required',
        ]);
        if($request->has('gambar')) {
            // $gambarpath = $request->file('gambar')->store('upload/mobil');
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension('gambar');
            $filename = time().'.'.$extension;
            $gambarpath = 'upload/gambar/';
            $file->move($gambarpath, $filename);
        }
        try {
            $data = new Mobil;
            $data->merk = $request->merk;
            $data->model = $request->model;
            $data->gambar = $gambarpath.$filename;
            $data->tahun = $request->tahun;
            $data->plat = $request->plat;
            $data->tarif = $request->tarif;
            $data->jumlah = $request->jumlah;
            $data->save();
            Session()->flash('alert-success', 'Mobil berhasil ditambahka');
            return redirect('/admin/mobil_add');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('/admin/mobil_add')->withInput();
        }
    }

    public function edit_mobil ($id) {
        $mobil = Mobil::find($id);
        return view('/admin/mobil/mobil_edit', compact('mobil'));
    }

    public function update_mobil (Request $request, $id) {
        $mobil = Mobil::find($id);
        $mobil->update([
            'jumlah' => $request->jumlah,
        ]);
        return redirect()->route('mobil')->with('success', 'Mobil berhasil diupdate');
    }

    public function delete_mobil (Request $request) {
        $delete = Mobil::findOrFail($request->id);
        Storage::delete($delete->gambar);
        $delete->delete();
        return redirect()->route('mobil')->with(['success' => 'Mobil Berhasil Dihapus!']);
    }

    // Peminjaman
    public function peminjaman () {
        $peminjaman = Peminjaman::all();
        return view('/admin/peminjaman', ['peminjaman' => $peminjaman]);
    }
    public function delete_peminjaman (Request $request) {
        $delete = Peminjaman::findOrFail($request->id);
        $delete->delete();
        return redirect()->route('peminjaman')->with(['success' => 'Riwayat Berhasil Dihapus!']);
    }

    // User
    public function show_user () {
        $user = User::where('level', 'user')->get();
        // $user = User::all();
        return view('/admin/users', ['user' => $user]);
    }
    public function delete_user (Request $request) {
        $delete = User::findOrFail($request->id);
        $delete->delete();
        return redirect()->route('users')->with(['success' => 'User Berhasil Dihapus!']);
    }
}

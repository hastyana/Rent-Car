<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'no_telp', 'mobil_id', 'merk', 'tahun', 'plat', 'tarif', 'durasi', 'mulai', 'selesai', 'harga', 'keterangan', 'created_at'];
    protected $dates = ['mulai, selesai, created_at, update_at'];

    public function users(){
    	return $this->belongsTo(User::class, 'users');
    }

    public function mobil(){
    	return $this->belongsTo(Mobil::class, 'mobil');
    }
}

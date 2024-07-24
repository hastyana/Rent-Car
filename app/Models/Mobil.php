<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobil';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'merk', 'model', 'gambar', 'tahun', 'plat', 'tarif', 'jumlah', 'terpakai', 'sisa'];
    protected $dates = ['created_at, update_at'];

    public function peminjaman(){
    	return $this->hasMany(Peminjaman::class, 'mobil_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mysql'; // koneksi key database project
    protected $table = 'mahasiswa'; // nama tabel

    // fungsi relasi, biodata mencari ke tabel (model) referensi StatusBiodata -- contoh
    public function status_mahasiswa()
    {
        return $this->belongsTo(StatusMahasiswa::class, 'stasusMahasiswa_id', 'id');
    }

    // fungsi relasi, biodata mencari N data transaksi -- contoh
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'mahasiswa_id', 'id');
    }
    
}

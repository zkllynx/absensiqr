<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Siswa extends Model
{
    protected $table = 'siswa'; // Nama tabel dalam database
    protected $fillable = ['nisn', 'nama_siswa', 'kelas', 'status']; // Kolom yang dapat diisi secara massal

    // Metode statis untuk mengambil semua siswa
    public static function getAll()
    {
        return self::all();
    }
}

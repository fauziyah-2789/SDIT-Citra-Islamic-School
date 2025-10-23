<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;

    // Pastikan sesuai dengan nama tabel migrasi
    protected $table = 'orang_tuas';

    protected $fillable = [
        'user_id',
        'siswa_id',
        'nama',
        'no_telp',
        'alamat',
    ];

    /**
     * Relasi ke akun user (yang digunakan untuk login)
     * Setiap ortu memiliki satu akun user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke siswa (anak)
     * Setiap ortu memiliki satu anak (jika 1 akun = 1 anak)
     */
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}

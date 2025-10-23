<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelas_id',
        'nama',
        'nis',
        'alamat',
        'no_telp',
    ];

    /**
     * Relasi ke tabel kelas
     * Setiap siswa berada di satu kelas
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    /**
     * Relasi ke orang tua
     * Setiap siswa memiliki satu orang tua (jika 1 ortu per anak)
     */
    public function orangTua()
    {
        return $this->hasOne(Ortu::class, 'siswa_id');
    }

    /**
     * Relasi opsional jika nanti ditambah tabel nilai
     */
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}

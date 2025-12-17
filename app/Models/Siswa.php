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

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function ortus()
    {
        return $this->hasMany(Ortu::class, 'siswa_id'); // satu siswa bisa punya banyak ortu
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}

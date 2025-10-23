<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilSekolah extends Model
{
    use HasFactory;

    protected $table = 'profil_sekolah'; // ✅ tambahkan ini
    protected $fillable = [
        'nama_sekolah',
        'alamat',
        'telepon',
        'email',
        'deskripsi',
        'logo',
        'foto_hero',
        'visi',
        'misi',
    ];
}

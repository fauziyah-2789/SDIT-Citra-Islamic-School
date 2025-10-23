<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'gelar',
        'mapel_id',
        'kelas_id',
        'foto',
        'alamat',
        'no_hp',
        'email',
    ];

    // 🔗 Relasi ke User (akun login)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 🔗 Guru mengajar 1 mapel
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    // 🔗 Guru jadi wali untuk 1 kelas
    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'guru_id');
    }

    // 🔗 Guru punya banyak materi
    public function materis()
    {
        return $this->hasMany(Materi::class);
    }

    // 🔗 Guru punya banyak soal
    public function soals()
    {
        return $this->hasMany(Soal::class);
    }

    // 🔗 Accessor untuk foto
    public function getFotoUrlAttribute()
    {
        return $this->foto 
            ? asset('storage/' . $this->foto)
            : asset('default/guru.png');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari',
        'jam_mulai',
        'jam_selesai',
        'mapel_id',
        'kelas_id',
        'guru_id',
    ];

    // Relasi ke guru
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    // Relasi ke kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    // Relasi ke mapel
    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }
}

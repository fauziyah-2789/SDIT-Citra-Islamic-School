<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelas_id',
        'mapel_id',
        'judul',
        'deskripsi',
        'file',
    ];

    // Relasi ke kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    // Relasi ke mapel
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    // Relasi pivot ke siswa (progress tracking)
    public function siswas()
    {
        return $this->belongsToMany(User::class, 'materi_siswa')
                    ->withPivot('status') // status: selesai/belum
                    ->withTimestamps();
    }
}

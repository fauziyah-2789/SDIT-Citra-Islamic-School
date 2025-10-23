<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $fillable = [
        'materi_id',
        'guru_id',
        'kelas_id',
        'judul',
        'deskripsi',
        'file',
        'deadline',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    // Pivot ke siswa
    public function siswas()
    {
        return $this->belongsToMany(User::class, 'tugas_siswa')
                    ->withPivot('status', 'nilai')
                    ->withTimestamps();
    }
}

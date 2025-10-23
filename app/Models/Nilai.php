<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'ortu_id',
        'soal_id',
        'nilai',
    ];

    // Relasi ke Orang Tua (pengganti siswa)
    public function ortu()
    {
        return $this->belongsTo(Ortu::class, 'ortu_id');
    }

    // Relasi ke Soal
    public function soal()
    {
        return $this->belongsTo(Soal::class);
    }
}

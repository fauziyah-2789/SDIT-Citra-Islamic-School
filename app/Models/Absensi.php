<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id',
        'nama_siswa',
        'tanggal',
        'status',
        'keterangan',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}

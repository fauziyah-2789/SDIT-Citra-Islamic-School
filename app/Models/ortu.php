<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;

    protected $table = 'orang_tuas'; // pastikan tabel benar

    protected $fillable = [
        'user_id',
        'siswa_id',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan',
        'alamat',
        'no_hp',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}

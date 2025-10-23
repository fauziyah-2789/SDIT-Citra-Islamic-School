<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilGuru extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id',
        'nip',
        'telepon',
        'alamat',
        'biografi',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriEskul extends Model
{
    use HasFactory;

    protected $fillable = [
        'ekstrakurikuler_id',
        'gambar',
        'keterangan',
    ];

    public function ekstrakurikuler()
    {
        return $this->belongsTo(Ekstrakurikuler::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Ekstrakurikuler extends Model
{
    protected $table = 'ekstrakurikulers';

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'foto_cover',
        'pembina',
        'aktif',
    ];

    // Biar route model binding pakai slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Auto-generate slug saat create
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->nama);
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('nama')) {
                $model->slug = Str::slug($model->nama);
            }
        });
    }
}

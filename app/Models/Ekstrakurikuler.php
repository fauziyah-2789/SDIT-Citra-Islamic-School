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

    // route model binding pakai slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // relasi ke galeri eskul
    public function galeriEskul()
    {
        return $this->hasMany(GaleriEskul::class, 'ekstrakurikuler_id');
    }

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

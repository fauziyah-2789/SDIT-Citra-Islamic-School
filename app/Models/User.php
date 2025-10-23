<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relasi ke Role
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Relasi ke Guru
    public function guru()
    {
        return $this->hasOne(Guru::class, 'user_id');
    }

    // ❌ Siswa dihapus karena tidak login
    // public function siswa() { return $this->hasOne(Siswa::class, 'user_id'); }

    // ✅ Relasi ke Orang Tua
    public function orangTua()
    {
        return $this->hasOne(Ortu::class, 'user_id');
    }
}

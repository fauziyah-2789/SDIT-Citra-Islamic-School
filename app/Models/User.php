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
        'foto', // optional
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relasi ke Role
    public function role()
    {
        return $this->belongsTo(Role::class); // pastikan Role model ada
    }

    // Relasi ke Guru
    public function guru()
    {
        return $this->hasOne(Guru::class, 'user_id');
    }

    // Relasi ke Orang Tua
    public function orangTua()
    {
        return $this->hasOne(Ortu::class, 'user_id');
    }

    // Helper cek role
    public function isAdmin()
    {
        return $this->role->name === 'admin';
    }

    public function isGuru()
    {
        return $this->role->name === 'guru';
    }

    public function isOrtu()
    {
        return $this->role->name === 'ortu';
    }
}

<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// IMPORT MODEL
use App\Models\Role;
use App\Models\Guru;
use App\Models\Ortu;

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

    protected $casts = [
        'password' => 'hashed',
    ];

    // =====================
    // RELATIONS
    // =====================

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function guru()
    {
        return $this->hasOne(Guru::class, 'user_id');
    }

    public function orangTua()
    {
        return $this->hasOne(Ortu::class, 'user_id');
    }

    // =====================
    // ROLE HELPERS (AMAN)
    // =====================

    public function isAdmin()
    {
        return $this->role?->name === 'admin';
    }

    public function isGuru()
    {
        return $this->role?->name === 'guru';
    }

    public function isOrtu()
    {
        return $this->role?->name === 'ortu';
    }
}

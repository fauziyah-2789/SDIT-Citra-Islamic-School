<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Guru;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        $guruRole = Role::where('name', 'guru')->first();

        // Buat akun user guru
        $user = User::updateOrCreate(
            ['email' => 'guru@sekolah.com'],
            [
                'name'     => 'Guru A',
                'password' => Hash::make('guru123'),
                'role'     => 'guru',
            ]
        );

        // Buat data guru di tabel gurus
        Guru::updateOrCreate(
            ['user_id' => $user->id],
            [
                'nama'    => 'Guru A',
                'mapel'   => 'Matematika',
                'profesi' => 'Guru Tetap',
                'foto'    => null,
            ]
        );
    }
}

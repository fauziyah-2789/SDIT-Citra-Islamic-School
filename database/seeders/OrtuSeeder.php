<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Ortu;
use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;

class OrtuSeeder extends Seeder
{
    public function run(): void
    {
        $ortuRole = Role::where('name', 'ortu')->first();

        // Pastikan ada siswa
        $siswa = Siswa::first();
        if (!$siswa) {
            $this->command->info('Seeder Ortu dibatalkan: Belum ada siswa.');
            return;
        }

        // Buat user ortu
        $ortuUser = User::firstOrCreate(
            ['email' => 'ortu@sekolah.com'],
            [
                'name'     => 'Orang Tua',
                'password' => Hash::make('ortu123'),
                'role_id'  => $ortuRole->id,
            ]
        );

        // Buat relasi ke tabel orang_tuas
        Ortu::updateOrCreate(
            ['user_id' => $ortuUser->id],
            [
                'siswa_id' => $siswa->id,
                'nama'     => $ortuUser->name,
                'no_telp'  => '08123456789',
                'alamat'   => 'Tangerang',
            ]
        );
    }
}

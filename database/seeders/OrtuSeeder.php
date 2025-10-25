<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Ortu;
use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Support\Facades\Hash;

class OrtuSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil role ortu
        $role = Role::where('name', 'ortu')->first();

        // Buat kelas dummy jika belum ada
        $kelas = Kelas::firstOrCreate(
            ['nama' => 'Kelas 1']
        );

        // Buat siswa dummy jika belum ada
        $siswa = Siswa::firstOrCreate(
            ['nis' => '123456'],
            [
                'nama' => 'Siswa Test',
                'kelas_id' => $kelas->id,
                'alamat' => 'Jakarta',
                'no_telp' => '08123456789',
            ]
        );

        // Buat akun user ortu
        $ortuUser = User::updateOrCreate(
            ['email' => 'ortu@mail.com'],
            [
                'name' => 'Orang Tua',
                'password' => Hash::make('ortu123'),
                'role_id' => $role->id,
            ]
        );

        // Buat data ortu di tabel orang_tuas
        Ortu::updateOrCreate(
            ['user_id' => $ortuUser->id],
            [
                'siswa_id' => $siswa->id,
                'nama' => $ortuUser->name,
                'no_telp' => '08123456789',
                'alamat' => 'Tangerang',
            ]
        );

        $this->command->info('Ortu user berhasil dibuat!');
    }
}

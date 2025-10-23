<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $kelas = Kelas::first();

        Siswa::firstOrCreate([
            'nama' => 'Budi Santoso',
            'nis' => 'S001',
            'kelas_id' => $kelas?->id,
            'alamat' => 'Jl. Merdeka No. 45',
            'no_telp' => '081234567890',
        ]);

        Siswa::firstOrCreate([
            'nama' => 'Siti Rahmawati',
            'nis' => 'S002',
            'kelas_id' => $kelas?->id,
            'alamat' => 'Jl. Kenanga No. 23',
            'no_telp' => '081234567891',
        ]);
    }
}

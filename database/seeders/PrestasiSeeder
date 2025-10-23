<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prestasi;

class PrestasiSeeder extends Seeder
{
    public function run()
    {
        Prestasi::create([
            'judul' => 'Juara 1 Lomba Matematika Kabupaten',
            'deskripsi' => 'Siswa kelas 5 meraih juara 1 lomba matematika tingkat kabupaten.',
            'tipe' => 'siswa',
            'lokasi' => 'Kota Contoh',
            'tanggal' => now()->subDays(120)->toDateString()
        ]);

        Prestasi::create([
            'judul' => 'Akreditasi "A" Nasional',
            'deskripsi' => 'Sekolah meraih akreditasi A pada 2024.',
            'tipe' => 'sekolah',
            'tanggal' => now()->subYear()->toDateString()
        ]);
    }
}

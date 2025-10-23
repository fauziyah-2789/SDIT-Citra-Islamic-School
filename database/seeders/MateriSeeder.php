<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materi;
use App\Models\Mapel;
use App\Models\Kelas;

class MateriSeeder extends Seeder
{
    public function run(): void
    {
        $kelas = Kelas::first();
        $mapel = Mapel::first();

        Materi::firstOrCreate([
    'judul' => 'Materi Contoh',
    'kelas_id' => 1,
    'mapel_id' => 1,
    'deskripsi' => 'Deskripsi materi contoh',
]);
    }
}

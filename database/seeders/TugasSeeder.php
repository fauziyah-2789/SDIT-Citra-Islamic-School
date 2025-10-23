<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tugas;
use App\Models\Kelas;

class TugasSeeder extends Seeder
{
    public function run(): void
    {
        $kelas = Kelas::first();

        Tugas::firstOrCreate([
            'judul' => 'Tugas Contoh',
            'kelas_id' => $kelas ? $kelas->id : null,
            'deskripsi' => 'Deskripsi tugas contoh',
            'deadline' => now()->addDays(7),
        ]);
    }
}

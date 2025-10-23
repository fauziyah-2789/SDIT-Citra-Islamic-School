<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Guru;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        $kelas = Kelas::first();
        $mapel = Mapel::first();
        $guru = Guru::first();

        Jadwal::firstOrCreate([
            'kelas_id' => $kelas ? $kelas->id : null,
            'mapel_id' => $mapel ? $mapel->id : null,
            'guru_id' => $guru ? $guru->id : null,
            'hari' => 'Senin',
            'jam_mulai' => '08:00:00',
            'jam_selesai' => '09:30:00',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Absensi;
use App\Models\Guru;
use App\Models\Ortu;
use App\Models\Jadwal;

class AbsensiSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil salah satu ortu (sebagai wali siswa)
        $ortu = Ortu::first();
        $siswa = $ortu ? $ortu->siswa : null;

        // Ambil guru dan jadwal pertama
        $guru = Guru::first();
        $jadwal = Jadwal::first();

        if ($siswa && $guru && $jadwal) {
            Absensi::firstOrCreate([
                'siswa_id'   => $siswa->id,
                'guru_id'    => $guru->id,
                'jadwal_id'  => $jadwal->id,
                'status'     => 'Hadir',
                'tanggal'    => now(),
            ]);
        }
    }
}

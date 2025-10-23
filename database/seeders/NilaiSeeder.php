<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ortu;
use App\Models\Soal;
use App\Models\Guru;
use App\Models\Nilai;

class NilaiSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil satu ortu, lalu ambil siswa dari ortu
        $ortu = Ortu::first();
        $siswa = $ortu ? $ortu->siswa : null;

        $soal = Soal::first();
        $guruId = $soal && $soal->guru_id ? $soal->guru_id : (Guru::first() ? Guru::first()->id : null);

        if ($siswa && $soal && $guruId) {
            Nilai::firstOrCreate([
                'siswa_id' => $siswa->id,
                'soal_id'  => $soal->id,
                'guru_id'  => $guruId,
                'nilai'    => rand(60, 100),
            ]);
        }
    }
}

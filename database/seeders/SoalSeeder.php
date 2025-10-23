<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class SoalSeeder extends Seeder
{
    public function run(): void
    {
        Soal::firstOrCreate([
            'materi_id' => 1,
            'soal' => 'Contoh soal 1',
            'jawaban' => 'Contoh jawaban',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        $kelasList = [
            ['nama_kelas' => '1'],
            ['nama_kelas' => '2'],
            ['nama_kelas' => '3'],
            ['nama_kelas' => '4'],
            ['nama_kelas' => '5'],
            ['nama_kelas' => '6'],
        ];

        foreach ($kelasList as $kelas) {
            Kelas::firstOrCreate($kelas);
        }
    }
}

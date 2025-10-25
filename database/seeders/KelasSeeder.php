<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        $kelasList = [
            ['nama' => '1'],
            ['nama' => '2'],
            ['nama' => '3'],
            ['nama' => '4'],
            ['nama' => '5'],
            ['nama' => '6'],
        ];

        foreach ($kelasList as $kelas) {
            Kelas::firstOrCreate($kelas);
        }
    }
}

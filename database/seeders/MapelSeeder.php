<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mapel;

class MapelSeeder extends Seeder
{
    public function run(): void
    {
        $mapels = ['Matematika', 'Bahasa Indonesia', 'Bahasa Inggris', 'Fisika', 'Kimia'];
        foreach ($mapels as $m) {
            Mapel::firstOrCreate(['nama' => $m]); // kolom sesuai migrasi
        }
    }
}

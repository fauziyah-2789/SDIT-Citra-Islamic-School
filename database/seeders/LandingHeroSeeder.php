<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandingHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('landing_heroes')->insert([
    'title'=>'Selamat Datang di SDIT Citra Islamic School',
    'subtitle'=>'Membentuk Generasi Qur’ani yang Cerdas dan Berkarakter',
    'cta_text'=>'Daftar Sekarang',
    'cta_link'=>'#daftar',
    'image'=>'hero.jpg'
]);
  //
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSekolahSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('profil_sekolah')->updateOrInsert(
            ['id' => 1], // supaya cuma satu data profil sekolah default
            [
                'nama_sekolah' => 'Sekolah Citra',
                'alamat'       => 'Jl. Pendidikan No. 123, Kota Citra',
                'telepon'      => '081234567890',
                'email'        => 'info@sekolahcitra.sch.id',
                'deskripsi'    => 'Sekolah Citra mencetak generasi unggul, berkarakter, dan berprestasi.',
                'logo'         => null, // bisa diisi nama file jika ada
                'foto_hero'    => null, // bisa diisi nama file jika ada
                'visi'         => 'Menjadi sekolah unggulan yang berkarakter dan berprestasi.',
                'misi'         => 'Mendidik siswa agar beriman, cerdas, kreatif, dan peduli lingkungan.',
                'created_at'   => now(),
                'updated_at'   => now(),
            ]
        );
    }
}

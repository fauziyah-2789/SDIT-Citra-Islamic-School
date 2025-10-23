<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,           // Role dulu
            KelasSeeder::class,          // Kelas dulu
            AdminUserSeeder::class,      // Admin
            GuruSeeder::class,           // Guru
            SiswaSeeder::class,          // Siswa (baru kita tambahkan)
            OrtuSeeder::class,           // Ortu (butuh siswa_id)
            MapelSeeder::class,          // Mapel
            MateriSeeder::class,         // Materi
            SoalSeeder::class,           // Soal
            TugasSeeder::class,          // Tugas
            NilaiSeeder::class,          // Nilai (setelah siswa)
            JadwalSeeder::class,         // Jadwal
            AbsensiSeeder::class,        // Absensi (setelah siswa)
            ProfilSekolahSeeder::class,  // Profil sekolah terakhir
        ]);
    }
}

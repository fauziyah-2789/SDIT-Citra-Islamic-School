<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Prestasi;
use App\Models\Program;
use App\Models\Ekstrakurikuler;
use App\Models\Fasilitas;
use App\Models\Guru;
use App\Models\LandingSetting;
use App\Models\Pengumuman;

class PublicController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | DATA DINAMIS DARI DATABASE
        |--------------------------------------------------------------------------
        */
        $beritas     = Berita::latest()->take(6)->get();
        $galeris     = Galeri::latest()->take(8)->get();
        $prestasies  = Prestasi::latest()->take(9)->get();
        $programs    = Program::orderBy('order')->get();
        $gurus       = Guru::latest()->get();

        // EKSTRAKURIKULER (AKTIF SEMUA YANG ADA DI DB)
        $ekstrakurikuler = Ekstrakurikuler::orderBy('id', 'asc')->get();

        // FASILITAS DARI DATABASE (OPSIONAL)
        $fasilitasDB = Fasilitas::latest()->get();

        // PENGUMUMAN TERBARU (UNTUK HERO / NOTIFIKASI)
        $pengumuman = Pengumuman::latest()->first();

        /*
        |--------------------------------------------------------------------------
        | STATISTIK
        |--------------------------------------------------------------------------
        */
        $siswaCount = 120; // statis / bisa diganti Model Siswa
        $guruCount  = $gurus->count();
        $kelasCount = 8;   // statis / bisa diganti Model Kelas
        $ekskulCount = $ekstrakurikuler->count();

        /*
        |--------------------------------------------------------------------------
        | LANDING PAGE SETTINGS
        |--------------------------------------------------------------------------
        */
        $hero_title       = LandingSetting::get('hero_title', 'SDIT Citra Islamic School');
        $hero_sub         = LandingSetting::get('hero_sub', 'Pendidikan Islami berkualitas, karakter & prestasi — siapkan generasi masa depan.');
        $hero_image       = LandingSetting::get('hero_image');
        $about_text       = LandingSetting::get('about_text');
        $kurikulum_text   = LandingSetting::get('kurikulum_text');
        $kontak_address   = LandingSetting::get('kontak_address');
        $kontak_phone     = LandingSetting::get('kontak_phone');
        $kontak_email     = LandingSetting::get('kontak_email');
        $kontak_map       = LandingSetting::get('kontak_map');
        $pendaftaran_text = LandingSetting::get('pendaftaran_text');

        /*
        |--------------------------------------------------------------------------
        | DATA STATIS (CADANGAN / KONTEN TETAP)
        |--------------------------------------------------------------------------
        */

        $programTriwulan = [
            "Panggung Hafalan dan Bahasa (Bersertifikat)",
            "Uji Praktek Amaliyah",
            "Kegiatan Santunan",
            "Jalinan Silaturahim Masyarakat",
            "Tadabbur Alam",
            "Konseling dan Bimbingan Ekonomi Dasar",
            "Health Screening / Pemeriksaan Kesehatan",
        ];

        $programTahunan = [
            "Pentas Prestasi dan Kreatifitas",
            "Study Ekonomi",
            "Peringatan Hari Besar Islam",
            "Peringatan Hari Besar Nasional",
        ];

        $ekstrakulikulerList = [
            "Pramuka",
            "Conversational (Inggris/Arab)",
            "Ketrampilan",
            "Bimbingan Komputer",
            "Hasta Karya",
            "Tanah Liat",
            "Kesenian: Tari, Menggambar & Mewarnai",
            "Bela Diri: Taekwondo",
            "Olahraga: Futsal / Mini Soccer, Badminton, Panahan, Bola Voli",
            "Mading Dasar",
            "Kegiatan Kewirausahaan Dasar",
            "Kegiatan Lingkungan & Penghijauan Sekolah",
        ];

        $programUnggulan = [
            "Penguatan Karakter dan Pengembangan Diri",
            "Akhlaqul Karimah",
            "Metode Yanbu’a",
            "Tahsin & Tahfidz Qur’an",
            "Khotmil Qur’an",
            "Bahasa Inggris & Arab",
            "Basic Komputer",
            "Calistung Interaktif",
            "Virtual Learning",
            "Educational Show",
        ];

        $budayaSekolah = [
            "Upacara Bendera",
            "Senam Jumat",
            "Makan Pagi Bersama",
            "Literasi Pagi",
            "Sholat Dhuha & Dzuhur Berjamaah",
            "Puasa Senin & Kamis",
            "Hafalan Juz Amma",
        ];

        $fasilitasList = [
            "2 Guru dalam 1 Kelas",
            "Ruang Kelas Full AC",
            "Laboratorium Komputer",
            "Perpustakaan",
            "Masjid",
            "Lapangan Olahraga",
            "Area Hijau",
        ];

        /*
        |--------------------------------------------------------------------------
        | RETURN VIEW
        |--------------------------------------------------------------------------
        */
        return view('public.landing', compact(
            // DB
            'beritas',
            'galeris',
            'prestasies',
            'programs',
            'ekstrakurikuler',
            'fasilitasDB',
            'gurus',
            'pengumuman',

            // SETTINGS
            'hero_title',
            'hero_sub',
            'hero_image',
            'about_text',
            'kurikulum_text',
            'kontak_address',
            'kontak_phone',
            'kontak_email',
            'kontak_map',
            'pendaftaran_text',

            // STATISTIK
            'siswaCount',
            'guruCount',
            'kelasCount',
            'ekskulCount',

            // STATIS
            'programTriwulan',
            'programTahunan',
            'ekstrakulikulerList',
            'programUnggulan',
            'budayaSekolah',
            'fasilitasList'
        ));
    }
}

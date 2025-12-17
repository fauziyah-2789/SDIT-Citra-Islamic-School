<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah; // Asumsikan Anda memiliki model ProfilSekolah
use Illuminate\Http\Request;

class ProfilPublikController extends Controller
{
    /**
     * Menampilkan halaman Profil Sekolah (Tentang Kami).
     */
    public function index()
    {
        // Ambil data profil (Visi, Misi, Sejarah) dari database
        // Jika Anda menggunakan Model ProfilSekolah:
        $profil = ProfilSekolah::first(); 

        // Data statis jika model belum siap:
        $profilData = [
            'visi' => 'Menjadi pusat pendidikan Islam terdepan yang mencetak generasi berakhlak mulia, cerdas, dan mandiri.',
            'misi' => [
                'Melaksanakan pembelajaran terpadu (Kurikulum Nasional dan Kurikulum Islam).',
                'Mengembangkan potensi spiritual, intelektual, emosional, dan fisik siswa.',
                'Menciptakan lingkungan sekolah yang Islami, aman, dan kondusif.'
            ],
            'sejarah' => 'SDIT Citra Islamic School didirikan pada tahun 2010 dengan komitmen untuk menggabungkan pendidikan agama yang kuat dan akademis yang unggul, merespon kebutuhan masyarakat akan sekolah Islam modern.',
            'filosofi' => 'Pendidikan Holistik: Mendidik siswa secara menyeluruh (ruh, akal, jasad) berdasarkan nilai-nilai Qurani.'
        ];
        
        // Pilih data yang akan dikirim (misalnya data statis untuk sementara)
        return view('public.profil.index', [
            'profil' => $profil ?? $profilData, // Kirim data dari DB atau data statis
            'page_title' => 'Profil Sekolah'
        ]);
    }
}
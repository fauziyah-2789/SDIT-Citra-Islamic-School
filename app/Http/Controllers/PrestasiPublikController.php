<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\ProfilSekolah; // ✅ tambahkan ini

class PrestasiPublikController extends Controller
{
    // Halaman Semua Prestasi Publik
    public function index()
    {
        $profil = ProfilSekolah::first(); // Info sekolah untuk header/footer
        $prestasis = Prestasi::latest()->paginate(12); // Pagination
        return view('public.prestasi.index', compact('prestasis', 'profil'));
    }
}

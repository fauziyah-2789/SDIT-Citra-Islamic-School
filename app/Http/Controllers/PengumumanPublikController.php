<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanPublikController extends Controller
{
    /**
     * Tampilkan daftar pengumuman di halaman publik
     */
    public function index()
    {
        $pengumumans = Pengumuman::latest()->paginate(6);

        return view('public.pengumuman.index', compact('pengumumans'));
    }

    /**
     * Tampilkan detail pengumuman berdasarkan slug
     */
    public function show($slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)->firstOrFail();

        return view('public.pengumuman.show', compact('pengumuman'));
    }
}

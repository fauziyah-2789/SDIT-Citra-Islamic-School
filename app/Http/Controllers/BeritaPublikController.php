<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;

class BeritaPublikController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->paginate(6);
        $galeris = Galeri::latest()->take(8)->get();
        return view('public.berita.index', compact('beritas', 'galeris'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('public.berita.show', compact('berita'));
    }
}

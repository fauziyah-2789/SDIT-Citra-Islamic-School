<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruPublikController extends Controller
{
    // Tampilkan semua guru
    public function index()
    {
        $gurus = Guru::latest()->get();
        return view('public.guru.index', compact('gurus'));
    }

    // Tampilkan detail guru (opsional)
    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('public.guru.show', compact('guru'));
    }
}

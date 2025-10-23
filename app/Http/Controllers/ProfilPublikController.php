<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;

class ProfilPublikController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::first();
        return view('public.profil.index', compact('profil'));
    }
}

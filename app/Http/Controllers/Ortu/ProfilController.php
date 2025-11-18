<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function edit()
    {
        return view('ortu.profil.edit');
    }

    public function update(Request $request)
    {
        // nanti bisa diisi logika update data ortu
        return back()->with('success', 'Profil berhasil diperbarui!');
    }
}

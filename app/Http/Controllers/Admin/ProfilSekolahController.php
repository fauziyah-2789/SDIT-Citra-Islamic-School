<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilSekolahController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::first();
        return view('admin.profil.index', compact('profil'));
    }

    public function edit()
    {
        $profil = ProfilSekolah::first();
        return view('admin.profil.edit', compact('profil'));
    }

    public function update(Request $request)
    {
        $profil = ProfilSekolah::first();

        $data = $request->only(['nama_sekolah','alamat','telepon','email','deskripsi','visi','misi']);

        if ($request->hasFile('logo')) {
            if ($profil->logo && Storage::disk('public')->exists($profil->logo)) {
                Storage::disk('public')->delete($profil->logo);
            }
            $data['logo'] = $request->file('logo')->store('profil','public');
        }

        if ($request->hasFile('foto_hero')) {
            if ($profil->foto_hero && Storage::disk('public')->exists($profil->foto_hero)) {
                Storage::disk('public')->delete($profil->foto_hero);
            }
            $data['foto_hero'] = $request->file('foto_hero')->store('profil','public');
        }

        $profil->update($data);
        return redirect()->route('admin.profil.index')->with('success','Profil berhasil diperbarui.');
    }
}

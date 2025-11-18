<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GaleriEskul;
use Illuminate\Http\Request;

class GaleriEskulController extends Controller
{
    public function index()
    {
        $galeri = GaleriEskul::latest()->paginate(10);
        return view('admin.galeri-eskul.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri-eskul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        $gambar = $request->file('gambar')->store('galeri-eskul', 'public');

        GaleriEskul::create([
            'judul' => $request->judul,
            'gambar' => $gambar,
        ]);

        return redirect()->route('galeri-eskul.index')->with('success', 'Foto berhasil ditambahkan');
    }

    public function edit(GaleriEskul $galeri_eskul)
    {
        return view('admin.galeri-eskul.edit', compact('galeri_eskul'));
    }

    public function update(Request $request, GaleriEskul $galeri_eskul)
    {
        $request->validate(['judul' => 'required']);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('galeri-eskul', 'public');
            $galeri_eskul->gambar = $gambar;
        }

        $galeri_eskul->judul = $request->judul;
        $galeri_eskul->save();

        return redirect()->route('galeri-eskul.index')->with('success', 'Foto berhasil diperbarui');
    }

    public function destroy(GaleriEskul $galeri_eskul)
    {
        $galeri_eskul->delete();
        return redirect()->route('galeri-eskul.index')->with('success', 'Foto berhasil dihapus');
    }
}

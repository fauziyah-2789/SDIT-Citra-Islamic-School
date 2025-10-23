<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumans = Pengumuman::latest()->paginate(10);
        return view('guru.pengumuman.index', compact('pengumumans'));
    }

    public function create()
    {
        return view('guru.pengumuman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        Pengumuman::create([
            'guru_id' => auth()->id(),
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        return redirect()->route('guru.pengumuman.index')->with('success','Pengumuman berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('guru.pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        $pengumuman->update($request->only('judul','konten'));

        return redirect()->route('guru.pengumuman.index')->with('success','Pengumuman berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();
        return redirect()->route('guru.pengumuman.index')->with('success','Pengumuman berhasil dihapus!');
    }
}

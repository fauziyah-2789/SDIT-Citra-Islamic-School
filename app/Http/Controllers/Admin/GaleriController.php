<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(12);
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'keterangan' => 'nullable|string',
            'file' => 'required|image|max:5120',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = 'galeri/' . time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public', $filename);
        }

        Galeri::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'file' => $filename,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'keterangan' => 'nullable|string',
            'file' => 'nullable|image|max:5120',
        ]);

        if ($request->hasFile('file')) {
            if ($galeri->file && Storage::exists('public/'.$galeri->file)) {
                Storage::delete('public/'.$galeri->file);
            }

            $file = $request->file('file');
            $filename = 'galeri/' . time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public', $filename);

            $galeri->file = $filename;
        }

        $galeri->judul = $request->judul;
        $galeri->keterangan = $request->keterangan;
        $galeri->save();

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        if ($galeri->file && Storage::exists('public/'.$galeri->file)) {
            Storage::delete('public/'.$galeri->file);
        }

        $galeri->delete();
        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil dihapus.');
    }
}

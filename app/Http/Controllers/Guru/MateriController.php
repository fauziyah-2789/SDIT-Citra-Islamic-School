<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    public function index()
    {
        $materis = Materi::where('guru_id', auth()->id())->latest()->paginate(10);
        return view('guru.materi.index', compact('materis'));
    }

    public function create()
    {
        return view('guru.materi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'file' => 'nullable|file|max:2048',
        ]);

        $data = $request->all();
        $data['guru_id'] = auth()->id();
        $data['slug'] = Str::slug($request->judul);

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('materi', 'public');
        }

        Materi::create($data);
        return redirect()->route('guru.materi.index')->with('success', 'Materi berhasil ditambahkan!');
    }

    public function edit(Materi $materi)
    {
        $this->authorize('update', $materi);
        return view('guru.materi.edit', compact('materi'));
    }

    public function update(Request $request, Materi $materi)
    {
        $this->authorize('update', $materi);

        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'file' => 'nullable|file|max:2048',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);

        if ($request->hasFile('file')) {
            if ($materi->file && Storage::disk('public')->exists($materi->file)) {
                Storage::disk('public')->delete($materi->file);
            }
            $data['file'] = $request->file('file')->store('materi', 'public');
        }

        $materi->update($data);
        return redirect()->route('guru.materi.index')->with('success', 'Materi berhasil diperbarui!');
    }

    public function destroy(Materi $materi)
    {
        $this->authorize('delete', $materi);

        if ($materi->file && Storage::disk('public')->exists($materi->file)) {
            Storage::disk('public')->delete($materi->file);
        }

        $materi->delete();
        return redirect()->route('guru.materi.index')->with('success', 'Materi berhasil dihapus!');
    }
}

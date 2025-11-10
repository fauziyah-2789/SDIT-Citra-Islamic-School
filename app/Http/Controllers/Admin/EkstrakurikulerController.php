<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekskul = Ekstrakurikuler::orderBy('nama')->get();
        return view('admin.ekskul.index', compact('ekskul'));
    }

    public function create()
    {
        return view('admin.ekskul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'nullable',
            'pembina' => 'nullable|max:255',
            'foto_cover' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama', 'deskripsi', 'pembina', 'aktif']);

        // Upload foto
        if ($request->hasFile('foto_cover')) {
            $data['foto_cover'] = $request->file('foto_cover')->store('ekskul', 'public');
        }

        Ekstrakurikuler::create($data);

        return redirect()->route('admin.ekskul.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
    }

    public function edit(Ekstrakurikuler $ekskul)
    {
        return view('admin.ekskul.edit', compact('ekskul'));
    }

    public function update(Request $request, Ekstrakurikuler $ekskul)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'nullable',
            'pembina' => 'nullable|max:255',
            'foto_cover' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['nama', 'deskripsi', 'pembina', 'aktif']);

        if ($request->hasFile('foto_cover')) {
            $data['foto_cover'] = $request->file('foto_cover')->store('ekskul', 'public');
        }

        $ekskul->update($data);

        return redirect()->route('admin.ekskul.index')->with('success', 'Data ekskul diperbarui.');
    }

    public function destroy(Ekstrakurikuler $ekskul)
    {
        $ekskul->delete();
        return redirect()->route('admin.ekskul.index')->with('success', 'Ekstrakurikuler berhasil dihapus.');
    }
}

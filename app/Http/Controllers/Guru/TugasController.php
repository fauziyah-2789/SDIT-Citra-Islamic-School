<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index() {
        $tugas = Tugas::where('guru_id', auth()->id())->latest()->paginate(10);
        return view('guru.tugas.index', compact('tugas'));
    }

    public function create() {
        return view('guru.tugas.create');
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
        ]);

        Tugas::create([
            'guru_id' => auth()->id(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'deadline' => $request->deadline,
        ]);

        return redirect()->route('guru.tugas.index')->with('success','Tugas berhasil ditambahkan!');
    }

    public function edit(Tugas $tugas) {
        $this->authorize('update', $tugas);
        return view('guru.tugas.edit', compact('tugas'));
    }

    public function update(Request $request, Tugas $tugas) {
        $this->authorize('update', $tugas);
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
        ]);

        $tugas->update($request->only('judul','deskripsi','deadline'));
        return redirect()->route('guru.tugas.index')->with('success','Tugas berhasil diperbarui!');
    }

    public function destroy(Tugas $tugas) {
        $this->authorize('delete', $tugas);
        $tugas->delete();
        return redirect()->route('guru.tugas.index')->with('success','Tugas berhasil dihapus!');
    }
}

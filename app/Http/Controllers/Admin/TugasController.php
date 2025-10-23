<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index() {
        $tugas = Tugas::latest()->paginate(10);
        return view('admin.tugas.index', compact('tugas'));
    }

    public function create() {
        return view('admin.tugas.create');
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
        ]);

        Tugas::create($request->all());
        return redirect()->route('admin.tugas.index')->with('success','Tugas berhasil ditambahkan!');
    }

    public function edit(Tugas $tugas) {
        return view('admin.tugas.edit', compact('tugas'));
    }

    public function update(Request $request, Tugas $tugas) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'deadline' => 'required|date',
        ]);

        $tugas->update($request->only('judul','deskripsi','deadline'));
        return redirect()->route('admin.tugas.index')->with('success','Tugas berhasil diperbarui!');
    }

    public function destroy(Tugas $tugas) {
        $tugas->delete();
        return redirect()->route('admin.tugas.index')->with('success','Tugas berhasil dihapus!');
    }

    public function show(Tugas $tugas) {
        return view('admin.tugas.show', compact('tugas'));
    }
}

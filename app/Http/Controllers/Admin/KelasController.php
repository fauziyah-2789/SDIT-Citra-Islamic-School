<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Guru;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::with('guru')->latest()->paginate(10);
        return view('admin.kelas.index', compact('kelas'));
    }

    public function create()
    {
        $gurus = Guru::all();
        return view('admin.kelas.create', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'guru_id' => 'nullable|exists:gurus,id',
        ]);

        Kelas::create($request->only('nama_kelas','guru_id'));

        return redirect()->route('admin.kelas.index')->with('success','Kelas berhasil ditambahkan');
    }

    public function edit(Kelas $kelas)
    {
        $gurus = Guru::all();
        return view('admin.kelas.edit', compact('kelas','gurus'));
    }

    public function update(Request $request, Kelas $kelas)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'guru_id' => 'nullable|exists:gurus,id',
        ]);

        $kelas->update($request->only('nama_kelas','guru_id'));

        return redirect()->route('admin.kelas.index')->with('success','Kelas berhasil diperbarui');
    }

    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect()->route('admin.kelas.index')->with('success','Kelas berhasil dihapus');
    }
}

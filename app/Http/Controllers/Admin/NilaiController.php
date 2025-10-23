<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Guru;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = Nilai::with('guru')->latest()->paginate(10);
        return view('admin.nilai.index', compact('nilais'));
    }

    public function create()
    {
        $gurus = Guru::all();
        return view('admin.nilai.create', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required|exists:gurus,id',
            'siswa' => 'required|string|max:255',
            'mapel' => 'required|string|max:255',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        Nilai::create($request->all());

        return redirect()->route('admin.nilai.index')->with('success', 'Nilai berhasil ditambahkan');
    }

    public function edit(Nilai $nilai)
    {
        $gurus = Guru::all();
        return view('admin.nilai.edit', compact('nilai', 'gurus'));
    }

    public function update(Request $request, Nilai $nilai)
    {
        $request->validate([
            'guru_id' => 'required|exists:gurus,id',
            'siswa' => 'required|string|max:255',
            'mapel' => 'required|string|max:255',
            'nilai' => 'required|numeric|min:0|max:100',
        ]);

        $nilai->update($request->all());

        return redirect()->route('admin.nilai.index')->with('success', 'Nilai berhasil diperbarui');
    }

    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return redirect()->route('admin.nilai.index')->with('success', 'Nilai berhasil dihapus');
    }
}

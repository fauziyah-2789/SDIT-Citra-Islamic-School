<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Soal;
use App\Models\Guru;

class SoalController extends Controller
{
    public function index()
    {
        $soals = Soal::with('guru')->latest()->paginate(10);
        return view('admin.soal.index', compact('soals'));
    }

    public function create()
    {
        $gurus = Guru::all();
        return view('admin.soal.create', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required|exists:gurus,id',
            'mapel' => 'required|string|max:255',
            'pertanyaan' => 'required|string',
            'jawaban' => 'required|string',
        ]);

        Soal::create($request->all());

        return redirect()->route('soal.index')->with('success', 'Soal berhasil ditambahkan');
    }

    public function show(Soal $soal)
    {
        return view('admin.soal.show', compact('soal'));
    }

    public function edit(Soal $soal)
    {
        $gurus = Guru::all();
        return view('admin.soal.edit', compact('soal', 'gurus'));
    }

    public function update(Request $request, Soal $soal)
    {
        $request->validate([
            'guru_id' => 'required|exists:gurus,id',
            'mapel' => 'required|string|max:255',
            'pertanyaan' => 'required|string',
            'jawaban' => 'required|string',
        ]);

        $soal->update($request->all());

        return redirect()->route('soal.index')->with('success', 'Soal berhasil diperbarui');
    }

    public function destroy(Soal $soal)
    {
        $soal->delete();
        return redirect()->route('soal.index')->with('success', 'Soal berhasil dihapus');
    }
}

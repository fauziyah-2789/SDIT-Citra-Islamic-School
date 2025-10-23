<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Soal;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = Nilai::where('guru_id', auth()->id())->with(['soal','siswa'])->latest()->paginate(10);
        return view('guru.nilai.index', compact('nilais'));
    }

    public function create()
    {
        $soals = Soal::where('guru_id', auth()->id())->get();
        return view('guru.nilai.create', compact('soals'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'siswa_id' => 'required|exists:users,id',
            'soal_id' => 'required|exists:soals,id',
            'nilai' => 'required|integer|min:0|max:100',
        ]);

        $data['guru_id'] = auth()->id();
        Nilai::create($data);

        return redirect()->route('guru.nilai.index')->with('success','Nilai berhasil ditambahkan!');
    }

    public function edit(Nilai $nilai)
    {
        $this->authorize('update',$nilai);
        $soals = Soal::where('guru_id', auth()->id())->get();
        return view('guru.nilai.edit', compact('nilai','soals'));
    }

    public function update(Request $request, Nilai $nilai)
    {
        $this->authorize('update',$nilai);
        $data = $request->validate([
            'siswa_id' => 'required|exists:users,id',
            'soal_id' => 'required|exists:soals,id',
            'nilai' => 'required|integer|min:0|max:100',
        ]);

        $nilai->update($data);
        return redirect()->route('guru.nilai.index')->with('success','Nilai berhasil diperbarui!');
    }

    public function destroy(Nilai $nilai)
    {
        $this->authorize('delete',$nilai);
        $nilai->delete();
        return redirect()->route('guru.nilai.index')->with('success','Nilai berhasil dihapus!');
    }
}

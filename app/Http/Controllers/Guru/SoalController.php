<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Soal;

class SoalController extends Controller
{
    public function index()
    {
        $soals = Soal::where('guru_id', auth()->id())->latest()->paginate(10);
        return view('guru.soal.index', compact('soals'));
    }

    public function create()
    {
        return view('guru.soal.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'pertanyaan' => 'required|string',
            'jawaban' => 'nullable|string',
        ]);

        $data['guru_id'] = auth()->id();
        Soal::create($data);

        return redirect()->route('guru.soal.index')->with('success','Soal berhasil dibuat!');
    }

    public function show(Soal $soal)
    {
        $this->authorize('view',$soal);
        return view('guru.soal.show', compact('soal'));
    }

    public function edit(Soal $soal)
    {
        $this->authorize('update',$soal);
        return view('guru.soal.edit', compact('soal'));
    }

    public function update(Request $request, Soal $soal)
    {
        $this->authorize('update',$soal);
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'pertanyaan' => 'required|string',
            'jawaban' => 'nullable|string',
        ]);

        $soal->update($data);
        return redirect()->route('guru.soal.index')->with('success','Soal berhasil diperbarui!');
    }

    public function destroy(Soal $soal)
    {
        $this->authorize('delete',$soal);
        $soal->delete();
        return redirect()->route('guru.soal.index')->with('success','Soal berhasil dihapus!');
    }
}

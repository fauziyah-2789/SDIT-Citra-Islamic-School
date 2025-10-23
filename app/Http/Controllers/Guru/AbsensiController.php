<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Guru;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensis = Absensi::with('guru')->latest()->paginate(10);
        return view('guru.absensi.index', compact('absensis'));
    }

    public function create()
    {
        $gurus = Guru::all();
        return view('guru.absensi.create', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id' => 'required|exists:gurus,id',
            'tanggal' => 'required|date',
            'status'  => 'required|in:Hadir,Izin,Alpha',
        ]);

        Absensi::create($request->all());
        return redirect()->route('guru.absensi.index')->with('success', 'Absensi berhasil dicatat');
    }

    public function edit(Absensi $absensi)
    {
        $gurus = Guru::all();
        return view('guru.absensi.edit', compact('absensi','gurus'));
    }

    public function update(Request $request, Absensi $absensi)
    {
        $request->validate([
            'guru_id' => 'required|exists:gurus,id',
            'tanggal' => 'required|date',
            'status'  => 'required|in:Hadir,Izin,Alpha',
        ]);

        $absensi->update($request->all());
        return redirect()->route('guru.absensi.index')->with('success', 'Absensi berhasil diperbarui');
    }

    public function destroy(Absensi $absensi)
    {
        $absensi->delete();
        return redirect()->route('guru.absensi.index')->with('success', 'Absensi berhasil dihapus');
    }
}

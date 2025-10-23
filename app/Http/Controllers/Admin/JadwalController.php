<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Guru;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::with('guru')->latest()->paginate(10);
        return view('admin.jadwal.index', compact('jadwals'));
    }

    public function create()
    {
        $gurus = Guru::all();
        return view('admin.jadwal.create', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru_id'    => 'required|exists:gurus,id',
            'mapel'      => 'required|string|max:255',
            'hari'       => 'required|string|max:50',
            'jam_mulai'  => 'required',
            'jam_selesai'=> 'required',
            'ruang'      => 'nullable|string|max:100',
        ]);

        Jadwal::create($request->all());
        return redirect()->route('admin.jadwal.index')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit(Jadwal $jadwal)
    {
        $gurus = Guru::all();
        return view('admin.jadwal.edit', compact('jadwal', 'gurus'));
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'guru_id'    => 'required|exists:gurus,id',
            'mapel'      => 'required|string|max:255',
            'hari'       => 'required|string|max:50',
            'jam_mulai'  => 'required',
            'jam_selesai'=> 'required',
            'ruang'      => 'nullable|string|max:100',
        ]);

        $jadwal->update($request->all());
        return redirect()->route('admin.jadwal.index')->with('success', 'Jadwal berhasil diperbarui');
    }

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('admin.jadwal.index')->with('success', 'Jadwal berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    // Tampilkan semua absensi
    public function index()
    {
        $absensis = Absensi::with('siswa')->latest()->paginate(10);
        return view('admin.absensi.index', compact('absensis'));
    }

    // Form tambah absensi baru
    public function create()
    {
        $siswas = Siswa::all(); // ambil daftar siswa untuk dropdown
        return view('admin.absensi.create', compact('siswas'));
    }

    // Simpan absensi baru
    public function store(Request $request)
    {
        $request->validate([
            'tanggal'   => 'required|date',
            'siswa_id'  => 'required|exists:siswas,id',
            'keterangan'=> 'required|in:Hadir,Izin,Sakit,Alpa',
        ]);

        Absensi::create([
            'tanggal'   => $request->tanggal,
            'siswa_id'  => $request->siswa_id,
            'keterangan'=> $request->keterangan,
            'user_id'   => Auth::id(),
        ]);

        return redirect()->route('admin.absensi.index')
                         ->with('success', 'Absensi berhasil ditambahkan.');
    }

    // Lihat detail absensi
    public function show($id)
    {
        $absensi = Absensi::with('siswa')->findOrFail($id);
        return view('admin.absensi.show', compact('absensi'));
    }

    // Form edit absensi
    public function edit($id)
    {
        $absensi = Absensi::findOrFail($id);
        $siswas = Siswa::all();
        return view('admin.absensi.edit', compact('absensi', 'siswas'));
    }

    // Update absensi
    public function update(Request $request, $id)
    {
        $absensi = Absensi::findOrFail($id);

        $request->validate([
            'tanggal'   => 'required|date',
            'siswa_id'  => 'required|exists:siswas,id',
            'keterangan'=> 'required|in:Hadir,Izin,Sakit,Alpa',
        ]);

        $absensi->update([
            'tanggal'   => $request->tanggal,
            'siswa_id'  => $request->siswa_id,
            'keterangan'=> $request->keterangan,
            'user_id'   => Auth::id(),
        ]);

        return redirect()->route('admin.absensi.index')
                         ->with('success', 'Absensi berhasil diperbarui.');
    }

    // Hapus absensi
    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->delete();

        return redirect()->route('admin.absensi.index')
                         ->with('success', 'Absensi berhasil dihapus.');
    }
}

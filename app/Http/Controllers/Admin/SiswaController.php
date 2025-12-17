<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Ortu;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::with(['kelas', 'ortus'])->latest()->paginate(10);
        return view('admin.siswa.index', compact('siswas'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        $ortu  = Ortu::all(); // Kirim semua ortu ke view
        return view('admin.siswa.create', compact('kelas', 'ortu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nis'  => 'required|string|unique:siswas,nis',
            'kelas_id' => 'nullable|exists:kelas,id',
            'alamat' => 'nullable|string|max:255',
            'no_telp' => 'nullable|string|max:20',
            'ortu_id' => 'nullable|exists:orang_tuas,id', // optional assign ortu
        ]);

        $siswa = Siswa::create([
            'nama'     => $request->nama,
            'nis'      => $request->nis,
            'kelas_id' => $request->kelas_id,
            'alamat'   => $request->alamat,
            'no_telp'  => $request->no_telp,
        ]);

        if($request->ortu_id){
            $ortu = Ortu::find($request->ortu_id);
            $ortu->siswa_id = $siswa->id;
            $ortu->save();
        }

        return redirect()->route('admin.siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit(Siswa $siswa)
    {
        $kelas = Kelas::all();
        $ortu  = Ortu::all(); // kirim semua ortu
        return view('admin.siswa.edit', compact('siswa', 'kelas', 'ortu'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nis'  => 'required|string|unique:siswas,nis,' . $siswa->id,
            'kelas_id' => 'nullable|exists:kelas,id',
            'alamat' => 'nullable|string|max:255',
            'no_telp' => 'nullable|string|max:20',
            'ortu_id' => 'nullable|exists:orang_tuas,id',
        ]);

        $siswa->update([
            'nama'     => $request->nama,
            'nis'      => $request->nis,
            'kelas_id' => $request->kelas_id,
            'alamat'   => $request->alamat,
            'no_telp'  => $request->no_telp,
        ]);

        if($request->ortu_id){
            $ortu = Ortu::find($request->ortu_id);
            $ortu->siswa_id = $siswa->id;
            $ortu->save();
        }

        return redirect()->route('admin.siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return back()->with('success', 'Data siswa berhasil dihapus.');
    }
}

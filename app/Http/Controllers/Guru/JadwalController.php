<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Mapel;

class JadwalController extends Controller
{
    // 1️⃣ Tampilkan semua jadwal guru
    public function index()
    {
        $jadwals = Jadwal::with(['kelas', 'mapel'])
            ->where('guru_id', auth()->id())
            ->latest()
            ->paginate(10);

        return view('guru.jadwal.index', compact('jadwals'));
    }

    // 2️⃣ Form tambah jadwal
    public function create()
    {
        $kelas = Kelas::all();
        $mapels = Mapel::all();
        return view('guru.jadwal.create', compact('kelas', 'mapels'));
    }

    // 3️⃣ Simpan jadwal baru
    public function store(Request $request)
    {
        $request->validate([
            'kelas_id' => 'required|exists:kelas,id',
            'mapel_id' => 'required|exists:mapels,id',
            'hari' => 'required|string|max:20',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        Jadwal::create([
            'guru_id' => auth()->id(),
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
        ]);

        return redirect()->route('guru.jadwal.index')->with('success', 'Jadwal berhasil ditambahkan!');
    }

    // 4️⃣ Form edit jadwal
    public function edit(Jadwal $jadwal)
    {
        $this->authorize('update', $jadwal);

        $kelas = Kelas::all();
        $mapels = Mapel::all();
        return view('guru.jadwal.edit', compact('jadwal', 'kelas', 'mapels'));
    }

    // 5️⃣ Update jadwal
    public function update(Request $request, Jadwal $jadwal)
    {
        $this->authorize('update', $jadwal);

        $request->validate([
            'kelas_id' => 'required|exists:kelas,id',
            'mapel_id' => 'required|exists:mapels,id',
            'hari' => 'required|string|max:20',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        $jadwal->update([
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
        ]);

        return redirect()->route('guru.jadwal.index')->with('success', 'Jadwal berhasil diperbarui!');
    }

    // 6️⃣ Hapus jadwal
    public function destroy(Jadwal $jadwal)
    {
        $this->authorize('delete', $jadwal);

        $jadwal->delete();
        return redirect()->route('guru.jadwal.index')->with('success', 'Jadwal berhasil dihapus!');
    }
}

<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Absensi;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    // Tampilkan data absensi anak
    public function index()
    {
        $ortu = Auth::user()->ortu; // Ambil data ortu dari user yang login
        if (!$ortu || !$ortu->siswa) {
            return view('ortu.absensi.index', [
                'absensis' => [],
                'message' => 'Belum ada data siswa yang terhubung dengan akun ini.',
            ]);
        }

        $siswa = $ortu->siswa;
        $absensis = Absensi::where('siswa_id', $siswa->id)
            ->latest()
            ->get();

        return view('ortu.absensi.index', compact('absensis', 'siswa'));
    }

    // Detail absensi harian anak
    public function show($id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('ortu.absensi.show', compact('absensi'));
    }
}

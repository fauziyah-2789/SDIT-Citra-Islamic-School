<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function index()
    {
        // Ambil data ortu dari user yang login
        $ortu = auth()->user()->orangTua;

        // Cek apakah ortu terhubung ke siswa
        if (!$ortu || !$ortu->siswa) {
            return redirect()->back()->with('error', 'Data siswa tidak ditemukan untuk akun ini.');
        }

        // Ambil siswa
        $siswa = $ortu->siswa;

        // Ambil nilai berdasarkan siswa_id
        $nilais = Nilai::where('siswa_id', $siswa->id)
                       ->with('soal')
                       ->get();

        return view('ortu.nilai.index', compact('nilais'));
    }
}

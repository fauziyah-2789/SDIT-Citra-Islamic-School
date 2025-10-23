<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $siswa = auth()->user()->siswa;
        $jadwals = Jadwal::where('kelas_id', $siswa->kelas_id)->with('guru')->get();
        return view('ortu.jadwal.index', compact('jadwals'));
    }
}

<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Soal;
use App\Models\Nilai;
use App\Models\Tugas;
use App\Models\Pengumuman;
use App\Models\Absensi;
use App\Models\Pesan;

class DashboardController extends Controller
{
    public function index()
    {
        return view('guru.dashboard', [
            'totalMateri'     => Materi::where('guru_id', auth()->id())->count(),
            'totalSoal'       => Soal::where('guru_id', auth()->id())->count(),
            'totalNilai'      => Nilai::where('guru_id', auth()->id())->count(),
            'totalTugas'      => Tugas::where('guru_id', auth()->id())->count(),
            'totalPengumuman' => Pengumuman::where('guru_id', auth()->id())->count(),
            'totalAbsensi'    => Absensi::where('guru_id', auth()->id())->count(),
            'totalPesan'      => Pesan::count(),
        ]);
    }
}

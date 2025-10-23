<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Materi;
use App\Models\Nilai;
use App\Models\Tugas;
use App\Models\Absensi;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Jadwal;
use App\Models\Pesan;
use App\Models\Prestasi;
use App\Models\Pengumuman;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            // Statistik utama
            'totalBerita'     => Berita::count(),
            'totalGaleri'     => Galeri::count(),
            'totalMateri'     => Materi::count(),
            'totalNilai'      => Nilai::count(),
            'totalTugas'      => Tugas::count(),
            'totalAbsensi'    => Absensi::count(),
            'totalGuru'       => Guru::count(),
            'totalKelas'      => Kelas::count(),
            'totalMapel'      => Mapel::count(),
            'totalJadwal'     => Jadwal::count(),
            'totalPesan'      => Pesan::count(),
            'totalPrestasi'   => Prestasi::count(),
            'totalPengumuman' => Pengumuman::count(),
        ]);
    }
}

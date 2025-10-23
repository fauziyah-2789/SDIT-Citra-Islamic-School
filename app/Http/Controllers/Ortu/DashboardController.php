<?php
namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $quickStats = [
            ['title' => 'Nilai Anak', 'count' => '85', 'icon' => 'check-circle', 'color' => 'bg-green-200 text-green-800', 'border_color' => 'green'],
            ['title' => 'Kehadiran Anak', 'count' => '95%', 'icon' => 'user-check', 'color' => 'bg-indigo-200 text-indigo-800', 'border_color' => 'indigo'],
            ['title' => 'Jadwal Anak', 'count' => '8', 'icon' => 'calendar', 'color' => 'bg-cyan-200 text-cyan-800', 'border_color' => 'cyan'],
            ['title' => 'Prestasi Anak', 'count' => '2', 'icon' => 'trophy', 'color' => 'bg-yellow-200 text-yellow-800', 'border_color' => 'yellow'],
        ];

        $menuCards = [
            ['name' => 'Nilai Anak', 'route' => 'ortu.nilai-anak.index', 'icon' => 'check-circle', 'color' => 'bg-green-600'],
            ['name' => 'Jadwal Anak', 'route' => 'ortu.jadwal-anak.index', 'icon' => 'calendar', 'color' => 'bg-cyan-600'],
            ['name' => 'Absensi Anak', 'route' => 'ortu.absensi-anak.index', 'icon' => 'user-check', 'color' => 'bg-gray-600'],
            ['name' => 'Pengumuman', 'route' => 'ortu.pengumuman.index', 'icon' => 'megaphone', 'color' => 'bg-pink-600'],
            ['name' => 'Prestasi Anak', 'route' => 'ortu.prestasi-anak.index', 'icon' => 'trophy', 'color' => 'bg-yellow-600'],
        ];

        return view('ortu.dashboard', compact('quickStats','menuCards'));
    }
}

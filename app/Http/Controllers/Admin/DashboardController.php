<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Prestasi;
use App\Models\Ekstrakurikuler;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'beritaCount' => Berita::count(),
            'galeriCount' => Galeri::count(),
            'usersCount'  => User::count(),
            'guruCount'   => class_exists(Guru::class) ? Guru::count() : 0,
            'siswaCount'  => class_exists(Siswa::class) ? Siswa::count() : 0,
            'mapelCount'  => class_exists(Mapel::class) ? Mapel::count() : 0,
            'prestasiCount'=> class_exists(Prestasi::class) ? Prestasi::count() : 0,
            'ekstraCount' => class_exists(Ekstrakurikuler::class) ? Ekstrakurikuler::count() : 0,
        ];

        return view('admin.dashboard', $data);
    }
}

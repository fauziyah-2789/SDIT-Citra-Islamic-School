<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa; // Asumsi model Siswa yang mewakili data anak

class AnakController extends Controller
{
    /**
     * Menampilkan daftar anak yang terhubung dengan akun orang tua ini.
     */
    public function index()
    {
        // Logika untuk mengambil data anak yang terkait dengan user/ortu yang sedang login
        // Contoh sederhana:
        // $anak = Siswa::where('parent_id', Auth::id())->get();
        $anak = collect([
            (object)['id' => 1, 'nama' => 'Fajar Nugraha', 'kelas' => '7B', 'foto' => asset('images/default_siswa.png')],
            (object)['id' => 2, 'nama' => 'Siti Aisyah', 'kelas' => '4A', 'foto' => asset('images/default_siswa.png')],
        ]); // Placeholder data

        return view('ortu.anak.index', compact('anak'));
    }

    /**
     * Menampilkan detail spesifik dari satu anak.
     */
    public function show($siswaId)
    {
        // Logika untuk menampilkan detail anak tertentu
        // $detailAnak = Siswa::findOrFail($siswaId);
        $detailAnak = (object)['nama' => 'Fajar Nugraha', 'kelas' => '7B', 'tanggal_lahir' => '2013-05-15']; // Placeholder

        return view('ortu.anak.show', compact('detailAnak'));
    }
}
<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasController extends Controller
{
    /**
     * Menampilkan daftar tugas siswa yang terkait.
     */
    public function index()
    {
        // Logika untuk mengambil tugas-tugas anak dari database
        // Hanya tampilkan tugas yang relevan untuk anak dari orang tua yang login
        
        $daftarTugas = collect([
            (object)['id' => 101, 'mapel' => 'Matematika', 'judul' => 'PR Bab 5: Aljabar', 'deadline' => '2025-12-20', 'status' => 'Belum Selesai', 'guru' => 'Bpk. Andi'],
            (object)['id' => 102, 'mapel' => 'IPA', 'judul' => 'Tugas Proyek Lingkungan', 'deadline' => '2025-12-28', 'status' => 'Selesai', 'guru' => 'Ibu Budi'],
            (object)['id' => 103, 'mapel' => 'Bhs. Inggris', 'judul' => 'Reading Comprehension', 'deadline' => '2025-12-18', 'status' => 'Belum Selesai', 'guru' => 'Mrs. Wati'],
        ]); // Placeholder data

        return view('ortu.tugas.index', compact('daftarTugas'));
    }

    // Metode lain seperti 'show' untuk detail tugas dapat ditambahkan di sini.
}
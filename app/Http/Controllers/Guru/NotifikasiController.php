<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index()
    {
        // Contoh dummy data notifikasi
        $notifikasis = [
            ['pesan' => 'Tugas baru diupload', 'waktu' => '2025-10-24 08:00'],
            ['pesan' => 'Materi baru tersedia', 'waktu' => '2025-10-23 14:30'],
        ];

        return view('guru.notifikasi', compact('notifikasis'));
    }
}

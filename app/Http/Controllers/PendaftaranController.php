<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran; // Pastikan model ini sudah ada

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('public.pendaftaran.index');
    }

    public function store(Request $request)
    {
        // 1. Validasi Data
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'nullable|string|max:15|unique:pendaftarans,nisn',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required|string|max:50',
            'alamat' => 'required|string|max:500',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'telepon' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
            'kelas_pilihan' => 'required|string|max:50',
            'persetujuan' => 'required',
        ]);

        // 2. Simpan Data ke Database
        Pendaftaran::create($request->except('_token', 'persetujuan'));

        // 3. Redirect dengan pesan sukses
        return redirect()->route('public.pendaftaran.index')
                         ->with('success', 'Pengajuan pendaftaran berhasil dikirim. Kami akan segera menghubungi Anda.');
    }
}
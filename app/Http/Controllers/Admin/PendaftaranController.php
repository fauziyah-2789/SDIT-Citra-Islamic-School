<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftaran; // Pastikan menggunakan Model Pendaftaran yang sama

class PendaftaranController extends Controller
{
    /**
     * Tampilkan daftar semua pendaftar.
     */
    public function index(Request $request)
    {
        // Ambil data pendaftar dengan sorting terbaru
        $pendaftarans = Pendaftaran::latest()->paginate(10); 
        
        // Ambil statistik cepat
        $totalPendaftar = Pendaftaran::count();
        $pendaftarBaru = Pendaftaran::where('created_at', '>=', now()->subDays(7))->count();
        $sudahDiproses = Pendaftaran::where('status', 'Diproses')->count(); // Asumsi ada kolom 'status'

        return view('admin.pendaftaran.index', compact(
            'pendaftarans',
            'totalPendaftar',
            'pendaftarBaru',
            'sudahDiproses'
        ));
    }

    /**
     * Tampilkan detail pendaftar.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        return view('admin.pendaftaran.show', compact('pendaftaran'));
    }

    /**
     * Ubah status pendaftaran (Contoh: Menjadi 'Diterima' atau 'Diproses').
     */
    public function updateStatus(Request $request, Pendaftaran $pendaftaran)
    {
        $request->validate(['status' => 'required|in:Baru,Diproses,Diterima,Ditolak']);

        $pendaftaran->update(['status' => $request->status]);

        return back()->with('success', 'Status pendaftaran berhasil diperbarui.');
    }

    /**
     * Hapus pendaftar.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();

        return redirect()->route('admin.pendaftaran.index')
                         ->with('success', 'Data pendaftar berhasil dihapus.');
    }
}
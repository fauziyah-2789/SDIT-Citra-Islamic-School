<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pesan; // pastikan ada model Pesan
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    /**
     * Tampilkan daftar semua pesan
     */
    public function index()
    {
        // ambil semua pesan terbaru, paginasi 10 per halaman
        $pesans = Pesan::latest()->paginate(10);

        return view('admin.pesan.index', compact('pesans'));
    }

    /**
     * Tampilkan detail pesan
     */
    public function show($id)
    {
        $pesan = Pesan::findOrFail($id);

        // Bisa tambahkan flag 'dibaca'
        if (!$pesan->is_read) {
            $pesan->is_read = true;
            $pesan->save();
        }

        return view('admin.pesan.show', compact('pesan'));
    }

    /**
     * Hapus pesan
     */
    public function destroy($id)
    {
        $pesan = Pesan::findOrFail($id);
        $pesan->delete();

        return redirect()->route('admin.pesan.index')
                         ->with('success', 'Pesan berhasil dihapus.');
    }

    /**
     * Tambahkan fungsi pencarian pesan (opsional)
     */
    public function search(Request $request)
    {
        $query = $request->input('q');

        if (!$query) {
            return redirect()->route('admin.pesan.index')
                             ->with('error', 'Masukkan kata kunci pencarian.');
        }

        $pesans = Pesan::where('judul', 'like', "%{$query}%")
                       ->orWhere('isi', 'like', "%{$query}%")
                       ->paginate(10);

        return view('admin.pesan.index', compact('pesans'));
    }
}

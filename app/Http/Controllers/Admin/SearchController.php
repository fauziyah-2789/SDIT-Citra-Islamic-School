<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Guru;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        if (!$query) {
            return redirect()->back()->with('error', 'Masukkan kata kunci pencarian.');
        }

        $berita = Berita::where('judul', 'like', "%{$query}%")
                    ->orWhere('isi', 'like', "%{$query}%")
                    ->get();

        $galeri = Galeri::where('judul', 'like', "%{$query}%")
                    ->orWhere('deskripsi', 'like', "%{$query}%")
                    ->get();

        $guru = Guru::where('nama', 'like', "%{$query}%")
                    ->orWhere('mapel', 'like', "%{$query}%")
                    ->get();

        $siswa = Siswa::where('nama', 'like', "%{$query}%")
                    ->orWhere('nis', 'like', "%{$query}%")
                    ->get();

        $users = User::where('name', 'like', "%{$query}%")
                    ->orWhere('email', 'like', "%{$query}%")
                    ->get();

        return view('admin.search.results', [
            'query' => $query,
            'berita' => $berita,
            'galeri' => $galeri,
            'guru' => $guru,
            'siswa' => $siswa,
            'users' => $users
        ]);
    }
}

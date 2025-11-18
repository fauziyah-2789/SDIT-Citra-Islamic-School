<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Ekstrakurikuler;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    /**
     * Global search untuk admin.
     * query = ?q=...
     */
    public function index(Request $request)
    {
        $q = trim($request->query('q', ''));

        if (strlen($q) < 2) {
            // kalau query pendek, tampilkan pesan kosong agar tidak overload DB
            return view('admin.search.results', [
                'query' => $q,
                'counts' => [],
                'results' => [],
                'message' => 'Masukkan minimal 2 karakter untuk pencarian.',
            ]);
        }

        // normalisasi
        $like = '%' . str_replace(' ', '%', $q) . '%';

        // Cari di berbagai model — batasi hasil untuk performa (mis: limit 8 tiap model)
        // User (bisa guru/ortu/siswa tergantung struktur)
        $users = User::where(function($s) use ($q, $like) {
                    $s->where('name', 'like', $like)
                      ->orWhere('email', 'like', $like)
                      ->orWhere('role', 'like', $like);
                })
                ->limit(8)->get(['id','name','email','role']);

        $gurus = method_exists(Guru::class,'query')
                ? Guru::where('nama', 'like', $like)->limit(8)->get(['id','nama','mata_pelajaran'])
                : collect();

        $siswas = method_exists(Siswa::class,'query')
                ? Siswa::where('nama', 'like', $like)->limit(8)->get(['id','nama','nis'])
                : collect();

        $kelas = method_exists(Kelas::class,'query')
                ? Kelas::where('nama', 'like', $like)->limit(8)->get(['id','nama'])
                : collect();

        $mapels = method_exists(Mapel::class,'query')
                ? Mapel::where('nama', 'like', $like)->limit(8)->get(['id','nama'])
                : collect();

        $beritas = method_exists(Berita::class,'query')
                ? Berita::where('judul', 'like', $like)
                        ->orWhere('excerpt', 'like', $like)
                        ->limit(8)->get(['id','judul','slug','thumbnail'])
                : collect();

        $galeris = method_exists(Galeri::class,'query')
                ? Galeri::where('judul','like',$like)->limit(8)->get(['id','judul','gambar'])
                : collect();

        $ekstras = method_exists(Ekstrakurikuler::class,'query')
                ? Ekstrakurikuler::where('nama','like',$like)->limit(8)->get(['id','nama','slug','foto_cover'])
                : collect();

        // Hitung jumlah hasil (tanpa limit) untuk info (opsional — bisa dihapus jika berat)
        $counts = [
            'users' => User::where('name','like',$like)->orWhere('email','like',$like)->count(),
            'gurus' => method_exists(Guru::class,'query') ? Guru::where('nama','like',$like)->count() : 0,
            'siswas' => method_exists(Siswa::class,'query') ? Siswa::where('nama','like',$like)->count() : 0,
            'kelas' => method_exists(Kelas::class,'query') ? Kelas::where('nama','like',$like)->count() : 0,
            'mapels' => method_exists(Mapel::class,'query') ? Mapel::where('nama','like',$like)->count() : 0,
            'beritas' => method_exists(Berita::class,'query') ? Berita::where('judul','like',$like)->count() : 0,
            'galeris' => method_exists(Galeri::class,'query') ? Galeri::where('judul','like',$like)->count() : 0,
            'ekstras' => method_exists(Ekstrakurikuler::class,'query') ? Ekstrakurikuler::where('nama','like',$like)->count() : 0,
        ];

        $results = compact('users','gurus','siswas','kelas','mapels','beritas','galeris','ekstras');

        return view('admin.search.results', [
            'query' => $q,
            'counts' => $counts,
            'results' => $results,
            'message' => null,
        ]);
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Prestasi;
use App\Models\Program;
use App\Models\Ekstrakurikuler;
use App\Models\Fasilitas;
use App\Models\Guru;
use App\Models\LandingSetting;

class PublicController extends Controller
{
    // Halaman utama landing
    public function index()
    {
        $beritas = Berita::latest()->take(6)->get();
        $galeris = Galeri::latest()->take(8)->get();
        $prestasies = Prestasi::latest()->take(9)->get();
        $programs = Program::orderBy('order')->get();
        $ekstras = Ekstrakurikuler::orderBy('id', 'asc')->get();
        $fasilitas = Fasilitas::latest()->get();
        $gurus = Guru::latest()->get();

        $hero_title = LandingSetting::get('hero_title', 'SDIT Citra Islamic School');
        $hero_sub = LandingSetting::get('hero_sub', 'Pendidikan Islami berkualitas, karakter & prestasi — siapkan generasi masa depan.');
        $hero_image = LandingSetting::get('hero_image', null);
        $about_text = LandingSetting::get('about_text', null);
        $kurikulum_text = LandingSetting::get('kurikulum_text', null);
        $kontak_address = LandingSetting::get('kontak_address', null);
        $kontak_phone = LandingSetting::get('kontak_phone', null);
        $kontak_email = LandingSetting::get('kontak_email', null);
        $kontak_map = LandingSetting::get('kontak_map', null);
        $pendaftaran_text = LandingSetting::get('pendaftaran_text', null);

        return view('public.landing', compact(
            'beritas','galeris','prestasies','programs','ekstras','fasilitas','gurus',
            'hero_title','hero_sub','hero_image','about_text','kurikulum_text',
            'kontak_address','kontak_phone','kontak_email','kontak_map','pendaftaran_text'
        ));
    }

    // Halaman statis: Tentang
    public function tentang()
    {
        $about_text = LandingSetting::get('about_text', 'Belum ada konten tentang.');
        return view('public.tentang', compact('about_text'));
    }

    // Halaman statis: Kurikulum
    public function kurikulum()
    {
        $kurikulum_text = LandingSetting::get('kurikulum_text', 'Belum ada konten kurikulum.');
        return view('public.kurikulum', compact('kurikulum_text'));
    }

    // Halaman statis: Pendaftaran
    public function pendaftaran()
    {
        $pendaftaran_text = LandingSetting::get('pendaftaran_text', 'Belum ada konten pendaftaran.');
        return view('public.pendaftaran', compact('pendaftaran_text'));
    }

    // Halaman statis: Kontak
    public function kontak()
    {
        $kontak_address = LandingSetting::get('kontak_address', '');
        $kontak_phone = LandingSetting::get('kontak_phone', '');
        $kontak_email = LandingSetting::get('kontak_email', '');
        $kontak_map = LandingSetting::get('kontak_map', '');
        return view('public.kontak', compact('kontak_address','kontak_phone','kontak_email','kontak_map'));
    }

    // Detail Guru
    public function guruShow($id)
    {
        $guru = Guru::findOrFail($id);
        return view('public.guru-show', compact('guru'));
    }

    // Detail Program
    public function programShow($id)
    {
        $program = Program::findOrFail($id);
        return view('public.program-show', compact('program'));
    }

    // Detail Ekstrakurikuler
    public function ekstraShow($id)
    {
        $ekstra = Ekstrakurikuler::findOrFail($id);
        return view('public.ekstra-show', compact('ekstra'));
    }

    // Detail Berita
    public function beritaShow($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('public.berita-show', compact('berita'));
    }

    // Semua Berita
    public function beritaIndex()
    {
        $beritas = Berita::latest()->paginate(6);
        return view('public.berita-index', compact('beritas'));
    }

    // Detail Galeri
    public function galeriShow($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('public.galeri-show', compact('galeri'));
    }
}

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
    public function index()
    {
        $beritas = Berita::latest()->take(6)->get();
        $galeris = Galeri::latest()->take(8)->get();
        $prestasis = Prestasi::latest()->take(9)->get();
        $programs = Program::orderBy('order')->get();
        $ekstras = Ekstrakurikuler::orderBy('id', 'asc')->get();
        $fasilitas = Fasilitas::latest()->get();
        $gurus = Guru::latest()->get();

        // landing settings (fallbacks)
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
            'beritas','galeris','prestasis','programs','ekstras','fasilitas','gurus',
            'hero_title','hero_sub','hero_image','about_text','kurikulum_text',
            'kontak_address','kontak_phone','kontak_email','kontak_map','pendaftaran_text'
        ));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\ProfilSekolah;
use Illuminate\Support\Facades\Mail;
use App\Mail\KontakMasuk; // Jangan lupa buat Mailable jika ingin email notifikasi

class KontakPublikController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::first();
        return view('public.kontak.index', compact('profil'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        $kontak = Kontak::create($request->all());

        // Kirim email ke admin (opsional)
        Mail::to('admin@sekolahcitra.com')->send(new KontakMasuk($kontak));

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('public.pendaftaran.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required',
            'no_hp_ortu' => 'nullable|string|max:20',
        ]);

        Pendaftaran::create($request->all());

        return redirect()->route('pendaftaran')->with('success', 'Pendaftaran berhasil dikirim!');
    }
}


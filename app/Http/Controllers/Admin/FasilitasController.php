<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Tampilkan daftar fasilitas.
     */
    public function index()
    {
        // Asumsi Model Fasilitas sudah ada
        // $fasilitas = \App\Models\Fasilitas::all(); 

        return view('admin.fasilitas.index'); // Kita akan buat view ini
    }

    // ... method create, store, edit, update, destroy lainnya ...
}
<?php
namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriPublikController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(12);
        return view('public.galeri.index', compact('galeris'));
    }

    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('public.galeri.show', compact('galeri'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;

class EkstrakurikulerPublikController extends Controller
{
    public function index()
    {
        $ekstras = Ekstrakurikuler::all();
        return view('public.ekstrakurikuler.index', compact('ekstras'));
    }
}

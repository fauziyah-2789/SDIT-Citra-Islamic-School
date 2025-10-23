<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::latest()->paginate(10);
        return view('admin.kontak.index', compact('kontaks'));
    }

    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return redirect()->route('admin.kontak.index')->with('success', 'Pesan kontak berhasil dihapus');
    }
}

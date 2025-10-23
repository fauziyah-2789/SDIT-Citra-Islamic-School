<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index(){
        $prestasis = Prestasi::latest()->paginate(12);
        return view('admin.prestasis.index', compact('prestasis'));
    }

    public function create(){ return view('admin.prestasis.create'); }

    public function store(Request $request){
        $data = $request->validate([
            'judul'=>'required|string|max:191',
            'deskripsi'=>'nullable|string',
            'tipe'=>'required|in:siswa,sekolah',
            'lokasi'=>'nullable|string',
            'tanggal'=>'nullable|date',
            'gambar'=>'nullable|image|max:2048'
        ]);
        if($request->hasFile('gambar')){
            $path = $request->file('gambar')->store('prestasi','public');
            $data['gambar']=$path;
        }
        Prestasi::create($data);
        return redirect()->route('admin.prestasi.index')->with('success','Prestasi ditambah.');
    }

    public function edit(Prestasi $prestasi){ return view('admin.prestasis.edit', compact('prestasi')); }

    public function update(Request $request, Prestasi $prestasi){
        $data = $request->validate([
            'judul'=>'required|string|max:191',
            'deskripsi'=>'nullable|string',
            'tipe'=>'required|in:siswa,sekolah',
            'lokasi'=>'nullable|string',
            'tanggal'=>'nullable|date',
            'gambar'=>'nullable|image|max:2048'
        ]);
        if($request->hasFile('gambar')){
            if($prestasi->gambar) Storage::disk('public')->delete($prestasi->gambar);
            $path = $request->file('gambar')->store('prestasi','public');
            $data['gambar']=$path;
        }
        $prestasi->update($data);
        return redirect()->route('admin.prestasi.index')->with('success','Prestasi diperbarui.');
    }

    public function destroy(Prestasi $prestasi){
        if($prestasi->gambar) Storage::disk('public')->delete($prestasi->gambar);
        $prestasi->delete();
        return redirect()->route('admin.prestasi.index')->with('success','Prestasi dihapus.');
    }
}

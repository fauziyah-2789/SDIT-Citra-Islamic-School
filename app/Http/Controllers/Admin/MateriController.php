<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materi;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    public function index()
    {
        $materis = Materi::latest()->paginate(10);
        return view('admin.materi.index', compact('materis'));
    }

    public function create()
    {
        return view('admin.materi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file' => 'nullable|mimes:pdf,doc,docx,ppt,pptx|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('materi', 'public');
        }

        Materi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $filePath,
        ]);

        return redirect()->route('admin.materi.index')->with('success', 'Materi berhasil ditambahkan');
    }

    public function edit(Materi $materi)
    {
        return view('admin.materi.edit', compact('materi'));
    }

    public function update(Request $request, Materi $materi)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file' => 'nullable|mimes:pdf,doc,docx,ppt,pptx|max:2048',
        ]);

        $data = $request->only(['judul', 'deskripsi']);

        if ($request->hasFile('file')) {
            // hapus file lama jika ada
            if ($materi->file && Storage::disk('public')->exists($materi->file)) {
                Storage::disk('public')->delete($materi->file);
            }
            $data['file'] = $request->file('file')->store('materi', 'public');
        }

        $materi->update($data);

        return redirect()->route('admin.materi.index')->with('success', 'Materi berhasil diperbarui');
    }

    public function destroy(Materi $materi)
    {
        if ($materi->file && Storage::disk('public')->exists($materi->file)) {
            Storage::disk('public')->delete($materi->file);
        }
        $materi->delete();
        return redirect()->route('admin.materi.index')->with('success', 'Materi berhasil dihapus');
    }
}

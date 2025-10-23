<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guru;
use App\Models\Role;
use App\Models\Mapel;
use App\Models\Kelas;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::with(['user', 'mapel', 'kelas'])->latest()->paginate(10);
        return view('admin.guru.index', compact('gurus'));
    }

    public function create()
    {
        $mapels = Mapel::all();
        $kelass = Kelas::all();
        return view('admin.guru.create', compact('mapels', 'kelass'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'nama'     => 'required|string|max:255',
            'mapel_id' => 'nullable|exists:mapels,id',
            'kelas_id' => 'nullable|exists:kelas,id',
        ]);

        $guruRole = Role::where('name', 'guru')->firstOrFail();

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role_id'  => $guruRole->id,
        ]);

        Guru::create([
            'user_id'  => $user->id,
            'nama'     => $request->nama,
            'gelar'    => $request->gelar,
            'mapel_id' => $request->mapel_id,
            'kelas_id' => $request->kelas_id,
            'alamat'   => $request->alamat,
            'no_hp'    => $request->no_hp,
            'email'    => $request->email,
        ]);

        return redirect()->route('admin.guru.index')->with('success', 'Guru berhasil ditambahkan');
    }

    public function edit(Guru $guru)
    {
        $mapels = Mapel::all();
        $kelass = Kelas::all();
        return view('admin.guru.edit', compact('guru', 'mapels', 'kelass'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $guru->user_id,
            'nama'     => 'required|string|max:255',
            'mapel_id' => 'nullable|exists:mapels,id',
            'kelas_id' => 'nullable|exists:kelas,id',
        ]);

        $guru->user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        $guru->update([
            'nama'     => $request->nama,
            'gelar'    => $request->gelar,
            'mapel_id' => $request->mapel_id,
            'kelas_id' => $request->kelas_id,
            'alamat'   => $request->alamat,
            'no_hp'    => $request->no_hp,
            'email'    => $request->email,
        ]);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui');
    }

    public function destroy(Guru $guru)
    {
        $guru->user()->delete();
        $guru->delete();
        return back()->with('success', 'Guru berhasil dihapus');
    }
}

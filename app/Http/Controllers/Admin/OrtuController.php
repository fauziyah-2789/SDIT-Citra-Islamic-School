<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ortu;
use App\Models\Role;
use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;

class OrtuController extends Controller
{
    public function index()
    {
        $ortus = Ortu::with(['user', 'siswa'])->latest()->paginate(10);
        return view('admin.ortu.index', compact('ortus'));
    }

    public function create()
    {
        $siswas = Siswa::doesntHave('ortu')->get(); // agar tidak dobel ortu
        return view('admin.ortu.create', compact('siswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|string|min:6|confirmed',
            'nama_ayah'  => 'required|string|max:255',
            'siswa_id'   => 'required|exists:siswas,id',
            'no_hp'      => 'nullable|string|max:15',
        ]);

        $ortuRole = Role::where('name', 'ortu')->firstOrFail();

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role_id'  => $ortuRole->id,
        ]);

        Ortu::create([
            'user_id'    => $user->id,
            'siswa_id'   => $request->siswa_id,
            'nama_ayah'  => $request->nama_ayah,
            'nama_ibu'   => $request->nama_ibu,
            'pekerjaan'  => $request->pekerjaan,
            'alamat'     => $request->alamat,
            'no_hp'      => $request->no_hp,
            'email'      => $request->email,
        ]);

        return redirect()->route('admin.ortu.index')->with('success', 'Akun Orang Tua berhasil ditambahkan.');
    }

    public function edit(Ortu $ortu)
    {
        $siswas = Siswa::all();
        return view('admin.ortu.edit', compact('ortu', 'siswas'));
    }

    public function update(Request $request, Ortu $ortu)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email,' . $ortu->user_id,
            'nama_ayah'  => 'required|string|max:255',
            'siswa_id'   => 'required|exists:siswas,id',
            'no_hp'      => 'nullable|string|max:15',
        ]);

        $ortu->user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        $ortu->update([
            'siswa_id'   => $request->siswa_id,
            'nama_ayah'  => $request->nama_ayah,
            'nama_ibu'   => $request->nama_ibu,
            'pekerjaan'  => $request->pekerjaan,
            'alamat'     => $request->alamat,
            'no_hp'      => $request->no_hp,
            'email'      => $request->email,
        ]);

        return redirect()->route('admin.ortu.index')->with('success', 'Data Orang Tua berhasil diperbarui.');
    }

    public function destroy(Ortu $ortu)
    {
        $ortu->user()->delete();
        $ortu->delete();

        return back()->with('success', 'Akun Orang Tua berhasil dihapus.');
    }
}

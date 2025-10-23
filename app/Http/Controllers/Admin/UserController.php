<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Siswa;
use App\Models\Ortu;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Tampilkan semua user
    public function index()
    {
        $users = User::with('role')->latest()->get();
        return view('admin.user.index', compact('users'));
    }

    // Form tambah user baru
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    // Simpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed',
            'role_id'   => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role_id'  => $request->role_id,
        ]);

        // Jika role adalah orang tua, otomatis buat data Ortu kosong
        if ($user->role->nama === 'Ortu') {
            Ortu::create([
                'user_id' => $user->id,
                'nama'    => $user->name,
            ]);
        }

        return redirect()->route('admin.users.index')
            ->with('success', 'User baru berhasil ditambahkan.');
    }

    // Edit user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    // Update user
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:users,email,' . $user->id,
            'role_id' => 'required|exists:roles,id',
        ]);

        $user->update([
            'name'    => $request->name,
            'email'   => $request->email,
            'role_id' => $request->role_id,
        ]);

        // Jika password diisi, update juga
        if ($request->filled('password')) {
            $user->update(['password' => Hash::make($request->password)]);
        }

        return redirect()->route('admin.users.index')
            ->with('success', 'Data user berhasil diperbarui.');
    }

    // Hapus user
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Hapus data ortu kalau user ini ortu
        if ($user->role->nama === 'Ortu') {
            Ortu::where('user_id', $user->id)->delete();
        }

        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('success', 'User berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Siswa; // Diimpor tapi tidak digunakan dalam method yang ada. Dipertahankan.
use App\Models\Ortu;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Tampilkan semua user (admin.users.index)
    public function index()
    {
        // Menggunakan paginate() lebih baik jika user banyak
        $users = User::with('role')->latest()->paginate(15); 
        return view('admin.users.index', compact('users')); // Diubah ke folder 'users' (bukan 'user')
    }

    // Form tambah user baru (admin.users.create)
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles')); // Diubah ke folder 'users' (bukan 'user')
    }

    // Simpan user baru (admin.users.store)
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed',
            'role_id'   => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role_id'   => $request->role_id,
        ]);
        
        // --- Perbaikan Otorisasi dan Relasi ---
        // PENTING: Periksa apakah relasi role ada dan nama role
        $roleName = $user->role ? ($user->role->nama ?? $user->role->name) : null;

        // Jika role adalah orang tua, otomatis buat data Ortu kosong
        if ($roleName === 'Ortu') {
            Ortu::create([
                'user_id' => $user->id,
                'nama'    => $user->name,
            ]);
        }

        return redirect()->route('admin.users.index')
            ->with('success', 'User baru berhasil ditambahkan.');
    }

    // Tampilkan detail user (admin.users.show)
    public function show($id)
    {
        $user = User::with('role')->findOrFail($id);
        return view('admin.users.show', compact('user')); 
    }

    // Edit user (admin.users.edit)
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    // Update user (admin.users.update)
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:users,email,' . $user->id,
            'role_id' => 'required|exists:roles,id',
            'password' => 'nullable|min:6|confirmed', // Pastikan password boleh kosong
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

    // Hapus user (admin.users.destroy)
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        
        // --- Perbaikan Otorisasi dan Relasi ---
        $roleName = $user->role ? ($user->role->nama ?? $user->role->name) : null;
        
        // Hapus data ortu kalau user ini ortu
        if ($roleName === 'Ortu') {
            Ortu::where('user_id', $user->id)->delete();
        }

        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('success', 'User berhasil dihapus.');
    }
}
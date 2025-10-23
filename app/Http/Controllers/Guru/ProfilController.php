<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function edit()
    {
        $guru = Auth::user();
        return view('guru.profil.edit', compact('guru'));
    }

    public function update(Request $request)
    {
        $guru = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|max:2048',
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $guru->name = $request->name;

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/avatars'), $filename);
            $guru->avatar = 'uploads/avatars/' . $filename;
        }

        if ($request->password) {
            $guru->password = Hash::make($request->password);
        }

        $guru->save();

        return redirect()->route('guru.dashboard')->with('success', 'Profil berhasil diperbarui.');
    }
}

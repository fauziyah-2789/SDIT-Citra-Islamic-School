<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * ✅ Tampilkan halaman login
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * ✅ Proses login
     */
    public function store(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba login
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Pastikan kolom role ada
            if (!$user->role) {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Akun tidak memiliki role yang valid.'
                ])->onlyInput('email');
            }

            // ✅ Karena role adalah string, langsung pakai $user->role
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'guru':
                    return redirect()->route('guru.dashboard');
                case 'ortu':
                    return redirect()->route('ortu.dashboard');
                default:
                    Auth::logout();
                    return back()->withErrors([
                        'email' => 'Role tidak dikenali.'
                    ])->onlyInput('email');
            }
        }

        // Jika gagal login
        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->onlyInput('email');
    }

    /**
     * ✅ Logout user
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

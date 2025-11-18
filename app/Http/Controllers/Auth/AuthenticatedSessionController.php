<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Tampilkan halaman login
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Proses login
     */
    public function store(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt login dengan remember me
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            // Cek role valid
            if (!$user->role || !in_array($user->role, ['admin', 'guru', 'ortu'])) {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Akun tidak memiliki role yang valid.'
                ])->onlyInput('email');
            }

            // Redirect sesuai role
            return match($user->role) {
                'admin' => redirect()->route('admin.dashboard'),
                'guru'  => redirect()->route('guru.dashboard'),
                'ortu'  => redirect()->route('ortu.dashboard'),
                default => back()->withErrors([
                    'email' => 'Role tidak dikenali.'
                ])->onlyInput('email'),
            };
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->onlyInput('email');
    }

    /**
     * Logout user
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

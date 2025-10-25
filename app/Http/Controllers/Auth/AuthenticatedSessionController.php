<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            if (!$user->role) {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Akun tidak memiliki role yang valid.'
                ])->onlyInput('email');
            }

            // ✅ pakai role->name
            switch ($user->role->name) {
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

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->onlyInput('email');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * Usage: ->middleware('role:admin') atau ->middleware('role:admin|guru|siswa|ortu')
     */
    public function handle(Request $request, Closure $next, string $roles)
    {
        // 🔐 Cek login
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors([
                'email' => 'Silakan login terlebih dahulu.',
            ]);
        }

        $user = Auth::user();
        $userRole = $user->role;

        // ✅ Pastikan role ada
        if (!$userRole) {
            return redirect()->route('login')->withErrors([
                'email' => 'Akun ini tidak memiliki role yang valid.',
            ]);
        }

        $allowedRoles = explode('|', $roles);

        // ✅ Kalau role tidak cocok, redirect ke dashboard masing-masing
        if (!in_array($userRole, $allowedRoles)) {
            switch ($userRole) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'guru':
                    return redirect()->route('guru.dashboard');
                case 'siswa':
                    return redirect()->route('siswa.dashboard');
                case 'ortu':
                    return redirect()->route('ortu.dashboard');
                default:
                    return redirect()->route('login')->withErrors([
                        'email' => 'Anda tidak memiliki akses ke halaman ini.',
                    ]);
            }
        }

        return $next($request);
    }
}

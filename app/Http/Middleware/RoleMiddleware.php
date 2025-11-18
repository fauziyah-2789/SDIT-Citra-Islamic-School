<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * Usage: ->middleware('role:admin') atau ->middleware('role:admin|guru|ortu')
     */
    public function handle(Request $request, Closure $next, string $roles)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors([
                'email' => 'Silakan login terlebih dahulu.',
            ]);
        }

        $user = Auth::user();

        if (!$user->role) {
            return redirect()->route('login')->withErrors([
                'email' => 'Akun ini tidak memiliki role yang valid.',
            ]);
        }

        // Ambil role langsung karena sekarang role sudah string
        $userRole = $user->role;

        $allowedRoles = explode('|', $roles);

        if (!in_array($userRole, $allowedRoles)) {
            switch ($userRole) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'guru':
                    return redirect()->route('guru.dashboard');
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

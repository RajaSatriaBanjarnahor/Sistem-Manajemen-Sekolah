<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role;

            if ($role == "admin") {
                return redirect()->route('admin.dashboard');
            } elseif ($role == "guru") {
                return redirect()->route('guru.dashboard');
            } elseif ($role == "siswa") {
                return redirect()->route('siswa.dashboard');
            } else {
                return redirect()->route('dashboard');
            }
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class SiswaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->role !== 'siswa') {
            return redirect('/')->with('error', 'Unauthorized access.');
        }
        
        return $next($request);
    }
}

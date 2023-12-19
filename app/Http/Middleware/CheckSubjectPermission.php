<?php

namespace App\Http\Middleware;

use Closure;

class CheckSubjectPermission
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
        return $next($request);
        return $next($request);

         // Ambil ID subjek dari URL
         $subjectId = $request->route('id');

         // Periksa izin atau kriteria lainnya
         $subject = Subject::find($subjectId);
 
         // Contoh: Hanya izinkan pengeditan jika pengguna adalah pemilik subjek
         if ($subject && $subject->user_id == auth()->id()) {
             return $next($request);
         }
 
         // Jika tidak memenuhi kriteria, redirect atau tampilkan pesan error
         return redirect()->back()->with('error', 'Unauthorized');
 
         // Atau bisa juga langsung menampilkan halaman error
         // abort(403, 'Unauthorized');
    }
}

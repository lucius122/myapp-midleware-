<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if (!$user || $user->role !== 'admin') {
            // Bisa redirect ke dashboard dengan pesan atau abort 403
            return redirect()->route('dashboard')->with('error','Akses ditolak.');
        }
        return $next($request);
    }
}

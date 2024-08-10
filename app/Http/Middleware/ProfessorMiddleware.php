<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ProfessorMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->usertype == 'professor') {
            return $next($request);
        }

        return redirect()->route('login')->with('error', 'Vous n\'avez pas accès à cette page.');
    }

}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->roles == 'user') {
            return $next($request);
        } else {
            return redirect('/login')->with('message', 'Login olmanız gerekir');
        }
    }
}

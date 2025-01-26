<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureAdmin
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
        // Ensure the user is authenticated and has admin privileges
        if (Auth::check() && Auth::user()->is_admin) { // Check if the user is an admin
            return $next($request);
        }

        // Redirect if the user is not an admin
        return redirect('/');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect to login page if not authenticated
        }

        // Check if the authenticated user is an admin
        if (!Auth::user()->is_admin) {
            return redirect('/')->with('error', 'You do not have admin access.'); // Redirect to public page for non-admins
        }

        return $next($request); // Allow access for admins
    }
}

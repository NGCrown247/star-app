<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     public function handle(Request $request, Closure $next): Response
     {

      if (!Auth::check()) {
        return redirect()->route('welcome'); // Redirect guests to welcome
    }

         if (Auth::user()->role !== 'user' && Auth::user()->role !== 'admin') {

             abort(403); // Forbidden for non-user roles
         }


         // Allow authenticated users with role 'user' to proceed
         return $next($request);
     }


}

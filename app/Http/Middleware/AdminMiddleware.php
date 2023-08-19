<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()) {
            if(Auth::user()->ruolo == '1') {
                return $next($request);
            } else {
                return redirect('/homepage')->with('message', 'Accesso negato, non sei amministratore.');
            }
        } else {
            return redirect('/login')->with('message', 'Fai il login.');
        }

        return $next($request);
    }
}

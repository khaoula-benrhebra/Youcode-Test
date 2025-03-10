<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckCandidatRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->hasRole('Candidat')) {
            return $next($request);
        }
        
        return redirect('/')->with('error', 'Vous n\'avez pas l\'autorisation d\'accéder à cette page.');
    }
}
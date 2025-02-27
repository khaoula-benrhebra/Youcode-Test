<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!$request->user() || !$request->user()->hasRole($role)) {
            return redirect()->route('login')->with('error', 'Vous n\'avez pas accès à cette section.');
        }
        
        return $next($request);
    }
}
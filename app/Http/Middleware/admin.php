<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         $userRole=Auth::user()->rol;

        switch($userRole){
             case 2:
                return $next($request);
            case 1:
                return redirect()->route('gerenciaName');
            case 3:
                return redirect()->route('usuarioName');
        }

         return redirect()->route('login');
    }
}

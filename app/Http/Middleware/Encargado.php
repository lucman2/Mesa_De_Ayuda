<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Encargado
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
        $rol = Auth::user()->rol;
        if($rol != 3 && $rol != 0){
            return redirect()->route('errorPermisos');
        } else { 
        return $next($request);
        }
    }
}

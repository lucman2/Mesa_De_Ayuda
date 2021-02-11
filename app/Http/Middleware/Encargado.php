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
        //Estandar de validacion de rol, si no es uno de los roles permitidos manda al usuario a la pagina de errores
        /* Las claves de rol son las siguientes
            1 - Tecnico
            2 - Coordinador
            3 - Encargado
            0 - Superusuario
        */
        $rol = Auth::user()->rol;
        if($rol != 3 && $rol != 0){
            return redirect()->route('errorPermisos');
        } else { 
        return $next($request);
        }
    }
}

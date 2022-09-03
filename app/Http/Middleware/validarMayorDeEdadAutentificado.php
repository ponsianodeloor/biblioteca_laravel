<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class validarMayorDeEdadAutentificado
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->email == "ponsianodeloor@gmail.com" && $request->edad < 18){
            return redirect('acceso_no_autorizado');
        }

        return $next($request);
    }
}

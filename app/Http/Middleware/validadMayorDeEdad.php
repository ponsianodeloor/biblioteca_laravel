<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class validadMayorDeEdad
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->edad < 18){
            return redirect('acceso_no_autorizado');
        }
        return $next($request);
    }
}

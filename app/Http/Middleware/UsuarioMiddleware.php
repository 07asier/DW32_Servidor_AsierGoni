<?php

namespace App\Http\Middleware;

use Closure;

class UsuarioMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request == 1) {
            return redirect('/usuarioaceptado');
        }
        return next($request);

    }




}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Misafir
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()){ # Üye oturum açmış İSE
            return redirect('/'); # İstenilen sayfayı görmeyi engelle, ana sayfaya yönlendir     
        }
        else{
            return $next($request); # Bir engel olmadan devam et
        }
    }
}

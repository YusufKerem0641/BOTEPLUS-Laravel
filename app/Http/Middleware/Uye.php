<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Uye
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()){ # Üye oturum açmış İSE
            return $next($request); # Bir engel olmadan devam et
        }
        else{
            return redirect('/oturum-ac')->with('hata','Ziyaret etmek istediğiniz sayfayı görüntülemek için önce oturum açmanız gerekmektedir!'); # İstenilen sayfayı görmeyi engelle, oturum açmaya yönlendir
        }
    }
}

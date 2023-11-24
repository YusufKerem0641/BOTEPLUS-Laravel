<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Oturum extends Controller
{
    public function kontrol(Request $request)
    {
        echo $request->input('eposta');
        echo "<br>";
        echo bcrypt($request->input('parola'));
    }
    public function kayit(Request $request)
    {
        echo $request->input('isim');
        echo "<br>";
        echo $request->input('eposta');
        echo "<br>";
        echo bcrypt($request->input('parola'));
        echo "<br>";
        echo bcrypt($request->input('parolatekrar'));
    }
}


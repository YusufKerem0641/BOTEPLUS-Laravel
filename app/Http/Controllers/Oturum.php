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
        $validatedData = $request->validate([
            'ad' => ['required', 'min:2'],
            'soyad' => ['required', 'min:2'],
            'eposta' => ['required'],
            'parola' => ['required', 'min:6', 'confirmed'],
            'parola_confirmation' => ['required']
        ]);
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

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
            'parola' => ['required', Password::min(6)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()],
            'parola_confirmation' => ['required'],
            'profil' => ['required']
        ]);
        $validatedData['parola'] = bcrypt($validatedData['parola']);
        $adres = $request->file('profil')->store('public/profil');
        $adres = pathinfo($adres, PATHINFO_BASENAME);
        $validatedData['profil'] = $adres;
        Kullanici::create($validatedData);
        return redirect('/oturum-ac')->with('basarili','Üyelik kaydı başarılı, bilgilerinizle oturum açabilirsiniz.');
    }
}


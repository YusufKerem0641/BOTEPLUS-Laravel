<?php

namespace App\Http\Controllers;

use App\Models\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;

class Oturum extends Controller
{
    public function kontrol(Request $request): RedirectResponse
{
    $credentials = $request->validate([
        'eposta' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/')->with(['basarili' => 'Başarılı bir şekilde oturum açtınız. Keyifli vakitler.']);
    } else {
        return back()->with(['hata' => 'Hatalı e-posta ya da parola girdiniz. Lütfen tekrar deneyiniz.'])->withInput();
    }
}
    public function kayit(Request $request)
    {
        $validatedData = $request->validate([
            'ad' => ['required', 'min:2'],
            'soyad' => ['required', 'min:2'],
            'eposta' => ['required'],
            'password' => ['required', Password::min(6)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()],
            'password_confirmation' => ['required'],
            'profil' => ['required']
        ]);
        $validatedData['password'] =  Hash::make($validatedData['password']);
        $adres = $request->file('profil')->store('public/profil');
        $adres = pathinfo($adres, PATHINFO_BASENAME);
        $validatedData['profil'] = $adres;
        Kullanici::create($validatedData);
        return redirect('/oturum-ac')->with('basarili','Üyelik kaydı başarılı, bilgilerinizle oturum açabilirsiniz.');
    }

    public function guncelle(Request $request)
    {
        $validatedData = $request->validate([
            'ad' => ['required', 'min:2'],
            'soyad' => ['required', 'min:2'],
            'eposta' => ['required']
        ]);

        $uye = Kullanici::find(auth()->user()->id);
        # Güncelleme yapılacak üyeyi bul

        $uye->update($validatedData);
        # Yeni bilgilerle üyeyi güncelle

        return redirect('/profil')->with('basarili','Bilgileriniz başarıyla güncellendi.');
    }
}


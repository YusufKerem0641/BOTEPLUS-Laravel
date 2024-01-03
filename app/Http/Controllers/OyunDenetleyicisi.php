<?php

namespace App\Http\Controllers;

use App\Models\Oyun;
use Illuminate\Http\Request;

class OyunDenetleyicisi extends Controller
{
    public function kayit(Request $request)
    {
        $validatedData = $request->validate([
            'ad' => ['required'],
            'kategori' => ['required'],
            'fiyat' => ['required'],
            'indirilme_sayisi' => ['required'],
            'yas_siniri' => ['required'],
            'kapak' => ['required'],
            'yildiz' => ['required'],
            'fragman' => ['required'],
            'tarih' => ['required'],
        ]);
        $adres = $request->file('kapak')->store('public/kapak');
        # Bir dosya yolu adresinden sadece dosya adını ayıklamak
        $adres = pathinfo($adres, PATHINFO_BASENAME);
        $validatedData['kapak'] = $adres;
        Oyun::create($validatedData);
    }
}

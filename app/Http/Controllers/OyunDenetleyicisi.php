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
        Oyun::create($validatedData);
    }
}

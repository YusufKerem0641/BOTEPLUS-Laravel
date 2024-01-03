<?php

use App\Models\Oyun;
use Illuminate\Http\Request;
use App\Http\Controllers\Oturum;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OyunDenetleyicisi;

Route::get('/', function () {
    $oyunlar = Oyun::all();
    return view('index', ['oyunlar' => $oyunlar]);
});

Route::get('/oyun/{degisken}', function ($degisken) {
    $oyun = Oyun::find($degisken);
    return view('oyun', ['oyun' => $oyun]);
});

Route::get('/oyun-sil/{degisken}', function ($degisken) {
    $oyun = Oyun::find($degisken);
    $oyun->delete();
})->middleware('yonetici');

Route::get('/oyunlar', function () {
    return view('browse');
});

Route::get('/bilgilerim', function () {
    return view('bilgilerim'); # bilgilerim.blade.php
});

Route::get('/profil', function () {
    return view('profile');
})->middleware('uye');

Route::get('/yayinlar', function () {
    return view('streams');
});

Route::get('/oturum-ac', function () {
    return view('oturum-ac');
})->middleware('misafir');

Route::get('/uye-ol', function () {
    return view('uye-ol');
})->middleware('misafir');

Route::post('/uye-kontrol', [Oturum::class, 'kontrol']);
Route::post('/uye-kayit', [Oturum::class, 'kayit']);
Route::post('/guncelle', [Oturum::class, 'guncelle']);

Route::get('/veri/{degisken}', function ($degisken) {
    return ('Sayı: '.$degisken);
});

Route::get('/sonuc', function (Request $request) {
    return ('Anahtar kelime: '.$request['anahtar']);
});

Route::get('/oyun-ekle', function () {
    return view('oyun-ekle'); # oyun-ekle.blade.php
});

Route::post('/oyun-kayit', [OyunDenetleyicisi::class, 'kayit']);

Route::post('/oturumu-kapat', function () {
    auth()->logout();
    return redirect()->intended('/')->with(['basarili' => 'Başarılı bir şekilde oturumu sonlandırdınız. Görüşmek üzere.']);
});
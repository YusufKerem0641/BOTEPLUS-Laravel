<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Oturum;
use Illuminate\Http\Request;

Route::get('/eski', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/oyunlar', function () {
    return view('browse');
});

Route::get('/profil', function () {
    return view('profile');
})->middleware('uye');

Route::get('/detaylar', function () {
    return view('details');
});

Route::get('/yayinlar', function () {
    return view('streams');
});

Route::get('/oturum-ac', function () {
    return view('login');
})->middleware('misafir');

Route::get('/uye-ol', function () {
    return view('uye-ol');
})->middleware('misafir');

Route::post('/uye-kontrol', [Oturum::class, 'kontrol']);
Route::post('/uye-kayit', [Oturum::class, 'kayit']);

Route::get('/veri/{degisken}', function ($degisken) {
    return ('Sayı: '.$degisken);
});

Route::get('/sonuc', function (Request $request) {
    return ('Anahtar kelime: '.$request['anahtar']);
});
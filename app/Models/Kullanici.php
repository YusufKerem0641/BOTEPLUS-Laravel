<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kullanici extends Authenticatable
{
    use Notifiable;

    protected $table = 'kullanici';
    protected $primaryKey = 'id';
    protected $fillable = ['ad', 'soyad', 'eposta', 'password', 'profil', 'statu'];
    protected $hidden = ['password', 'remember_token'];
}

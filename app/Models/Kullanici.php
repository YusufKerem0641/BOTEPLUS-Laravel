<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kullanici extends Model
{
    use HasFactory;

    protected $table = "kullanici";

    protected $primaryKey = "id";

    protected $fillable = ["ad", "soyad", "eposta", "parola", "profil"];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oyun extends Model
{
    use HasFactory;

    protected $table = "oyun";

    protected $primaryKey = "id";

    protected $fillable = ["ad", "kategori", "fiyat", "indirilme_sayisi", "yas_siniri", "yildiz", "kapak", "fragman", "tarih"];
}

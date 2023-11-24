<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('oyun', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->string('kategori');
            $table->double('fiyat');
            $table->integer('indirilme_sayisi');
            $table->string('yas_siniri');
            $table->double('yildiz');
            $table->string('kapak');
            $table->string('fragman');
            $table->date('tarih');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oyun');
    }
};

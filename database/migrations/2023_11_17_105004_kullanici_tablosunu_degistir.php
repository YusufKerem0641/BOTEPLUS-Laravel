<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void # Tabloda yapılması istenen değişiklik
    {
        Schema::table('kullanici', function (Blueprint $table) {
            $table->string('resim');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void # Yukarıda yapılan işlemin geri alınması komutu
    {
        Schema::table('kullanici', function (Blueprint $table) {
            $table->dropColumn('resim');
        });
    }
};

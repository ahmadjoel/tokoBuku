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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul',100);
            $table->string('penulis',100);
            $table->string('penerbit',100);
            $table->year('tahun_terbit');
            $table->tinyInteger('stok');
            $table->bigInteger('harga_pokok');
            $table->bigInteger('harga_jual');
            $table->bigInteger('diskon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};

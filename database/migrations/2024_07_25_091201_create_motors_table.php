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
        Schema::create('motors', function (Blueprint $table) {
            $table->id();
            $table->string('nama_motor');
            $table->string('slug');
            $table->string('harga_sewa');
            $table->text('gambar');
            $table->string('bahan_bakar');
            $table->string('jumlah_kursi');
            $table->string('transmisi');
            $table->string('status');
            $table->string('deskripsi');
            $table->boolean('charger');
            $table->boolean('hybrid');
            $table->boolean('tumbler_space');
            $table->boolean('GPS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motors');
    }
};

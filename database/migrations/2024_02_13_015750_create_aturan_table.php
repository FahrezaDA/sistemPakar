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
        Schema::create('aturan', function (Blueprint $table) {
            $table->id('id_aturan');
            $table->unsignedBigInteger('id_gejala');
            $table->unsignedBigInteger('id_penyakit');
            $table->float('belief');


            $table->foreign('id_gejala')->references('id_gejala')->on('gejala')->onDelete('cascade');
            $table->foreign('id_penyakit')->references('id_penyakit')->on('penyakit')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aturans');
    }
};

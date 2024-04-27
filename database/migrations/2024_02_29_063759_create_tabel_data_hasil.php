<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tabel_data_hasil', function (Blueprint $table) {
            $table->id('id_hasil');
            $table->string('nama');
            $table->text('alamat');
            $table->string('jenis_sapi')->default(null);
            $table->longText('hasil_diagnosa');
            $table->longText('solusi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_data_hasil');
    }
};

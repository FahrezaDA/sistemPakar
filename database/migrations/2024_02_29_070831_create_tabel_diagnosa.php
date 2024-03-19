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
            Schema::create('tabel_diagnosa', function (Blueprint $table) {
                $table->id('id_diagnosa');
                $table->string('nama');
                $table->text('alamat');
                $table->timestamps();
            });
        }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_diagnosa');
    }
};

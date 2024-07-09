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
        Schema::create('kriterias', function (Blueprint $table) {
            $table->id('kode_kriteria');
            $table->string('nama_kriteria')->nullable();
            $table->float('bobot_kriteria', 8, 2)->nullable(); //bobot per kriteria
            $table->string('attribute')->nullable(); //cost or benefit
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriterias');
    }
};

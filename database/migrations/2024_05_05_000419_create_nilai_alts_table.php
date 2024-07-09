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
        Schema::create('nilai_alts', function (Blueprint $table) {
            $table->increments('nilai_alt_id');
            $table->unsignedBigInteger('kriteria_id')->nullable();
            $table->unsignedBigInteger('alternatif_id')->nullable();
            $table->unsignedBigInteger('subkriteria_id')->nullable();
            $table->foreign('kriteria_id')
                  ->references('kode_kriteria')->on('kriterias')
                  ->onDelete('set null');
            $table->foreign('alternatif_id')
                  ->references('kode_alternatif')->on('alternatifs')
                  ->onDelete('set null');
            $table->foreign('subkriteria_id')
                  ->references('id')->on('subkriterias')
                  ->onDelete('set null');
            $table->float('value');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_alts');
    }
};

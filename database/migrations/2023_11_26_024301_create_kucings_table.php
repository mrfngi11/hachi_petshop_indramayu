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
        Schema::create('kucings', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kucing');
            $table->string('kondisi_kucing');
            $table->integer('jumlah_kucing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kucings');
    }
};

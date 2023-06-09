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
        Schema::create('RiwayatPemesanan', function (Blueprint $table) {
            $table->id();
            $table -> date('Tanggal');
            $table -> string('Wista');
            $table -> integer('Biaya Keuntungan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('RiwayatPemesanan');
    }
};

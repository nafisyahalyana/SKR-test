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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('bidang');
            $table->string('no_hp');
            $table->date('tanggal');
            $table->string('ruangan_id');
            $table->time('waktu_mulai');
            $table->time('waktu_berakhir');
            $table->string('keperluan');
            $table->boolean('is_privat');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};

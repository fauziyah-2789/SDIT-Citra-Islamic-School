<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('materi_siswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id');
            $table->unsignedBigInteger('siswa_id');
            $table->boolean('selesai')->default(false);
            $table->timestamps();

            $table->foreign('materi_id')->references('id')->on('materis')->onDelete('cascade');
            $table->foreign('siswa_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('materi_siswa');
    }
};

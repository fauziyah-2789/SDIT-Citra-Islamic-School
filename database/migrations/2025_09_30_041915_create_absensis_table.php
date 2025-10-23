<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id')->nullable(); // ✅ relasi ke tabel siswas
            $table->unsignedBigInteger('guru_id')->nullable();  // guru yang mengisi absensi
            $table->unsignedBigInteger('jadwal_id')->nullable();
            $table->date('tanggal');
            $table->enum('status', ['hadir','izin','sakit','alpha'])->default('hadir');
            $table->text('keterangan')->nullable();
            $table->timestamps();

            // ✅ Relasi foreign key
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('set null');
            $table->foreign('jadwal_id')->references('id')->on('jadwals')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('absensis');
    }
};

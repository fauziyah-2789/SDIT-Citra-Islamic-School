<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id')->nullable(); // ✅ relasi ke siswa
            $table->unsignedBigInteger('guru_id')->nullable();  // ✅ relasi ke guru (yg memberi nilai)
            $table->unsignedBigInteger('tugas_id')->nullable();
            $table->unsignedBigInteger('soal_id')->nullable();
            $table->integer('nilai')->nullable();
            $table->timestamps();

            // 🔗 Foreign key relasi
            $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('set null');
            $table->foreign('tugas_id')->references('id')->on('tugas')->onDelete('set null');
            $table->foreign('soal_id')->references('id')->on('soals')->onDelete('set null');
        });
    }

    public function down(): void {
        Schema::dropIfExists('nilais');
    }
};

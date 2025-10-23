<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id')->nullable();
            $table->unsignedBigInteger('guru_id')->nullable(); // pembuat/guru
            $table->unsignedBigInteger('kelas_id')->nullable(); // tugas untuk kelas tertentu
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('file')->nullable();
            $table->date('deadline')->nullable();
            $table->timestamps();

            $table->foreign('materi_id')->references('id')->on('materis')->onDelete('set null');
            $table->foreign('guru_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');
        });
    }

    public function down(): void {
        Schema::dropIfExists('tugas');
    }
};

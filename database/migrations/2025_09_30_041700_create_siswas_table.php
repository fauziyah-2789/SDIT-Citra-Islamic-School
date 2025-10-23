<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_id')->nullable(); // relasi ke kelas
            $table->string('nama');
            $table->string('nis')->unique();
            $table->string('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->timestamps();

            // Relasi foreign key
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};

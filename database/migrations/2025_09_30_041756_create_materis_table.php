<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('file')->nullable();
            
            // relasi ke guru
            $table->foreignId('guru_id')->nullable()->constrained('gurus')->onDelete('set null');

            // relasi ke kelas
            $table->foreignId('kelas_id')->nullable()->constrained('kelas')->onDelete('set null');

            // relasi ke mapel
            $table->foreignId('mapel_id')->nullable()->constrained('mapels')->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};

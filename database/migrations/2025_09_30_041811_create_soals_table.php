<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materi_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

            // Tambahkan kolom yang seeder butuhkan
            $table->text('soal');       // teks soal
            $table->string('jawaban');  // jawaban
            $table->string('judul')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('file')->nullable();

            $table->timestamps();

            $table->foreign('materi_id')->references('id')->on('materis')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('soals');
    }
};

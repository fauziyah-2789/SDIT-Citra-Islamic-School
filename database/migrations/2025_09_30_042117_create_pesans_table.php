<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // pengirim
            $table->unsignedBigInteger('guru_id')->nullable(); // penerima (guru) atau null
            $table->string('judul')->nullable();
            $table->text('isi');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('set null');
        });
    }
    public function down(): void {
        Schema::dropIfExists('pesans');
    }
};

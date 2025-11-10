<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('galeri_eskuls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ekstrakurikuler_id')
                ->constrained('ekstrakurikulers')
                ->cascadeOnDelete(); // hapus galeri jika eskul dihapus
            $table->string('gambar'); // nama file gambar
            $table->string('keterangan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::dropIfExists('galeri_eskuls');
    }
};

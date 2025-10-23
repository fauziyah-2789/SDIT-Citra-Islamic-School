<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->unsignedBigInteger('mapel_id')->nullable();
            $table->unsignedBigInteger('guru_id')->nullable();
            $table->string('hari')->nullable();
            $table->time('jam_mulai')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->timestamps();

            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
            $table->foreign('mapel_id')->references('id')->on('mapels')->onDelete('set null');
            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('set null');
        });
    }
    public function down(): void {
        Schema::dropIfExists('jadwals');
    }
};

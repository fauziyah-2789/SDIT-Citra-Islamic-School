<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('profil_gurus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guru_id')->nullable();
            $table->string('nip')->nullable();
            $table->string('telepon')->nullable();
            $table->string('alamat')->nullable();
            $table->text('biografi')->nullable();
            $table->timestamps();

            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('set null');
        });
    }
    public function down(): void {
        Schema::dropIfExists('profil_gurus');
    }
};

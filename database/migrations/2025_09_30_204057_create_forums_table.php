<?php 
 
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // pembuat
            $table->unsignedBigInteger('materi_id')->nullable(); // forum terkait materi
            $table->string('judul');
            $table->text('isi');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('materi_id')->references('id')->on('materis')->onDelete('set null');
        });
    }

    public function down(): void {
        Schema::dropIfExists('forums');
    }
};

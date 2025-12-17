<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            
            // Kolom utama untuk pengaturan sekolah
            $table->string('nama_sekolah');
            $table->string('email_kontak')->nullable();
            $table->string('no_telp', 20)->nullable();
            $table->text('alamat')->nullable();
            
            // Kolom untuk konfigurasi sistem
            $table->string('tahun_akademik_aktif', 10);
            $table->string('logo_url')->nullable(); // Path atau URL logo
            
            // Kolom opsional lainnya:
            $table->string('social_media_facebook')->nullable();
            $table->string('social_media_instagram')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
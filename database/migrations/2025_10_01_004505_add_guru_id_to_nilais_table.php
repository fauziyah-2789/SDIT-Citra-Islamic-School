<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('nilais', function (Blueprint $table) {
            // Pastikan kolom belum ada
            if (!Schema::hasColumn('nilais', 'guru_id')) {
                $table->unsignedBigInteger('guru_id')->nullable()->after('id');

                // Relasi ke tabel gurus
                $table->foreign('guru_id')
                      ->references('id')
                      ->on('gurus')
                      ->onDelete('set null');
            }
        });
    }

    public function down(): void {
        Schema::table('nilais', function (Blueprint $table) {
            if (Schema::hasColumn('nilais', 'guru_id')) {
                $table->dropForeign(['guru_id']);
                $table->dropColumn('guru_id');
            }
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // contoh: tambahkan FK ortu_id di tabel prestasis
        Schema::table('prestasis', function (Blueprint $table) {
            if (!Schema::hasColumn('prestasis', 'ortu_id')) {
                $table->unsignedBigInteger('ortu_id')->nullable()->after('id');
                $table->foreign('ortu_id')->references('id')->on('orang_tuas')->onDelete('cascade');
            }
        });
    }

    public function down(): void
    {
        Schema::table('prestasis', function (Blueprint $table) {
            if (Schema::hasColumn('prestasis', 'ortu_id')) {
                $table->dropForeign(['ortu_id']);
                $table->dropColumn('ortu_id');
            }
        });
    }
};

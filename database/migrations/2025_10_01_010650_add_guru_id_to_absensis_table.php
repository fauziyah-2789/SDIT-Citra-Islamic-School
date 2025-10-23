<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('absensis', function (Blueprint $table) {
            if (!Schema::hasColumn('absensis', 'guru_id')) {
                $table->foreignId('guru_id')->nullable()->after('id')
                      ->constrained('users')->onDelete('cascade');
            }
        });
    }

    public function down(): void {
        Schema::table('absensis', function (Blueprint $table) {
            if (Schema::hasColumn('absensis', 'guru_id')) {
                $table->dropForeign(['guru_id']);
                $table->dropColumn('guru_id');
            }
        });
    }
};

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration {
    public function up(){
        Schema::create('programs', function(Blueprint $table){
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('ikon')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('programs'); }
}

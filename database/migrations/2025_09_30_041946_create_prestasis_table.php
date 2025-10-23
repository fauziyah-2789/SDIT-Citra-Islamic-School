<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasisTable extends Migration {
    public function up(){
        Schema::create('prestasis', function(Blueprint $table){
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('tipe')->default('siswa'); // 'siswa' atau 'sekolah'
            $table->string('lokasi')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('prestasis'); }
}

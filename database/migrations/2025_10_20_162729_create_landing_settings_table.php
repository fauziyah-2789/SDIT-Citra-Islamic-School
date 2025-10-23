<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingSettingsTable extends Migration {
    public function up(){
        Schema::create('landing_settings', function(Blueprint $table){
            $table->id();
            $table->string('key')->unique();
            $table->longText('value')->nullable();
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('landing_settings'); }
}

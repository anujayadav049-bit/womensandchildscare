<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
        Schema::create('service_pages', function(Blueprint $table){
            $table->id();
            $table->string('slug')->unique(); // pregnancy-care, womens-health etc
            $table->json('data')->nullable(); // saara text + image yahi save hoga
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('service_pages'); }
};
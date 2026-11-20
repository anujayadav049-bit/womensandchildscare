<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            for($i=1; $i<=4; $i++){
                $table->string('funfact'.$i.'_number')->nullable();
                $table->string('funfact'.$i.'_suffix')->nullable();
                $table->string('funfact'.$i.'_text')->nullable();
            }
        });
    }
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['funfact1_number','funfact1_suffix','funfact1_text','funfact2_number','funfact2_suffix','funfact2_text','funfact3_number','funfact3_suffix','funfact3_text','funfact4_number','funfact4_suffix','funfact4_text']);
        });
    }
};
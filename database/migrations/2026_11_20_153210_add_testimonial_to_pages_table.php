<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('testi_subtitle')->nullable();
            $table->string('testi_title')->nullable();
            $table->string('testi_rating')->nullable();
            $table->string('testi_rating_text')->nullable();
            $table->string('testi_side_image')->nullable();
            for($i=1; $i<=3; $i++){
                $table->text('testi'.$i.'_text')->nullable();
                $table->string('testi'.$i.'_name')->nullable();
                $table->string('testi'.$i.'_role')->nullable();
                $table->string('testi'.$i.'_image')->nullable();
            }
        });
    }
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['testi_subtitle','testi_title','testi_rating','testi_rating_text','testi_side_image','testi1_text','testi1_name','testi1_role','testi1_image','testi2_text','testi2_name','testi2_role','testi2_image','testi3_text','testi3_name','testi3_role','testi3_image']);
        });
    }
};
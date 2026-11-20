<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('working_subtitle')->nullable();
            $table->string('working_title')->nullable();
            $table->text('working_text1')->nullable();
            $table->text('working_text2')->nullable();
            $table->string('working_btn_text')->nullable();
            $table->string('working_success_title')->nullable();
            $table->string('working_image')->nullable();
            for($i=1; $i<=4; $i++){
                $table->string('working_bar'.$i.'_title')->nullable();
                $table->string('working_bar'.$i.'_percent')->nullable();
            }
        });
    }
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['working_subtitle','working_title','working_text1','working_text2','working_btn_text','working_success_title','working_image','working_bar1_title','working_bar1_percent','working_bar2_title','working_bar2_percent','working_bar3_title','working_bar3_percent','working_bar4_title','working_bar4_percent']);
        });
    }
};
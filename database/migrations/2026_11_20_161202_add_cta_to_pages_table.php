<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('cta_bg_image')->nullable();
            $table->string('cta1_title')->nullable();
            $table->text('cta1_text')->nullable();
            $table->string('cta2_title')->nullable();
            $table->string('cta2_text1')->nullable();
            $table->string('cta2_text2')->nullable();
            $table->string('cta3_title')->nullable();
            $table->string('cta3_text1')->nullable();
            $table->string('cta3_text2')->nullable();
        });
    }
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['cta_bg_image','cta1_title','cta1_text','cta2_title','cta2_text1','cta2_text2','cta3_title','cta3_text1','cta3_text2']);
        });
    }
};
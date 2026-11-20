<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('blog_subtitle')->nullable();
            $table->string('blog_title')->nullable();
            for($i=1; $i<=3; $i++){
                $table->string('blog'.$i.'_date')->nullable();
                $table->string('blog'.$i.'_title')->nullable();
                $table->text('blog'.$i.'_excerpt')->nullable();
                $table->string('blog'.$i.'_image')->nullable();
            }
        });
    }
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['blog_subtitle','blog_title','blog1_date','blog1_title','blog1_excerpt','blog1_image','blog2_date','blog2_title','blog2_excerpt','blog2_image','blog3_date','blog3_title','blog3_excerpt','blog3_image']);
        });
    }
};
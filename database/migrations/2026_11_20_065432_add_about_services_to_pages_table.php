<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('about_subtitle')->nullable();
            $table->string('about_title')->nullable();
            $table->text('about_text')->nullable();
            $table->string('about_image1')->nullable();
            $table->string('about_image2')->nullable();
            $table->string('about_feature1')->nullable();
            $table->string('about_feature2')->nullable();
            $table->string('about_point1')->nullable();
            $table->string('about_point2')->nullable();
            $table->string('about_point3')->nullable();
            $table->string('services_subtitle')->nullable();
            $table->string('services_title')->nullable();
            for($i=1; $i<=8; $i++){
                $table->string('service'.$i.'_title')->nullable();
                $table->text('service'.$i.'_text')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'about_subtitle','about_title','about_text','about_image1','about_image2',
                'about_feature1','about_feature2','about_point1','about_point2','about_point3',
                'services_subtitle','services_title',
                'service1_title','service1_text','service2_title','service2_text',
                'service3_title','service3_text','service4_title','service4_text',
                'service5_title','service5_text','service6_title','service6_text',
                'service7_title','service7_text','service8_title','service8_text',
            ]);
        });
    }
};
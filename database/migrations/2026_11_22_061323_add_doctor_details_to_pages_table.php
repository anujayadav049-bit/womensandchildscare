<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('doctor_name')->nullable();
            $table->string('doctor_designation')->nullable();
            $table->string('doctor_tag')->nullable();
            $table->text('doctor_short_bio')->nullable();
            $table->string('doctor_experience')->nullable();
            $table->string('doctor_education')->nullable();
            $table->string('doctor_phone')->nullable();
            $table->string('doctor_email')->nullable();
            $table->string('doctor_address')->nullable();
            $table->longText('doctor_about')->nullable();
            $table->longText('doctor_expertise')->nullable();
            $table->string('doctor_image')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['doctor_name','doctor_designation','doctor_tag','doctor_short_bio','doctor_experience','doctor_education','doctor_phone','doctor_email','doctor_address','doctor_about','doctor_expertise','doctor_image']);
        });
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('pages', function ($table) {
        $table->id();
        $table->string('slug')->unique();
        $table->string('title')->nullable();
        $table->longText('content')->nullable();
        $table->longText('banner_small')->nullable();
        $table->longText('banner_text')->nullable();
        $table->string('phone')->nullable();
        $table->string('timing')->nullable();
        $table->string('address')->nullable();
        $table->string('email')->nullable();
        $table->longText('about_title')->nullable();
        $table->longText('about_text')->nullable();
        $table->longText('why_title')->nullable();
        $table->longText('why_text')->nullable();
        $table->longText('cta_title')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};

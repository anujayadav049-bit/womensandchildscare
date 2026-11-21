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
        Schema::create('doctors', function (Blueprint $table) {
    $table->id();
    $table->string('slug')->unique(); // devendra-agarwal
    $table->string('name'); // Dr. Devendra Agarwal
    $table->string('designation')->nullable(); // MBBS, MD — Pediatrics
    $table->string('tag')->nullable(); // AVAILABLE - WOMEN & CHILD CARE
    $table->text('short_bio')->nullable();
    $table->string('experience')->nullable(); // 16+ Years
    $table->string('education')->nullable();
    $table->string('phone')->nullable();
    $table->string('email')->nullable();
    $table->string('address')->nullable();
    $table->string('image')->nullable();
    $table->text('about')->nullable();
    $table->text('expertise')->nullable(); // ek line me ek expertise, Enter se alag
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};

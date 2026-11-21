<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            if (!Schema::hasColumn('pages', 'about_banner_title')) {
                $table->string('about_banner_title')->nullable();
            }
            if (!Schema::hasColumn('pages', 'about_banner_breadcrumb')) {
                $table->string('about_banner_breadcrumb')->nullable();
            }
            if (!Schema::hasColumn('pages', 'about_banner_image')) {
                $table->string('about_banner_image')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['about_banner_title','about_banner_breadcrumb','about_banner_image']);
        });
    }
};
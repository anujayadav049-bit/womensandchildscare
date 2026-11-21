<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            if (!Schema::hasColumn('pages', 'doctor_banner_title')) {
                $table->string('doctor_banner_title')->nullable();
            }
            if (!Schema::hasColumn('pages', 'doctor_banner_breadcrumb')) {
                $table->string('doctor_banner_breadcrumb')->nullable();
            }
            if (!Schema::hasColumn('pages', 'doctor_banner_image')) {
                $table->string('doctor_banner_image')->nullable();
            }
        });
    }
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['doctor_banner_title','doctor_banner_breadcrumb','doctor_banner_image']);
        });
    }
};
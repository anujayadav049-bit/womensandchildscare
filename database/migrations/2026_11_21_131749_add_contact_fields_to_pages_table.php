<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            if (!Schema::hasColumn('pages', 'contact_banner_title')) $table->string('contact_banner_title')->nullable();
            if (!Schema::hasColumn('pages', 'contact_banner_breadcrumb')) $table->string('contact_banner_breadcrumb')->nullable();
            if (!Schema::hasColumn('pages', 'contact_banner_image')) $table->string('contact_banner_image')->nullable();
            if (!Schema::hasColumn('pages', 'contact_phone')) $table->string('contact_phone')->nullable();
            if (!Schema::hasColumn('pages', 'contact_address')) $table->string('contact_address')->nullable();
            if (!Schema::hasColumn('pages', 'contact_timing')) $table->string('contact_timing')->nullable();
            if (!Schema::hasColumn('pages', 'contact_map_embed')) $table->text('contact_map_embed')->nullable();
        });
    }
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['contact_banner_title','contact_banner_breadcrumb','contact_banner_image','contact_phone','contact_address','contact_timing','contact_map_embed']);
        });
    }
};
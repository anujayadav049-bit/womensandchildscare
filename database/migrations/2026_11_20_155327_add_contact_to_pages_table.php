<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('contact_left_title')->nullable();
            $table->string('contact_email_label')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_subtitle')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_btn_text')->nullable();
            $table->string('contact_left_image')->nullable();
            $table->string('contact_bg_image')->nullable();
        });
    }
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['contact_left_title','contact_email_label','contact_email','contact_subtitle','contact_title','contact_btn_text','contact_left_image','contact_bg_image']);
        });
    }
};
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('newborn_title')->nullable();
            $table->string('newborn_banner')->nullable();
            $table->string('newborn_help_title')->nullable();
            $table->string('newborn_help_subtitle')->nullable();
            $table->string('newborn_help_phone')->nullable();
            $table->string('newborn_book_btn')->nullable();
            $table->string('newborn_main_image')->nullable();
            $table->string('newborn_overview_title')->nullable();
            $table->text('newborn_overview_p1')->nullable();
            $table->text('newborn_overview_p2')->nullable();
            $table->string('newborn_support_title')->nullable();
            $table->text('newborn_support_text')->nullable();
            $table->text('newborn_quote')->nullable();
            $table->string('newborn_feature1_image')->nullable();
            $table->string('newborn_feature1_title')->nullable();
            $table->text('newborn_feature1_text')->nullable();
            $table->string('newborn_feature2_image')->nullable();
            $table->string('newborn_feature2_title')->nullable();
            $table->text('newborn_feature2_text')->nullable();
            $table->string('newborn_faq_title')->nullable();
            $table->string('newborn_faq_subtitle')->nullable();
            $table->text('newborn_faq1_q')->nullable();
            $table->text('newborn_faq1_a')->nullable();
            $table->text('newborn_faq2_q')->nullable();
            $table->text('newborn_faq2_a')->nullable();
            $table->text('newborn_faq3_q')->nullable();
            $table->text('newborn_faq3_a')->nullable();
        });
    }
    public function down(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'newborn_title','newborn_banner','newborn_help_title','newborn_help_subtitle','newborn_help_phone','newborn_book_btn',
                'newborn_main_image','newborn_overview_title','newborn_overview_p1','newborn_overview_p2',
                'newborn_support_title','newborn_support_text','newborn_quote',
                'newborn_feature1_image','newborn_feature1_title','newborn_feature1_text',
                'newborn_feature2_image','newborn_feature2_title','newborn_feature2_text',
                'newborn_faq_title','newborn_faq_subtitle',
                'newborn_faq1_q','newborn_faq1_a','newborn_faq2_q','newborn_faq2_a','newborn_faq3_q','newborn_faq3_a'
            ]);
        });
    }
};
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('women_title')->nullable();
            $table->string('women_banner')->nullable();
            $table->string('women_help_title')->nullable();
            $table->string('women_help_subtitle')->nullable();
            $table->string('women_help_phone')->nullable();
            $table->string('women_book_btn')->nullable();
            $table->string('women_main_image')->nullable();
            $table->string('women_overview_title')->nullable();
            $table->text('women_overview_p1')->nullable();
            $table->text('women_overview_p2')->nullable();
            $table->string('women_support_title')->nullable();
            $table->text('women_support_text')->nullable();
            $table->text('women_quote')->nullable();
            $table->string('women_feature1_image')->nullable();
            $table->string('women_feature1_title')->nullable();
            $table->text('women_feature1_text')->nullable();
            $table->string('women_feature2_image')->nullable();
            $table->string('women_feature2_title')->nullable();
            $table->text('women_feature2_text')->nullable();
            $table->string('women_faq_title')->nullable();
            $table->string('women_faq_subtitle')->nullable();
            $table->text('women_faq1_q')->nullable();
            $table->text('women_faq1_a')->nullable();
            $table->text('women_faq2_q')->nullable();
            $table->text('women_faq2_a')->nullable();
            $table->text('women_faq3_q')->nullable();
            $table->text('women_faq3_a')->nullable();
        });
    }
    public function down(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'women_title','women_banner','women_help_title','women_help_subtitle','women_help_phone','women_book_btn',
                'women_main_image','women_overview_title','women_overview_p1','women_overview_p2',
                'women_support_title','women_support_text','women_quote',
                'women_feature1_image','women_feature1_title','women_feature1_text',
                'women_feature2_image','women_feature2_title','women_feature2_text',
                'women_faq_title','women_faq_subtitle',
                'women_faq1_q','women_faq1_a','women_faq2_q','women_faq2_a','women_faq3_q','women_faq3_a'
            ]);
        });
    }
};
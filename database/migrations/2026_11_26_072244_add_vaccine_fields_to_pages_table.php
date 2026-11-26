<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('vaccine_title')->nullable();
            $table->string('vaccine_banner')->nullable();
            $table->string('vaccine_help_title')->nullable();
            $table->string('vaccine_help_subtitle')->nullable();
            $table->string('vaccine_help_phone')->nullable();
            $table->string('vaccine_book_btn')->nullable();
            $table->string('vaccine_main_image')->nullable();
            $table->string('vaccine_overview_title')->nullable();
            $table->text('vaccine_overview_p1')->nullable();
            $table->text('vaccine_overview_p2')->nullable();
            $table->string('vaccine_support_title')->nullable();
            $table->text('vaccine_support_text')->nullable();
            $table->text('vaccine_quote')->nullable();
            $table->string('vaccine_feature1_image')->nullable();
            $table->string('vaccine_feature1_title')->nullable();
            $table->text('vaccine_feature1_text')->nullable();
            $table->string('vaccine_feature2_image')->nullable();
            $table->string('vaccine_feature2_title')->nullable();
            $table->text('vaccine_feature2_text')->nullable();
            $table->string('vaccine_faq_title')->nullable();
            $table->string('vaccine_faq_subtitle')->nullable();
            $table->text('vaccine_faq1_q')->nullable();
            $table->text('vaccine_faq1_a')->nullable();
            $table->text('vaccine_faq2_q')->nullable();
            $table->text('vaccine_faq2_a')->nullable();
            $table->text('vaccine_faq3_q')->nullable();
            $table->text('vaccine_faq3_a')->nullable();
        });
    }
    public function down(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'vaccine_title','vaccine_banner','vaccine_help_title','vaccine_help_subtitle','vaccine_help_phone','vaccine_book_btn',
                'vaccine_main_image','vaccine_overview_title','vaccine_overview_p1','vaccine_overview_p2',
                'vaccine_support_title','vaccine_support_text','vaccine_quote',
                'vaccine_feature1_image','vaccine_feature1_title','vaccine_feature1_text',
                'vaccine_feature2_image','vaccine_feature2_title','vaccine_feature2_text',
                'vaccine_faq_title','vaccine_faq_subtitle',
                'vaccine_faq1_q','vaccine_faq1_a','vaccine_faq2_q','vaccine_faq2_a','vaccine_faq3_q','vaccine_faq3_a'
            ]);
        });
    }
};
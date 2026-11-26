<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('growth_title')->nullable();
            $table->string('growth_banner')->nullable();
            $table->string('growth_help_title')->nullable();
            $table->string('growth_help_subtitle')->nullable();
            $table->string('growth_help_phone')->nullable();
            $table->string('growth_book_btn')->nullable();
            $table->string('growth_main_image')->nullable();
            $table->string('growth_overview_title')->nullable();
            $table->text('growth_overview_p1')->nullable();
            $table->text('growth_overview_p2')->nullable();
            $table->string('growth_support_title')->nullable();
            $table->text('growth_support_text')->nullable();
            $table->text('growth_quote')->nullable();
            $table->string('growth_feature1_image')->nullable();
            $table->string('growth_feature1_title')->nullable();
            $table->text('growth_feature1_text')->nullable();
            $table->string('growth_feature2_image')->nullable();
            $table->string('growth_feature2_title')->nullable();
            $table->text('growth_feature2_text')->nullable();
            $table->string('growth_faq_title')->nullable();
            $table->string('growth_faq_subtitle')->nullable();
            $table->text('growth_faq1_q')->nullable();
            $table->text('growth_faq1_a')->nullable();
            $table->text('growth_faq2_q')->nullable();
            $table->text('growth_faq2_a')->nullable();
            $table->text('growth_faq3_q')->nullable();
            $table->text('growth_faq3_a')->nullable();
        });
    }
    public function down(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'growth_title','growth_banner','growth_help_title','growth_help_subtitle','growth_help_phone','growth_book_btn',
                'growth_main_image','growth_overview_title','growth_overview_p1','growth_overview_p2',
                'growth_support_title','growth_support_text','growth_quote',
                'growth_feature1_image','growth_feature1_title','growth_feature1_text',
                'growth_feature2_image','growth_feature2_title','growth_feature2_text',
                'growth_faq_title','growth_faq_subtitle',
                'growth_faq1_q','growth_faq1_a','growth_faq2_q','growth_faq2_a','growth_faq3_q','growth_faq3_a'
            ]);
        });
    }
};
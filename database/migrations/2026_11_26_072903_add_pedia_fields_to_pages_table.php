<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('pedia_title')->nullable();
            $table->string('pedia_banner')->nullable();
            $table->string('pedia_help_title')->nullable();
            $table->string('pedia_help_subtitle')->nullable();
            $table->string('pedia_help_phone')->nullable();
            $table->string('pedia_book_btn')->nullable();
            $table->string('pedia_main_image')->nullable();
            $table->string('pedia_overview_title')->nullable();
            $table->text('pedia_overview_p1')->nullable();
            $table->text('pedia_overview_p2')->nullable();
            $table->string('pedia_support_title')->nullable();
            $table->text('pedia_support_text')->nullable();
            $table->text('pedia_quote')->nullable();
            $table->string('pedia_feature1_image')->nullable();
            $table->string('pedia_feature1_title')->nullable();
            $table->text('pedia_feature1_text')->nullable();
            $table->string('pedia_feature2_image')->nullable();
            $table->string('pedia_feature2_title')->nullable();
            $table->text('pedia_feature2_text')->nullable();
            $table->string('pedia_faq_title')->nullable();
            $table->string('pedia_faq_subtitle')->nullable();
            $table->text('pedia_faq1_q')->nullable();
            $table->text('pedia_faq1_a')->nullable();
            $table->text('pedia_faq2_q')->nullable();
            $table->text('pedia_faq2_a')->nullable();
            $table->text('pedia_faq3_q')->nullable();
            $table->text('pedia_faq3_a')->nullable();
        });
    }
    public function down(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'pedia_title','pedia_banner','pedia_help_title','pedia_help_subtitle','pedia_help_phone','pedia_book_btn',
                'pedia_main_image','pedia_overview_title','pedia_overview_p1','pedia_overview_p2',
                'pedia_support_title','pedia_support_text','pedia_quote',
                'pedia_feature1_image','pedia_feature1_title','pedia_feature1_text',
                'pedia_feature2_image','pedia_feature2_title','pedia_feature2_text',
                'pedia_faq_title','pedia_faq_subtitle',
                'pedia_faq1_q','pedia_faq1_a','pedia_faq2_q','pedia_faq2_a','pedia_faq3_q','pedia_faq3_a'
            ]);
        });
    }
};
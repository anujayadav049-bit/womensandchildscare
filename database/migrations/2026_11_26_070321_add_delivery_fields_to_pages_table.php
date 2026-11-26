<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('delivery_title')->nullable();
            $table->string('delivery_banner')->nullable();
            $table->string('delivery_help_title')->nullable();
            $table->string('delivery_help_subtitle')->nullable();
            $table->string('delivery_help_phone')->nullable();
            $table->string('delivery_book_btn')->nullable();
            $table->string('delivery_main_image')->nullable();
            $table->string('delivery_overview_title')->nullable();
            $table->text('delivery_overview_p1')->nullable();
            $table->text('delivery_overview_p2')->nullable();
            $table->string('delivery_support_title')->nullable();
            $table->text('delivery_support_text')->nullable();
            $table->text('delivery_quote')->nullable();
            $table->string('delivery_feature1_image')->nullable();
            $table->string('delivery_feature1_title')->nullable();
            $table->text('delivery_feature1_text')->nullable();
            $table->string('delivery_feature2_image')->nullable();
            $table->string('delivery_feature2_title')->nullable();
            $table->text('delivery_feature2_text')->nullable();
            $table->string('delivery_faq_title')->nullable();
            $table->string('delivery_faq_subtitle')->nullable();
            $table->text('delivery_faq1_q')->nullable();
            $table->text('delivery_faq1_a')->nullable();
            $table->text('delivery_faq2_q')->nullable();
            $table->text('delivery_faq2_a')->nullable();
            $table->text('delivery_faq3_q')->nullable();
            $table->text('delivery_faq3_a')->nullable();
        });
    }
    public function down(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'delivery_title','delivery_banner','delivery_help_title','delivery_help_subtitle','delivery_help_phone','delivery_book_btn',
                'delivery_main_image','delivery_overview_title','delivery_overview_p1','delivery_overview_p2',
                'delivery_support_title','delivery_support_text','delivery_quote',
                'delivery_feature1_image','delivery_feature1_title','delivery_feature1_text',
                'delivery_feature2_image','delivery_feature2_title','delivery_feature2_text',
                'delivery_faq_title','delivery_faq_subtitle',
                'delivery_faq1_q','delivery_faq1_a','delivery_faq2_q','delivery_faq2_a','delivery_faq3_q','delivery_faq3_a'
            ]);
        });
    }
};
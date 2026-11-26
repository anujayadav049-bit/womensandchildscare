<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('highrisk_title')->nullable();
            $table->string('highrisk_banner')->nullable();
            $table->string('highrisk_help_title')->nullable();
            $table->string('highrisk_help_subtitle')->nullable();
            $table->string('highrisk_help_phone')->nullable();
            $table->string('highrisk_book_btn')->nullable();
            $table->string('highrisk_main_image')->nullable();
            $table->string('highrisk_overview_title')->nullable();
            $table->text('highrisk_overview_p1')->nullable();
            $table->text('highrisk_overview_p2')->nullable();
            $table->string('highrisk_support_title')->nullable();
            $table->text('highrisk_support_text')->nullable();
            $table->text('highrisk_quote')->nullable();
            $table->string('highrisk_feature1_image')->nullable();
            $table->string('highrisk_feature1_title')->nullable();
            $table->text('highrisk_feature1_text')->nullable();
            $table->string('highrisk_feature2_image')->nullable();
            $table->string('highrisk_feature2_title')->nullable();
            $table->text('highrisk_feature2_text')->nullable();
            $table->string('highrisk_faq_title')->nullable();
            $table->string('highrisk_faq_subtitle')->nullable();
            $table->text('highrisk_faq1_q')->nullable();
            $table->text('highrisk_faq1_a')->nullable();
            $table->text('highrisk_faq2_q')->nullable();
            $table->text('highrisk_faq2_a')->nullable();
            $table->text('highrisk_faq3_q')->nullable();
            $table->text('highrisk_faq3_a')->nullable();
        });
    }
    public function down(): void {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'highrisk_title','highrisk_banner','highrisk_help_title','highrisk_help_subtitle','highrisk_help_phone','highrisk_book_btn',
                'highrisk_main_image','highrisk_overview_title','highrisk_overview_p1','highrisk_overview_p2',
                'highrisk_support_title','highrisk_support_text','highrisk_quote',
                'highrisk_feature1_image','highrisk_feature1_title','highrisk_feature1_text',
                'highrisk_feature2_image','highrisk_feature2_title','highrisk_feature2_text',
                'highrisk_faq_title','highrisk_faq_subtitle',
                'highrisk_faq1_q','highrisk_faq1_a','highrisk_faq2_q','highrisk_faq2_a','highrisk_faq3_q','highrisk_faq3_a'
            ]);
        });
    }
};
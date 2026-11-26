<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(){
 Schema::table('pages', function($t){
  $cols = ['preg_title','preg_banner','preg_help_title','preg_help_subtitle','preg_help_phone','preg_book_btn','preg_main_image','preg_overview_title','preg_overview_p1','preg_overview_p2','preg_support_title','preg_support_text','preg_quote','preg_feature1_image','preg_feature1_title','preg_feature1_text','preg_feature2_image','preg_feature2_title','preg_feature2_text','preg_faq_title','preg_faq_subtitle','preg_faq1_q','preg_faq1_a','preg_faq2_q','preg_faq2_a','preg_faq3_q','preg_faq3_a'];
  foreach($cols as $c){ if(!Schema::hasColumn('pages',$c)) $t->text($c)->nullable(); }
 });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            //
        });
    }
};

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('wcu_subtitle')->nullable();
            $table->string('wcu_title')->nullable();
            $table->text('wcu_text')->nullable();
            $table->string('wcu_image')->nullable();
            $table->string('wcu_info_title')->nullable();
            for($i=1; $i<=3; $i++){
                $table->string('wcu_acc'.$i.'_title')->nullable();
                $table->text('wcu_acc'.$i.'_text')->nullable();
            }
            for($i=1; $i<=6; $i++){
                $table->string('wcu_list'.$i)->nullable();
            }
        });
    }
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['wcu_subtitle','wcu_title','wcu_text','wcu_image','wcu_info_title','wcu_acc1_title','wcu_acc1_text','wcu_acc2_title','wcu_acc2_text','wcu_acc3_title','wcu_acc3_text','wcu_list1','wcu_list2','wcu_list3','wcu_list4','wcu_list5','wcu_list6']);
        });
    }
};
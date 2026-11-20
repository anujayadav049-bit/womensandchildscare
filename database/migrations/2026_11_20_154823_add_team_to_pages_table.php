<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('team_subtitle')->nullable();
            $table->string('team_title')->nullable();
            for($i=1; $i<=3; $i++){
                $table->string('team'.$i.'_name')->nullable();
                $table->string('team'.$i.'_role')->nullable();
                $table->string('team'.$i.'_image')->nullable();
            }
        });
    }
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn(['team_subtitle','team_title','team1_name','team1_role','team1_image','team2_name','team2_role','team2_image','team3_name','team3_role','team3_image']);
        });
    }
};
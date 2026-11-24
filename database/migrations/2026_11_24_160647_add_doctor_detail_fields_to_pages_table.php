<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            // Doctor 1 - Devendra - 8 naye column
            if (!Schema::hasColumn('pages', 'team1_qualification')) $table->string('team1_qualification')->nullable();
            if (!Schema::hasColumn('pages', 'team1_experience')) $table->string('team1_experience')->nullable();
            if (!Schema::hasColumn('pages', 'team1_specialization')) $table->string('team1_specialization')->nullable();
            if (!Schema::hasColumn('pages', 'team1_phone')) $table->string('team1_phone')->nullable();
            if (!Schema::hasColumn('pages', 'team1_email')) $table->string('team1_email')->nullable();
            if (!Schema::hasColumn('pages', 'team1_address')) $table->string('team1_address')->nullable();
            if (!Schema::hasColumn('pages', 'team1_timing')) $table->string('team1_timing')->nullable();
            if (!Schema::hasColumn('pages', 'team1_about')) $table->text('team1_about')->nullable();

            // Doctor 2 - Anubha - 8 naye column
            if (!Schema::hasColumn('pages', 'team2_qualification')) $table->string('team2_qualification')->nullable();
            if (!Schema::hasColumn('pages', 'team2_experience')) $table->string('team2_experience')->nullable();
            if (!Schema::hasColumn('pages', 'team2_specialization')) $table->string('team2_specialization')->nullable();
            if (!Schema::hasColumn('pages', 'team2_phone')) $table->string('team2_phone')->nullable();
            if (!Schema::hasColumn('pages', 'team2_email')) $table->string('team2_email')->nullable();
            if (!Schema::hasColumn('pages', 'team2_address')) $table->string('team2_address')->nullable();
            if (!Schema::hasColumn('pages', 'team2_timing')) $table->string('team2_timing')->nullable();
            if (!Schema::hasColumn('pages', 'team2_about')) $table->text('team2_about')->nullable();

            // Doctor 3 - Anjali - 8 naye column
            if (!Schema::hasColumn('pages', 'team3_qualification')) $table->string('team3_qualification')->nullable();
            if (!Schema::hasColumn('pages', 'team3_experience')) $table->string('team3_experience')->nullable();
            if (!Schema::hasColumn('pages', 'team3_specialization')) $table->string('team3_specialization')->nullable();
            if (!Schema::hasColumn('pages', 'team3_phone')) $table->string('team3_phone')->nullable();
            if (!Schema::hasColumn('pages', 'team3_email')) $table->string('team3_email')->nullable();
            if (!Schema::hasColumn('pages', 'team3_address')) $table->string('team3_address')->nullable();
            if (!Schema::hasColumn('pages', 'team3_timing')) $table->string('team3_timing')->nullable();
            if (!Schema::hasColumn('pages', 'team3_about')) $table->text('team3_about')->nullable();

            // Doctor Banner + Team Title - Agar ye bhi nahi hai toh
            if (!Schema::hasColumn('pages', 'doctor_banner_title')) $table->string('doctor_banner_title')->nullable();
            if (!Schema::hasColumn('pages', 'doctor_banner_breadcrumb')) $table->string('doctor_banner_breadcrumb')->nullable();
            if (!Schema::hasColumn('pages', 'doctor_banner_image')) $table->string('doctor_banner_image')->nullable();
            if (!Schema::hasColumn('pages', 'team_subtitle')) $table->string('team_subtitle')->nullable();
            if (!Schema::hasColumn('pages', 'team_title')) $table->string('team_title')->nullable();
            if (!Schema::hasColumn('pages', 'team1_name')) $table->string('team1_name')->nullable();
            if (!Schema::hasColumn('pages', 'team1_role')) $table->string('team1_role')->nullable();
            if (!Schema::hasColumn('pages', 'team1_image')) $table->string('team1_image')->nullable();
            if (!Schema::hasColumn('pages', 'team2_name')) $table->string('team2_name')->nullable();
            if (!Schema::hasColumn('pages', 'team2_role')) $table->string('team2_role')->nullable();
            if (!Schema::hasColumn('pages', 'team2_image')) $table->string('team2_image')->nullable();
            if (!Schema::hasColumn('pages', 'team3_name')) $table->string('team3_name')->nullable();
            if (!Schema::hasColumn('pages', 'team3_role')) $table->string('team3_role')->nullable();
            if (!Schema::hasColumn('pages', 'team3_image')) $table->string('team3_image')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'team1_qualification','team1_experience','team1_specialization','team1_phone','team1_email','team1_address','team1_timing','team1_about',
                'team2_qualification','team2_experience','team2_specialization','team2_phone','team2_email','team2_address','team2_timing','team2_about',
                'team3_qualification','team3_experience','team3_specialization','team3_phone','team3_email','team3_address','team3_timing','team3_about',
            ]);
        });
    }
};
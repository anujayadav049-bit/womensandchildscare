<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            // Appointment Fields
            $table->string('appt_title')->nullable();
            $table->string('appt_banner')->nullable();
            $table->string('appt_subtitle')->nullable();
            $table->string('appt_heading')->nullable();
            $table->text('appt_text')->nullable();
            $table->string('appt_doctor1_name')->nullable();
            $table->string('appt_doctor1_spec')->nullable();
            $table->string('appt_doctor1_time')->nullable();
            $table->string('appt_doctor2_name')->nullable();
            $table->string('appt_doctor2_spec')->nullable();
            $table->string('appt_doctor2_time')->nullable();
            $table->string('appt_address_title')->nullable();
            $table->string('appt_address')->nullable();
            $table->string('appt_phone_title')->nullable();
            $table->string('appt_phone')->nullable();
            $table->string('appt_email_title')->nullable();
            $table->string('appt_email')->nullable();
            $table->string('appt_form_title')->nullable();
            $table->string('appt_form_subtitle')->nullable();
            $table->string('appt_whatsapp_btn')->nullable();
            $table->string('appt_email_btn')->nullable();
            $table->text('appt_form_note')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'appt_title','appt_banner','appt_subtitle','appt_heading','appt_text',
                'appt_doctor1_name','appt_doctor1_spec','appt_doctor1_time',
                'appt_doctor2_name','appt_doctor2_spec','appt_doctor2_time',
                'appt_address_title','appt_address','appt_phone_title','appt_phone',
                'appt_email_title','appt_email','appt_form_title','appt_form_subtitle',
                'appt_whatsapp_btn','appt_email_btn','appt_form_note'
            ]);
        });
    }
};
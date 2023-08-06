<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registration_application', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number');
            $table->string('elderly_name');
            $table->string('elderly_gender_name');
            $table->string('elderly_nik_number');
            $table->string('elderly_kk_number');
            $table->string('elderly_kis_number');
            $table->date('elderly_date_born');
            $table->string('elderly_religion_name');
            $table->string('elderly_address');
            $table->string('elderly_domicile');
            $table->string('reporter_name');
            $table->string('reporter_phone_number');
            $table->string('reporter_address');
            $table->string('reporter_job_name');
            $table->string('elderly_physical_condition');
            $table->string('elderly_psychological_condition');
            $table->string('elderly_social_condition');
            $table->string('elderly_economy_condition');
            $table->string('elderly_photo_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_application');
    }
};

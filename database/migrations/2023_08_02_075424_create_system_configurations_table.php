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
        Schema::create('system_configurations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('city_id');

            $table->string('institute_name');
            $table->string('institute_name_detail');
            $table->text('institute_description');
            $table->string('institute_photo_url');
            $table->string('institute_instagram_url');
            $table->string('institute_facebook_url');
            $table->string('institute_twitter_url');
            $table->string('institute_phone');
            $table->string('institute_email');
            $table->string('institute_address');
            $table->timestamps();

            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_configurations');
    }
};

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
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('seeking_distance_away')->nullable();
            $table->string('seeking_country')->nullable();
            $table->string('seeking_gender');
            $table->string('seeking_orientation');
            $table->string('seeking_relationship_type')->nullable();
            $table->boolean('seeking_vaccinated')->nullable();
            $table->string('seeking_myers_briggs')->nullable();
            $table->string('seeking_disc')->nullable();
            $table->string('seeking_enneagram')->nullable();
            $table->string('seeking_body_type')->nullable();
            $table->string('seeking_hair_color')->nullable();
            $table->string('seeking_hair_style')->nullable();
            $table->string('seeking_eye_color')->nullable();
            $table->string('seeking_ethnicity')->nullable();
            $table->string('seeking_exercise')->nullable();
            $table->string('seeking_political_views')->nullable();
            $table->string('seeking_education')->nullable();
            $table->string('seeking_have_children')->nullable();
            $table->string('seeking_want_children')->nullable();
            $table->string('seeking_energy_level')->nullable();
            $table->string('seeking_tobacco')->nullable();
            $table->string('seeking_weed')->nullable();
            $table->string('seeking_alcohol')->nullable();
            $table->string('seeking_dietary_preference')->nullable();
            $table->string('seeking_spiritual_belief')->nullable();
            $table->string('seeking_marital_status')->nullable();
            $table->string('seeking_spoken_language')->nullable();
            $table->string('seeking_living_situation')->nullable();
            $table->string('seeking_willing_to_relocate')->nullable();
            $table->string('seeking_sun_sign')->nullable();
            $table->string('seeking_rising_sign')->nullable();
            $table->string('seeking_moon_sign')->nullable();
            $table->string('seeking_chinese_sign')->nullable();
            $table->string('seeking_ayurvedic_body_type')->nullable();
            $table->string('seeking_occupation')->nullable();
            $table->string('seeking_pets')->nullable();
            $table->string('seeking_like_pets')->nullable();
            $table->string('seeking_income')->nullable();
            $table->string('seeking_personality')->nullable();
            $table->text('seeking_interests')->nullable();
            $table->string('seeking_age_min')->nullable();
            $table->string('seeking_age_max')->nullable();
            $table->string('seeking_height_min')->nullable();
            $table->string('seeking_height_max')->nullable();
            $table->string('seeking_weight_min')->nullable();
            $table->string('seeking_weight_max')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preferences');
    }
};

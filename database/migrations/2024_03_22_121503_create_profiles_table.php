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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
            $table->date('birthday');
            $table->string('gender');
            $table->string('photos_path', 2048)->nullable();
            $table->string('orientation');
            $table->boolean('vaccinated')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('visible')->default(true);
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('body_type')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('hair_style')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('use_eyewear')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('myers_briggs')->nullable();
            $table->string('disc')->nullable();
            $table->string('enneagram')->nullable();
            $table->string('exercise')->nullable();
            $table->string('political_views')->nullable();
            $table->string('education')->nullable();
            $table->string('have_children')->nullable();
            $table->string('want_children')->nullable();
            $table->string('energy_level')->nullable();
            $table->string('tobacco')->nullable();
            $table->string('weed')->nullable();
            $table->string('alcohol')->nullable();
            $table->string('dietary_preference')->nullable();
            $table->string('spiritual_belief')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('spoken_language')->nullable();
            $table->string('living_situation')->nullable();
            $table->string('willing_to_relocate')->nullable();
            $table->string('sun_sign')->nullable();
            $table->string('rising_sign')->nullable();
            $table->string('moon_sign')->nullable();
            $table->string('chinese_sign')->nullable();
            $table->string('ayurvedic_body_type')->nullable();
            $table->string('occupation')->nullable();
            $table->string('pets')->nullable();
            $table->string('like_pets')->nullable();
            $table->string('income')->nullable();
            $table->string('headline')->nullable();
            $table->text('about')->nullable();
            $table->string('personality')->nullable();
            $table->text('interests')->nullable();
            $table->text('desc_yourself')->nullable();
            $table->text('desc_your_interested_in')->nullable();
            $table->text('desc_ideal_relationship')->nullable();
            $table->text('anything_else')->nullable();
            $table->text('seen')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

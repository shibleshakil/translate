<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('type')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('experience_expertise_id')->unsigned()->index()->nullable();
            $table->string('professional_Experience')->nullable();
            $table->text('linguistic_services')->nullable();
            $table->string('cv')->nullable();
            $table->unsignedBigInteger('native_language_id')->unsigned()->index()->nullable();
            $table->double('rate_per_word')->nullable();
            $table->double('rate_per_minute')->nullable();
            $table->string('daily_translation_capacity')->nullable();
            $table->string('specialized_subject')->nullable();
            $table->text('education')->nullable();
            $table->text('cat_tools')->nullable();
            $table->text('desktop_publishing_sofware')->nullable();
            $table->string('dob')->nullable();
            $table->unsignedBigInteger('city_id')->unsigned()->index()->nullable();
            $table->foreign('experience_expertise_id')->references('id')->on('experience_and_expertises')->onDelete('cascade');
            $table->foreign('native_language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('languages')->onDelete('cascade');
            $table->rememberToken();
            $table->string('token')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

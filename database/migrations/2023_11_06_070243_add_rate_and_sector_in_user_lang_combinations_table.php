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
        Schema::table('user_lang_combinations', function (Blueprint $table) {
            $table->unsignedBigInteger('sector_id')->unsigned()->index()->nullable()->after('to');
            $table->double('rate_per_word')->nullable()->after('sector_id');
            $table->double('rate_per_minute')->nullable()->after('rate_per_word');
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_lang_combinations', function (Blueprint $table) {
            //
        });
    }
};

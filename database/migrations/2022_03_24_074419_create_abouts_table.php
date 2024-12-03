<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {

            $table->id();

            $table->string('title_tr')->nullable();
            $table->string('keywords_tr')->nullable();
            $table->string('description_tr')->nullable();
            $table->string('hood_one_tr')->nullable();
            $table->string('hood_two_tr')->nullable();
            $table->string('hood_three_tr')->nullable();
            $table->string('hood_four_tr')->nullable();
            $table->text('content_tr')->nullable();

            $table->string('title_en')->nullable();
            $table->string('keywords_en')->nullable();
            $table->string('description_en')->nullable();
            $table->string('hood_one_en')->nullable();
            $table->string('hood_two_en')->nullable();
            $table->string('hood_three_en')->nullable();
            $table->string('hood_four_en')->nullable();
            $table->text('content_en')->nullable();

            $table->string('image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}

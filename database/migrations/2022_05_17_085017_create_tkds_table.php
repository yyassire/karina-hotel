<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTkdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tkds', function (Blueprint $table) {

            $table->id();

            $table->string('title_tr')->nullable();
            $table->string('keywords_tr')->nullable();
            $table->string('description_tr')->nullable();
            $table->string('hood_one_tr')->nullable();
            $table->string('hood_two_tr')->nullable();
            $table->text('content_tr')->nullable();


            $table->string('title_en')->nullable();
            $table->string('keywords_en')->nullable();
            $table->string('description_en')->nullable();
            $table->string('hood_one_en')->nullable();
            $table->string('hood_two_en')->nullable();
            $table->text('content_en')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tkds');
    }
}

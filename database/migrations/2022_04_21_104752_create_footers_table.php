<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {

            $table->id();

            $table->string('title_tr')->nullable();
            $table->string('keywords_tr')->nullable();
            $table->string('description_tr')->nullable();
            $table->string('hood_one_tr')->nullable();
            $table->string('hood_two_tr')->nullable();
            $table->string('hood_three_tr')->nullable();
            $table->text('content_tr')->nullable();
            $table->string('selflink_tr')->nullable();

            $table->string('title_en')->nullable();
            $table->string('keywords_en')->nullable();
            $table->string('description_en')->nullable();
            $table->string('hood_one_en')->nullable();
            $table->string('hood_two_en')->nullable();
            $table->string('hood_three_en')->nullable();
            $table->text('content_en')->nullable();
            $table->string('selflink_en')->nullable();

            $table->string('title_de')->nullable();
            $table->string('keywords_de')->nullable();
            $table->string('description_de')->nullable();
            $table->string('hood_one_de')->nullable();
            $table->string('hood_two_de')->nullable();
            $table->string('hood_three_de')->nullable();
            $table->text('content_de')->nullable();
            $table->string('selflink_de')->nullable();

            $table->string('title_ru')->nullable();
            $table->string('keywords_ru')->nullable();
            $table->string('description_ru')->nullable();
            $table->string('hood_one_ru')->nullable();
            $table->string('hood_two_ru')->nullable();
            $table->string('hood_three_ru')->nullable();
            $table->text('content_ru')->nullable();
            $table->string('selflink_ru')->nullable();


            $table->string('image');

            $table->integer('desk')->default(0);

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
        Schema::dropIfExists('footers');
    }
}

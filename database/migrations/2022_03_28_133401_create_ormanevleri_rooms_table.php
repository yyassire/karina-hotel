<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrmanEvleriRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ormanevleri_rooms', function (Blueprint $table) {

            $table->id();

            $table->string('hood_tr')->nullable();
            $table->string('room_name_tr')->nullable();
            $table->text('content_tr')->nullable();

            $table->string('hood_en')->nullable();
            $table->string('room_name_en')->nullable();
            $table->text('content_en')->nullable();

            $table->string('hood_de')->nullable();
            $table->string('room_name_de')->nullable();
            $table->text('content_de')->nullable();

            $table->string('hood_ru')->nullable();
            $table->string('room_name_ru')->nullable();
            $table->text('content_ru')->nullable();

            $table->string('image')->nullable();
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
        Schema::dropIfExists('ormanevleri-rooms');
    }
}

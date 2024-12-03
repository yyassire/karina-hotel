<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {

            $table->id();

            $table->string('category')->nullable();
            $table->string('is_active')->nullable();

            $table->string('selflink_tr')->nullable();
            $table->string('title_tr')->nullable();
            $table->string('keywords_tr')->nullable();
            $table->string('description_tr')->nullable();

            $table->string('selflink_en')->nullable();
            $table->string('title_en')->nullable();
            $table->string('keywords_en')->nullable();
            $table->string('description_en')->nullable();

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
        Schema::dropIfExists('pages');
    }
}

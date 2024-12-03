<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageDetailGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_detail_galleries', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('page_detail_id');
            $table->integer('desk')->default(0);
            $table->string('image');
            $table->foreign('page_detail_id')->references('id')->on('page_details')->onDelete('cascade');

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
        Schema::dropIfExists('page_detail_galleries');
    }
}

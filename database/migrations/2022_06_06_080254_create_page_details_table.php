<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_details', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('page_id');

            $table->string('hood_tr')->nullable();
            $table->longtext('content_tr')->nullable();

            $table->string('hood_en')->nullable();
            $table->longtext('content_en')->nullable();

            $table->integer('desk')->default(0);
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');

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
        Schema::dropIfExists('page_details');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {

            $table->id();

            $table->text('title_tr')->nullable();
            $table->text('keywords_tr')->nullable();
            $table->text('description_tr')->nullable();
            $table->text('slider_text_one_tr')->nullable();
            $table->text('slider_text_two_tr')->nullable();
            $table->text('slider_text_three_tr')->nullable();
            $table->text('about_one_tr')->nullable();
            $table->text('about_two_tr')->nullable();
            $table->text('about_content_tr')->nullable();
            $table->text('room_one_tr')->nullable();
            $table->text('room_two_tr')->nullable();
            $table->text('room_content_tr')->nullable();
            $table->text('activity_one_tr')->nullable();
            $table->text('activity_two_tr')->nullable();
            $table->text('activity_content_tr')->nullable();
            $table->text('video_tr')->nullable();
            $table->text('video_content_tr')->nullable();

            $table->text('title_en')->nullable();
            $table->text('keywords_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('slider_text_one_en')->nullable();
            $table->text('slider_text_two_en')->nullable();
            $table->text('slider_text_three_en')->nullable();
            $table->text('about_one_en')->nullable();
            $table->text('about_two_en')->nullable();
            $table->text('about_content_en')->nullable();
            $table->text('room_one_en')->nullable();
            $table->text('room_two_en')->nullable();
            $table->text('room_content_en')->nullable();
            $table->text('activity_one_en')->nullable();
            $table->text('activity_two_en')->nullable();
            $table->text('activity_content_en')->nullable();
            $table->text('video_en')->nullable();
            $table->text('video_content_en')->nullable();

            $table->text('video_url')->nullable();


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
        Schema::dropIfExists('homepages');
    }
}

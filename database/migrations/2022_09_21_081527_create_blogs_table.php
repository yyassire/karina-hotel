<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            $table->string('title_tr')->nullable();
            $table->string('description_tr')->nullable();
            $table->string('blog_name_tr')->nullable();
            $table->string('hood_tr')->nullable();
            $table->text('content_tr')->nullable();
            $table->string('selflink_tr')->nullable();

            $table->string('title_en')->nullable();
            $table->string('description_en')->nullable();
            $table->string('blog_name_en')->nullable();
            $table->string('hood_en')->nullable();
            $table->text('content_en')->nullable();
            $table->string('selflink_en')->nullable();


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
        Schema::dropIfExists('blogs');
    }
}

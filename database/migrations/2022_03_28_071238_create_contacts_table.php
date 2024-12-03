<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {

            $table->id();

            $table->string('title_tr')->nullable();
            $table->string('keywords_tr')->nullable();
            $table->string('description_tr')->nullable();
            $table->string('hood_one_tr')->nullable();
            $table->string('sub_hood_one_tr')->nullable();
            $table->text('content_one_tr')->nullable();

            $table->string('title_en')->nullable();
            $table->string('keywords_en')->nullable();
            $table->string('description_en')->nullable();
            $table->string('hood_one_en')->nullable();
            $table->string('sub_hood_one_en')->nullable();
            $table->text('content_one_en')->nullable();

            $table->string('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
          	$table->string('linkedin')->nullable();
          	$table->string('tripadvisor')->nullable();
            $table->string('youtube')->nullable();
            $table->string('google')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('copyright')->nullable();
            $table->string('logo')->nullable();
            $table->string('sub_logo')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('call_center')->nullable();
            $table->string('email')->nullable();
            $table->text('map_code')->nullable();
            $table->string('image')->nullable();

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
        Schema::dropIfExists('contacts');
    }
}

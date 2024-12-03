<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrmanEvleriIglosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ormanevleri_iglos', function (Blueprint $table) {

            $table->id();

            $table->text('title_tr')->nullable();
            $table->text('keywords_tr')->nullable();
            $table->text('description_tr')->nullable();
            $table->text('iglo_hood_one_tr')->nullable();
            $table->text('iglo_hood_two_tr')->nullable();
            $table->text('iglo_content_tr')->nullable();

            $table->text('title_en')->nullable();
            $table->text('keywords_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('iglo_hood_one_en')->nullable();
            $table->text('iglo_hood_two_en')->nullable();
            $table->text('iglo_content_en')->nullable();

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
        Schema::dropIfExists('ormanevleri_homepages');
    }
}

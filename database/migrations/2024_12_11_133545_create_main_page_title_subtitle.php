<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainPageTitleSubtitle extends Migration
{
public function up()
{
Schema::create('main_page_title_subtitle', function (Blueprint $table) {
$table->id();
$table->string('title');
$table->string('subtitle');
$table->string('title_en');
$table->string('subtitle_en');
$table->string('video_url');
$table->timestamps();
});
}

public function down()
{
Schema::dropIfExists('main_page_title_subtitle');
}
}

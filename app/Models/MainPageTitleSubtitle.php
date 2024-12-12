<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPageTitleSubtitle extends Model
{
    use HasFactory;

    protected $table = 'main_page_title_subtitle';
    protected $fillable = ['title', 'subtitle', 'title_en', 'subtitle_en', 'video_url'];
}

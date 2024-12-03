<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page_detail;
use App\Models\Page_gallery;

class Page extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function page_detail()
    {
        return $this->hasMany(Page_detail::class);
    }

    public function page_gallery()
    {
        return $this->hasMany(Page_gallery::class);
    }

}

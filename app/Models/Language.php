<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function getLanguage($id)
    {
        $name = Language::where('id',$id)->get();

        return $name[0]['id'];
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActuRoom extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'actu_rooms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'room_number',
        'name',
        'name_en',
        'description',
        'description_en',
        'capacity',
        'price_per_night',
        'type',
        'is_available',
        'floor',
        'amenities',
        'images',
        'view',
        'size',
        'is_smoking_allowed',
        'has_accessibility_features',
        'various_rooms_numb',
        'various_bath_numb',
        'stars',
        'preferred_room',
        'featured_image',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_available' => 'boolean',
        'amenities' => 'array',
        'images' => 'array',
        'is_smoking_allowed' => 'boolean',
        'has_accessibility_features' => 'boolean',
        'various_rooms_numb' => 'array',
        'various_bath_numb' => 'array',
    ];
}

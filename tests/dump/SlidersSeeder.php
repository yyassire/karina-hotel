<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'slider_id' => 1, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'home2_slider_image_1.jpg',
                'desk' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'slider_id' => 2, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'product_slider_image_1.jpg',
                'desk' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slider_id' => 3, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'gallery_slider_image_1.jpg',
                'desk' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slider_id' => 4, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'gallery_slider_image_1.jpg',
                'desk' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slider_id' => 5, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'home2_slider_image_1.jpg',
                'desk' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'slider_id' => 6, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'product_slider_image_1.jpg',
                'desk' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slider_id' => 7, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'gallery_slider_image_1.jpg',
                'desk' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slider_id' => 8, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'gallery_slider_image_1.jpg',
                'desk' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slider_id' => 9, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'gallery_slider_image_1.jpg',
                'desk' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slider_id' => 10, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'home2_slider_image_1.jpg',
                'desk' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'slider_id' => 11, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'product_slider_image_1.jpg',
                'desk' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // orman slider
            [
                'slider_id' => 12, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'gallery_slider_image_1.jpg',
                'desk' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slider_id' => 13, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'gallery_slider_image_1.jpg',
                'desk' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slider_id' => 14, // Assume this corresponds to an ID in the slider_categories table
                'image' => 'gallery_slider_image_1.jpg',
                'desk' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider_categories')->insert([
            [
                // ana ssayfa slider
                'name' => 'Home Slider',
                'desk' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product Slider',
                'desk' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gallery Slider',
                'desk' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gallery Slider2',
                'desk' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product Slider',
                'desk' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gallery Slider',
                'desk' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gallery Slider2',
                'desk' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product Slider',
                'desk' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gallery Slider',
                'desk' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gallery Slider2',
                'desk' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product Slider',
                'desk' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // ana orman slider
                'name' => 'Orman Slider',
                'desk' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gallery Slider2',
                'desk' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product Slider',
                'desk' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gallery Slider',
                'desk' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gallery Slider2',
                'desk' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            HomepageSeeder::class,
            SliderFilterSeeder::class,
            SliderCategoriesSeeder::class,

        ]);
        // User::factory(10)->create();
        // Language::create(['name' => 'Tr', 'code' => 'tr', 'is_default' => '1', 'desk' => 0]);
        // Language::create(['name' => 'En', 'code' => 'en', 'is_default' => '0', 'desk' => 0]);
        // Language::create(['name' => 'De', 'code' => 'de', 'is_default' => '0', 'desk' => 0]);
        // Language::create(['name' => 'Ru', 'code' => 'ru', 'is_default' => '0', 'desk' => 0]);
        // Language::create(['name' => 'Nl', 'code' => 'nl', 'is_default' => '0', 'desk' => 0]);
        // Language::create(['name' => 'Ar', 'code' => 'ar', 'is_default' => '0', 'desk' => 0]);
    }
}

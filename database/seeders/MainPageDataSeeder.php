<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainPageDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'title' => 'John Doe',
            'subtitle' => 'johndoe@example.com',
            'subtitle_en' => 'johndoe@example.com',
            'video_url' => 'johndoe@example.com',
        ]);
    }
}

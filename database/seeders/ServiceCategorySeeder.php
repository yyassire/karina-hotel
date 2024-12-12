<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('service_category')->insert([
            [
                // ana ssayfa slider
                'name' => 'RESTAURANT',
                'icon' => '4.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'En Yeni Odalar',
                'sub_name' => 'Lüks',
                'icon' => '5.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // ana ssayfa slider
                'name' => 'RESTAURANT',
                'sub_name' => 'Devamlı Açık',
                'icon' => '6.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'En Yeni Odalar',
                'sub_name' => 'Devamlı Açık',
                'icon' => '7.svg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider_filter')->insert([
            ['name' => 'Otel Lobi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Odalar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Orman Evleri', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spa&Massage', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Havuz', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

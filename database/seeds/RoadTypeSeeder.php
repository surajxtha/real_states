<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoadTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('road_types')->insert([
            ['road_type' => 'Soil Stabilized'],
            ['road_type' => 'Gravelled'],
            ['road_type' => 'Paved'],
            ['road_type' => 'Black Topped'],
            ['road_type' => 'Alley'],

        ]);
    }
}

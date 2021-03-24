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
            ['type' => 'Soil Stabilized'],
            ['type' => 'Gravelled'],
            ['type' => 'Paved'],
            ['type' => 'Black Topped'],
            ['type' => 'Alley'],

        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoadAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('road_accesses')->insert([
             ['length_unit'=>'Feet'],
             ['length_unit'=>'Meter'],

        ]);

    }
}

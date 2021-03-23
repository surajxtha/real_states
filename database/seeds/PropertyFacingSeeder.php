<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PropertyFacingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_facings')->insert([
            ['property_facing'=>'South'],
            ['property_facing'=>'North'],
            ['property_facing'=>'East'],
            ['property_facing'=>'West'],
            ['property_facing'=>'South-East'],
            ['property_facing'=>'South-West'],
            ['property_facing'=>'North-East'],
            ['property_facing'=>'North-West'],

        ]);

    }
}

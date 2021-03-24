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
            ['facing'=>'South'],
            ['facing'=>'North'],
            ['facing'=>'East'],
            ['facing'=>'West'],
            ['facing'=>'South-East'],
            ['facing'=>'South-West'],
            ['facing'=>'North-East'],
            ['facing'=>'North-West'],

        ]);

    }
}

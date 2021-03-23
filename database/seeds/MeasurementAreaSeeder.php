<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasurementAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measurement_areas')->insert([
            ['area_unit' => 'Sq.Feet'],
            ['area_unit' => 'Acres'],
            ['area_unit' => 'Bigha-kattha-dhur-haat'],
            ['area_unit' => 'ropani-aana-paisa-daam'],
        ]);
    }
}

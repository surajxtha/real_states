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
            ['unit' => 'Sq.Feet'],
            ['unit' => 'Acres'],
            ['unit' => 'Bigha-kattha-dhur-haat'],
            ['unit' => 'ropani-aana-paisa-daam'],
        ]);
    }
}

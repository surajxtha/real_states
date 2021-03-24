<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LocationAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location_areas')->insert([
              ['name'=>'Tokha'],
        ]);

    }
}

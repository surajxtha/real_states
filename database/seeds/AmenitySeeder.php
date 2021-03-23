<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amenities')->insert([
           ['amenity'=>'Earthquake resistance'],
           ['amenity'=>'Marbel'],
           ['amenity'=>'Parquet'],
           ['amenity'=>'Gym'],
           ['amenity'=>'Fridge'],
           ['amenity'=>'Sofa'],
           ['amenity'=>'CC Camera'],
           ['amenity'=>'Solar'],
           ['amenity'=>'Dining Table'],
           ['amenity'=>'Microwave'],
           ['amenity'=>'Air Conditionar'],
           ['amenity'=>'Water Purifier'],
           ['amenity'=>'Washing Machine'],
           ['amenity'=>'Bed'],
           ['amenity'=>'Garden'],
           ['amenity'=>'Modular Kitchen'],
           ['amenity'=>'Lift'],
           ['amenity'=>'Parking'],
           ['amenity'=>'Playground'],
           ['amenity'=>'Swimming Pool'],
           ['amenity'=>'Internet'],
           ['amenity'=>'Bathroom'],
           ['amenity'=>'Drainage'],
           ['amenity'=>'Electricity Backup'],
           ['amenity'=>'T.V.'],
           ['amenity'=>'Iron'],
        ]);
    }
}

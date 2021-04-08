<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{

    public function run()
    {
        DB::table('properties')->insert([
            [
                'title' => 'House for sale at Godawari',
                'slug' => Str::slug('House for sale at Godawari'),
                'description' => 'Beautiful house having 36 aana land area with 13 feet road access is on sale in Godawari height',
                'purpose_id' => 1, // Rent or Sale
                'category_id' => 1,
                'type_id' => 1,
                'status' => true,
                'state_id' => 1,
                'district_id' => 1,
                'city' => 'Kathmandu',
                'iframe' => '<ifram></ifram>',
                'total_area' => '128',
                'measurement_area_id' => 1,
                'built_up_area' => '128',
                'road_access_width' => '125',
                'property_facing_id' => 1,
                'road_type_id' => 1,
                'built_year' => '2019',
                'month_id' => 1,
                'location_area' => 'kathmandu',
                'furnishing_id' => 1,
                'kitchen_count' => 2,
                'dining_room_count' => 2,
                'bed_room_count' => 5,
                'bath_room_count' => 3,
                'hall_count' => 5,
                'total_floor_count' => 10,
                'parking' => '2 Car 2 Bikes',
                'ownership_type_id' => 1,
                'image' => 'properties/1.png',
                'price' => '1500000',
                'price_on_id' => 1,
                'user_id' => 2
            ],
            [
                'title' => 'Bungalow for sale at Godawari 2',
                'slug' => Str::slug('Bungalow for sale at Godawari'),
                'description' => 'Beautiful house having 36 aana land area with 13 feet road access is on sale in Godawari height',
                'purpose_id' => 1, // Rent or Sale
                'category_id' => 1,
                'type_id' => 1,
                'status' => true,
                'state_id' => 1,
                'district_id' => 1,
                'city' => 'Kathmandu',
                'iframe' => '<ifram></ifram>',
                'total_area' => '128',
                'measurement_area_id' => 1,
                'built_up_area' => '128',
                'road_access_width' => '125',
                'property_facing_id' => 1,
                'road_type_id' => 1,
                'built_year' => '2019',
                'month_id' => 1,
                'location_area' => 'kathmandu',
                'furnishing_id' => 1,
                'kitchen_count' => 2,
                'dining_room_count' => 2,
                'bed_room_count' => 5,
                'bath_room_count' => 3,
                'hall_count' => 5,
                'total_floor_count' => 10,
                'parking' => '2 Car 2 Bikes',
                'ownership_type_id' => 1,
                'image' => 'properties/2.png',
                'price' => '1500000',
                'price_on_id' => 1,
                'user_id' => 2
            ]
        ]);
    }
}

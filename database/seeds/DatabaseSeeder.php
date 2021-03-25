<?php

use App\City;
use App\MeasurementArea;
use App\Month;
use App\OwnershipType;
use App\PriceOn;
use App\PropertyFacing;
use App\Purpose;
use App\RoadAccess;
use App\RoadType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            AmenitySeeder::class,
            CategorySeeder::class,
            StateSeeder::class,
            DistrictSeeder::class,
            FurnishingSeeder::class,
            MeasurementAreaSeeder::class,
            MonthSeeder::class,
            OwnershipTypeSeeder::class,
            PriceOnSeeder::class,
            PropertyFacingSeeder::class,
            PurposeSeeder::class,
            RoadAccessSeeder::class,
            TypeSeeder::class,
            RoadTypeSeeder::class,
            PropertySeeder::class,

        ]);
    }
}

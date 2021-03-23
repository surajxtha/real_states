<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FurnishingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('furnishings')->insert([
            ['furnishing_type'=>'Full-Furnished'],
            ['furnishing_type'=>'Semi-Furnished'],
            ['furnishing_type'=>'Un-furnished'],

        ]);
    }
}

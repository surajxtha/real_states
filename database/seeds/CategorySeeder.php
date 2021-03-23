<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
             ['category'=>'House'],
             ['category'=>'Land'],
             ['category'=>'Flats'],
             ['category'=>'Office Space'],
             ['category'=>'Shop Space'],
        ]);

    }
}

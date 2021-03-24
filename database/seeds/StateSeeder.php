<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
           ['name'=>'Province 1'],
           ['name'=>'Province 2'],
           ['name'=>'Bagmati Province'],
           ['name'=>'Gandaki Province'],
           ['name'=>'Lumbani Province'],
           ['name'=>'Karnali Province'],
           ['name'=>'Sudhurpashchim Province'],
        ]);
    }
}

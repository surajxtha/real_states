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
           ['state_name'=>'Province 1'],
           ['state_name'=>'Province 2'],
           ['state_name'=>'Bagmati Province'],
           ['state_name'=>'Gandaki Province'],
           ['state_name'=>'Lumbani Province'],
           ['state_name'=>'Karnali Province'],
           ['state_name'=>'Sudhurpashchim Province'],
        ]);
    }
}

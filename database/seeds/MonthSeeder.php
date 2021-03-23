<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('months')->insert([
               ['month'=>'Baishakh'],
               ['month'=>'Jestha'],
               ['month'=>'Asar'],
               ['month'=>'Shrawan'],
               ['month'=>'Bhadau'],
               ['month'=>'Aswin'],
               ['month'=>'Kartik'],
               ['month'=>'Mansir'],
               ['month'=>'Poush'],
               ['month'=>'Magh'],
               ['month'=>'Falgun'],
               ['month'=>'Chaitra'],

        ]);

    }
}

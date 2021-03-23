<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PriceOnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('price_ons')->insert([
             ['price_on'=>'Per Month'],
             ['price_on'=>'Per Year'],
             ['price_on'=>'Per Aana'],
             ['price_on'=>'Per Sq.Feet'],
             ['price_on'=>'Per Ropani'],
             ['price_on'=>'Per Kattha'],
             ['price_on'=>'Per Bigha'],

        ]);

    }
}

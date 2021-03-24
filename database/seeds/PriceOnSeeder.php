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
             ['price'=>'Per Month'],
             ['price'=>'Per Year'],
             ['price'=>'Per Aana'],
             ['price'=>'Per Sq.Feet'],
             ['price'=>'Per Ropani'],
             ['price'=>'Per Kattha'],
             ['price'=>'Per Bigha'],

        ]);

    }
}

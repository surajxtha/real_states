<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OwnershipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ownership_types')->insert([
           ['ownership_type'=>'Institutional'],
           ['ownership_type'=>'Individual'],
        ]);

    }
}

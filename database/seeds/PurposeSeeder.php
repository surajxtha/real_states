<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purposes')->insert([
            ['purpose'=>'Rent'],
            ['purpose'=>'Sale'],

        ]);
    }
}

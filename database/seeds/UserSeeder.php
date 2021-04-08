<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('secret123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Suraj Shrestha',
                'email' => 'suraj@gmail.com',
                'password' => bcrypt('secret123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            [
                'name'=>'Taplejung',
                 'state_id'=> 1,
            ],
            [
                'name'=>'Sankhuwasabha',
                'state_id'=> 1,

            ],
            [
                'name'=>'Solukhumbu',
                'state_id'=> 1,

            ],
            [
                'name'=>'Okhaldhunga',
                'state_id'=> 1,

            ],
            [
                'name'=>'Khotang',
                'state_id'=> 1,

            ],
            [
                'name'=>'Bhojpur',
                'state_id'=> 1,

            ],
            [
                'name'=>'Dhankuta',
                'state_id'=> 1,

            ],
            [
                'name'=>'Terhathum',
                'state_id'=> 1,

            ],
            [
                'name'=>'Panchthar',
                'state_id'=> 1,

            ],
            [
                'name'=>'Ilam',
                'state_id'=> 1,

            ],
            [
                'name'=>'Jhapa',
                'state_id'=> 1,

            ],
            [
                'name'=>'Morang',
                'state_id'=> 1,

            ],
            [
                'name'=>'Sunsari',
                'state_id'=> 1,

            ],
            [
                'name'=>'Udayapur',
                'state_id'=> 1,


            ],
            ['name'=>'Saptari',
              'state_id'=>2,
        ],

            ['name'=>'Siraha',
            'state_id'=>2,

        ],

            ['name'=>'Dhanusa',
            'state_id'=>2,

        ],

            ['name'=>'Mahottari',
            'state_id'=>2,

            ],

            ['name'=>'Sarlahi',
            'state_id'=>2,

        ],

            ['name'=>'Rautahat',
            'state_id'=>2,

        ],

            ['name'=>'Bara',
            'state_id'=>2,

        ],

            ['name'=>'Parsa',
            'state_id'=>2,

        ],

            [
                'name'=>'Dolakha',
                'state_id'=>3,

            ],
            [
                'name'=>'Sindhupalchok',
                'state_id'=>3,

            ],
            [
                'name'=>'Rasuwa',
                'state_id'=>3,

            ],
            [
                'name'=>'Dhading',
                'state_id'=>3,

            ],
            [
                'name'=>'Nuwakot',
                'state_id'=>3,

            ],
            [
                'name'=>'Kathmandu',
                'state_id'=>3,

            ],
            [
                'name'=>'Bhaktapur',
                'state_id'=>3,

            ],
            [
                'name'=>'Lalitpur',
                'state_id'=>3,

            ],
            [
                'name'=>'Kavrepalanchok',
                'state_id'=>3,

            ],
            [
                'name'=>'Ramechhap',
                'state_id'=>3,

            ],
            [
                'name'=>'Sindhuli',
                'state_id'=>3,

            ],
            [
                'name'=>'Makawanpur',
                'state_id'=>3,

            ],
            [
                'name'=>'Chitawan',
                'state_id'=>3,

            ],
            [
                'name'=>'Gorkha',
                'state_id'=>4,

            ],
            [
                'name'=>'Manang',
                'state_id'=>4,

            ],
            [
                'name'=>'Mustang',
                'state_id'=>4,

            ],
            [
                'name'=>'Myagdi',
                'state_id'=>4,

            ],
            [
                'name'=>'Kaski',
                'state_id'=>4,

            ],
            [
                'name'=>'Lamjung',
                'state_id'=>4,

            ],
            [
                'name'=>'Tanahu',
                'state_id'=>4,

            ],
            [
                'name'=>'Nawalparasi East',
                'state_id'=>4,

            ],
            [
                'name'=>'Syangja',
                'state_id'=>4,

            ],
            [
                'name'=>'Parbat',
                'state_id'=>4,

            ],
            [
                'name'=>'Baglung',
                'state_id'=>4,

            ],
            [
                'name'=>'Rukum East',
                'state_id'=>5,

            ],
            [
                'name'=>'Rolpa',
                'state_id'=>5,

            ],
            [
                'name'=>'Pyuthan',
                'state_id'=>5,

            ],
            [
                'name'=>'Gulmi',
                'state_id'=>5,

            ],
            [
                'name'=>'Arghakhanchi',
                'state_id'=>5,

            ],
            [
                'name'=>'Palpa',
                'state_id'=>5,

            ],
            [
                'name'=>'Nawalparasi West',
                'state_id'=>5,

            ],
            [
                'name'=>'Rupandehi',
                'state_id'=>5,

            ],
            [
                'name'=>'Kapilbastu',
                'state_id'=>5,

            ],
            [
                'name'=>'Dang',
                'state_id'=>5,

            ],
            [
                'name'=>'Banke',
                'state_id'=>5,

            ],
            [
                'name'=>'Bardiya',
                'state_id'=>5,

            ],
            [
                'name'=>'Dolpa',
                'state_id'=>6,

            ],
            [
                'name'=>'Mugu',
                'state_id'=>6,

            ],
            [
                'name'=>'Humla',
                'state_id'=>6,

            ],
            [
                'name'=>'Jumla',
                'state_id'=>6,

            ],
            [
                'name'=>'Kalikot',
                'state_id'=>6,

            ],
            [
                'name'=>'Dailekh',
                'state_id'=>6,

            ],
            [
                'name'=>'Jajarkot',
                'state_id'=>6,

            ],
            [
                'name'=>'Rukum West',
                'state_id'=>6,

            ],
            [
                'name'=>'Salyan',
                'state_id'=>6,

            ],
            [
                'name'=>'Surkhet',
                'state_id'=>6,

            ],
            [
                'name'=>'Bajura',
                'state_id'=>7,

            ],
            [
                'name'=>'Bajhang',
                'state_id'=>7,


            ],
            [
                'name'=>'Darchula',
                'state_id'=>7,

            ],
            [
                'name'=>'Baitadi',
                'state_id'=>7,

            ],
            [
                'name'=>'Dadeldhura',
                'state_id'=>7,

            ],
            [
                'name'=>'Doti',
                'state_id'=>7,

            ],
            [
                'name'=>'Achham',
                'state_id'=>7,

            ],
            [
                'name'=>'Kailali',
                'state_id'=>7,

            ],
            [
                'name'=>'Kanchanpur',
                'state_id'=>7,

            ],


        ]);
    }
}

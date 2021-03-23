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
                'district_name'=>'Taplejung',
                 'state_id'=> 1,
            ],
            [
                'district_name'=>'Sankhuwasabha',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Solukhumbu',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Okhaldhunga',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Khotang',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Bhojpur',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Dhankuta',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Terhathum',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Panchthar',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Ilam',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Jhapa',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Morang',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Sunsari',
                'state_id'=> 1,

            ],
            [
                'district_name'=>'Udayapur',
                'state_id'=> 1,


            ],
            ['district_name'=>'Saptari',
              'state_id'=>2,
        ],

            ['district_name'=>'Siraha',
            'state_id'=>2,

        ],

            ['district_name'=>'Dhanusa',
            'state_id'=>2,

        ],

            ['district_name'=>'Mahottari',
            'state_id'=>2,

            ],

            ['district_name'=>'Sarlahi',
            'state_id'=>2,

        ],

            ['district_name'=>'Rautahat',
            'state_id'=>2,

        ],

            ['district_name'=>'Bara',
            'state_id'=>2,

        ],

            ['district_name'=>'Parsa',
            'state_id'=>2,

        ],

            [
                'district_name'=>'Dolakha',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Sindhupalchok',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Rasuwa',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Dhading',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Nuwakot',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Kathmandu',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Bhaktapur',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Lalitpur',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Kavrepalanchok',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Ramechhap',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Sindhuli',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Makawanpur',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Chitawan',
                'state_id'=>3,

            ],
            [
                'district_name'=>'Gorkha',
                'state_id'=>4,

            ],
            [
                'district_name'=>'Manang',
                'state_id'=>4,

            ],
            [
                'district_name'=>'Mustang',
                'state_id'=>4,

            ],
            [
                'district_name'=>'Myagdi',
                'state_id'=>4,

            ],
            [
                'district_name'=>'Kaski',
                'state_id'=>4,

            ],
            [
                'district_name'=>'Lamjung',
                'state_id'=>4,

            ],
            [
                'district_name'=>'Tanahu',
                'state_id'=>4,

            ],
            [
                'district_name'=>'Nawalparasi East',
                'state_id'=>4,

            ],
            [
                'district_name'=>'Syangja',
                'state_id'=>4,

            ],
            [
                'district_name'=>'Parbat',
                'state_id'=>4,

            ],
            [
                'district_name'=>'Baglung',
                'state_id'=>4,

            ],
            [
                'district_name'=>'Rukum East',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Rolpa',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Pyuthan',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Gulmi',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Arghakhanchi',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Palpa',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Nawalparasi West',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Rupandehi',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Kapilbastu',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Dang',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Banke',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Bardiya',
                'state_id'=>5,

            ],
            [
                'district_name'=>'Dolpa',
                'state_id'=>6,

            ],
            [
                'district_name'=>'Mugu',
                'state_id'=>6,

            ],
            [
                'district_name'=>'Humla',
                'state_id'=>6,

            ],
            [
                'district_name'=>'Jumla',
                'state_id'=>6,

            ],
            [
                'district_name'=>'Kalikot',
                'state_id'=>6,

            ],
            [
                'district_name'=>'Dailekh',
                'state_id'=>6,

            ],
            [
                'district_name'=>'Jajarkot',
                'state_id'=>6,

            ],
            [
                'district_name'=>'Rukum West',
                'state_id'=>6,

            ],
            [
                'district_name'=>'Salyan',
                'state_id'=>6,

            ],
            [
                'district_name'=>'Surkhet',
                'state_id'=>6,

            ],
            [
                'district_name'=>'Bajura',
                'state_id'=>7,

            ],
            [
                'district_name'=>'Bajhang',
                'state_id'=>7,


            ],
            [
                'district_name'=>'Darchula',
                'state_id'=>7,

            ],
            [
                'district_name'=>'Baitadi',
                'state_id'=>7,

            ],
            [
                'district_name'=>'Dadeldhura',
                'state_id'=>7,

            ],
            [
                'district_name'=>'Doti',
                'state_id'=>7,

            ],
            [
                'district_name'=>'Achham',
                'state_id'=>7,

            ],
            [
                'district_name'=>'Kailali',
                'state_id'=>7,

            ],
            [
                'district_name'=>'Kanchanpur',
                'state_id'=>7,

            ],


        ]);
    }
}

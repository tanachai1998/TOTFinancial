<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class seederAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new \App\Model\admin();

        $data->insert([

        [
            'name'=> 'มานะ' ,
            'surName'=> 'สมชาย' ,
            'email'=> 'bluefoott@hotmail.com' ,
            'password'=> '1234',
            'sector_id'=> 5

        ],
        [
            'name'=> 'มานะ' ,
            'surName'=> 'สมชาย' ,
            'email'=> 'kk@hotmail.com' ,
            'password'=> Hash::make('123412'),

            'sector_id'=> 2

        ],
        [
            'name'=> 'มานะ' ,
            'surName'=> 'สมชาย' ,
            'email'=> 'ss@hotmail.com' ,
            'password'=> Hash::make('123412'),

            'sector_id'=> 1

        ],
        [
            'name'=> 'test' ,
            'surName'=> 'test' ,
            'email'=> 'hamzaakkk@hotmail.com' ,
            'password'=> Hash::make('123412'),

            'sector_id'=> 1

        ],
        ]);
    }
}

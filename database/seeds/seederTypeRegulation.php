<?php

use Illuminate\Database\Seeder;

class seederTypeRegulation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new \App\Model\regulationType();

        $data->insert([
            [
                'type'=> 'คำสั่ง' ,

            ],
            [

                'type'=> 'ระเบียบ' ,


            ],
            [
                'type'=> 'คู่มือ' ,

            ]


            ]);
    }
}

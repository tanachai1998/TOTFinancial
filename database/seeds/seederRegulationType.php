<?php

use Illuminate\Database\Seeder;

class seederRegulationType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = new \App\Model\Regulation();

        $data->insert([
            [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 1,


            ],
            [
                'category_regulation_id' => 1,
                'year_id' => 1,
                'sector_id' => 1,
                'type' => 'ระเบียบ',



            ],
            [
                'category_regulation_id' => 2,
                'year_id' => 2,

                'type' => 'คำสั่ง',
                'sector_id' => 1,



            ],
            [
                'category_regulation_id' => 1,
                'year_id' => 1,
                'type' => 'คู่มือ',

                'sector_id' => 1,


            ],
            [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 3,


            ],
            [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 4,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 5,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 6,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 7,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 8,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 9,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 10,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 11,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 12,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 13,


            ],
            [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 14,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 15,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 16,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 17,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 18,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง1',

                'year_id' => 19,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง2',

                'year_id' => 20,


            ],
            [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง',

                'year_id' => 21,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง1',

                'year_id' => 22,


            ], [
                'category_regulation_id' => 1,
                'sector_id' => 1,
                'type' => 'คำสั่ง2',

                'year_id' => 23,


            ],
        ]);
    }
}

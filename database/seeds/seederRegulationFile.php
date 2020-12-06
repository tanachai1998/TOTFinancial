<?php

use Illuminate\Database\Seeder;

class seederRegulationFile extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new \App\Model\RegulationFile();

        $data->insert([
        [

            'topic'=> ' สายงานการเงินที่ 1/2549' ,
            'subTopic'=> 'การดำเนินการด้านงบประมาณประจำปี' ,
            // 'file'=> 'mia_everglow.jpg',
            'regulation_id'=>1,
        ],
        [

            'topic'=> ' ระเบียบสำนักนายกรัฐมนตรี 1/2549' ,
            'subTopic'=> 'ว่าด้วยงบลงทุนของรัฐวิสาหกิจ พ.ศ.2550' ,
            // 'file'=> 'mia_2.jpg',
            'regulation_id'=>1,


        ],
        [

            'topic'=> ' สายงานการเงินที่ 1/2549' ,
            'subTopic'=> 'การดำเนินการด้านงบประมาณประจำปี' ,
            'regulation_id'=>1,
        ],
        [

            'topic'=> ' ระเบียบสำนักนายกรัฐมนตรี 1/2549' ,
            'subTopic'=> 'ว่าด้วยงบลงทุนของรัฐวิสาหกิจ พ.ศ.2550' ,
            'regulation_id'=>2,


        ],
        [

            'topic'=> ' สายงานการเงินที่ 1/2549' ,
            'subTopic'=> 'การดำเนินการด้านงบประมาณประจำปี' ,
            'regulation_id'=>3,
        ],
        [

            'topic'=> ' ระเบียบสำนักนายกรัฐมนตรี 1/2549' ,
            'subTopic'=> 'ว่าด้วยงบลงทุนของรัฐวิสาหกิจ พ.ศ.2550' ,
            'regulation_id'=>4,


        ],




        ]);
    }
}

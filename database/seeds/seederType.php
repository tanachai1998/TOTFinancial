<?php

use Illuminate\Database\Seeder;

class seederType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = new \App\Model\Sector();

        $data->insert([
            [
                'fullName'=> 'ฝ่ายการเงิน' ,
                'type'=> 'กง',

            ],
            [
                'fullName'=> 'ส่วนนโยบายและแผนงานงบประมาณ (ผกง.)' ,
                'type'=> 'ผกง',


            ],
            [
                'fullName'=> 'ส่วนวางแผนการเงิน (วกง.)' ,
                'type'=> 'วกง',


            ],
            [
                'fullName'=> 'ส่วนงบประมาณทำการ (ทกง.)' ,
                'type'=> 'ทกง',


            ],
            [
                'fullName'=> 'ส่วนงบประมาณการลงทุน (ลกง.)' ,
                'type'=> 'ลกง',


            ],
            [
                'fullName'=> 'ส่วนสอบทาน ติดตามแผนงานและโครงการ (สกง.)' ,
                'type'=> 'สกง',

            ],
        ]);

    }
}







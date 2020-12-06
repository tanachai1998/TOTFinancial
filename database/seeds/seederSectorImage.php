<?php

use Illuminate\Database\Seeder;

class seederSectorImage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = new App\Model\SectorImage();
        $data->insert([
            [
                'sector_id'=>1,
                'imageFile'=>'รูปส่วน_กง.png'
            ],
            [
                'sector_id'=>2,
                'imageFile'=>'รูปส่วน_ผกง.png'
            ],
            [
                'sector_id'=>3,
                'imageFile'=>'รูปส่วน_วกง.png'
            ],
            [
                'sector_id'=>4,
                'imageFile'=>'รูปส่วน_ทกง.png'
            ],
            [
                'sector_id'=>5,
                'imageFile'=>'รูปส่วน_ลกง.png'
            ],
            [
                'sector_id'=>6,
                'imageFile'=>'รูปส่วน_สกง.png'
            ],
        ]);
    }
}

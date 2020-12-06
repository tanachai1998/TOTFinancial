<?php

use Illuminate\Database\Seeder;

class seederShowStructure extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = new App\Model\ShowStructurePage();
        $data->insert([
            [
                'sector_id'=>1,
                'imageFile'=>'กง.png'
            ],
            [
                'sector_id'=>2,
                'imageFile'=>'ผกง.png'
            ],
            [
                'sector_id'=>3,
                'imageFile'=>'วกง.png'
            ],
            [
                'sector_id'=>4,
                'imageFile'=>'ทกง.png'
            ],
            [
                'sector_id'=>5,
                'imageFile'=>'ลกง.png'
            ],
            [
                'sector_id'=>6,
                'imageFile'=>'สกง.png'
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class seederCategoryRegulation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = new \App\Model\categoryRegulation();

        $data->insert([
        [
            'sector_id'=>1,
            'type'=> 'งบประมานทำการ1' ,


        ],
        [
            'sector_id'=>3,
            'type'=> 'งบประมานทำการ2' ,

        ],
        [
            'sector_id'=>4,
            'type'=> 'งบประมานทำการ5' ,

        ],
        [
            'sector_id'=>1,
            'type'=> 'งบประมานทำการ5' ,

        ],

        ]);
    }
}

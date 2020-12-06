<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seederCategory_regulation_Regulation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category_regulation_regulations')->insert(
            ['category_regulation_id' => 1, 'regulation_id' => 1]
        );
    }
}


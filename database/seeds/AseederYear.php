<?php

use Illuminate\Database\Seeder;

class AseederYear extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new \App\Model\Year();

        $data->insert([
            [
                'year' => 2550,
                'sector_id' => 1

            ],
            [
                'year' => 2551,
                'sector_id' => 1

            ],
            [
                'year' => 2552,
                'sector_id' => 1

            ],
            [
                'year' => 2553,
                'sector_id' => 1

            ],
            [
                'year' => 2554,
                'sector_id' => 1

            ],[
                'year' => 2555,
                'sector_id' => 1

            ],[
                'year' => 2556,
                'sector_id' => 1

            ],
            [
                'year' => 2557,
                'sector_id' => 1

            ],
            [
                'year' => 2558,
                'sector_id' => 1

            ],
            [
                'year' => 2559,
                'sector_id' => 1

            ],[
                'year' => 2560,
                'sector_id' => 1

            ],[
                'year' => 2561,
                'sector_id' => 1,


            ],
            [
                'year' => 2562,
                'sector_id' => 1

            ],[
                'year' => 2563,
                'sector_id' => 1

            ],
            [
                'year' => 2564,
                'sector_id' => 1

            ],
            [
                'year' => 2565,
                'sector_id' => 1

            ],[
                'year' => 2566,
                'sector_id' => 1

            ],
            [
                'year' => 2567,
                'sector_id' => 1

            ],
            [
                'year' => 2568,
                'sector_id' => 1

            ],[
                'year' => 2569,
                'sector_id' => 1

            ],
            [
                'year' => 2570,
                'sector_id' => 1

            ],
            [
                'year' => 2571,
                'sector_id' => 1

            ],[
                'year' => 2572,
                'sector_id' => 1

            ],
        ]);
    }
}

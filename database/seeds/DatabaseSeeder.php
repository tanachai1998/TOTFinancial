<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(seederType::class);

        $this->call(AseederYear::class);


        $this->call(seederCategoryRegulation::class);
        $this->call(seederTypeRegulation::class);



        $this->call(seederAdmin::class);
        $this->call(seederRegulationType::class);
        $this->call(seederRegulationFile::class);
        $this->call(seederFile::class);

        $this->call(seederCategory_regulation_Regulation ::class);
        $this->call(seederNews::class);

        $this->call(seederShowStructure::class);
        $this->call(seederSectorImage::class);



    }
}

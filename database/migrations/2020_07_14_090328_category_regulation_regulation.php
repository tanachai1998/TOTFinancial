<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryRegulationRegulation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('category_regulation_regulations', function (Blueprint $table) {
            $table->unsignedBigInteger('category_regulation_id')->nullable();
            $table->unsignedBigInteger('regulation_id')->nullable();


           $table->foreign('category_regulation_id')
            ->references('id')->on('category_regulations')
            ->onDelete('cascade');

            $table->foreign('regulation_id')
            ->references('id')->on('regulations')
            ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

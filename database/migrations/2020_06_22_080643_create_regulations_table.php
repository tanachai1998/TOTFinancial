<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regulations', function (Blueprint $table) {
            $table->id();
            $table->string('type');

            $table->unsignedBigInteger('category_regulation_id')->nullable();

            $table->unsignedBigInteger('sector_id')->nullable();


            $table->unsignedBigInteger('year_id')->nullable();



            $table->foreign('category_regulation_id')
            ->references('id')->on('category_regulations')
            ->onDelete('cascade');

            $table->foreign('sector_id')
            ->references('id')->on('sectors')
            ->onDelete('cascade');


            $table->foreign('year_id')
            ->references('id')->on('years')
            ->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regulations');
    }
}

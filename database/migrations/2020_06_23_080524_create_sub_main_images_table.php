<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMainImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_main_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sector_id')->nullable();
            $table->string('imageFile');
            $table->timestamps();
            $table->foreign('sector_id')
            ->references('id')->on('sectors')
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
        Schema::dropIfExists('sub_main_images');
    }
}

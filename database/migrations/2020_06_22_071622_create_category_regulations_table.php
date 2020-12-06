<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryRegulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_regulations', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->unsignedBigInteger('sector_id')->nullable();

            $table->foreign('sector_id')
            ->references('id')->on('sectors')
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
        Schema::dropIfExists('category_regulations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_images', function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('propertyID');
            $table->string('propertyName');
            $table->timestamps();
            $table->foreign('propertyID')->references('propertyID')->on('properties')
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
        Schema::dropIfExists('property_images');
    }
}

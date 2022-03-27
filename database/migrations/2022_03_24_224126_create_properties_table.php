<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_title');
            $table->unsignedInteger('cost');
            $table->string('about_info');
            $table->boolean('allow_pets');
            $table->string('image_path');
            $table->unsignedInteger('number_of_sleeps');
            $table->unsignedInteger('number_of_bedrooms');
            $table->unsignedInteger('number_of_bathrooms');
            $table->string('location');
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
        Schema::dropIfExists('properties');
    }
}

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
            $table->increments('propertyID');
            $table->string('propertyName');
            $table->unsignedInteger('cost');
            $table->string('aboutInfo');
            $table->boolean('allowPets');
            $table->string('imagePath');
            $table->unsignedInteger('numberOfSleeps');
            $table->unsignedInteger('numberOfBedrooms');
            $table->unsignedInteger('numberOfBathrooms');
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

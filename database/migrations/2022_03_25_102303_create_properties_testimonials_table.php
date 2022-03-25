<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties_testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('propertyID');
            $table->string('nameOfPerson');
            $table->integer('rating');
            $table->string('testimony');
            $table->string('imagePath');
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
        Schema::dropIfExists('properties_testimonials');
    }
}

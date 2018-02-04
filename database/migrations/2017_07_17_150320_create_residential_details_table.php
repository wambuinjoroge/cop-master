<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentialDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('residential_details'))
            return;
        Schema::create('residential_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('county_residence');
            $table->string('sub_county');
            $table->string('constituency');
            $table->string('ward');
            $table->string('city_name');
            $table->string('street');
            $table->string('household_type');
            $table->string('household_name');
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
        Schema::dropIfExists('residential_details');
           $table->string('property_number');
           $table->string('floor_number');
           $table->string('door_number');
    }
}

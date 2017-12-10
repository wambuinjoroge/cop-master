<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentDetailsTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('employment_details'))
            return;
        Schema::create('employment_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('employment');
            $table->string('county_name');
            $table->string('city_name');
            $table->string('sector')->nullable();
            $table->string('business_category')->nullable();
            $table->string('institution_name')->nullable();
            $table->string('building_name')->nullable();
            $table->string('floor_num')->nullable();
            $table->string('room_num')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('street_name')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email_address')->nullable();
            $table->string('fax_num')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('employment_details');
    }
}

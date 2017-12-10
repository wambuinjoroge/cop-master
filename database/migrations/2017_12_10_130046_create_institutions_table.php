<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('Institutions'))
            return;
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('reg_no');
            $table->string('building_name');
            $table->string('floor_no');
            $table->string('room_no');
            $table->string('street');
            $table->string('address');
            $table->string('tel_no');
            $table->string('county');
            $table->string('town');
            $table->string('branch');
            $table->string('email');
            $table->string('fax');
            $table->string('website');
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
        Schema::dropIfExists('institutions');
    }
}

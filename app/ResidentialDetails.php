<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResidentialDetails extends Model
{
    protected $table = "residential_details";

    protected  $fillable = [ 'user_id', ' county_residence', 'sub_county', 'constituency', 'household_type', 'household_name', 'street', 'property_number', 'floor_number', 'door_number'];
}

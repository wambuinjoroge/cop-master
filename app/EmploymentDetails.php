<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmploymentDetails extends Model
{
    protected $table = "employment_details";

    protected $fillable = [ 
    	'user_id',
    	'employment',
    	'county_name',
    	'city_name', 
    	'sector', 
    	'business_category', 
    	'institution_name', 
    	'building_name', 
    	'floor_num', 
    	'room_num', 
    	'branch_name',
    	'street_name', 
    	'postal_address', 
    	'telephone', 
    	'email_address', 
    	'fax_num', 
    	'website', 
    ];
}
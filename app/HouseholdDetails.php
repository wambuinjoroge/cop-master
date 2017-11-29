<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseholdDetails extends Model
{
	protected $table = "household_details";

	protected $fillable = ['user_id', 'religion', 'cluster'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResidentialDetails extends Model
{
    protected $table = "residential_details";

    protected  $fillable = [ 'user_id', ' county_residence', 'sub_county', 'constituency', 
                             'ward', 'city_name', 'street', 'household_type', 'household_name'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

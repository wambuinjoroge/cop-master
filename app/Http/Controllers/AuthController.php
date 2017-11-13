<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

use App\ResidentialDetails;
use App\EmploymentDetails;

class AuthController extends Controller
{
	public function showDashboard()
	{
		return view('pages.dashboard');
	}

	public function showAddUser()
	{
		return view('pages.adduser');
	}
	public function register(Request $request)
	{
		//dd($request->all());
		$input = Request::all();
		$id = \DB::table('users')->insertGetId([
				'id_no' => $input['id_no'],  
				'name' => $input['first_name'].' '.$input['last_name'], 
				'email' => $input['email'], 
				'password'=> base64_encode($input['password']), 
				'mobile_no' => $input['mobile_number'], 
				'special_needs' => 0, 
				'needs' => $input['needs'] , 
				'needs_description' => $input['needs_description']
			]);
		$residential = new ResidentialDetails();
		$residential->user_id = $id;
		$residential->county_residence = $input['county_residence'];
		$residential->sub_county = $input['sub_county'];
		$residential->constituency = $input['constituency'];
		$residential->household_name = $input['household_name'];
		$residential->household_type = $input['household_type'];
		$residential->property_number = $input['property_number'];
		$residential->building_type = $input['building_type'];
		$residential->floor_number = $input['floor_number'];
		$residential->door_num = $input['door_number'];
		$residential->save();

		$employment = new EmploymentDetails();
		$employment->user_id = $id;
		$employment->employment = $input['employment'];
		$employment->emp_bus_number = $input['emp_bus_number'];
		$employment->sector = $input['sector'];
		$mployment->occupation = $input['occupation'];
		$employment->business_name = $input['business_name'];
		$employment->business_loc = $input['business_loc'];
		$employment->floor_num = $input['floor_num'];
		$employment->room_num = $input['room_num'];
		$employment->street_name = $input['street_name'];
		$employment->emp_address = $input['emp_address'];
		$employment->emp_phone_num = $input['emp_phone_num'];
		$employment->emp_fax_num = $input['emp_fax_num'];
		$employment->emp_website = $input['emp_website'];
		$employment->save();

		return $redirect('member');
		
	}
}

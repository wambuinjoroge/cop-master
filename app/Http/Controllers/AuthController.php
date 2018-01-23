<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Request;
use DB;
use Auth;
use Session;
use App\User;
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
	public function register()
	{
		return view('auth.register');
	}

	public function registeruser(Request $request)
	{
 
$id = DB::table('users')->max('id') + 1;



$user = new User();
        $user->id_no = $request->input('id_no');
        $user->name = $request->input('first_name');
        $user->email = $request->input('email');
        $user->mobile_no = $request->input('mobile_no');
        $user->special_needs = $request->input('special_needs');
        $user->needs = $request->input('needs');
        $user->needs_description = $request->input('needs_description');
        $user->verified = 1;
        $user->password = bcrypt($request->input('password')) ;


$residential = new ResidentialDetails();
		$residential->user_id = $id;
		$residential->county_residence = $request->input('county_residence');
		$residential->sub_county = $request->input('sub_county');
		$residential->constituency = $request->input('constituency');
		$residential->household_name = $request->input('household_name');
		$residential->household_type = $request->input('household_type');
		$residential->property_number = $request->input('property_number');
		$residential->building_type = $request->input('building_type');
		$residential->floor_number = $request->input('floor_number');
		$residential->door_num = $request->input('door_number');
	

$employment = new EmploymentDetails();
		$employment->user_id = $id;
		$employment->employment = $request->input('employment');
		// $employment->emp_bus_number = $request->input('emp_bus_number');
		$employment->sector = $request->input('sector');
		// $employment->occupation = $request->input('occupation');
		$employment->business_name = $request->input('business_name');
		$employment->business_loc = $request->input('business_loc');
		$employment->floor_num = $request->input('floor_num');
		$employment->room_num = $request->input('room_num');
		$employment->street_name = $request->input('street_name');
		$employment->emp_address = $request->input('emp_address');
		$employment->emp_phone_num = $request->input('emp_phone_num');
		$employment->emp_fax_num = $request->input('emp_fax_num');
		$employment->emp_website = $request->input('emp_website');
		$employment->save();
		$residential->save();
		$user->save();




 // $user->save();
session::flash ('msg','Registration successful') ;



	}
	public function registern(Request $request)
	{
		//dd($request->all());
	
		// $input = Request::all();
		// $id = \DB::table('users')->insertGetId([
		// 		'id_no' => $input['id_no'],  
		// 		'name' => $input['first_name'].' '.$input['last_name'], 
		// 		'email' => $input['email'], 
		// 		'password'=> base64_encode($input['password']), 
		// 		'mobile_no' => $input['mobile_number'], 
		// 		'special_needs' => 0, 
		// 		'needs' => $input['needs'] , 
		// 		'needs_description' => $input['needs_description']
		// 	]);
		

		return $redirect('member');
		
	}
}

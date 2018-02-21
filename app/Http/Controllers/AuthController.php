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
        $user->nationality = $request->input('nationality');
        $user->name = $request->input('first_name');
        $user->email = $request->input('email');
        $user->mobile_no = $request->input('mobile_no');
        $user->verified = 1;
        $user->password = bcrypt($request->input('password')) ;


$residential = new ResidentialDetails();
		$residential->user_id = $id;
		$residential->county_residence = $request->input('county_residence');
		$residential->sub_county = $request->input('sub_county');
		$residential->constituency = $request->input('constituency');
		$residential->ward = $request->input('ward');
		$residential->city_name = $request->input('city_name');
		$residential->street = $request->input('street');
		$residential->household_type = $request->input('household_type');
		$residential->household_name = $request->input('household_name');
		$residential->property_number = $input('property_number');
        $residential->floor_number = $input('floor_number');
        $residential->door_number = $input('door_number');
		

$employment = new EmploymentDetails();
		$employment->user_id = $id;
        $employment->employment = $request->input('employment');
        $employment->county_name = $request->input('county_name');
        $employment->city_name = $request->input('city_name');
        $employment->sector = $request->input('sector');
        $employment->kra_pin = $request->input('kra_pin');
        $employment->institution_name = $request->input('institution_name');
        $employment->save();
		$residential->save();
		//$profile->save();
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
		// 	]);
		

		return $redirect('member');
		//return $redirect('login');
		
	}
}

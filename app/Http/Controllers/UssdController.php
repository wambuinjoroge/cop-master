<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UssdController extends Controller
{
    //
     public function index(Request $request)
     {
     	$sessionId   = $request->get("sessionId");
		$serviceCode = $request->get("serviceCode");
		$phoneNumber = $request->get("phoneNumber");
		$input       = $request->get("text");

		if($input == "")
		{
			$response = "CON Respond using options\n";
			$response .= "1 Visit ecp website  www.ecp.co.ke\n";
			$response .= "2 Inquire Information";
			$response .= "3 Customer Care +254 727750 007";
			$response .= "4 Unsubscribe ecp";

		}
		else if($input == "1" || $input=="2")
		{
			$response = "CON Please Select Service\n";
			$response .= "1 Verify Information\n";
			$response .= "2 Check Logs\n";
			$response .= "3 Retrieve Contact";
		}
		else if($input =="1*1" || $input =="1*2" || $input =="1*3" || $input =="2*1" || $input =="2*2" || $input =="2*3")
		{
			$response = "END Thank you {{ Auth::user() ->name  }} for using ecp service.";
		}

     	return response($response, 200)
                  ->header('Content-Type', 'text/plain');
     }
}

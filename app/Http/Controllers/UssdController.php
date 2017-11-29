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
		
			$response = "CON Welcome to ecp\n Select a Service\n";
			$response .= "1:Please visit www.ecp.co.ke\n";
			$response .= "2:Identification\n";
			$response .= "3:Contact Directory\n";
			$response .= "4:Customer Care\n";
			$response .= "5:Subscribe\n";
			$response .= "6:Unsubscribe\n";
			$response .= "7:Quit ";

		}
		else if($input == "1" || $input=="2")
		{
			$response = "CON Choose Option\n";
			$response .= "1:Verify Identification\n";
			$response .= "2:Check Logs\n";
			//$response .= "3:Contact Directory\n";
			$response .= "0:BACK\n";
			$response .= "00:HOME";
		}
		else if($input =="1*1" || $input =="1*2" || $input =="1*3" || $input =="2*1" || $input =="2*2" || $input =="2*3")
		{
			$response = "END Thank you for using ecp.";
		}

     	return response($response, 200)
                  ->header('Content-Type', 'text/plain');
     }
}

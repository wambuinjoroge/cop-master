<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UssdController extends Controller
{
    //
     public index(Request $request)
     {
     	$sessionId   = $request->get("sessionId");
		$serviceCode = $request->get("serviceCode");
		$phoneNumber = $request->get("phoneNumber");
		$input       = $request->get("text");

		if($input == "")
		{
			$response = "CON Select a service\n";
			$response .= "1 Health\n";
			$response .= "2 Finance";
		}
		else if($input == "1" || $input=="2")
		{
			$response = "CON Choose a Location\n";
			$response .= "1 Nairobi\n";
			$response .= "2 Nakuru\n";
			$response .= "3 Kisumu";
		}
		else if($input =="1*1" || $input =="1*2" || $input =="1*3" || $input =="2*1" || $input =="2*2" || $input =="2*3")
		{
			$response = "END we will get back to you";
		}

     	return $response;
     }
}

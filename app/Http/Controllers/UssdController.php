<?php

namespace App\Http\Controllers;

use App\User;
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
            $response = "CON Choose an Option\n";
            $response .= "1:Verify Identification\n";
            $response .= "2:Check Logs\n";
            //$response .= "3:Contact Directory\n";
            $response .= "0:BACK\n";
            $response .= "00:HOME";
        }
        else if($input =="2*1" )
        {
            $response = "CON Enter Identification Number :\n e.g ID or Passport\n";
        }
        else if(preg_match("/^2\*1\*[0-9]{8}$/",$input))
        {
            $matches = "";
            preg_match_all("!([0-9]{8})!",$input,$matches);
            $id_number = $matches[0][0];
            $response="END Your Community Membership Info :\n";
            $response .= $this->verifyIdentity($id_number);
        }
        else
    {
       $response = "END Invalid input\n";   
    }


        return response($response, 200)
            ->header('Content-Type', 'text/plain');
    }

    private function verifyIdentity($id_number)
    {
        $user = User::where('id_no',$id_number)->get()->first();
        if(!is_null($user)){
            // you must first create a variable before appending to it. your mistake was $details .= "Name : ".$user->name."\n";
            $details .= "Identification No : ".$user->id_no."\n";
            $details  = "Full Name : ".$user->name."\n"; 
            $details .= "Mobile No : ".$user->mobile_no."\n";
            //map relations in Models first before calling them. employmet relation is not mapped
            //$details .= "Employment County : ".$user->employment->county_name."\n";
            //$details .= "Employer Name : ".$user->employment->institution_name."\n";
            //$details .= "Branch Name : ".$user->employment->branch_name."\n";
        
            $details .= "Resident County : ".$user->residence->county_residence."\n";
            $details .= "Constituency : ".$user->residence->constituency."\n";
            $details .= "Building Name : ".$user->residence->household_name."\n";

        }
        else
          $details = " Community Member not found\n";

        return $details;
    }
}

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
            $response .= "4:Revenue Collection\n";
            $response .= "5:Customer Care\n";
            $response .= "6:Subscribe\n";
            $response .= "7:Unsubscribe\n";
            $response .= "8:Quit ";

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
        //  $response = "CON Enter Identification Number of enquirer  :\n e.g ID or Passport\n";
            $response = "CON Enter Identification Number :\n";
        }
        else if(preg_match("/^2\*1\*[0-9]{8}$/",$input))
        {
            $matches = "";
            preg_match_all("!([0-9]{8})!",$input,$matches);
            $id_number = $matches[0][0];
            $response="END Community Membership Details :\n";
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
            $details  = "Full Name : ".$user->name."\n"; 
            $details .= "Identification No : ".$user->id_no."\n";
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
            //*******************
            //Contact Directory
            //*******************
        else if($input == "1" || $input=="2")
        {
            $response = "CON Proceed to Any\n";
            $response .= "1:Address\n";
            $response .= "2:Contact Numbers\n";
            $response .= "3:Social Media\n";
            $response .= "4:Location\n";
            $response .= "5:Mobile Money\n";
            $response .= "6:Bank Account\n";
            $response .= "0:BACK\n";
            $response .= "00:HOME";
        }
        else if($input =="3*1" )
        {
        
            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*1\*[0-9]{8}$/",$input))
        {
            $matches = "";
            preg_match_all("!([0-9]{8})!",$input,$matches);
            $id_number = $matches[0][0];
            $response="END Contact Details :\n";
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
            
            $details  = "Institution Name : ".$user->name."\n"; 
            $details .= "Institution Reg No : ".$user->id_no."\n";
            $details .= "Building Name : ".$user->residence->household_name."\n";
            $details .= "Floor No : ".$user->mobile_no."\n";
            $details .= "Room No : ".$user->mobile_no."\n";
            $details .= "Street Name : ".$user->residence->county_residence."\n";
            $details .= "Postal Address : ".$user->residence->constituency."\n";
            $details .= "Tel No : ".$user->mobile_no."\n";
            $details .= "County : ".$user->residence->county_residence."\n";
            $details .= "Town : ".$user->residence->county_residence."\n";
            $details .= "Branch : ".$user->residence->county_residence."\n";
            $details .= "Email : ".$user->residence->constituency."\n";
            $details .= "Fax No : ".$user->residence->county_residence."\n";
            $details .= "Website : ".$user->residence->constituency."\n";

        }
        else
          $details = " Institution not found\n";

        return $details;
    }






}

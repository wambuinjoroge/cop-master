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
            $response = "CON Choose Option\n";
            $response .= "1:Verify Identification\n";
            $response .= "2:Check Logs\n";
            //$response .= "3:Contact Directory\n";
            $response .= "0:BACK\n";
            $response .= "00:HOME";
        }
        else if($input =="1*1" )
        {
            $response = "CON Enter ID Number\n";
        }
        else if(preg_match("/^1\*1\*[0-9]{8}$/",$input))
        {
            $matches = "";
            preg_match_all("!([0-9]{8})!",$input,$matches);
            $id_number = $matches[0][0];
            $response="END USER DETAILS\n";
            $response .= $this->verifyIdentity($id_number);
        }


        return response($response, 200)
            ->header('Content-Type', 'text/plain');
    }

    private function verifyIdentity($id_number)
    {
        $user = User::where('id_no',$id_number)->get()->first();
        $details = "ID No ".$user->id_no."\n";
        $details .= "NAME ".$user->name."\n";
        $details .= "PHONE ".$user->mobile_no."\n";
        $details .= "COUNTY ".$user->residence->county_residence."\n";
        $details .= "CONSTITUENCY ".$user->residence->constituency."\n";
        return $details;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\Ussd\UssdMenus;
use App\Traits\Ussd\UssdActions;

class UssdController extends Controller
{
    use UssdMenus, UssdActions;

    public function index(Request $request)
    {
        $sessionId   = $request->get("sessionId");
        $serviceCode = $request->get("serviceCode");
        $phoneNumber = $request->get("phoneNumber");
        $input       = $request->get("text");

        if($input == "")
        {
            $response = $this->main_menu();
        }
        elseif($input == "1")
        {
            $response = "END Our website adress is\n\n www.ecp.co.ke\n";
        }
        else if($input=="2")
        {
            $response = $this->identification_menu();
        }
        else if($input =="2*1" )
        {
            $response = "CON Enter Identification Number :\n";
        }
        else if(preg_match("/^2\*1\*[0-9]{8}$/",$input))
        {
            $response="END Community Membership Details :\n";
            $response .= $this->verifyIdentity($input);
        }
        else if($input == "3")
        {
            $response = $this->contact_drectory_menu();
        }
        else if($input =="3*1" )
        {

            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*1\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Contact Details :\n";
            $response .= $this->findInstitution($input);
        }
        else
        {
            $response = "END Invalid input\n";
        }


        return response($response, 200)
            ->header('Content-Type', 'text/plain');
    }

}

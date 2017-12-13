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
            $response = "END For More Information Please Visit :\n\n www.ecp.co.ke \n";
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
            $response="END Institution Address  Details :\n";
            $response .= $this->findInstitution($input);
        }
        else if($input=="4")
        {
            $response = $this->revenue_menu();
        }
        else if($input =="4*1" )
        {
            $response = "CON Enter County Code :\n";
        }
        else if(preg_match("/^4\*1\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Receipt Details :\n";
            $response .= $this->revenue_menu($input);
        }
        elseif($input == "5")
        {
            $response = "END Customer Care Contact :\n\n +254 (0) 727-750-007 \n\n contact@ecp.co.ke\n";
        }
        else
        {
            $response = "END Invalid input\n";
        }


        return response($response, 200)
            ->header('Content-Type', 'text/plain');
    }

}

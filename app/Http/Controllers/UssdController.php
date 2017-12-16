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
        else if($input =="2*2" )
        {
            $response = "CON Enter Your Email Address :\n";
        }
        else if(preg_match("/^2\*2\*[a-zA-Z' ]+$/",$input))
        {
            //$Response->Message ='Thank you. You will receive confirmation message shortly '. $ussdRequest->ClientState . ' shortly.';
            $response="END Your Request for Identification Logs Statement has been received.Please wait for SMS confirmation\n";
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
            $response="END  Address  Details :\n";
            $response .= $this->findInstitution($input);
        }
        else if($input =="3*2" )
        {

            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*2\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Contact Numbers Details :\n";
            $response .= $this->findInstitution($input);
        }
        else if($input =="3*3" )
        {

            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*3\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Social Media Details :\n";
            $response .= $this->findInstitution($input);
        }
        else if($input =="3*4" )
        {

            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*4\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Location Details :\n";
            $response .= $this->findInstitution($input);
        }
        else if($input =="3*5" )
        {

            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*5\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Mobile Money Details :\n";
            $response .= $this->findInstitution($input);
        }
        else if($input =="3*6" )
        {

            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*6\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Bank Account Details :\n";
            $response .= $this->findInstitution($input);
        }
        else if($input=="4")
        {
            $response = $this->revenue_menu();
        }
        else if($input =="4*1" )
        {
                $response = "CON Enter County Code :\n";
                //$response = "CON Enter Sub-County Name :\n";
                //$response = "CON Enter Payment Method :\ne.g Cash\n";
                //$response = "CON Enter Category :\ne.g Bus Park Fee \n";
                //$response = "CON Enter Service :\ne.g Matatu,Saloon Car\n";
                //$response = "CON Enter Reg No :\n";
                //$response = "CON Enter Amount Paid in Ksh.:\n";
                //$response = "CON Enter Staff ID :\n";
            //$Response->Message ='Thank you for visiting Kisumu County '. $ussdRequest->ClientState . ' shortly.';    
            //$this->response->Message = 'Thank you for visiting Kisumu County.Karibu Tena !!!';. $ussdRequest->ClientState . ' shortly.';
            //return $this;
        }
        else if(preg_match("/^4\*1\*[0-9]{8}$/",$input))
        {
            $response="END Receipt Details :\n";
            $response .= $this->revenue_menu($input);
        }
        else if($input =="4*2" )
        {
            $response = "CON Enter Your Email Address :\n";
        }
        else if(preg_match("/^4\*2\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Your Request for Revenue Statement has been received.Please wait for SMS confirmation\n";
            
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

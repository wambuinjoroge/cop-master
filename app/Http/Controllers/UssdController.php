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
        //WEBSITE URL
        elseif($input == "1")
        {
            $response = "END For More Information Please Visit :\n\n\n www.ecp.co.ke \n";
        }
        //IDENTIFICATION
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
        //CONTACT DIRECTORY
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
        //INCOME
        else if($input=="4")
        {
            $response = $this->income_menu();
        }
        else if($input =="4*1" )
        {
            $response = $this->revenue_menu();
        }
        else if($input=="4*1*1")
        {
            $response = $this->category_menu();
        }
        else if($input =="4*1*1*1" )
        {
            $response = $this->service_menu();       
        }
        else if($input =="4*1*1*1*1" )
        {
            $response = $this->payment_menu();       
        }
        //input reg no of vehicle by the county attendant officer
        else if($input =="" )
        {
            $response = "CON Enter Reg No :\n";     
        }
        //input mobile no of client/customer by the county attendant officer
        else if($input =="" )
        {
            $response = "CON Enter Mobile Number :\n";     
        }
        //input staff id of the county attendant officer
        else if($input =="" )
        {
            $response = "CON Enter Staff ID :\n";     
        }
        //input county code by the county attendant officer then it should display sub county
        else if($input =="" )
        {
            $response = "CON Enter County Code :\n";    
        }
        //input Amount Paid by the client/customer
        else if($input =="" )
        {
            $response = "CON Enter Amount Paid in Ksh.:\n";  
        }
        //Cofirmation message sent to the phone number provided
        //else if(preg_match("/^4\*2\*[a-zA-Z' ]+$/",$input))
       // {
            //$Response->Message ='Thank you for visiting Kisumu County '. $ussdRequest->ClientState . ' shortly.';    
            //$this->response->Message = 'Thank you for visiting Kisumu County.Karibu Tena !!!';. $ussdRequest->ClientState . ' shortly.';
            
        //}
         //REVENUE STATEMENT
        else if($input =="4*1" )
        {
            $response = $this->revenue_menu();
        }
        else if($input =="4*1*2" )
        {
            $response = "CON Enter Your Email Address :\n";
        }
        else if(preg_match("/^4\*2\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Your Request for Revenue Statement has been received.Please wait for SMS confirmation\n";
            
        }
        //TAX
        else if($input =="" )
        {
             $response = $this->region_menu();
        }
        else if($input =="4*2" )
        {
             $response = $this->income_menu();
        }
        else if($input =="4*2*1" )
        {
             $response = $this->tax_menu();
        }
        
        //CUSTOMER CARE
        elseif($input == "5")
        {
            $response = "END Customer Care Contact :\n\n +254 (0) 727-750-007 \n\n contact@ecp.co.ke\n";
        }
        //SUBSCRIPTION
        else if($input=="6")
        {
            $response = $this->subscription_menu();
        }
        else if($input =="6*1" )
        {
            $response = $this->terms_menu();
        }
        else if(preg_match("/^6\*1\*[0-9]{8}$/",$input))
        {
            $response="END Community Membership Details :\n";
            $response .= $this->verifyIdentity($input);
        }
        else
        {
            $response = "END Invalid input\n";
        }


        return response($response, 200)
            ->header('Content-Type', 'text/plain');
    }

}

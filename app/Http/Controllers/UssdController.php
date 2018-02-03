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
<<<<<<< HEAD
            $response = "END For More Information Please Visit :\n\n\n www.ecp.co.ke \n";
=======
            $response = "END For More Information Please Visit :\n\n www.ecp.co.ke \n";
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
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
            $response="END Your Profile Information :\n";
<<<<<<< HEAD
=======
            //$response = "END  Hello " . $userAvail['username']  . ". Profile Information.\n";
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
            $response .= $this->verifyIdentity($input);
        }
        else if($input =="2*2" )
        {
            $response = "CON Enter Your Email Address :\n";
        }
        else if(preg_match("/^2\*2\*[a-zA-Z' ]+$/",$input))
        {
            //$Response->Message ='Thank you. You will receive confirmation message shortly '. $ussdRequest->ClientState . ' shortly.';
<<<<<<< HEAD
            $response="END Your Request for Identification Logs Statement has been received.Please wait for SMS confirmation\n";
=======
            $response="END Your Request for Identification Statement has been received.Please wait for SMS confirmation\n";
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
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
<<<<<<< HEAD
            $response="END  Address  Details :\n";
=======
            $response="END  Institution Address  Details :\n";
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
            $response .= $this->findInstitution($input);
        }
        else if($input =="3*2" )
        {

            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*2\*[a-zA-Z' ]+$/",$input))
        {
<<<<<<< HEAD
            $response="END Contact Numbers Details :\n";
=======
            $response="END Institution Contact Numbers Details :\n";
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
            $response .= $this->findInstitution($input);
        }
        else if($input =="3*3" )
        {

            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*3\*[a-zA-Z' ]+$/",$input))
        {
<<<<<<< HEAD
            $response="END Social Media Details :\n";
=======
            $response="END Institution Social Media Details :\n";
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
            $response .= $this->findInstitution($input);
        }
        else if($input =="3*4" )
        {

            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*4\*[a-zA-Z' ]+$/",$input))
        {
<<<<<<< HEAD
            $response="END Location Details :\n";
=======
            $response="END Institution Location Details :\n";
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
            $response .= $this->findInstitution($input);
        }
        else if($input =="3*5" )
        {

            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*5\*[a-zA-Z' ]+$/",$input))
        {
<<<<<<< HEAD
            $response="END Mobile Money Details :\n";
=======
            $response="END Institution Mobile Money Details :\n";
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
            $response .= $this->findInstitution($input);
        }
        else if($input =="3*6" )
        {

            $response = "CON Enter Institution Name :\n";
        }
        else if(preg_match("/^3\*6\*[a-zA-Z' ]+$/",$input))
        {
<<<<<<< HEAD
            $response="END Bank Account Details :\n";
=======
            $response="END Institution Bank Account Details :\n";
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
            $response .= $this->findInstitution($input);
        }
        //Private Security Firm
        else if($input =="4" )
        {
             $response = $this->crimejustice_menu();
        }
        else if($input =="4*1" )
        {
             $response = $this->security_menu();
        }
<<<<<<< HEAD
        else if($input =="4*1*3" )
        {
            $response = "CON Enter Private Firm Name :\n";
        }
        else if(preg_match("/^4\*1\*3\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Visitor Pass Details :\n";
            $response .= $this->findPrivateFirm($input);
=======
        else if($input =="4*1*1" )
        {
            $response = "CON Enter Security Firm Name :\n";
        }
        else if(preg_match("/^4\*1\*1\*[a-zA-Z' ]+$/",$input))
        {
            $response=   "CON Visitor Identification Number :\n";  
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
            
        }
        //INCOME
        else if($input=="5")
        {
            $response = $this->income_menu();
        }
        else if($input =="5*1" )
        {
            $response = $this->revenue_menu();
        }
        else if($input=="5*1*1")
        {
            $response = $this->service_menu();
        }
        else if($input =="5*1*1*1" )
        {
            $response = $this->category_menu();       
        }
        else if($input =="5*1*1*1*1" )
        {
            $response = $this->payment_menu();       
        }
<<<<<<< HEAD
=======
        else if($input =="5*1*1*1*1" )
        {
            $response = "CON Enter Amount to Pay :\n";      
        }
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
        //input county code by the county attendant officer then it should display sub county
         //function getCountyCodeInput()
        // {
          //   return "Enter County Code " . PHP_EOL;
        // }
        //input mobile no of client/customer by the county attendant officer
         //function getPhoneNumberInput()
         //{
         //    return "Enter Mobile Number" . PHP_EOL;
         //}
        //input reg no of vehicle by the county attendant officer
         //function getVehicleRegNumberInput()
         //{
          //   return "Enter Vehicle Reg No" . PHP_EOL;
        // }
        //input staff id of the county attendant officer
        // function getStaffIDInput()
        // {
         //    return "Enter Staff ID" . PHP_EOL;
         //}
        //input Amount Paid by the client/customer
         //function getAmountInput()
         //{
          //   return "Enter Amount to Pay" . PHP_EOL;
        // }
        // function getConfirmationDialog()
         //{

         //}
        //Cofirmation message sent to the phone number provided
        //else if(preg_match("/^4\*2\*[a-zA-Z' ]+$/",$input))
       // {
            //$Response->Message ='Thank you for visiting Kisumu County '. $ussdRequest->ClientState . ' shortly.';    
            //$this->response->Message = 'Thank you for visiting Kisumu County.Karibu Tena !!!';. $ussdRequest->ClientState . ' shortly.';
            
        //}
         //REVENUE STATEMENT
        else if($input =="5*1" )
        {
            $response = $this->revenue_menu();
        }
        else if($input =="5*1*2" )
        {
            $response = "CON Enter Your Email Address :\n";
        }
        else if(preg_match("/^5\*1\*2\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Your Request for Revenue Statement has been received.Please wait for SMS confirmation\n";
            
        }
        //COUNTY RENTAL MARKET STALLS
        else if($input=="5")
        {
            $response = $this->income_menu();
        }
        else if($input =="5*1" )
        {
            $response = $this->revenue_menu();
        }
        else if($input=="5*1*1")
        {
            $response = $this->service_menu();
        }
        else if($input =="5*1*1*6" )
        {
            $response = $this->bill_menu();       
        }
        else if($input =="5*1*1*6*1" )
        {
            $response = "CON Enter Stall Number :\n";      
        }
        else if($input =="5*1*1*1*1" )
        {
            $response = $this->payment_menu();       
        }
        //COUNTY HOUSES
        else if($input=="5")
        {
            $response = $this->income_menu();
        }
        else if($input =="5*1" )
        {
            $response = $this->revenue_menu();
        }
        else if($input=="5*1*1")
        {
            $response = $this->service_menu();
        }
        else if($input =="5*1*1*6" )
        {
            $response = $this->bill_menu();       
        }
        else if($input =="5*1*1*6*2" )
        {
            $response = "CON Enter Constituency Name :\n";      
        }
        else if($input =="5*1*1*1*1" )
        {
            $response = $this->payment_menu();       
        }
        //BILL
        else if($input=="5")
        {
            $response = $this->income_menu();
        }
        else if($input =="5*1" )
        {
            $response = $this->revenue_menu();
        }
        else if($input=="5*1*1")
        {
            $response = $this->service_menu();
        }
        else if($input =="5*1*1*7" )
        {
            $response = $this->bill_menu();       
        }
        else if($input =="5*1*1*7*1" )
        {
            $response = "CON Enter Your Meter Number :\n";      
        }
        else if($input =="5*1*1*1*1" )
        {
            $response = $this->payment_menu();       
        }
        //input Amount Paid by the client/customer
         //function getAmountInput()
        // {
          //   return "Enter Amount to Pay" . PHP_EOL;
        // }
         //function getConfirmationDialog()
         //{

        // }
        //TAX
        else if($input =="5" )
        {
             $response = $this->income_menu();
        }
        else if($input =="5*2" )
        {
             $response = $this->region_menu();
        }
        else if($input =="5*2*1" )
        {
             $response = $this->tax_menu();
        } 
        else if($input =="5*2*1*1" )
        {
<<<<<<< HEAD
            $response = "CON Enter Institution Registration No. :\n";
=======
            $response = "CON Enter Business Reg. No. :\n";
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
        }
        else if(preg_match("/^5\*2\*1\*1\*[0-9]{8}$/",$input))
        {
            $response="END Tax Compliant Details :\n";
            $response .= $this->taxcompliant($input);
        }
        //TAX STATEMENT
        else if($input =="5*2*2" )
        {
            $response = $this->tax_menu();
        }
        else if($input =="5*2*2*2" )
        {
            $response = "CON Enter Your Email Address :\n";
        }
        else if(preg_match("/^5\*2\*2\*2\*[a-zA-Z' ]+$/",$input))
        {
            $response="END Your Request for Tax Compliant Statement has been received.Please wait for SMS confirmation\n";
            
        }
<<<<<<< HEAD
        //SUBSCRIPTION
        else if($input=="6")
        {
            $response = $this->subscription_menu();
        }
        else if($input =="6*1" )
        {
            $response = $this->terms_menu();
        }
        else if($input =="6*1*1" )
        {
            $response = "CON Enter Your Subscription\n";
        }
        else if(preg_match("/^6\*1\*1\*[0-9]{8}$/",$input))
=======
        //CUSTOMER CARE
        elseif($input == "6")
        {
            $response = "END Customer Care Contact :\n\n +254 (0) 727-750-007 \n\n contact@ecp.co.ke\n";
        }
        //SUBSCRIPTION
        else if($input=="7")
        {
            $response = $this->subscription_menu();
        }
        else if($input =="7*1" )
        {
            $response = $this->terms_menu();
        }
        else if($input =="7*1*1" )
        {
            $response = "CON Enter Your Subscription\n";
        }
        else if(preg_match("/^7\*1\*1\*[0-9]{8}$/",$input))
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
        {
            $response="END Your Subscription Request  has been received.Thank you\n";
            
        }
<<<<<<< HEAD
        //CUSTOMER CARE
        elseif($input == "8")
        {
            $response = "END Customer Care Contact :\n\n +254 (0) 727-750-007 \n\n contact@ecp.co.ke\n";
        }
=======
        //Thank you for using this service
        //The user also receives an SMS. This is the end of this route.
        //Or selects cancel and everything is cancelled. 
>>>>>>> 16c39ad4c157f6bb403ceffaa6c4b2103bfbb007
        else
        {
            $response = "END Invalid input\n";
        }


        return response($response, 200)
            ->header('Content-Type', 'text/plain');
    }

}

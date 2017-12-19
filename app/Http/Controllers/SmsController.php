<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    
    require_once('simba.blade.php');
    $username   = "mancini85";
    $apikey     = "fa3b9115ca65fb6a3874795aea07167362b8822a0915787eeeae1c26d38080bc";
    $recipients = "+254790463533";
    $message    = "Dear {{ Auth::user()->name  }} ,Your profile has been viewed by .Thank you ";
    $gateway    = new AfricasTalkingGateway($username, $apikey);
 
    try 
{ 
  
  $results = $gateway->sendMessage($recipients, $message);
            
  foreach($results as $result) {
    // status is either "Success" or "error message"
    echo " Number: " .$result->number;
    echo " Status: " .$result->status;
    echo " MessageId: " .$result->messageId;
    echo " Cost: "   .$result->cost."\n";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while sending: ".$e->getMessage();
}
                
}

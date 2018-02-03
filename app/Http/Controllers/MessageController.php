<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\SMS\AfricasTalkingGateway;

class MessageController extends Controller
{
    //
    public function message(Request $request)
    {
         $subject = $request->input('subject');
         $message = $request->input('message');
         $mobile = $request->input('mobile');
         $encodeMessage = urlencode($message);
    }
}

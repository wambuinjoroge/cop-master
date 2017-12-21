<?php
/**
 * Created by PhpStorm.
 * User: ashken
 * Date: 12/10/2017
 * Time: 2:56 PM
 */

namespace App\Traits\Ussd;

use App\User;
use App\Institution;
use App\Utils\SMS\AfricasTalkingGateway;

trait UssdActions
{
    private function verifyIdentity($input)
    {
        preg_match_all("!([0-9]{8})!",$input,$matches);
        $id_number = $matches[0][0];
        $user = User::where('id_no',$id_number)->get()->first();
        if(!is_null($user)){
            $details  = "Full Name : ".$user->name."\n";
            $details .= "Identification No : ".$user->id_no."\n";
            $details .= "Mobile No : ".$user->mobile_no."\n";
            $details .= "Resident County : ".$user->residence->county_residence."\n";
            $details .= "Constituency : ".$user->residence->constituency."\n";
            $details .= "Building Name : ".$user->residence->household_name."\n";
        }
        else
            $details = " Community Member not found\n";

        return $details;
    }

    private function findInstitution($input)
    {
        preg_match_all("!([a-zA-Z' ]+)!",$input,$matches);
        $name = $matches[0][0];
        $institution = Institution::where('name','LIKE',"%".$name."%")->get()->first();
        if(!is_null($institution)){

            $details  = "Institution Name : ".$institution->name."\n";
            $details .= "Institution Reg No : ".$institution->reg_no."\n";
            $details .= "Building Name : ".$institution->building_name."\n";
            $details .= "Floor No : ".$institution->floor_no."\n";
            $details .= "Room No : ".$institution->room_no."\n";
            $details .= "Street Name : ".$institution->street."\n";
            $details .= "Postal Address : ".$institution->address."\n";
            $details .= "Tel No : ".$institution->tel_no."\n";
            $details .= "County : ".$institution->county."\n";
            $details .= "Town : ".$institution->town."\n";
            $details .= "Branch : ".$institution->branch."\n";
            $details .= "Email : ".$institution->email."\n";
            $details .= "Fax No : ".$institution->fax."\n";
            $details .= "Website : ".$institution->website."\n";
        }
        else
            $details = "Institution Record Unavailable\n";

        $this->sendSMS("+254707563017","Somebody searched for a user");

        return $details;
    }

    public function SendSMS($recipients, $message)
    {
        $username = "sandbox";
        $apikey = "1cb5670283c89bf3c187f8738369e16f393cac20dd0fdb664e6aeaf1c39f79a7";

        $gateway    = new AfricasTalkingGateway($username, $apikey,"sandbox");
        $results = $gateway->sendMessage($recipients, $message);

        //dump($results);
    }


}

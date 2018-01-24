<?php
/**
 * Created by PhpStorm.
 * User: ashken
 * Date: 12/10/2017
 * Time: 2:54 PM
 */

namespace App\Traits\Ussd;


trait UssdMenus
{

    private function main_menu()
    {
        $response = "CON Welcome to ecp Service :\n";
        //$response = "CON Welcome " . $userAvail['username']  . ". Select Service.\n";
        $response .= "1:Visit our website\n";
        $response .= "2:eID\n";
        $response .= "3:Contact Directory\n";
        $response .= "4:Crime and Justice\n";
        $response .= "5:Income\n";
        $response .= "6:Contact Centre\n";
        $response .= "7:Subscribe\n";
        $response .= "8:Unsubscribe\n";
        $response .= "9:Quit";
        return $response;
    }

    private function identification_menu()
    {
        $response = "CON Choose an Option\n";
        $response .= "1:Identification\n";
        $response .= "2:Statement\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU\n";
        return $response;
    }

    private function contact_drectory_menu()
    {
        $response = "CON Proceed to Any\n";
        $response .= "1:Address\n";
        $response .= "2:Contact Numbers\n";
        $response .= "3:Social Media\n";
        $response .= "4:Location\n";
        $response .= "5:Mobile Money\n";
        $response .= "6:Bank Account\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function income_menu()
    {
        $response = "CON Reply With Any\n";
        $response .= "1:Revenue\n";
        $response .= "2:Tax\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function revenue_menu()
    {
        $response = "CON Select Revenue option\n";
        $response .= "1:Collection\n";
        $response .= "2:Statement\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function service_menu()
    {
        $response = "CON Choose Option\n";
        $response .= "1:Parking\n";
        $response .= "2:Market Fee\n";
        $response .= "3:Land Rates\n";
        $response .= "4:Business Licenses\n";
        $response .= "5:CESS\n";
        $response .= "6:County Houses\n";
        $response .= "7:Bill\n";
        $response .= "8:Fine & Penalties\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function house_menu()
    {
        $response = "CON Select House Type\n";
        $response .= "1:Market Stalls \n";
        $response .= "2:Rental House\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }
    private function bill_menu()
    {
        $response = "CON Select Bill Type\n";
        $response .= "1:Water \n";
        $response .= "2:Garbage\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function category_menu()
    {
        $response = "CON Proceed with Any\n";
        $response .= "1:Personal Car\n";
        $response .= "2:P.S.V\n";
        $response .= "3:Cargo Vehicle\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function payment_menu()
    {
        $response = "CON Choose Payment Method\n";
        $response .= "1:Cash\n";
        $response .= "2:M-Pesa\n";
        $response .= "3:Debit/Credit/Prepaid Card\n";
        $response .= "4:Airtel Money\n";
        $response .= "5:Equitel\n";
        $response .= "6:Telkom Money\n";
        $response .= "7:Eazzy Pay\n";
        $response .= "8:Local Bank Transfer\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function tax_menu()
    {
        $response = "CON Select Option\n";
        $response .= "1:Tax Compliant\n";
        $response .= "2:Statement\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function region_menu()
    {
        $response = "CON Choose Region\n";
        $response .= "1:Western\n";
        $response .= "2:Nairobi\n";
        $response .= "3:Southern\n";
        $response .= "4:Northern\n";
        $response .= "5:Central\n";
        $response .= "6:Rift Valey\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function subscription_menu()
    {
        $response = "CON Reply With\n";
        $response .= "1:Daily @ Ksh.10\n";
        $response .= "2:Weekly @ Ksh.50\n";
        $response .= "3:Monthly @ Ksh.500\n";
        $response .= "4:Yearly @ Ksh.1000\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function terms_menu()
    {
        $response = "CON Choose Option\n";
        $response .= "1:Accept\n";
        $response .= "2:Decline\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function crimejustice_menu()
    {
        $response = "CON Crime & Justice Option\n";
        $response .= "1:Security\n";
        $response .= "2:Probation\n";
        $response .= "3:Court\n"; 
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

    private function security_menu()
    {
        $response = "CON Security Options :\n";
        $response .= "1:Private Firm\n";
        $response .= "2:Police Station\n";
        $response .= "0:BACK\n";
        $response .= "00:MENU";
        return $response;
    }

}
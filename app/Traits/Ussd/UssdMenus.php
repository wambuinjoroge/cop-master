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
        $response = "CON Welcome to ecp\n Select a Service\n";
        $response .= "1:Visit our website\n";
        $response .= "2:Identification\n";
        $response .= "3:Contact Directory\n";
        $response .= "4:Revenue\n";
        $response .= "5:Customer Care\n";
        $response .= "6:Subscribe\n";
        $response .= "7:Unsubscribe\n";
        $response .= "8:Quit ";
        return $response;
    }

    private function identification_menu()
    {
        $response = "CON Choose an Option\n";
        $response .= "1:Verify Identification\n";
        $response .= "2:Check Logs\n";
        $response .= "0:BACK\n";
        $response .= "00:HOME";
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
        $response .= "00:HOME";
        return $response;
    }

    private function revenue_menu()
    {
        $response = "CON Proceed\n";
        $response .= "1:Revenue Collection\n";
        $response .= "2:Revenue Statement\n";
        $response .= "0:BACK\n";
        $response .= "00:HOME";
        return $response;
    }

}
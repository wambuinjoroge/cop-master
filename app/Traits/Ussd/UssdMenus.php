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
        $response = "CON Welcome to ecp Service.\n";
        $response .= "1:Visit our website\n";
        $response .= "2:Identification\n";
        $response .= "3:Contact Directory\n";
        $response .= "4:Income\n";
        $response .= "5:Customer Care\n";
        $response .= "6:Subscribe\n";
        $response .= "7:Unsubscribe\n";
        $response .= "8:Quit";
        return $response;
    }

    private function identification_menu()
    {
        $response = "CON Choose an Option\n";
        $response .= "1:Verify Identification\n";
        $response .= "2:Identification Statement\n";
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

    private function income_menu()
    {
        $response = "CON Reply With Any\n";
        $response .= "1:Revenue\n";
        $response .= "2:Tax\n";
        $response .= "0:BACK\n";
        $response .= "00:HOME";
        return $response;
    }

    private function revenue_menu()
    {
        $response = "CON Select Revenue option\n";
        $response .= "1:Collection\n";
        $response .= "2:Statement\n";
        $response .= "0:BACK\n";
        $response .= "00:HOME";
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
        $response .= "0:BACK\n";
        $response .= "00:HOME";
        return $response;
    }

    private function category_menu()
    {
        $response = "CON Proceed with Any\n";
        $response .= "1:Saloon Car\n";
        $response .= "2:Matatu\n";
        $response .= "3:Bus\n";
        $response .= "4:Lorry\n";
        $response .= "5:Pick Up\n";
        $response .= "0:BACK\n";
        $response .= "00:HOME";
        return $response;
    }

    private function payment_menu()
    {
        $response = "CON Choose Payment Method\n";
        $response .= "1:Cash\n";
        $response .= "2:M-Pesa\n";
        $response .= "3:Debit/Credit Card\n";
        $response .= "4:Airtel Money\n";
        $response .= "5:Equitel\n";
        $response .= "6:Telkom Money\n";
        $response .= "7:Eazzy Pay\n";
        $response .= "0:BACK\n";
        $response .= "00:HOME";
        return $response;
    }

    private function tax_menu()
    {
        $response = "CON Select Option\n";
        $response .= "1:Tax Compliant\n";
        $response .= "2:Tax Statement\n";
        $response .= "0:BACK\n";
        $response .= "00:HOME";
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
        $response .= "00:HOME";
        return $response;
    }

    private function subscription_menu()
    {
        $response = "CON Reply With\n";
        $response .= "1:Daily @ Ksh.10\n";
        $response .= "2:Weekly @ Ksh.50\n";
        $response .= "3:Monthly @ Ksh.150\n";
        $response .= "4:Yearly @ Ksh.500\n";
        $response .= "0:BACK\n";
        $response .= "00:HOME";
        return $response;
    }

    private function terms_menu()
    {
        $response = "CON Choose Option\n";
        $response .= "1:Accept\n";
        $response .= "2:Decline\n";
        $response .= "0:BACK\n";
        $response .= "00:HOME";
        return $response;
    }


}
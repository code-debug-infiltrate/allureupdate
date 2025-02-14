<?php 
/*
|--------------------- Controller Configuration ------------------------
| Here is where you can configure all logics for your application.
*/
namespace App\Controllers;

require 'vendor/autoload.php';

use Config\Curl;
use Config\Controller;
use Config\Validate;
use Config\ModelFactory;
use App\Models\Admin;

/**
 * Users Controller
 */
class Paystack extends Controller
{


//Function to make payment using Paystack API
    public function card_payment($params)
    {   
        $paystackInfo = $this->Paystack_details();

        $url = ''.$paystackInfo['result_message']['url'].'/transaction/initialize';
        $data = array(
            'amount' => $params['amount'] * 100,
            'email' => trim($params['email']),
            'transaction_charge' => $params['transaction_charge'],
        );

        $body = json_encode($data);
        $ch = $this->post_curl($url, $body);

        return $ch;
    }






//Function to Create A Reserved Account using Paystack API
    public function reserve_account($params)
    {
        $paystackInfo = $this->Paystack_details();

        $url = ''.$paystackInfo['result_message']['url'].'/dedicated_account';

        $data = array(
            'email' => trim($params['email']),
            'preferred_bank' => "Titan Paystack",
            'customer' => $params['uniqueid'],
            'first_name' => $params['fname'],
            'last_name' => $params['lname'],
            //'phone' => $params['phone'],
        );

        $body = json_encode($data);
        $ch = $this->post_curl($url, $body);

        return $ch;
    }






//Function to Get Wallet Balance using Paystack API
    public function account_balance()
    {
        $paystackInfo = $this->Paystack_details();

        $url = ''.$paystackInfo['result_message']['url'].'/api/v2/disbursements/wallet-balance?accountNumber='.$paystackInfo['wallet'].'';
        $result = $this->get_curl($url);
        $ch1 = json_decode($result, true);
        $ch = $ch1['responseBody']['ledgerBalance'];
        return $ch;
    }








//Function to Confirm Bank Details using Paystack API
    public function confirm_account($account, $code)
    {
        $paystackInfo = $this->Paystack_details();

        $url = ''.$paystackInfo['result_message']['url'].'/api/v1/disbursements/account/validate?accountNumber='.$account.'&bankCode='.$code.'';
        $ch = $this->get_curl($url);
        return $ch;
    }





//Function to Get Bank Details using Paystack API
    public function get_banks()
    {
        $paystackInfo = $this->Paystack_details();

        $url = ''.$paystackInfo['result_message']['url'].'/bank?currency=NGN';
        $ch = $this->get_curl($url);
        return $ch;
    }






//Function to Get CURL 
    protected function get_curl($value)
    {
        $paystackInfo = $this->Paystack_details();
        //$accessToken = $this->Paystack_token();

        $ch = curl_init($value);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization: Bearer '.$paystackInfo['result_message']['private']));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }




//Function to POST CURL 
    protected function post_curl($value, $param)
    {
        $paystackInfo = $this->Paystack_details();
        //$accessToken = $this->Paystack_token();

        $ch = curl_init($value);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization: Bearer '.$paystackInfo['result_message']['private']));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
























//Function to get Paystack token
    // private function Paystack_token()
    // {
    //     $paystackInfo = $this->Paystack_details();

    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //       CURLOPT_URL => ''.$this->url.'/api/v1/auth/login',
    //       CURLOPT_RETURNTRANSFER => true,
    //       CURLOPT_ENCODING => '',
    //       CURLOPT_MAXREDIRS => 10,
    //       CURLOPT_TIMEOUT => 0,
    //       CURLOPT_FOLLOWLOCATION => true,
    //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //       CURLOPT_CUSTOMREQUEST => 'POST',
    //       CURLOPT_HTTPHEADER => array(
    //         'Content-Type:application/json', 'Authorization: Bearer '.$paystackInfo['result_message']['private']).''),
    //     );

    //     $response = curl_exec($curl);
    //     $token = json_decode($response, true);
    //     $real = $token['responseBody']['accessToken'];
        
    //     curl_close($curl);

    //     return $real;
    // }





//Function to get Paystack API DETAILS
    private function Paystack_details()
    {
        $name = array('name' => "Paystack");
        $paystackInfo = ModelFactory::model('Admin')->card_payment_info($name);
        
        return $paystackInfo;
    }









/**
 * End File
 */
}
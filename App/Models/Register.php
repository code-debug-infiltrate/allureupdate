<?php

namespace App\Models;

use Config\Mail;
use Config\Model;
use Config\ModelFactory;
use App\Models\apiInfo;


class Register extends Model
{

    


    //Function to Create A New Account using Oriented API
    public function new_user($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/create-user';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        $data = json_decode($ch, true);

        if ($data['result_info']['code'] == "200")
        {
            $user = $data['user_info'];
            $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
            $coy_info = json_decode($coy, true);
           //Send Email Alert To User
           Mail::mailer('RegistrationAlert')->newmember_alert($user, $coy_info); 
        }
        
        return $ch;
    }



    //Function to Confirm A New User using Oriented API
    public function confirm_user($params)
    {
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/confirm-email';
 
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        $data = json_decode($ch, true);

        if ($data['result_info']['code'] == "200")
        {
            $user = $apiInfo->get_curl($token_info['url'].'/user-info?email='.$params['email'].'&uniqueid='.$params['uniqueid']);
            $user_details = json_decode($user, true);

            $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
            $coy_info = json_decode($coy, true);
            //Send Email Alert To User
            Mail::mailer('RegistrationAlert')->verification_alert($user_details['user_info'], $coy_info); 
        }
         
        return $ch;
    }
     
 

    //Function to Confirm Subscriber using Oriented API
    public function confirm_subscriber($params)
    {
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/confirm-subscriber';
 
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);
         
        return $ch;
    }


    //Function to Create A New Account using Oriented API
    public function confirm_consultation($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        
        
        //$user = $data['user_info'];
        $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
        $coy_info = json_decode($coy, true);
        //Send Email Alert To User
        Mail::mailer('RegistrationAlert')->consultation_alert($params, $coy_info); 
        $data = array(
            'result_info' => array('code' => "200", 'type' => "success", 'message' => "Booking Created, Select Payment Method To Continue.", ),
            'buddy_info' => $params,
        );
        $ch = json_encode($data, JSON_FORCE_OBJECT);
        
        return $ch;
    }

    //Function to Create A New Account using Oriented API
    public function pay_consultation($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        
        
        //$user = $data['user_info'];
        $coy = $apiInfo->get_curl($token_info['url'].'/get-bank-info');
        $coy_info = json_decode($coy, true);
        
        return $coy;
    }
     



    //Function to Confirm A New User using Oriented API
    public function contact_us($params)
    {
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/contact-us';
 
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        //$data = json_decode($ch, true);
         
        return $ch;
    }
     
 
  


    //Function to Confirm A New User using Oriented API
    public function coy_info()
    {
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $ch = $apiInfo->get_curl($token_info['url'].'/coy-info');
 
        //$body = http_build_query($params);
       // $ch = $apiInfo->get_curl($url);

        $data = json_decode($ch, true);
         
        return $data;
    }
     
 


    //Function to Record All Visitor Visits using Oriented API
    public function visitor_info($params)
    {
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/visitor-info';
 
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        //$data = json_decode($ch, true);
         
        return $ch;
    }
     
 
  


  
     
     
         
     
     
     
 
 







































/**
 * End File
 */

}

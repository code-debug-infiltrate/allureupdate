<?php

namespace App\Models;

use Config\Model;
use Config\Mail;
use Config\ModelFactory;
use App\Models\apiInfo;


class Login extends Model
{




    //Function For Forgot Password using Oriented API
    public function forgot_password($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/forgot-password';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        $data = json_decode($ch, true);

        if ($data['result_info']['code'] == "200")
        {
            $user = $apiInfo->get_curl($token_info['url'].'/get-user-passcode?email='.$params['email']);
            $user_details = json_decode($user, true);

            $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
            $coy_info = json_decode($coy, true);
            //Send Email Alert To User
            Mail::mailer('LoginAlert')->passcode_alert($user_details['user_info'], $coy_info);  
        }
        
        return $ch;
    }






    //Function to Reset Password using Oriented API
    public function reset_password($params)
    {
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/reset-password';
 
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        $data = json_decode($ch, true);

        if ($data['result_info']['code'] == "200")
        {
            $user = $apiInfo->get_curl($token_info['url'].'/get-user-passcode?email='.$params['email']);
            $user_details = json_decode($user, true);

            $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
            $coy_info = json_decode($coy, true);
           //Send Email Alert To User
           Mail::mailer('LoginAlert')->passreset_alert($user_details['user_info'], $coy_info); 
        }
         
        return $ch;
    }
  
    



    


    //Function to Confirm User Login using Oriented API
    public function confirm_login($params)
    {
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/confirm-login';
 
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        $data = json_decode($ch, true);

        if ($data['result_info']['code'] == "202")
        {
            $user = $apiInfo->get_curl($token_info['url'].'/get-user-passcode?email='.$params['email']);
            $user_details = json_decode($user, true);

            $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
            $coy_info = json_decode($coy, true);
           //Send Email Alert To User
           Mail::mailer('LoginAlert')->unlockcode_alert($user_details['user_info'], $coy_info); 
        }
         
        return $ch;
    }
     
     
     
     
     
   


    


    //Function to Confirm User Login using Oriented API
    public function end_session($params)
    {
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/end-session';
 
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);
        
        $data = json_decode($ch, true);
         
        return $data;
    }
     
     
     
     
     
     
     
     
 
 







































/**
 * End File
 */

}

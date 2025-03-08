<?php

namespace App\Models;

use Config\Model;
use Config\Mail;
use Config\ModelFactory;
use App\Models\apiInfo;


class User extends Model
{


    //Function For User Credentials using Oriented API
    public function user_info($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-info';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For Create Interest using Oriented API
    public function new_interest($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-interest';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }

    
    //Function For Create Location using Oriented API
    public function new_location($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-location';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }

    


    //Function For User Interests using Oriented API
    public function user_interests($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-interests';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For Sending User a Poke using Oriented API
    public function send_poke_user($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/send-buddy-poke';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }



    //Function For User Myself using Oriented API
    public function user_myself($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-myself';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For User Preferences using Oriented API
    public function user_preference($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-preference';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }





    //Function For Create Language using Oriented API
    public function new_language($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-language';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }



    //Function For User Language using Oriented API
    public function user_language($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-language';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For User Album using Oriented API
    public function user_album($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-album';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For User Activities using Oriented API
    public function user_activity($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-activity';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function to Fetch All User New Notifications using Oriented API
    public function new_user_activity($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-user-activity';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function to Upload Profile Photo using Oriented API
    public function update_notification_status($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-notification-status';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }




    //Function to Upload Profile Photo using Oriented API
    public function update_activity_status($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-activity-status';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }



    //Function to Fetch All User New Messages using Oriented API
    public function new_message_details($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-message-details';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function to Fetch All User New Chats using Oriented API
    public function new_chat_details($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-chat-details';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For Work & Eduaction using Oriented API
    public function user_workeducation($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-workeducation';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }
     



    //Function For Creating Work & Eduaction using Oriented API
    public function new_workneducation($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-workneducation';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }
     



    //Function For Update Password using Oriented API
    public function update_password($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-password';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }





     //Function to Make Bank Transfer|Deposit using Oriented API
     public function make_deposit($params)
     {
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();

        if ($params['type'] == "Bank Deposit") {
            $ch = $apiInfo->get_curl($token_info['url'].'/get-bank-info?');
            $bank = json_decode($ch, true);
            $newParams = array('uniqueid' => $params['uniqueid'], 'username' => $params['username'], 'email' => $params['email'], 'type' => "Deposit", 'currency' => $params['currency'], 'amount' => $params['amount'], 'charges' => "0", 'total' => $params['amount'], 'cur_bal' => $params['cur_bal'], 'bank' => $bank['result_message']['bankname'], 'accname' => $bank['result_message']['acctname'], 'accnum' => $bank['result_message']['acctnum'], 'details' => $params['uniqueid']."-".$params['details'], 'payment_url' => $params['url'], );
        } else {
            //Transaction Fee;
            $charges = (1.5/100 * $params['amount']) + 100;
            $total = $params['amount'] + $charges;
            $newParams = array('uniqueid' => $params['uniqueid'], 'username' => $params['username'], 'email' => $params['email'], 'type' => "Deposit", 'currency' => $params['currency'], 'amount' => $params['amount'], 'charges' => $charges, 'total' => $total, 'cur_bal' => $params['cur_bal'], 'bank' => "Online Card Payment", 'accname' => "Allure-D Third Party", 'accnum' => "0001101010",'details' => $params['uniqueid']."-".$params['details'], 'payment_url' => $params['url'], );
        }
 
         $url = ''.$token_info['url'].'/make-deposit';
  
         $body = http_build_query($newParams);
         $ch = $apiInfo->post_curl($url, $body);
 
         $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
         $coy_info = json_decode($coy, true);
         
         //Send Email Alert To Admin
         Mail::mailer('AdminAlert')->deposit_alert($newParams, $coy_info);
         Mail::mailer('RegistrationAlert')->transaction_alert($newParams, $coy_info); 
         
         return $ch;
     }


       

    //Function For Update Username using Oriented API
    public function update_username($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-username';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }

     

    //Function For Update Bio Information using Oriented API
    public function update_bio($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-bio';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }
        
  
    //Function For Update Myself Information using Oriented API
    public function update_myself($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-myself';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }
  


    //Function For Update User Dating Preference Information using Oriented API
    public function update_preference($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-preference';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }
        
      
         
    //Function For User To Find Matches using Oriented API
    public function user_find_people($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-find-people';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }
   

    //Function For User To Find Random Buddys using Oriented API
    public function user_random_people($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-random-people';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }


    //Function For User To Create Post using Oriented API
    public function user_create_post($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-create-post';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
        return $data;
    }




    //Function For User To Create Post using Oriented API
    public function get_latest_posts()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-latest-posts';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }


    //Function For User To Create Post using Oriented API
    public function get_post($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-post';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }
    
    

    //Function For User To Create Post using Oriented API
    public function new_message_count($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-message-count';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For User To Create Post using Oriented API
    public function new_chat_count($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-chat-count';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For Getting All Post Interactions Post using Oriented API
    public function get_post_actions()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-post-interactions';
        
        //$body = http_build_query($params);
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        //var_dump($data);
        
        return $data;
    }



    //Function For User To Create Post using Oriented API
    public function get_latest_posts_files()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-latest-posts-files';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }


    //Function For User To View Post using Oriented API
    public function user_post_view($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-post-interaction';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        //var_dump($data);
        
        return $ch;
    }




    //Function For User Action On Post using Oriented API
    public function user_post_action($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-post-action';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        if ($params['action'] == "like") {

            $buddy = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['postedby']);
            $buddy_details = json_decode($buddy, true);

            $sender = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['uniqueid']);
            $sender_details = json_decode($sender, true);

            if ($buddy_details['user_info']['login_status'] == "Logged_out") { 

                $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
                $coy_info = json_decode($coy, true);
                //Send Email Alert To User
                Mail::mailer('UserAlert')->postaction_alert($buddy_details['user_info'], $sender_details['user_info'], $coy_info);  
            }
        }
        
        return $ch;
    }



    //Function For User Report On Post using Oriented API
    public function user_post_report($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-post-reports';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        //var_dump($data);
        
        return $ch;
    }
  


    //Function For User Post Comment using Oriented API
    public function user_post_comment($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-post-comment';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        if ($data['result_info']['type'] == "success") {

            $buddy = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['receiver']);
            $buddy_details = json_decode($buddy, true);

            $sender = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['sender']);
            $sender_details = json_decode($sender, true);

            if ($buddy_details['user_info']['login_status'] == "Logged_out") { 

                $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
                $coy_info = json_decode($coy, true);
                //Send Email Alert To User
                Mail::mailer('UserAlert')->postaction_alert($buddy_details['user_info'], $sender_details['user_info'], $coy_info);  
            }
        }
        
        return $ch;
    }
   



    //Function For User Post Comment using Oriented API
    public function my_post_action($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/my-post-action';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        //var_dump($data);
        
        return $data;
    }
   
          



    //Function For User Delete Post using Oriented API
    public function user_post_delete($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-post-status';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        //var_dump($data);
        
        return $ch;
    }
   
    

    //Function to Fetch All User Profile Details using Oriented API
    public function user_profiles()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();

        $ch = $apiInfo->get_curl($token_info['url'].'/user-profiles');
        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function to Fetch All Users Online Status using Oriented API
     public function users_online_status()
     {   
         $apiInfo = new apiInfo();
         $token_info = $apiInfo->token_details();
 
         $ch = $apiInfo->get_curl($token_info['url'].'/users-online-status');
         if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
         
         return $data;
     }
   
    

    //Function to Fetch All Online User using Oriented API
    public function online_now_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();

        $ch = $apiInfo->get_curl($token_info['url'].'/online-now-count');
        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    
    //Function For Get All User Inbox Messages Post using Oriented API
    public function all_message_details($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/all-user-messages';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    
    //Function For User Post Comment using Oriented API
    public function user_chat_reply($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-chat-reply';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        //var_dump($data);
        
        return $data;
    }
   




    //Function For Get All User Inbox Messages Post using Oriented API
    public function all_comment_chats($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/all-comment-chats';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }





    //Function For User To Create Post using Oriented API
    public function user_messages($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-chat-reply';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For User To Get all Chat Connects Post using Oriented API
    public function user_chat_connect($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-chat-connect';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For User To Get all Chat Connects Post using Oriented API
    public function user_chat_messages($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-chat-messages';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }

    

    //Function For User To Create Post using Oriented API
    public function user_subscription_plan($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-subscription-plan';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }

    //Function to Count All User Notifications using Oriented API
    public function count_user_activity($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/count-user-activity';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function to Count All User Views using Oriented API
    public function count_user_views($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/count-user-views';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function to Count All User Views using Oriented API
    public function count_user_likes($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/count-user-likes';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }

     


    //Function to Fetch All Buddy Activity using Oriented API
    public function buddy_activities($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/buddy-activity';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }

 
    
    //Function For User Myself using Oriented API
    public function user_views($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-views';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        if ($data['myself_info']['views'] < "500")
        {
            $buddy = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['uniqueid']);
            $buddy_details = json_decode($buddy, true);

            $viewer = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['viewerid']);
            $viewer_details = json_decode($viewer, true);
            
            if ($buddy_details['user_info']['login_status'] == "Logged_out") { 
                
                $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
                $coy_info = json_decode($coy, true);
                //Send Email Alert To User
                Mail::mailer('UserAlert')->profileview_alert($buddy_details['user_info'], $viewer_details['user_info'], $coy_info);  
        
            }
        }
        return $data;
    }

  
    

    //Function to Count All User Views using Oriented API
    public function user_add_buddy($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-add-buddy';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        if ($params['request'] == "Pending") {

            $buddy = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['buddyid']);
            $buddy_details = json_decode($buddy, true);

            $sender = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['uniqueid']);
            $sender_details = json_decode($sender, true);

            if ($buddy_details['user_info']['login_status'] == "Logged_out") { 

                $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
                $coy_info = json_decode($coy, true);
                //Send Email Alert To User
                Mail::mailer('UserAlert')->buddyrequest_alert($buddy_details['user_info'], $sender_details['user_info'], $coy_info);  
            }
        }
        
        return $ch;
    }




    //Function to Accept User Views using Oriented API
    public function user_accept_buddy($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-accept-buddy';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    } 



    //Function to Upload Profile Photo using Oriented API
    public function upload_profile_photo($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/upload-profile-photo';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }
    
    


    //Function to Upload COver Photo using Oriented API
    public function upload_cover_photo($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/upload-cover-photo';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }

     
    

    //Function to Count All User Views using Oriented API
    public function user_buddy_action($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-actions';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        if ($params['action'] == "like")
        {
            $buddy = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['buddyid']);
            $buddy_details = json_decode($buddy, true);

            $viewer = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['uniqueid']);
            $viewer_details = json_decode($viewer, true);

            if ($buddy_details['user_info']['login_status'] == "Logged_out") { 

                $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
                $coy_info = json_decode($coy, true);
                //Send Email Alert To User
                Mail::mailer('UserAlert')->userlike_alert($buddy_details['user_info'], $viewer_details['user_info'], $coy_info);  
            }
        }
        
        return $ch;
    }




    //Function to List All User Buddies using Oriented API
    public function user_buddies_list($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-buddies-list';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }


    //Function to Count All User Buddies using Oriented API
    public function user_buddies_count($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-buddies-count';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }

     
     
     
   //Function For User To Create Payment using Oriented API
   public function user_make_payment($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/user-make-payment';

       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

       if ($data['result_info']['type'] == "success") {

        $buddy = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['uniqueid']);
        $buddy_details = json_decode($buddy, true);

        $transaction = $apiInfo->get_curl($token_info['url'].'/user-transactions-info?uniqueid='.$params['uniqueid']);
        $transaction_det = json_decode($transaction, true);

        foreach ($transaction_det['result_message'] as $key => $tranc) {
           if ($tranc['status'] == "Processing") {
                $transaction_details = $tranc;
           }
        }

        $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
        $coy_info = json_decode($coy, true);
        //Send Email Alert To Administrator
        Mail::mailer('AdminAlert')->transaction_alert($buddy_details['user_info'], $transaction_details, $coy_info); 
        //Send Email Alert To User Making The Payment
        Mail::mailer('UserAlert')->transaction_alert($buddy_details['user_info'], $transaction_details, $coy_info);  

    }
       
       return $ch;
   }  



    //Function For User To Create Payment using Oriented API
    public function user_card_payment($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-make-payment';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        if ($data['result_info']['type'] == "success") {

            $buddy = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['uniqueid']);
            $buddy_details = json_decode($buddy, true);
    
            $transaction = $apiInfo->get_curl($token_info['url'].'/user-transactions-info?uniqueid='.$params['uniqueid']);
            $transaction_det = json_decode($transaction, true);
    
            foreach ($transaction_det['result_message'] as $key => $tranc) {
               if ($tranc['status'] == "Processing") {
                    $t = $tranc;
                    $transaction_details = array('id' => $t['id'], 'trancid' => $t['trancid'], 'uniqueid' => $t['uniqueid'], 'currency' => $t['currency'], 'amount' => $t['amount'], 'type' => $t['type'], 'expiry' => $t['expiry'], 'details' => $t['details'], 'status' => $t['status'], 'created' => $t['created'], 'payment_url' => $params['payment_url'], );
               }
            }
    
            $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
            $coy_info = json_decode($coy, true);
            //Send Email Alert To Administrator
            Mail::mailer('AdminAlert')->transaction_alert($buddy_details['user_info'], $transaction_details, $coy_info);  
            //Send Email Alert To User Making The Payment
            Mail::mailer('UserAlert')->transaction_alert($buddy_details['user_info'], $transaction_details, $coy_info);  

        }
        
        return $ch;
    }  


   //Function For User To Create Payment using Oriented API
   public function user_recur_payment($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/user-transaction-status';

       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

       if ($data != "false") {

           $buddy = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['uniqueid']);
           $buddy_details = json_decode($buddy, true);
   
           $transaction = $apiInfo->get_curl($token_info['url'].'/user-transactions-info?uniqueid='.$params['uniqueid']);
           $transaction_det = json_decode($transaction, true);
   
           foreach ($transaction_det['result_message'] as $key => $tranc) {
              if ($tranc['status'] == "Processing") {
                   $transaction_details = $tranc;
              }
           }
   
           $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
           $coy_info = json_decode($coy, true);
           //Send Email Alert To Administrator
           Mail::mailer('AdminAlert')->transaction_alert($buddy_details['user_info'], $transaction_details, $coy_info);  
           //Send Email Alert To User Making The Payment
           Mail::mailer('UserAlert')->transaction_alert($buddy_details['user_info'], $transaction_details, $coy_info);  

       }
       
       return $data;
   }  



   
    //Function For User To Create Payment using Oriented API
   public function user_transactions_info($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/user-transactions-info';

       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $data;
   }  
 
   
   
     
   //Function For User To Create Payment using Oriented API
   public function card_payment_info()
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/card-payment-info';

       $ch = $apiInfo->get_curl($url);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $data;
   }  
 


    //Function For User To Create Payment using Oriented API
    public function get_exchange_info($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-exchange-rate';
 
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);
 
        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }  
  
   

    //Function For Update Username using Oriented API
    public function deactivate_account($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/deactivate-account';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }

     
        
    //Function For User To Create Post using Oriented API
    public function get_latest_blog_posts()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-latest-blog-posts';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For User To Create Post using Oriented API
    public function get_random_blog_posts($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-random-blog-posts';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For User To Create Post using Oriented API
    public function get_blog_posts_actions()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-blog-posts-actions';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For User To Fetch Post Details Post using Oriented API
    public function blog_post_details($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-blog-post-details';
        
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }

  
     

 
    
    //Function For User Myself using Oriented API
    public function blog_post_views($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/blog-post-views';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        return $data;
    }

  
 
    
    //Function For User Myself using Oriented API
    public function blog_post_action($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/blog-post-action';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        return $ch;
    }




    
 
    
    //Function For User Myself using Oriented API
    public function search_info($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/search-blog-post';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        return $ch;
    }

  
    

  
    

    

  
     
     
      
     
     



































/**
 * End File
 */

}

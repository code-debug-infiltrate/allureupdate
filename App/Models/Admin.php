<?php

namespace App\Models;

use Config\Model;
use Config\Mail;
use Config\ModelFactory;
use App\Models\apiInfo;


class Admin extends Model
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


    
    //Function For Update Bio Information using Oriented API
    public function update_bio($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-personal-info';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }
        
  


   //Function For User To Create Company Information using Oriented API
   public function create_coy_info($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/create-coy-info';

       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $ch;
   }  
 


   //Function For User To Create Company Information using Oriented API
   public function create_bank_info($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/create-bank-info';

       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $ch;
   }  
 
   


    //Function For User To Create Post using Oriented API
    public function get_bank_info()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-bank-info';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



   //Function For User To Create Company Information using Oriented API
   public function create_currency_info($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/create-currency-info';

       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $ch;
   }  
 
   


   //Function For User To Create Post using Oriented API
   public function get_currency_info()
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/get-currency-info';
       
       $ch = $apiInfo->get_curl($url);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $data;
   }



   //Function For User To Create Company Information using Oriented API
   public function create_exchange_info($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/create-exchange-info';

       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $ch;
   }  
 
   


   //Function For User To Create Post using Oriented API
   public function get_exchange_info()
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/get-exchange-info';
       
       $ch = $apiInfo->get_curl($url);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $data;
   }

   
   


    //Function For Auto Update Transaction Status using Oriented API
    public function auto_update_transaction_status()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/auto-update-transaction-status';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For Auto Update Transaction Status using Oriented API
    public function user_myself()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-myself-info';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For Auto Update Transaction Status using Oriented API
    public function user_preference()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-preferences-info';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




   //Function For User To Create Company Information using Oriented API
   public function create_subscription_info($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/create-subscription-info';

       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $ch;
   }  
 
   


   //Function For User To Create Post using Oriented API
   public function get_subscription_info()
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/get-subscription-info';
       
       $ch = $apiInfo->get_curl($url);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $data;
   }





   //Function For User To Create Subscription Plans using Oriented API
   public function create_subscription_plan($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/create-subscription-plan';

       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $ch;
   }  
 
   


   //Function For User Subscription Plans using Oriented API
   public function get_subscription_plan()
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/get-subscription-plan';
       
       $ch = $apiInfo->get_curl($url);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $data;
   }



   //Function For Creating API Endpoints using Oriented API
   public function create_api_connect($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/create-api-connect';

       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $ch;
   }  



   //Function For Fecthing All Third Party API Info using Oriented API
   public function get_api_info()
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/get-api-connect';
       
       $ch = $apiInfo->get_curl($url);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $data;
   }



   //Function For Fetching All Transaction History using Oriented API
   public function get_transactions_info($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/get-transactions-info';
       
       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $data;
   }


    //Function For Update Transaction Status using Oriented API
    public function update_transaction_status($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-transaction-status';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }  

    
    //Function For Update Message Status using Oriented API
    public function update_message_status($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-message-status';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }



    //Function For Update Message Status using Oriented API
    public function send_transaction_reminder($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-transactions-info';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        if ($data['result_message']) {

            foreach ($data['result_message'] as $key => $transaction) {
                if ($transaction['trancid'] == $params['trancid']) {

                    $buddy = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['uniqueid']);
                    $sender_details = json_decode($buddy, true);

                    $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
                    $coy_info = json_decode($coy, true);
                    //Send Email Alert To User
                    Mail::mailer('UserAlert')->sub_reminder_alert($transaction, $sender_details['user_info'], $coy_info);
                    
                    $data = array(
                        'result_info' => 
                            array(
                                'code' => "200",
                                'type' => "success",
                                'message' => "Successful, Email Sent!",
                            ),
                        );
                }
            }
        }
        
        return json_encode($data, JSON_FORCE_OBJECT);
    }





    //Function For Update Message Status using Oriented API
    public function send_user_reminder($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/coy-info';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        if ($data) {
            //Send Email Alert To User
            Mail::mailer('UserAlert')->user_reminder_alert($params, $data);
            $data = array(
                'result_info' => 
                    array(
                        'code' => "200",
                        'type' => "success",
                        'message' => "Successful, Email Sent!",
                    ),
                );
        }

        return json_encode($data, JSON_FORCE_OBJECT);;
    }



    //Function For Update Message Status using Oriented API
    public function send_user_alert($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-info';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        // $buddy = $apiInfo->get_curl($token_info['url'].'/user-info?uniqueid='.$params['uniqueid']);
        // $sender_details = json_decode($buddy, true);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }

        if ($data) {

            $coy = $apiInfo->get_curl($token_info['url'].'/coy-info');
            $coy_info = json_decode($coy, true);

            //Send Email Alert To User
            if ($params['status'] == "Activate") {
                Mail::mailer('UserAlert')->activate_reminder_alert($data['user_info'], $coy_info);
            } elseif ($params['status'] == "Profile") {
                Mail::mailer('UserAlert')->profile_reminder_alert($data['user_info'], $coy_info);
            } elseif ($params['status'] == "Photo") {
                Mail::mailer('UserAlert')->photo_reminder_alert($data['user_info'], $coy_info);
            } elseif ($params['status'] == "Dormant") {
                Mail::mailer('UserAlert')->dormant_reminder_alert($data['user_info'], $coy_info);
            }
            
            $data = array(
                'result_info' => 
                    array(
                        'code' => "200",
                        'type' => "success",
                        'message' => "Successful, Email Sent!",
                    ),
                );
        }

        return json_encode($data, JSON_FORCE_OBJECT);;
    }


    //Function For Get Users By Profile using Oriented API
    public function get_users_info($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-users-info';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }  



    //Function For Get Users By Profile using Oriented API
    public function all_recent_messages($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/get-messages-info';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }  

    
    //Function For Update User Status using Oriented API
    public function update_user_status($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-user-status';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $ch;
    }



   //Function For Fetching All Newsletter Info using Oriented API
   public function get_newsletters_info()
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/get-newsletters-info';
       
       $ch = $apiInfo->get_curl($url);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $data;
   }




   //Function For Get Card Payment Information using Oriented API
   public function card_payment_info($params)
   {   
       $apiInfo = new apiInfo();
       $token_info = $apiInfo->token_details();
       $url = ''.$token_info['url'].'/card-payment-information';

       $body = http_build_query($params);
       $ch = $apiInfo->post_curl($url, $body);

       if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
       
       return $data;
   }  
 
   

    //Function For Get Card Payment Information using Oriented API
    public function all_payment_Transaction($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/all-payment-Transactions';
 
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);
 
        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }  




    //Function For Get Recent Activities Information using Oriented API
    public function all_recent_activities()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/recent-activities';
 
        $ch = $apiInfo->get_curl($url);
 
        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }  



    //Function For Get Recent Visitors Information using Oriented API
    public function all_recent_visitors()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/recent-visitors';
 
        $ch = $apiInfo->get_curl($url);
 
        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }  




    //Function For Get User Posts Information using Oriented API
    public function users_posts($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/users-posts';
 
        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);
 
        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }  





    //Function For User To Create Blog Post using Oriented API
    public function create_blog_post($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/create-blog-post';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }  
 
   
    

    //Function For Getting Blog Posts using Oriented API
    public function all_blog_posts($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/blog-posts';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For Getting Blog Posts using Oriented API
    public function blog_post_details($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/blog-post-details';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }


    //Function For User To Create Blog Post using Oriented API
    public function update_blog_post($params)
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/update-blog-post';

        $body = http_build_query($params);
        $ch = $apiInfo->post_curl($url, $body);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }  
 
   
    















   


    /**
     * Counting Board Routes
    */


    //Function For Getting All App Visitors Count using Oriented API
    public function all_visitors_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/count-all-visitors';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For Getting All App Activities Count using Oriented API
    public function all_activities_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/count-all-activities';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For Getting All Messages Count using Oriented API
    public function all_messages_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/count-all-messages';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For Getting All Messages Count using Oriented API
    public function new_messages_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/count-new-messages';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For Getting All Users Count using Oriented API
    public function all_users_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/count-all-users';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }

    


    //Function For Getting New Users Count using Oriented API
    public function new_users_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/count-new-users';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For Getting User Myselfs Count using Oriented API
    public function user_myself_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-myself-count';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For Getting User Preferences Count using Oriented API
    public function user_preference_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/user-preference-count';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For Getting User Transactions Count using Oriented API
    public function new_transactions_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-transactions-count';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For Getting User Transactions Count using Oriented API
    public function all_transactions_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/all-transactions-count';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }


    //Function For Getting Paid Transactions Count using Oriented API
    public function paid_transactions_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/paid-transactions-count';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For Getting User Transactions Count using Oriented API
    public function expired_transactions_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/expired-transactions-count';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }




    //Function For Getting User Posts Count using Oriented API
    public function new_userposts_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-userposts-count';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For Getting User Posts Count using Oriented API
    public function all_userposts_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/all-userposts-count';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For Getting User Posts Count using Oriented API
    public function new_blogposts_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/new-blogposts-count';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }



    //Function For Getting User Posts Count using Oriented API
    public function all_blogposts_count()
    {   
        $apiInfo = new apiInfo();
        $token_info = $apiInfo->token_details();
        $url = ''.$token_info['url'].'/all-blogposts-count';
        
        $ch = $apiInfo->get_curl($url);

        if(is_array($ch)){ $data = $ch; } else { $data = json_decode($ch, true); }
        
        return $data;
    }


























































/**
 * End File
 */

}

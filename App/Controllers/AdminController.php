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
use Config\CPanelAPI;



/**
 * Users Controller
 */

class AdminController extends Controller
{



    //Get User ID from URL
    protected function get_id()
    {
        //Instantiate Validator
        $v = new Validate();

        //Parse URL
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $u = explode("/", $url);
        //Clean Input
        $id = $v->clean($u[2]);
        //Return Value
        return $id;
    }




    // Members Dashboard
    public function admin_dashboard()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id);
        $adminInfo = $userDetails['admin_info']; 

        session_start();
        $_SESSION['uniqueid'] = $adminInfo['uniqueid'];
        $_SESSION['log_session'] = $adminInfo['log_session'];

        $userProfiles = ModelFactory::model('User')->user_profiles();

        //Dashboard Counter Index
        $newUsersCount = ModelFactory::model('Admin')->new_users_count();
        $allUsersCount = ModelFactory::model('Admin')->all_users_count();
        $visitorsCount = ModelFactory::model('Admin')->all_visitors_count();
        $userMyselfCount = ModelFactory::model('Admin')->user_myself_count();
        $userPrefCount = ModelFactory::model('Admin')->user_preference_count();
        $allMessagesCount = ModelFactory::model('Admin')->all_messages_count();
        $newMessagesCount = ModelFactory::model('Admin')->new_messages_count();
        $activitiesCount = ModelFactory::model('Admin')->all_activities_count();
        $newTrancCount = ModelFactory::model('Admin')->new_transactions_count();
        $allTrancCount = ModelFactory::model('Admin')->all_transactions_count();
        $paidTrancCount = ModelFactory::model('Admin')->paid_transactions_count();
        $expiredTrancCount = ModelFactory::model('Admin')->expired_transactions_count();
        $newUserPostsCount = ModelFactory::model('Admin')->new_userposts_count();
        $allUserPostsCount = ModelFactory::model('Admin')->all_userposts_count();
        $newBlogPostsCount = ModelFactory::model('Admin')->new_blogposts_count();
        $allBlogPostsCount = ModelFactory::model('Admin')->all_blogposts_count();
        ModelFactory::model('Admin')->auto_update_transaction_status();
        //Transactions Data
        $tranc = array('status' => "Processing");
        $recentTransactions = ModelFactory::model('Admin')->all_payment_Transaction($tranc);
        //Activities Data
        $recentActivities = ModelFactory::model('Admin')->all_recent_activities();
        //Visitors Data
        $recentVisitors = ModelFactory::model('Admin')->all_recent_visitors();
        //Users Posts Data
        $posts = array('status' => "New");
        $userPosts = ModelFactory::model('Admin')->users_posts($posts);
        //Blog Posts
        $blogPosts = ModelFactory::model('Admin')->all_blog_posts($cat = array('status' => "New")); 
        $blogPostsAction = ModelFactory::model('User')->get_blog_posts_actions();

        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        
        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'curInfo' => $curInfo['result_message'],
            'userProfiles' => $userProfiles['user_profiles'], 
            'visitorsCount' => $visitorsCount['result_message'], 
            'newUsersCount' => $newUsersCount['result_message'], 
            'allUsersCount' => $allUsersCount['result_message'], 
            'userPrefCount' => $userPrefCount['result_message'], 
            'newTrancCount' => $newTrancCount['result_message'], 
            'allTrancCount' => $allTrancCount['result_message'], 
            'paidTrancCount' => $paidTrancCount['result_message'], 
            'expiredTrancCount' => $expiredTrancCount['result_message'], 
            'activitiesCount' => $activitiesCount['result_message'], 
            'userMyselfCount' => $userMyselfCount['result_message'], 
            'allMessagesCount' => $allMessagesCount['result_message'],
            'newMessagesCount' => $newMessagesCount['result_message'], 
            'newUserPostsCount' => $newUserPostsCount['result_message'], 
            'allUserPostsCount' => $allUserPostsCount['result_message'], 
            'newBlogPostsCount' => $newBlogPostsCount['result_message'],
            'allBlogPostsCount' => $allBlogPostsCount['result_message'], 
            'recentTransactions' => $recentTransactions['result_message'], 
            'recentActivities' => $recentActivities['result_message'],
            'recentVisitors' => $recentVisitors['result_message'],  
            'userPosts' => $userPosts['result_message'], 
            'blogPosts' => $blogPosts['result_message'], 
            'blogPostsAction' => $blogPostsAction,
        );

        return $this->view('Admin/index', $data);
    }




    //All Members Data Dashboard
    public function app_users_data()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );
        $cat = array('profile'=> $v->clean($_GET["cat"]), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $usersInfo = ModelFactory::model('Admin')->get_users_info($cat); 
        //Myself & Preference
        $preference = ModelFactory::model('Admin')->user_preference();
        $myself = ModelFactory::model('Admin')->user_myself();
        
        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'usersDetail' => $usersInfo['result_message'], 
            'userProfiles' => $userProfiles['user_profiles'], 
            'user_myself' => $myself['myself_info'],
            'user_preference' => $preference['preference_info'],
        );

        return $this->view('Admin/users-page', $data);
    }




    // Members Profile
    public function member_profile_details()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        if (isset($_POST['updateUserID'])) {

            $info = array('uniqueid' => $v->clean($_POST['uniqueid']), 'username' => $v->clean($_POST['username']), 'newUsername' => $v->clean($_POST['userid']), );
            
            $uId = ModelFactory::model('User')->update_username($info); 

        }

        if (isset($_POST['submitImage'])) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $type = "Profile"; //Determines the folder to upload image
            // File name
            $value = $_FILES['profileimage']['name'];
            $temp = $_FILES['profileimage']['tmp_name'];

            $image = $this->uploadFile($type, $value, $temp);

            if ($image['fileType']) { 
                $info = array('type' => $image['fileType'], 'profileimage' => trim($image['pics']), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
                //Call API Function
                $pass = ModelFactory::model('User')->upload_profile_photo($info);
            } else { $result = $image; }
        }

        //Get User Credentials
        $u = $v->clean($_GET['id']);
        $act = array('uniqueid' => $v->clean($_GET['id']), );
        $adminDetails =$this->user_information($id); 
        $userDetails = ModelFactory::controller('UserController')->user_information($u); 
        $activity = ModelFactory::model('User')->user_activity($act);

        $data = array(
            'user_activity' => $activity['activity_info'],
            'userBuddies' => $userDetails['buddies'],
            'buddiesCount' => $userDetails['buddiesCount'],
            'userInfo' => $userDetails['user_info'],
            'userMyself' => $userDetails['user_myself'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'userMatchInfo' => $userDetails['matchInfo'],
            'userPreference' => $userDetails['user_preference'],
            'adminInfo' => $adminDetails['admin_info'],
        );

        return $this->view('Admin/user-details-page', $data);
    }


    

    // Members Profile
    public function member_profile()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        if (isset($_POST['updateUserID'])) {

            $info = array('uniqueid' => $v->clean($_POST['uniqueid']), 'username' => $v->clean($_POST['username']), 'newUsername' => $v->clean($_POST['userid']), );
            
            $uId = ModelFactory::model('User')->update_username($info);
        }

        if (isset($_POST['submitImage'])) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $type = "Profile"; //Determines the folder to upload image
            // File name
            $value = $_FILES['profileimage']['name'];
            $temp = $_FILES['profileimage']['tmp_name'];

            $image = $this->uploadFile($type, $value, $temp);

            if ($image['fileType']) { 
                $info = array('type' => $image['fileType'], 'profileimage' => trim($image['pics']), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
                //Call API Function
                $pass = ModelFactory::model('User')->upload_profile_photo($info);
            } else { $result = $image; }
        }

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $activity = ModelFactory::model('User')->user_activity($info);

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'user_activity' => $activity['activity_info'],
        );

        return $this->view('Admin/profile-settings-page', $data);
    }




    // API Settings Dashboard
    public function member_api_settings()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $apiInfo = ModelFactory::model('Admin')->get_api_info(); 

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'apiInfo' => $apiInfo['result_message'], 
        );

        return $this->view('Admin/api-settings-page', $data);
    }




    // Blog Settings Dashboard
    public function member_blog_settings()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
        );

        return $this->view('Admin/blog-settings-page', $data);
    }




    // Blog Settings Dashboard
    public function member_dating_settings()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $subcriptionInfo = ModelFactory::model('Admin')->get_subscription_info(); 
        $subcriptionPlan = ModelFactory::model('Admin')->get_subscription_plan(); 
        $curInfo = ModelFactory::model('Admin')->get_currency_info();

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'currencyInfo' => $curInfo['result_message'], 
            'subcriptionInfo' => $subcriptionInfo['result_message'], 
            'subcriptionPlan' => $subcriptionPlan['result_message'], 
        );

        return $this->view('Admin/dating-settings-page', $data);
    }




    // Coy Settings Dashboard
    public function member_coy_settings()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id);
        $coyInfo = ModelFactory::model('Register')->coy_info();  
        $bankInfo = ModelFactory::model('Admin')->get_bank_info(); 
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $exchangeInfo = ModelFactory::model('Admin')->get_exchange_info(); 
        //var_dump($curInfo);
        $data = array(
            'coyInfo' => $coyInfo, 
            'currencyInfo' => $curInfo['result_message'], 
            'bankInfo' => $bankInfo['result_message'], 
            'exchangeInfo' => $exchangeInfo['result_message'], 
            'adminInfo' => $userDetails['admin_info'],
        );

        return $this->view('Admin/coy-settings-page', $data);
    }



    // Transactions Dashboard
    public function member_transactions()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );
        $cat = array('status' => $v->clean($_GET['cat']), );

        //Get User Credentials
        $userDetails =$this->user_information($id);
        $coyInfo = ModelFactory::model('Register')->coy_info();  
        $bankInfo = ModelFactory::model('Admin')->get_bank_info(); 
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $curInfo = ModelFactory::model('Admin')->get_currency_info(); 
        $transactionInfo = ModelFactory::model('Admin')->get_transactions_info($cat); 
        //var_dump($transactionInfo);
        $data = array(
            'coyInfo' => $coyInfo, 
            'currencyInfo' => $curInfo['result_message'], 
            'bankInfo' => $bankInfo['result_message'], 
            'userProfiles' => $userProfiles['user_profiles'], 
            'trancInfo' => $transactionInfo['result_message'], 
            'adminInfo' => $userDetails['admin_info'],
        );

        return $this->view('Admin/subscription-payment-page', $data);
    }



    // Newsletter Subscriber Dashboard
    public function newsletter_subscribers()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $newsletters = ModelFactory::model('Admin')->get_newsletters_info(); 

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'newsletters' => $newsletters['result_message'], 
        );

        return $this->view('Admin/newsletter-subscribers-page', $data);
    }




    // Notifications Dashboard
    public function member_notifications()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $notifications = ModelFactory::model('Admin')->get_notifications_info(); 

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'notifications' => $notifications['result_message'], 
        );

        return $this->view('Admin/notifications-page', $data);
    }
 



    // Visitors Info Dashboard
    public function app_visitors()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $visitors = ModelFactory::model('Admin')->all_recent_visitors(); 

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'visitors' => $visitors['result_message'], 
        );

        return $this->view('Admin/visitors-page', $data);
    }
 


 
    // Visitors Info Dashboard
    public function member_activities()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $activities = ModelFactory::model('Admin')->all_recent_activities(); 

        $userProfiles = ModelFactory::model('User')->user_profiles();

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'activities' => $activities['result_message'], 
            'userProfiles' => $userProfiles['user_profiles'], 
        );

        return $this->view('Admin/activities-page', $data);
    }




    // Messages Info Dashboard
    public function messages_data()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );
        $cat = array('status' => $v->clean($_GET['cat']), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $messages = ModelFactory::model('Admin')->all_recent_messages($cat); 

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'messages' => $messages['result_message'], 
        );

        return $this->view('Admin/messages-page', $data);
    }



 





// Blog Posts Section


    // Create New Blog Post Dashboard
    public function member_create_blog_post()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        
        if (isset($_POST['createPost'])) {

            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $title = $v->clean($_POST['title']);
            $subject = $v->clean($_POST['subject']);
            $introduction = $v->clean($_POST['introduction']);
            $category = $v->clean($_POST['category']);
            $tags = $v->clean($_POST['tags']);
            $conclusion = $v->clean($_POST['conclusion']);
            $status = $v->clean($_POST['status']);
            $details = $v->clean($_POST['details']);
            $url = $v->clean($_POST['url']);

            $extension = array("jpeg","jpg","png","JPEG","JPG","PNG");
            $folder = "Images/Blog/";

            foreach($_FILES["postimage"]["tmp_name"] as $key => $tmp_name) {

                $file_name = $_FILES["postimage"]["name"][$key];
                $file_tmp = $_FILES["postimage"]["tmp_name"][$key];
                $ext = pathinfo($file_name,PATHINFO_EXTENSION);

                if (in_array($ext,$extension)) { 

                    // if (!file_exists($folder.$file_name)) {

                        $target_file = $folder.$file_name;
                        move_uploaded_file($file_tmp, $target_file);

                        $allImages[] = $file_name;

                    // } else {

                       // $errorMsg = "Image(s) Already Exists In Storage, Select Another!";
                    /*else {
                        $filename=basename($file_name,$ext);
                        $newFileName=$filename.time().".".$ext;
                        $target_file = $folder.$newFileName;
                        move_uploaded_file($file_tmp, $target_file);

                        $allImages[] = $newFileName;
                    }*/
                    //}
                } else {
                    $result = array('result_info' => array('type' => "error", 'message' => "Image(s) Must be JPEG, JPG Or PNG Format!", ), );
                    
                    $data = array(
                        'adminInfo' => $userDetails['admin_info'],
                        'type' => $result['result_info']['type'],
                        'message' => $result['result_info']['message'], 
                    );
        
                    return $this->view('Admin/create-blog-post-page', $data);
                }
            }
            if (isset($allImages)) {

                if ($allImages[1]) {
                    $info = array('uniqueid' => $uniqueid, 'username' => $username, 'title' => $title, 'subject' => $subject, 'introduction' => $introduction, 'category' => $category, 'url' => $url, 'tags' => $tags, 'conclusion' => $conclusion, 'details' => $details, 'file' => $allImages[0], 'file1' => $allImages[1], 'status' => $status, );
                } else {
                    $info = array('uniqueid' => $uniqueid, 'username' => $username, 'title' => $title, 'subject' => $subject, 'introduction' => $introduction, 'category' => $category, 'url' => $url, 'tags' => $tags, 'conclusion' => $conclusion, 'details' => $details, 'file' => $allImages[0], 'file1' => "", 'status' => $status, );
                }

                $result = ModelFactory::model('Admin')->create_blog_post($info);
                
                $data = array(
                    'adminInfo' => $userDetails['admin_info'],
                    'type' => $result['result_info']['type'],
                    'message' => $result['result_info']['message'], 
                );
    
                return $this->view('Admin/create-blog-post-page', $data);

            } else {

                $result = array('result_info' => array('type' => "error", 'message' => $errorMsg, ), );
               
                $data = array(
                    'adminInfo' => $userDetails['admin_info'],
                    'type' => $result['result_info']['type'],
                    'message' => $result['result_info']['message'], 
                );
    
                return $this->view('Admin/create-blog-post-page', $data);
            }

        } elseif (isset($_POST['updatePost'])) {

            $postid = $v->clean($_POST['postid']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $title = $v->clean($_POST['title']);
            $subject = $v->clean($_POST['subject']);
            $introduction = $v->clean($_POST['introduction']);
            $category = $v->clean($_POST['category']);
            $tags = $v->clean($_POST['tags']);
            $conclusion = $v->clean($_POST['conclusion']);
            $status = $v->clean($_POST['status']);
            $details = $v->clean($_POST['details']);

            $extension = array("jpeg","jpg","png","JPEG","JPG","PNG");
            $folder = "Images/Blog/";

            foreach($_FILES["postimage"]["tmp_name"] as $key => $tmp_name) {

                $file_name = $_FILES["postimage"]["name"][$key];
                $file_tmp = $_FILES["postimage"]["tmp_name"][$key];
                $ext = pathinfo($file_name,PATHINFO_EXTENSION);

                if (in_array($ext,$extension)) { 

                    $target_file = $folder.$file_name;
                    move_uploaded_file($file_tmp, $target_file);

                    $allImages[] = $file_name;

                } else {
                    $result = array('result_info' => array('type' => "error", 'message' => "Image(s) Must be JPEG, JPG Or PNG Format!", ), );
                    $details = array('postid' => $postid, );
                     $blogPost = ModelFactory::model('Admin')->blog_post_details($details);

                    $data = array(
                        'adminInfo' => $userDetails['admin_info'],
                        'blogPost' => $blogPost['result_message'],
                        'type' => $result['result_info']['type'],
                        'message' => $result['result_info']['message'], 
                    );
        
                    return $this->view('Admin/create-blog-post-page', $data);
                }
            }
            if (isset($allImages)) {

                $info = array('postid' => $postid, 'uniqueid' => $uniqueid, 'username' => $username, 'title' => $title, 'subject' => $subject, 'introduction' => $introduction, 'category' => $category, 'tags' => $tags, 'conclusion' => $conclusion, 'details' => $details, 'file' => $allImages[0], 'file1' => $allImages[1], 'status' => $status, );

                $result = ModelFactory::model('Admin')->update_blog_post($info);

                $details = array('postid' => $postid, );
                $blogPost = ModelFactory::model('Admin')->blog_post_details($details);
                
                $data = array(
                    'adminInfo' => $userDetails['admin_info'],
                    'blogPost' => $blogPost['result_message'], 
                    'type' => $result['result_info']['type'],
                    'message' => $result['result_info']['message'], 
                );
    
                return $this->view('Admin/create-blog-post-page', $data);

            }

        } else {
    
            $data = array(
                'adminInfo' => $userDetails['admin_info'],
            );

            return $this->view('Admin/create-blog-post-page', $data);
        }
    }




    // Blog Posts Dashboard
    public function member_blog_posts()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        if (isset($_GET['id'])) {
            
            $details = array('postid' => $v->clean($_GET['id']), );
             //Get User Credentials
            $userDetails =$this->user_information($id); 
            $blogPost = ModelFactory::model('Admin')->blog_post_details($details); 

            $data = array(
                'adminInfo' => $userDetails['admin_info'],
                'blogPost' => $blogPost['result_message'], 
            );

            return $this->view('Admin/create-blog-post-page', $data);

        }

        $cat = array('status' => $v->clean($_GET['cat']), );
        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $blogPosts = ModelFactory::model('Admin')->all_blog_posts($cat); 
        $blogPostsAction = ModelFactory::model('User')->get_blog_posts_actions();

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'blogPosts' => $blogPosts['result_message'], 
            'blogPostsAction' => $blogPostsAction,
        );

        return $this->view('Admin/blog-posts-page', $data);
    }













// User ADs Section



    // All Users Post Ads Dashboard
    public function all_user_ads()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );
            
        $details = array('status' => $v->clean($_GET['cat']), );
            //Get User Credentials
        $userDetails =$this->user_information($id); 
        $userPosts = ModelFactory::model('Admin')->users_posts($details); 
        $postActions = ModelFactory::model('User')->get_post_actions();
        $userProfiles = ModelFactory::model('User')->user_profiles();

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'userPosts' => $userPosts['result_message'], 
            'postActions' => $postActions['post_interactions'],
            'userProfiles' => $userProfiles['user_profiles'], 
        );

        return $this->view('Admin/all-ads-page', $data);
    }



    // AD Post Details Dashboard
    public function user_ad_details()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Users Posts Data
        $in = array('postid' => $v->clean($_GET['id']),  );
        
        $postDetails = ModelFactory::model('User')->get_post($in);
        $postActions = ModelFactory::model('User')->get_post_actions();

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $userProfiles = ModelFactory::model('User')->user_profiles();

        $data = array(
            'adminInfo' => $userDetails['admin_info'],
            'postDetails' => $postDetails['post_details'],
            'postActions' => $postActions['post_interactions'],
            'userProfiles' => $userProfiles['user_profiles'], 
        );

        return $this->view('Admin/ad-details-page', $data);
    }





















// Ajax Functions


    //Create Location route
    public function ajax_update_bio()
    {
        $v = new Validate();

        if (($_POST['fname']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $lname = $v->clean($_POST['lname']);
            $fname = $v->clean($_POST['fname']);
            $number = $v->clean($_POST['number']);
            $occupation = $v->clean($_POST['occupation']);
            $gender = $v->clean($_POST['gender']);
            $dob = $v->clean($_POST['dob']);
            $address = $v->clean($_POST['address']);
            $city = $v->clean($_POST['city']);
            $country = $v->clean($_POST['country']);
            $details = $v->clean($_POST['biodetails']);
            $status = $v->clean($_POST['status']);
            $email = $v->clean($_POST['email']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('details' => trim($details), 'status' => trim($status), 'email' => trim($email), 'country' => trim($country), 'city' => trim($city), 'address' => trim($address), 'occupation' => trim($occupation), 'gender' => trim($gender), 'dob' => trim($dob), 'lname' => trim($lname), 'fname' => trim($fname),'number' => trim($number), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $location = ModelFactory::model('Admin')->update_bio($info);
            //var_dump($location);
            echo $location;
        }
    }




    //Ajax Report Post route
    public function ajax_coy_info()
    {
        $v = new Validate();

        if (($_POST['coyname']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $coyname = $v->clean($_POST['coyname']);
            $slogan = $v->clean($_POST['slogan']);
            $email = $v->clean($_POST['email']);
            $email1 = $v->clean($_POST['email1']);
            $phone = $v->clean($_POST['phone']);
            $phone1 = $v->clean($_POST['phone1']);
            $channel = $v->clean($_POST['channel']);
            $facebook = $v->clean($_POST['facebook']);
            $instagram = $v->clean($_POST['instagram']);
            $linkedin = $v->clean($_POST['linkedin']);
            $twitter = $v->clean($_POST['twitter']);
            $address = $v->clean($_POST['address']);
            $status = $v->clean($_POST['status']);

            $info = array('email' => trim($email), 'email1' => trim($email1), 'phone' => trim($phone), 'phone1' => trim($phone1), 'channel' => trim($channel), 'facebook' => trim($facebook), 'instagram' => trim($instagram), 'linkedin' => trim($linkedin), 'twitter' => trim($twitter), 'address' => trim($address), 'status' => trim($status), 'coyname' => trim($coyname), 'slogan' => trim($slogan), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->create_coy_info($info);

            echo $pass;
        }
    }



    //Ajax Report Post route
    public function ajax_bank_info()
    {
        $v = new Validate();

        if (($_POST['bankname']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $bankname = $v->clean($_POST['bankname']);
            $acctname = $v->clean($_POST['acctname']);
            $acctnum = $v->clean($_POST['acctnum']);
            $swiftcode = $v->clean($_POST['swiftcode']);
            $status = $v->clean($_POST['status']);

            $info = array('status' => trim($status), 'swiftcode' => trim($swiftcode), 'bankname' => trim($bankname), 'acctname' => trim($acctname), 'acctnum' => trim($acctnum), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->create_bank_info($info);

            echo $pass;
        }
    }




    //Ajax Report Post route
    public function ajax_exchange_info()
    {
        $v = new Validate();

        if (($_POST['currency']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $currency = $v->clean($_POST['currency']);
            $rate = $v->clean($_POST['rate']);
            $status = $v->clean($_POST['status']);

            $info = array('status' => trim($status), 'rate' => trim($rate), 'currency' => trim($currency), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->create_exchange_info($info);

            echo $pass;
        }
    }


    //Ajax Report Post route
    public function ajax_currency_info()
    {
        $v = new Validate();

        if (($_POST['currency']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $currency = $v->clean($_POST['currency']);

            $info = array('currency' => trim($currency), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->create_currency_info($info);

            echo $pass;
        }
    }



    //Ajax Subscription route
    public function ajax_subscription_info()
    {
        $v = new Validate();

        if (($_POST['status']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $status = $v->clean($_POST['status']);

            $info = array('status' => trim($status), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->create_subscription_info($info);

            echo $pass;
        }
    }



    //Ajax Subscription route
    public function ajax_subscription_plan()
    {
        $v = new Validate();

        if (($_POST['status']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $type = $v->clean($_POST['type']);
            $expiry = $v->clean($_POST['expiry']);
            $amount = $v->clean($_POST['amount']);
            $details = $v->clean($_POST['details']);
            $details1 = $v->clean($_POST['details1']);
            $details2 = $v->clean($_POST['details2']);
            $status = $v->clean($_POST['status']);

            $info = array('type' => trim($type), 'expiry' => trim($expiry), 'amount' => trim($amount), 'details' => trim($details), 'details1' => trim($details1), 'details2' => trim($details2), 'status' => trim($status), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->create_subscription_plan($info);

            echo $pass;
        }
    }



    //Ajax API Connect route
    public function ajax_api_connect()
    {
        $v = new Validate();

        if (($_POST['name']!="") && ($_POST['private']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $name = $v->clean($_POST['name']);
            $url = $v->clean($_POST['url']);
            $code = $v->clean($_POST['code']);
            $wallet = $v->clean($_POST['wallet']);
            $public = $v->clean($_POST['public']);
            $private = $v->clean($_POST['private']);
            $status = $v->clean($_POST['status']);

            $info = array('name' => trim($name), 'url' => trim($url), 'code' => trim($code), 'wallet' => trim($wallet), 'public' => trim($public), 'private' => trim($private), 'status' => trim($status), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->create_api_connect($info);

            echo $pass;
        }
    }



    //Ajax Subscription route
    public function ajax_transaction_status()
    {
        $v = new Validate();

        if (($_POST['trancid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $trancid = $v->clean($_POST['trancid']);
            $status = $v->clean($_POST['status']);

            $info = array('trancid' => trim($trancid), 'status' => trim($status), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->update_transaction_status($info);

            echo $pass;
        }
    }


    //Ajax User Status route
    public function ajax_user_status()
    {
        $v = new Validate();

        if (($_POST['uUniqueid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $uUniqueid = $v->clean($_POST['uUniqueid']);
            $status = $v->clean($_POST['status']);

            $info = array('uUniqueid' => trim($uUniqueid), 'status' => trim($status), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->update_user_status($info);

            echo $pass;
        }
    }


    
    //Ajax Messages route
    public function ajax_messages_status()
    {
        $v = new Validate();

        if (($_POST['trancid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $trancid = $v->clean($_POST['trancid']);
            $status = $v->clean($_POST['status']);

            $info = array('id' => trim($trancid), 'status' => trim($status), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->update_message_status($info);

            echo $pass;
        }
    }



    //Ajax Messages route
    public function ajax_transaction_reminder()
    {
        $v = new Validate();

        if (($_POST['trancid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $trancid = $v->clean($_POST['trancid']);

            $info = array('trancid' => trim($trancid), 'uniqueid' => trim($uniqueid), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->send_transaction_reminder($info);

            echo $pass;
        }
    }




    //Ajax Messages route
    public function ajax_user_reminder()
    {
        $v = new Validate();

        if (($_POST['useremail']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $email = $v->clean($_POST['useremail']);
            $username = $v->clean($_POST['username']);
            $fname = $v->clean($_POST['fname']);
            $lname = $v->clean($_POST['lname']);
            $subject = $v->clean($_POST['subject']);
            $title = $v->clean($_POST['title']);
            $details = $v->clean($_POST['details']);

            $info = array('details' => trim($details), 'title' => trim($title), 'subject' => trim($subject), 'lname' => trim($lname), 'fname' => trim($fname), 'username' => trim($username), 'email' => trim($email), 'uniqueid' => trim($uniqueid), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->send_user_reminder($info);

            echo $pass;
        }
    }




    //Ajax User Message Alert route
    public function ajax_user_alert()
    {
        $v = new Validate();

        if (($_POST['uUniqueid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $uUniqueid = $v->clean($_POST['uUniqueid']);
            $username = $v->clean($_POST['username']);
            $status = $v->clean($_POST['status']);

            $info = array('status' => trim($status), 'uniqueid' => trim($uUniqueid), );
            //Call API Function
            $pass = ModelFactory::model('Admin')->send_user_alert($info);

            echo $pass;
        }
    }


















    


    // Members Information
    private function user_information($id)
    {
        $v = new Validate();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails = ModelFactory::model('Admin')->user_info($info);
        
        $data = array(
            'admin_info' => $userDetails['user_info'],
        );

        return $data; 
        
    }





    //Upload Image Or Video
    protected function uploadFile($val, $value, $temp) 
    {
        //Folder Path            
        $folder = "Public/other_assets/".$val."/";
        // // File name
        // $value = $_FILES[$param]['name'];
        // $temp = $_FILES[$param]['temp_name'];
        // Location
        $target_file = $folder.$value;
        // file extension
        $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);

        $file_extension = strtolower($file_extension);
        // Valid image extension
        $valid_extension = array("png","jpeg","jpg","webm","mp4","ogv");

        if($file_extension == "mp4" || $file_extension == "webm" || $file_extension == "ogv"){
            $type = "Video";
        } else {
            $type = "Image";
        }

        if (in_array($file_extension, $valid_extension)) {
           // Upload file
            if (move_uploaded_file($temp, $target_file)) {

                $result = array( 'fileType' => $type, 'pics' => $value, );
                return $result;
                
            } else {

                $result = array( 'type' => "error", 'message' => "Upload Error", );
                return $result;
            }
        } else {

            $result = array( 'type' => "error", 'message' => "Unsupported File Format", );
            return $result;
        }
    }


    





    /**
     * End Of File
     */

}
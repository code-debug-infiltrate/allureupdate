<?php 
/*
|--------------------- Controller Configuration ------------------------
| Here is where you can configure all logics for your application.
*/
namespace App\Controllers;

require 'vendor/autoload.php';


use Config\Controller;
use Config\Validate;
use Config\ModelFactory;
use App\Controllers\Paystack;





/**
 * UserController
 */
class UserController extends Controller
{



    // Members Dashboard
    public function member_dashboard()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        if (isset($_POST['submitProfile'])) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $type = "Profile";  //Determines the folder to upload image
            // File name
            $value = $_FILES['profileimage']['name'];
            $temp = $_FILES['profileimage']['tmp_name'];

            $image = $this->uploadFile($type, $value, $temp);

            if ($image['fileType']) { 
                $info = array('type' => $image['fileType'], 'profileimage' => trim($image['pics']), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
                //Call API Function
                $pass = ModelFactory::model('User')->upload_profile_photo($info);
            } else { $result = $image; }
            //Get User Credentials
            $userDetails =$this->user_information($id); 
            $coyInfo = ModelFactory::model('Register')->coy_info();
            
        }

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $matchInfo = ModelFactory::model('User')->user_find_people($info);
        $randomBuddy = ModelFactory::model('User')->user_random_people($info);
        $myPostActions = ModelFactory::model('User')->my_post_action($info);
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $latestPosts = ModelFactory::model('User')->get_latest_posts();
        $latestPostsFiles = ModelFactory::model('User')->get_latest_posts_files();
        $postActions = ModelFactory::model('User')->get_post_actions();
        $userInfo = $userDetails['user_info'];

        session_start();
        $_SESSION['uniqueid'] = $userInfo['uniqueid'];
        $_SESSION['log_session'] = $userInfo['log_session'];
    
        $data = array(
            'userInfo' => $userDetails['user_info'],
            'coyInfo' => $coyInfo, 
            'curInfo' => $curInfo['result_message'], 
            'subPlans' => $subPlans['result_message'],
            'myPostActions' => $myPostActions['my_post_actions'],
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'postActions' => $postActions['post_interactions'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'latestPosts' => $latestPosts['post_details'],
            'latestPostsFiles' => $latestPostsFiles['post_files'],
            'onlineNow' => $userDetails['onlineNow'],
            'subPlan' => $userDetails['subPlan'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'user_language' => $userDetails['user_language'],
            'user_interests' => $userDetails['user_interests'],
            'user_myself' => $userDetails['user_myself'],
            'user_preference' => $userDetails['user_preference'],
            'userProfiles' => $userProfiles['user_profiles'], 
            'randomBuddy' => $randomBuddy['buddy_info'],
                
            'veryClose' => $matchInfo['people_info']['veryClose'], 
            'slightlyClose' => $matchInfo['people_info']['slightlyClose'], 
        );

        return $this->view('User/index-page', $data); 
       
    }




    // Members Profile
    public function member_profile()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        if (isset($_POST['submitProfile'])) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $type = "Profile";  //Determines the folder to upload image

            // File name
            $value = $_FILES['profileimage']['name'];
            $temp = $_FILES['profileimage']['tmp_name'];

            $image = $this->uploadFile($type, $value, $temp);

            if ($image['fileType']) { 
                $info = array('type' => $image['fileType'], 'profileimage' => trim($image['pics']), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
                //Call API Function
                $pass = ModelFactory::model('User')->upload_profile_photo($info);
            } else { $result = $image; }

            //Get User Credentials
            $userDetails =$this->user_information($id); 
            $coyInfo = ModelFactory::model('Register')->coy_info();
            
        } elseif (isset($_POST['createPost'])) {

            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $postdetails = $v->clean($_POST['postdetails']);
            $url = $v->clean($_POST['url']);

            $extension = array("jpeg","jpg","png","JPEG","JPG","PNG");
            $folder = "Public/other_assets/Posts/";

            foreach($_FILES["postimage"]["tmp_name"] as $key => $tmp_name) {

                $file_name = $_FILES["postimage"]["name"][$key];
                $file_tmp = $_FILES["postimage"]["tmp_name"][$key];
                $ext = pathinfo($file_name,PATHINFO_EXTENSION);

                if (in_array($ext,$extension)) { 

                    if (!file_exists($folder.$file_name)) {

                        $target_file = $folder.$file_name;
                        move_uploaded_file($file_tmp, $target_file);

                        $allImages[] = $file_name;

                    } else {

                        $errorMsg = "Image(s) Already Exists In Storage, Select Another!";
                    /*else {
                        $filename=basename($file_name,$ext);
                        $newFileName=$filename.time().".".$ext;
                        $target_file = $folder.$newFileName;
                        move_uploaded_file($file_tmp, $target_file);

                        $allImages[] = $newFileName;
                    }*/
                    }
                } else {
                    $result = array('result_info' => array('type' => "error", 'message' => "Image(s) Must be JPEG, JPG Or PNG Format!", ), );
                }
            }
            if (isset($allImages)) {

                $info = array('uniqueid' => $uniqueid, 'username' => $username, 'url' => $url, 'details' => $postdetails, 'file' => $allImages[0], 'allImages' => $allImages, );

                $result = ModelFactory::model('User')->user_create_post($info);

            } else {

                $result = array('result_info' => array('type' => "error", 'message' => $errorMsg, ), );
            }

            //Get User Credentials
            $userDetails =$this->user_information($id); 
            $coyInfo = ModelFactory::model('Register')->coy_info();
            $randomBuddy = ModelFactory::model('User')->user_random_people($info);
            $myPostActions = ModelFactory::model('User')->my_post_action($info);
            $userProfiles = ModelFactory::model('User')->user_profiles();
            $latestPosts = ModelFactory::model('User')->get_latest_posts();
            $latestPostsFiles = ModelFactory::model('User')->get_latest_posts_files();
            $postActions = ModelFactory::model('User')->get_post_actions();
            

            $data = array(
                'userInfo' => $userDetails['user_info'],
                'coyInfo' => $coyInfo, 
                'myPostActions' => $myPostActions['my_post_actions'],
                'newActivityNotice' => $userDetails['newActivityNotice'], 
                'userOnlineStatus' => $userDetails['userOnlineStatus'], 
                'buddiesCount' => $userDetails['buddiesCount'], 
                'buddiesList' => $userDetails['buddies'], 
                'postActions' => $postActions['post_interactions'], 
                'userLikesCount' => $userDetails['userLikesCount'], 
                'userViewsCount' => $userDetails['userViewsCount'], 
                'userNoticeCount' => $userDetails['userNoticeCount'], 
                'newMessageCount' => $userDetails['newMessageCount'],
                'newMessageDetails' => $userDetails['newMessageDetails'],
                'matchCount' => $userDetails['matchInfo'],
                'newChatCount' => $userDetails['newChatCount'],
                'newChatDetails' => $userDetails['newChatDetails'],
                'latestPosts' => $latestPosts['post_details'],
                'latestPostsFiles' => $latestPostsFiles['post_files'],
                'onlineNow' => $userDetails['onlineNow'],
                'subPlan' => $userDetails['subPlan'],
                'appSubPlan' => $userDetails['appSubPlan'],
                'userTrancInfo' => $userDetails['trancInfo'],
                'user_language' => $userDetails['user_language'],
                'user_interests' => $userDetails['user_interests'],
                'user_myself' => $userDetails['user_myself'],
                'user_preference' => $userDetails['user_preference'],
                'userProfiles' => $userProfiles['user_profiles'], 
                'randomBuddy' => $randomBuddy['buddy_info'],
                'type' => $result['result_info']['type'], 
                'message' => $result['result_info']['message'],
            );

            return $this->view('User/profile-page', $data);  
        }
        
        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $workedu = ModelFactory::model('User')->user_workeducation($info);
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $myPostActions = ModelFactory::model('User')->my_post_action($info);
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $latestPosts = ModelFactory::model('User')->get_latest_posts();
        $latestPostsFiles = ModelFactory::model('User')->get_latest_posts_files();
        $postActions = ModelFactory::model('User')->get_post_actions();
        //$user = json_decode($result, true);

        $data = array(
            'myPostActions' => $myPostActions['my_post_actions'],
            'user_workedu' => $workedu['workeducation_info'],
            'userInfo' => $userDetails['user_info'],
            'coyInfo' => $coyInfo,
            'curInfo' => $curInfo['result_message'], 
            'subPlans' => $subPlans['result_message'],
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'subPlan' => $userDetails['subPlan'],
            'user_interests' => $userDetails['user_interests'],
            'user_preference' => $userDetails['user_preference'],
            'user_myself' => $userDetails['user_myself'],
            'user_language' => $userDetails['user_language'],
            'userProfiles' => $userProfiles['user_profiles'], 
            'postActions' => $postActions['post_interactions'], 
            'latestPosts' => $latestPosts['post_details'],
            'latestPostsFiles' => $latestPostsFiles['post_files'],
         );

        return $this->view('User/profile-page', $data); 
        
    }




    // Members people
    public function member_people()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $matchInfo = ModelFactory::model('User')->user_find_people($info);
        $randomBuddy = ModelFactory::model('User')->user_random_people($info);
        $userProfiles = ModelFactory::model('User')->user_profiles();
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];
        
        $data = array(
            'userInfo' => $userInfo,
            'coyInfo' => $coyInfo, 
            'curInfo' => $curInfo['result_message'], 
            'subPlans' => $subPlans['result_message'],
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'subPlan' => $userDetails['subPlan'], 
            'veryClose' => $matchInfo['people_info']['veryClose'], 
            'slightlyClose' => $matchInfo['people_info']['slightlyClose'], 
            'randomBuddy' => $randomBuddy['buddy_info'], 
            'userProfiles' => $userProfiles['user_profiles'], 
        );

        return $this->view('User/find-people-page', $data); 
        
    }

    
    // view User Profile
    public function view_user_profile()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );
        $pop = $_GET['buddy'];
        
        //Get User Credentials
        $userDetails = $this->user_information($id); 
        $userInfo = $userDetails['user_info'];
        $username = $userInfo['username'];

        $user = array('uniqueid' => $v->clean($pop), 'viewerid' => $v->clean($id), 'username' => $username, );
        $userViews = ModelFactory::model('User')->user_views($user);
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $viewUser = ModelFactory::model('User')->user_info($user);
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $latestPosts = ModelFactory::model('User')->get_latest_posts();
        $latestPostsFiles = ModelFactory::model('User')->get_latest_posts_files();
        $postActions = ModelFactory::model('User')->get_post_actions();
        $myPostActions = ModelFactory::model('User')->my_post_action($info);
        
        $workedu = ModelFactory::model('User')->user_workeducation($user);
        $language = ModelFactory::model('User')->user_language($user); 
        $interests = ModelFactory::model('User')->user_interests($user); 
        $preference = ModelFactory::model('User')->user_preference($user);
        $myself = ModelFactory::model('User')->user_myself($user);
        $buddiesList = ModelFactory::model('User')->user_buddies_list($user);
        $buddiesCount = ModelFactory::model('User')->user_buddies_count($user);
        //$user = json_decode($result, true);
        
        $data = array(
            'userInfo' => $userInfo,
            'coyInfo' => $coyInfo, 
            'curInfo' => $curInfo['result_message'], 
            'subPlans' => $subPlans['result_message'],
            'myPostActions' => $myPostActions['my_post_actions'],
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $buddiesCount['buddiesCount_info'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'userProfiles' => $userProfiles['user_profiles'], 
            'viewUser' => $viewUser['user_info'],
            'onlineNow' =>$userDetails['onlineNow'],
           'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
           'subPlan' => $userDetails['subPlan'],
            'user_myself' => $myself['myself_info'],
            'user_workeduc' => $workedu['workeducation_info'],
            'user_interests' => $interests['interests_info'],
            'user_preference' => $preference['preference_info'],
            'user_language' => $language['language_info'],
            'user_buddies' => $buddiesList['buddiesList_info'], 
            'postActions' => $postActions['post_interactions'], 
            'latestPosts' => $latestPosts['post_details'],
            'latestPostsFiles' => $latestPostsFiles['post_files'],
         );

        return $this->view('User/user-profile-page', $data); 
        
    }





    // Members settings
    public function member_settings()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        if (isset($_POST['submitProfile'])) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $type = "Profile";  //Determines the folder to upload image
            // File name
            $value = $_FILES['profileimage']['name'];
            $temp = $_FILES['profileimage']['tmp_name'];

            $image = $this->uploadFile($type, $value, $temp);

            if ($image['fileType']) { 
                $info = array('type' => $image['fileType'], 'profileimage' => trim($image['pics']), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
                //Call API Function
                $pass = ModelFactory::model('User')->upload_profile_photo($info);
            } else { $result = $image; }
            //Get User Credentials
            $userDetails =$this->user_information($id); 
            $coyInfo = ModelFactory::model('Register')->coy_info();
            
        }

        if (isset($_POST['updateUserID'])) {

            $info = array('uniqueid' => $v->clean($_POST['uniqueid']), 'username' => $v->clean($_POST['username']), 'newUsername' => $v->clean($_POST['userid']), );
            
            $uId = ModelFactory::model('User')->update_username($info);
            //Get User Credentials
            $userDetails =$this->user_information($id); 
            $coyInfo = ModelFactory::model('Register')->coy_info();
            $result = json_decode($uId, true);
            $curInfo = ModelFactory::model('Admin')->get_currency_info();
            $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
            $userProfiles = ModelFactory::model('User')->user_profiles();
            $latestPosts = ModelFactory::model('User')->get_latest_posts();
            $latestPostsFiles = ModelFactory::model('User')->get_latest_posts_files();
            $postActions = ModelFactory::model('User')->get_post_actions();
            
            $data = array(
                'userInfo' => $userDetails['user_info'],
                'coyInfo' => $coyInfo, 
                'curInfo' => $curInfo['result_message'],
                'subPlans' => $subPlans['result_message'],
                'newActivityNotice' => $userDetails['newActivityNotice'], 
                'userOnlineStatus' => $userDetails['userOnlineStatus'], 
                'buddiesCount' => $userDetails['buddiesCount'], 
                'buddiesList' => $userDetails['buddies'], 
                'userLikesCount' => $userDetails['userLikesCount'], 
                'userViewsCount' => $userDetails['userViewsCount'], 
                'userNoticeCount' => $userDetails['userNoticeCount'], 
                'newMessageCount' => $userDetails['newMessageCount'],
                'newMessageDetails' => $userDetails['newMessageDetails'],
                'matchCount' => $userDetails['matchInfo'],
                'newChatCount' => $userDetails['newChatCount'],
                'newChatDetails' => $userDetails['newChatDetails'],
                'onlineNow' =>$userDetails['onlineNow'],
                'appSubPlan' => $userDetails['appSubPlan'],
                'userTrancInfo' => $userDetails['trancInfo'],
                'subPlan' => $userDetails['subPlan'],
                'userProfiles' => $userProfiles['user_profiles'], 
                'user_language' => $userDetails['user_language'],
                'user_interests' => $userDetails['user_interests'],
                'user_preference' => $userDetails['user_preference'],
                'postActions' => $postActions['post_interactions'], 
                'latestPosts' => $latestPosts['post_details'],
                'latestPostsFiles' => $latestPostsFiles['post_files'],
                'type' => $result['result_info']['type'],
                'message' => $result['result_info']['message'],
            );
            
            return $this->view('User/settings-page', $data);

        } elseif (isset($_POST['deleteAcc'])) {

            $info = array('uniqueid' => $v->clean($_POST['uniqueid']), 'username' => $v->clean($_POST['username']), 'details' => $v->clean($_POST['reason']), 'password' => $v->clean($_POST['password']), );
            
            $uId = ModelFactory::model('User')->deactivate_account($info);
            //Get User Credentials
            $userDetails =$this->user_information($id); 
            $coyInfo = ModelFactory::model('Register')->coy_info();
            $result = json_decode($uId, true);
            $curInfo = ModelFactory::model('Admin')->get_currency_info();
            $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
            $userProfiles = ModelFactory::model('User')->user_profiles();
            $latestPosts = ModelFactory::model('User')->get_latest_posts();
            $latestPostsFiles = ModelFactory::model('User')->get_latest_posts_files();
            $postActions = ModelFactory::model('User')->get_post_actions();
            
            $data = array(
                'userInfo' => $userDetails['user_info'],
                'coyInfo' => $coyInfo, 
                'curInfo' => $curInfo['result_message'],
                'subPlans' => $subPlans['result_message'],
                'newActivityNotice' => $userDetails['newActivityNotice'], 
                'userOnlineStatus' => $userDetails['userOnlineStatus'], 
                'buddiesCount' => $userDetails['buddiesCount'], 
                'buddiesList' => $userDetails['buddies'], 
                'userLikesCount' => $userDetails['userLikesCount'], 
                'userViewsCount' => $userDetails['userViewsCount'], 
                'userNoticeCount' => $userDetails['userNoticeCount'], 
                'newMessageCount' => $userDetails['newMessageCount'],
                'newMessageDetails' => $userDetails['newMessageDetails'],
                'matchCount' => $userDetails['matchInfo'],
                'newChatCount' => $userDetails['newChatCount'],
                'newChatDetails' => $userDetails['newChatDetails'],
                'onlineNow' =>$userDetails['onlineNow'],
                'appSubPlan' => $userDetails['appSubPlan'],
                'userTrancInfo' => $userDetails['trancInfo'],
                'subPlan' => $userDetails['subPlan'],
                'userProfiles' => $userProfiles['user_profiles'], 
                'user_language' => $userDetails['user_language'],
                'user_interests' => $userDetails['user_interests'],
                'user_preference' => $userDetails['user_preference'],
                'postActions' => $postActions['post_interactions'], 
                'latestPosts' => $latestPosts['post_details'],
                'latestPostsFiles' => $latestPostsFiles['post_files'],
                'type' => $result['result_info']['type'],
                'message' => $result['result_info']['message'],
            );
            
            return $this->view('User/settings-page', $data);

        } else {

            //Get User Credentials
            $userDetails =$this->user_information($id); 
            $curInfo = ModelFactory::model('Admin')->get_currency_info();
            $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
            $coyInfo = ModelFactory::model('Register')->coy_info();
            $userProfiles = ModelFactory::model('User')->user_profiles();
            $latestPosts = ModelFactory::model('User')->get_latest_posts();
            $latestPostsFiles = ModelFactory::model('User')->get_latest_posts_files();
            $postActions = ModelFactory::model('User')->get_post_actions();
            
            $data = array(
                'userInfo' => $userDetails['user_info'],
                'coyInfo' => $coyInfo, 
                'curInfo' => $curInfo['result_message'],
                'subPlans' => $subPlans['result_message'],
                'newActivityNotice' => $userDetails['newActivityNotice'], 
                'userOnlineStatus' => $userDetails['userOnlineStatus'], 
                'buddiesCount' => $userDetails['buddiesCount'], 
                'buddiesList' => $userDetails['buddies'], 
                'userLikesCount' => $userDetails['userLikesCount'], 
                'userViewsCount' => $userDetails['userViewsCount'], 
                'userNoticeCount' => $userDetails['userNoticeCount'], 
                'newMessageCount' => $userDetails['newMessageCount'],
                'newMessageDetails' => $userDetails['newMessageDetails'],
                'matchCount' => $userDetails['matchInfo'],
                'newChatCount' => $userDetails['newChatCount'],
                'newChatDetails' => $userDetails['newChatDetails'],
                'onlineNow' =>$userDetails['onlineNow'],
                'appSubPlan' => $userDetails['appSubPlan'],
                'userTrancInfo' => $userDetails['trancInfo'],
                'subPlan' => $userDetails['subPlan'],
                'userProfiles' => $userProfiles['user_profiles'], 
                'user_language' => $userDetails['user_language'],
                'user_interests' => $userDetails['user_interests'],
                'user_preference' => $userDetails['user_preference'],
                'postActions' => $postActions['post_interactions'], 
                'latestPosts' => $latestPosts['post_details'],
                'latestPostsFiles' => $latestPostsFiles['post_files'],
            );

            return $this->view('User/settings-page', $data); 
        }
    }




    // Members Preferences
    public function member_preferences()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        
        $data = array(
            'userInfo' => $userDetails['user_info'],
            'coyInfo' => $coyInfo, 
            'curInfo' => $curInfo['result_message'],
            'subPlans' => $subPlans['result_message'],
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'subPlan' => $userDetails['subPlan'],
            'user_language' => $userDetails['user_language'],
            'user_interests' => $userDetails['user_interests'],
            'user_preference' => $userDetails['user_preference'],
            'user_myself' => $userDetails['user_myself'],
            'userProfiles' => $userProfiles['user_profiles'], 
        );

        return $this->view('User/preferences-page', $data); 
    }




    // Members activity
    public function member_activity()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $activity = ModelFactory::model('User')->user_activity($info);
        $userProfiles = ModelFactory::model('User')->user_profiles();
        
        $data = array(
            'userInfo' => $userInfo,
            'coyInfo' => $coyInfo,
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' => $userDetails['onlineNow'],
            'subPlan' => $userDetails['subPlan'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'user_activity' => $activity['activity_info'],
            'userProfiles' => $userProfiles['user_profiles'], 
         );

        return $this->view('User/activity-page', $data); 
        
    }

    



    // Members notifications
    public function member_notifications()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $buddyActivity = ModelFactory::model('User')->buddy_activities($info);
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];
        
        $data = array(
            'userInfo' => $userInfo,
            'coyInfo' => $coyInfo,
            'curInfo' => $curInfo['result_message'],
            'subPlans' => $subPlans['result_message'],
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'buddyActivity' => $buddyActivity,
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
            'subPlan' => $userDetails['subPlan'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'userProfiles' => $userProfiles['user_profiles'], 
        );

        return $this->view('User/notification-page', $data); 
        
    }
  
      

      
    // Members messages
    public function member_messages()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );
          
        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $allMessageDetails = ModelFactory::model('User')->all_message_details($info);
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];
       
        $data = array(
            'userInfo' => $userInfo,
            'coyInfo' => $coyInfo,
            'curInfo' => $curInfo['result_message'],
            'subPlans' => $subPlans['result_message'],
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'subPlan' => $userDetails['subPlan'],
            'userProfiles' => $userProfiles['user_profiles'], 
            'msgs_senders' => $allMessageDetails['all_msgs']['msgList'],
            'msgs_details' => $allMessageDetails['all_msgs']['msgDetails'], 
           );
  
        return $this->view('User/messages-page', $data); 
          
    }
  
      

      
    // Members Buddy Chats
    public function member_chats()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
  
        if (isset($_POST['replychat'])) {

            $chatid = $v->clean($_POST['chatid']);
            $sender = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $receiver = $v->clean($_POST['receiver']);
            $details = $v->clean($_POST['details']);

            $extension = array("jpeg","jpg","png","JPEG","JPG","PNG");
            $folder = "Public/other_assets/Chats/";

            foreach($_FILES["postimage"]["tmp_name"] as $key => $tmp_name) {

                $file_name = $_FILES["postimage"]["name"][$key];
                $file_tmp = $_FILES["postimage"]["tmp_name"][$key];
                $ext = pathinfo($file_name,PATHINFO_EXTENSION);

                if (in_array($ext,$extension)) { 

                    if (!file_exists($folder.$file_name)) {

                        $target_file = $folder.$file_name;
                        move_uploaded_file($file_tmp, $target_file);

                        $allImages[] = $file_name;

                    } else {

                        $errorMsg = "Image(s) Already Exists In Storage, Select Another!";
                    /*else {
                        $filename=basename($file_name,$ext);
                        $newFileName=$filename.time().".".$ext;
                        $target_file = $folder.$newFileName;
                        move_uploaded_file($file_tmp, $target_file);

                        $allImages[] = $newFileName;
                    }*/
                    }
                } else {
                    $result = array('result_info' => array('type' => "error", 'message' => "Image(s) Must be JPEG, JPG Or PNG Format!", ), );
                }
            }
            
            $a9 = array('uniqueid' => $v->clean($id), 'sender' => $sender, 'receiver' => $receiver, 'username' => $username, 'chatid' => $chatid, 'file' => $allImages[0], 'details' => $details, );
            $buddyInfo = array('uniqueid' => $v->clean($id), 'buddyid' => $v->clean($_GET['buddy']), );
                
            $newChat = ModelFactory::model('User')->user_chat_reply($a9);
            //Get User Credentials
            $userDetails =$this->user_information($id); 
            $coyInfo = ModelFactory::model('Register')->coy_info();
            $userProfiles = ModelFactory::model('User')->user_profiles();
            
            //$user = json_decode($result, true);
            $userInfo = $userDetails['user_info'];
            
            $userMsgs = ModelFactory::model('User')->user_messages($buddyInfo);

            $data = array(
                'userInfo' => $userInfo,
                'coyInfo' => $coyInfo,
                'curInfo' => $curInfo['result_message'], 
                'subPlans' => $subPlans['result_message'],
                'newActivityNotice' => $userDetails['newActivityNotice'], 
                'userOnlineStatus' => $userDetails['userOnlineStatus'], 
                'buddiesCount' => $userDetails['buddiesCount'], 
                'buddiesList' => $userDetails['buddies'], 
                'userLikesCount' => $userDetails['userLikesCount'], 
                'userViewsCount' => $userDetails['userViewsCount'], 
                'userNoticeCount' => $userDetails['userNoticeCount'], 
                'newMessageCount' => $userDetails['newMessageCount'],
                'newMessageDetails' => $userDetails['newMessageDetails'],
                'matchCount' => $userDetails['matchInfo'],
                'newChatCount' => $userDetails['newChatCount'],
                'newChatDetails' => $userDetails['newChatDetails'],
                'onlineNow' =>$userDetails['onlineNow'],
                'appSubPlan' => $userDetails['appSubPlan'],
                'userTrancInfo' => $userDetails['trancInfo'],
                'subPlan' => $userDetails['subPlan'],
                'userProfiles' => $userProfiles['user_profiles'], 
                'userChats' => $userMsgs['user_chat_info'],
            );
      
            return $this->view('User/chats-page', $data);

        } elseif (isset($_GET['buddy'])) {
            
            $buddyInfo = array('uniqueid' => $v->clean($id), 'buddyid' => $v->clean($_GET['buddy']), );

            //Get User Credentials
            $userDetails =$this->user_information($id); 
            $coyInfo = ModelFactory::model('Register')->coy_info();
            $userProfiles = ModelFactory::model('User')->user_profiles();
            
            //$user = json_decode($result, true);
            $userInfo = $userDetails['user_info'];
            

            $userMsgs = ModelFactory::model('User')->user_messages($buddyInfo);
            
            $data = array(
                'userInfo' => $userInfo,
                'coyInfo' => $coyInfo,
                'curInfo' => $curInfo['result_message'], 
                'subPlans' => $subPlans['result_message'],
                'newActivityNotice' => $userDetails['newActivityNotice'], 
                'userOnlineStatus' => $userDetails['userOnlineStatus'], 
                'buddiesCount' => $userDetails['buddiesCount'], 
                'buddiesList' => $userDetails['buddies'], 
                'userLikesCount' => $userDetails['userLikesCount'], 
                'userViewsCount' => $userDetails['userViewsCount'], 
                'userNoticeCount' => $userDetails['userNoticeCount'], 
                'newMessageCount' => $userDetails['newMessageCount'],
                'newMessageDetails' => $userDetails['newMessageDetails'],
                'matchCount' => $userDetails['matchInfo'],
                'newChatCount' => $userDetails['newChatCount'],
                'newChatDetails' => $userDetails['newChatDetails'],
                'onlineNow' =>$userDetails['onlineNow'],
                'appSubPlan' => $userDetails['appSubPlan'],
                'userTrancInfo' => $userDetails['trancInfo'],
                'subPlan' => $userDetails['subPlan'],
                'userProfiles' => $userProfiles['user_profiles'], 
                'userChats' => $userMsgs['user_chat_info'],
            );
      
            return $this->view('User/chats-page', $data); 

        } 
          
        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $userMsgs = ModelFactory::model('User')->user_messages($info);
        
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];
     
        $data = array(
            'userInfo' => $userInfo,
            'coyInfo' => $coyInfo,
            'curInfo' => $curInfo['result_message'], 
            'subPlans' => $subPlans['result_message'],
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
           'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
           'subPlan' => $userDetails['subPlan'],
            'userProfiles' => $userProfiles['user_profiles'],  
            'userChats' => $userMsgs['user_chat_info'],
        );
  
        return $this->view('User/chats-page', $data); 
          
    }
      


    // Members Commenting On Post
    public function member_comment()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), 'postid' => $v->clean($_GET['id']), 'sender' => $v->clean($id), 'receiver' => $v->clean($_GET['by']), 'postedby' => $v->clean($_GET['by']), );
        $cmm = array('sender' => $v->clean($id), 'postid' => $v->clean($_GET['id']), 'uniqueid' => $v->clean($_GET['by']), 'receiver' => $v->clean($_GET['by']), 'commentid' => "", );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $randomBuddy = ModelFactory::model('User')->user_random_people($info);
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $postDetails = ModelFactory::model('User')->get_post($info);
        $latestPostsFiles = ModelFactory::model('User')->get_latest_posts_files();
        
        $postActions = ModelFactory::model('User')->get_post_actions();
        $commentChats = ModelFactory::model('User')->all_comment_chats($cmm);
        

        $data = array(
            'userInfo' => $userDetails['user_info'],
            'coyInfo' => $coyInfo, 
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'postActions' => $postActions['post_interactions'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'postDetails' => $postDetails['post_details'],
            'latestPostsFiles' => $latestPostsFiles['post_files'],
            'onlineNow' => $userDetails['onlineNow'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'subPlan' => $userDetails['subPlan'],
            'user_language' => $userDetails['user_language'],
            'user_interests' => $userDetails['user_interests'],
            'user_myself' => $userDetails['user_myself'],
            'user_preference' => $userDetails['user_preference'],
            'userProfiles' => $userProfiles['user_profiles'], 
            'randomBuddy' => $randomBuddy['buddy_info'],
            'commentChats' => $commentChats['comment_chats'],
           );
  
        return $this->view('User/comment-page', $data); 
          
    }
  
      
   
    
    // Members Commenting On Post
    public function member_message_reply()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), 'postid' => $v->clean($_GET['id']), 'sender' => $v->clean($_GET['by']),  'commentid' => $v->clean($_GET['cid']), 'receiver' => $v->clean($id), );

        $commentChats = ModelFactory::model('User')->all_comment_chats($info);
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();

        if (isset($_POST['respond'])) {
            $sender = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $receiver = $v->clean($_POST['receiver']);
            $postid = $v->clean($_POST['postid']);
            $commentid = $v->clean($_POST['commentid']);
            $details = $v->clean($_POST['details']);
            
            $a9 = array('uniqueid' => $v->clean($id), 'postid' => $v->clean($_GET['id']), 'sender' => $sender,  'commentid' => $v->clean($_GET['cid']), 'receiver' => $v->clean($_GET['by']), );
            $ai = array('sender' => trim($sender), 'receiver' => trim($receiver), 'commentid' => trim($commentid), 'details' => trim($details), 'postid' => trim($postid), 'uniqueid' => trim($sender), 'username' => trim($username), );
                
            $pass = ModelFactory::model('User')->user_post_comment($ai);
            $commentChats = ModelFactory::model('User')->all_comment_chats($a9);
            
        }
        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $randomBuddy = ModelFactory::model('User')->user_random_people($info);
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $postDetails = ModelFactory::model('User')->get_post($info);
        $latestPostsFiles = ModelFactory::model('User')->get_latest_posts_files();
        
        $postActions = ModelFactory::model('User')->get_post_actions();
        
        
        $data = array(
            'userInfo' => $userDetails['user_info'],
            'coyInfo' => $coyInfo, 
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'postActions' => $postActions['post_interactions'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'postDetails' => $postDetails['post_details'],
            'latestPostsFiles' => $latestPostsFiles['post_files'],
            'onlineNow' => $userDetails['onlineNow'],
            'subPlan' => $userDetails['subPlan'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'user_language' => $userDetails['user_language'],
            'user_interests' => $userDetails['user_interests'],
            'user_myself' => $userDetails['user_myself'],
            'user_preference' => $userDetails['user_preference'],
            'userProfiles' => $userProfiles['user_profiles'], 
            'randomBuddy' => $randomBuddy['buddy_info'],
            'commentChats' => $commentChats['comment_chats'],
           );
  
        return $this->view('User/message-reply-page', $data); 
          
    }
  


    
    // Members FAQs
    public function member_faqs()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];
        
        $data = array(
            'userInfo' => $userInfo,
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
           'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
           'subPlan' => $userDetails['subPlan'],
            'userProfiles' => $userProfiles['user_profiles'], 
        );

        return $this->view('User/faqs-page', $data); 
        
    }
 
     
    
    // Members Character Test
    public function member_character_test()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];
        
        $data = array(
            'userInfo' => $userInfo,
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'subPlan' => $userDetails['subPlan'],
            'userProfiles' => $userProfiles['user_profiles'], 
        );

        return $this->view('User/character-test-page', $data); 
        
    }
 
     
    
    // Members Subscription Plan
    public function member_subscription_plan()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id);
        $bankInfo = ModelFactory::model('Admin')->get_bank_info(); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];
        
        $data = array(
            'userInfo' => $userInfo,
            'coyInfo' => $coyInfo, 
            'bankInfo' => $bankInfo['result_message'],
            'curInfo' => $curInfo['result_message'], 
            'subPlans' => $subPlans['result_message'],
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
           'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
           'subPlan' => $userDetails['subPlan'],
            'userProfiles' => $userProfiles['user_profiles'], 
        );

        return $this->view('User/subscription-plan-page', $data); 
        
    }
 
  
     
    
    // Members Private Session
    public function member_private_session()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id);
        $bankInfo = ModelFactory::model('Admin')->get_bank_info(); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];
        
        $data = array(
            'userInfo' => $userInfo,
            'coyInfo' => $coyInfo, 
            'curInfo' => $curInfo['result_message'], 
            'subPlans' => $subPlans['result_message'],
            'bankInfo' => $bankInfo['result_message'], 
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
           'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
           'subPlan' => $userDetails['subPlan'],
            'userProfiles' => $userProfiles['user_profiles'],
        );

        return $this->view('User/private-session-page', $data); 
        
    }
 
     
    

  
    // Members News & Updates
    public function member_news_updates()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );

        //Get User Credentials
        $userDetails =$this->user_information($id);
        $bankInfo = ModelFactory::model('Admin')->get_bank_info(); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $exchangeInfo = ModelFactory::model('Admin')->get_exchange_info();
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];
        
        $data = array(
            'userInfo' => $userInfo,
            'coyInfo' => $coyInfo, 
            'curInfo' => $curInfo['result_message'], 
            'subPlans' => $subPlans['result_message'],
            'bankInfo' => $bankInfo['result_message'], 
            'exchangeInfo' => $exchangeInfo['result_message'], 
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
           'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
           'subPlan' => $userDetails['subPlan'],
            'userProfiles' => $userProfiles['user_profiles'],
        );

        return $this->view('User/news-updates-page', $data); 
        
    }
 
     
    
    
    // Members Subscription Payment
    public function member_subscription_payment()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );
        $mny = array('currency' => "Naira", );

        if (isset($_POST['payCard'])) {

            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $email = $v->clean($_POST['email']);
            $planid = $v->clean($_POST['planid']);
            $amt = $v->clean($_POST['amount']);
            $currency = $v->clean($_POST['currency']);

            $curRate = ModelFactory::model('User')->get_exchange_info($mny);
            
            $info = array('planid' => trim($planid), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
              //Call API Function
            $pass = ModelFactory::model('User')->user_card_payment($info);

            $rate = $curRate['post_details']['rate'];
            $mon = $amt; 
            $NGNamount = $mon * $rate;
            $chargeAmount = (1.5/100 * $NGNamount) + 100;
            $amount = $NGNamount + $chargeAmount;

            $in = array('uniqueid' => $uniqueid, 'username' => $username, 'name' => $username, 'plan' => $planid, 'amount' => $amount, 'email' => $email, 'details' => $pass['result_message']['details'], 'description' => $pass['result_message']['details'], 'type' => "Deposit", 'transaction_charge' => $chargeAmount, );

            //Connect To Payment Gateway
            $paymentAPI = $this->payment_api();
            $deposit = $paymentAPI->card_payment($in);
            $real = json_decode($deposit, true);

            if (isset($real['responseBody']) || isset($real['data'])) {
                
                if (isset($real['responseBody'])) {
                    $url = $real['responseBody']['checkoutUrl'];
                } else {
                    $url = $real['data']['authorization_url'];
                }
            }
            
             //Get User Credentials
            $userDetails =$this->user_information($id);
            $exchangeInfo = ModelFactory::model('Admin')->get_exchange_info();
            $bankInfo = ModelFactory::model('Admin')->get_bank_info(); 
            $coyInfo = ModelFactory::model('Register')->coy_info();
            $userProfiles = ModelFactory::model('User')->user_profiles();
            $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
            $curInfo = ModelFactory::model('Admin')->get_currency_info();
            //$user = json_decode($result, true);
            $userInfo = $userDetails['user_info'];

            $data = array(
                'paymentUrl' => $url,
                'userInfo' => $userInfo,
                'coyInfo' => $coyInfo, 
                'curInfo' => $curInfo['result_message'], 
                'subPlans' => $subPlans['result_message'],
                'bankInfo' => $bankInfo['result_message'], 
                'exchangeInfo' => $exchangeInfo['result_message'], 
                'newActivityNotice' => $userDetails['newActivityNotice'], 
                'userOnlineStatus' => $userDetails['userOnlineStatus'], 
                'buddiesCount' => $userDetails['buddiesCount'], 
                'buddiesList' => $userDetails['buddies'], 
                'userLikesCount' => $userDetails['userLikesCount'], 
                'userViewsCount' => $userDetails['userViewsCount'], 
                'userNoticeCount' => $userDetails['userNoticeCount'], 
                'newMessageCount' => $userDetails['newMessageCount'],
                'newMessageDetails' => $userDetails['newMessageDetails'],
                'matchCount' => $userDetails['matchInfo'],
                'newChatCount' => $userDetails['newChatCount'],
                'newChatDetails' => $userDetails['newChatDetails'],
                'onlineNow' =>$userDetails['onlineNow'],
                'appSubPlan' => $userDetails['appSubPlan'],
                'userTrancInfo' => $userDetails['trancInfo'],
                'subPlan' => $userDetails['subPlan'],
                'userProfiles' => $userProfiles['user_profiles'],
            );

            return $this->view('User/subscription-payment-page', $data); 

        }

        //Get User Credentials
        $userDetails =$this->user_information($id);
        $exchangeInfo = ModelFactory::model('Admin')->get_exchange_info();
        $bankInfo = ModelFactory::model('Admin')->get_bank_info(); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];

        $data = array(
            'userInfo' => $userInfo,
            'coyInfo' => $coyInfo, 
            'curInfo' => $curInfo['result_message'], 
            'subPlans' => $subPlans['result_message'],
            'bankInfo' => $bankInfo['result_message'], 
            'exchangeInfo' => $exchangeInfo['result_message'], 
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'subPlan' => $userDetails['subPlan'],
            'userProfiles' => $userProfiles['user_profiles'],
        );

        return $this->view('User/subscription-payment-page', $data); 
        
    }
 


    // Members Subscription Payment
    public function member_transactions()
    {
        $v = new Validate();
        $id = $this->get_id();
        $info = array('uniqueid' => $v->clean($id), );
        $mny = array('currency' => "Naira", );

        if (isset($_POST['payCard'])) {

            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $email = $v->clean($_POST['email']);
            $planid = $v->clean($_POST['id']);
            $amt = $v->clean($_POST['amount']);
            $currency = $v->clean($_POST['currency']);

            $curRate = ModelFactory::model('User')->get_exchange_info($mny);
            
            $info = array('id' => trim($planid), 'status' => "Processing", 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
              //Call API Function
            $pass = ModelFactory::model('User')->user_recur_payment($info);

            $rate = $curRate['post_details']['rate'];
            $mon = $amt; 
            $NGNamount = $mon * $rate;
            $chargeAmount = (1.5/100 * $NGNamount) + 100;
            $amount = $NGNamount + $chargeAmount;

            $in = array('uniqueid' => $uniqueid, 'username' => $username, 'name' => $username, 'plan' => $planid, 'amount' => $amount, 'email' => $email, 'details' => $pass['details'], 'description' => $pass['details'], 'type' => "Deposit", 'transaction_charge' => $chargeAmount, );

            //Connect To Payment Gateway
            $paymentAPI = $this->payment_api();
            $deposit = $paymentAPI->card_payment($in);
            $real = json_decode($deposit, true);

            if (isset($real['responseBody']) || isset($real['data'])) {
                
                if (isset($real['responseBody'])) {
                    $url = $real['responseBody']['checkoutUrl'];
                } else {
                    $url = $real['data']['authorization_url'];
                }
            }
            
             //Get User Credentials
            $userDetails =$this->user_information($id);
            $exchangeInfo = ModelFactory::model('Admin')->get_exchange_info();
            $bankInfo = ModelFactory::model('Admin')->get_bank_info(); 
            $coyInfo = ModelFactory::model('Register')->coy_info();
            $userProfiles = ModelFactory::model('User')->user_profiles();
            $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
            $curInfo = ModelFactory::model('Admin')->get_currency_info();
            //$user = json_decode($result, true);
            $userInfo = $userDetails['user_info'];

            $data = array(
                'paymentUrl' => $url,
                'userInfo' => $userInfo,
                'coyInfo' => $coyInfo, 
                'curInfo' => $curInfo['result_message'], 
                'subPlans' => $subPlans['result_message'],
                'bankInfo' => $bankInfo['result_message'], 
                'exchangeInfo' => $exchangeInfo['result_message'], 
                'newActivityNotice' => $userDetails['newActivityNotice'], 
                'userOnlineStatus' => $userDetails['userOnlineStatus'], 
                'buddiesCount' => $userDetails['buddiesCount'], 
                'buddiesList' => $userDetails['buddies'], 
                'userLikesCount' => $userDetails['userLikesCount'], 
                'userViewsCount' => $userDetails['userViewsCount'], 
                'userNoticeCount' => $userDetails['userNoticeCount'], 
                'newMessageCount' => $userDetails['newMessageCount'],
                'newMessageDetails' => $userDetails['newMessageDetails'],
                'matchCount' => $userDetails['matchInfo'],
                'newChatCount' => $userDetails['newChatCount'],
                'newChatDetails' => $userDetails['newChatDetails'],
                'onlineNow' =>$userDetails['onlineNow'],
                'appSubPlan' => $userDetails['appSubPlan'],
                'userTrancInfo' => $userDetails['trancInfo'],
                'subPlan' => $userDetails['subPlan'],
                'userProfiles' => $userProfiles['user_profiles'],
            );

            return $this->view('User/transactions-page', $data); 

        }

        //Get User Credentials
        $userDetails =$this->user_information($id);
        $bankInfo = ModelFactory::model('Admin')->get_bank_info(); 
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        $subPlans = ModelFactory::model('Admin')->get_subscription_plan();
        $curInfo = ModelFactory::model('Admin')->get_currency_info();
        $exchangeInfo = ModelFactory::model('Admin')->get_exchange_info();
        //$user = json_decode($result, true);
        $userInfo = $userDetails['user_info'];
        
        $data = array(
            'userInfo' => $userInfo,
            'coyInfo' => $coyInfo, 
            'curInfo' => $curInfo['result_message'], 
            'subPlans' => $subPlans['result_message'],
            'bankInfo' => $bankInfo['result_message'], 
            'exchangeInfo' => $exchangeInfo['result_message'], 
            'newActivityNotice' => $userDetails['newActivityNotice'], 
            'userOnlineStatus' => $userDetails['userOnlineStatus'], 
            'buddiesCount' => $userDetails['buddiesCount'], 
            'buddiesList' => $userDetails['buddies'], 
            'userLikesCount' => $userDetails['userLikesCount'], 
            'userViewsCount' => $userDetails['userViewsCount'], 
            'userNoticeCount' => $userDetails['userNoticeCount'], 
            'newMessageCount' => $userDetails['newMessageCount'],
            'newMessageDetails' => $userDetails['newMessageDetails'],
            'matchCount' => $userDetails['matchInfo'],
            'newChatCount' => $userDetails['newChatCount'],
            'newChatDetails' => $userDetails['newChatDetails'],
            'onlineNow' =>$userDetails['onlineNow'],
            'appSubPlan' => $userDetails['appSubPlan'],
            'userTrancInfo' => $userDetails['trancInfo'],
            'subPlan' => $userDetails['subPlan'],
            'userProfiles' => $userProfiles['user_profiles'],
        );

        return $this->view('User/transactions-page', $data); 
        
    }
 
     
   









     
   

















   
    

















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





    // Members Information
    public function user_information($id)
    {
        $v = new Validate();
        $info = array('uniqueid' => $v->clean($id), );

        $onlineNow = ModelFactory::model('User')->online_now_count();
        $userOnlineStatus = ModelFactory::model('User')->users_online_status();

        //Get User Credentials
        $userDetails = ModelFactory::model('User')->user_info($info);
        $userViewsCount = ModelFactory::model('User')->count_user_views($info);
        $userLikesCount = ModelFactory::model('User')->count_user_likes($info);
        $newActivityNotice = ModelFactory::model('User')->new_user_activity($info);
        $userNoticeCount = ModelFactory::model('User')->count_user_activity($info);
        $newMessageCount = ModelFactory::model('User')->new_message_count($info);
        $newMessageDetails = ModelFactory::model('User')->new_message_details($info);
        $newChatCount = ModelFactory::model('User')->new_chat_count($info);
        $newChatDetails = ModelFactory::model('User')->new_chat_details($info);
        $language = ModelFactory::model('User')->user_language($info); 
        $interests = ModelFactory::model('User')->user_interests($info); 
        $preference = ModelFactory::model('User')->user_preference($info);
        $myself = ModelFactory::model('User')->user_myself($info);
        $buddiesList = ModelFactory::model('User')->user_buddies_list($info);
        $buddiesCount = ModelFactory::model('User')->user_buddies_count($info);
        $matchInfo = ModelFactory::model('User')->user_find_people($info);
        $subPlan = ModelFactory::model('User')->user_subscription_plan($info);
        $appSubPlan = ModelFactory::model('Admin')->get_subscription_info();
        $trancInfo = ModelFactory::model('User')->user_transactions_info($info);
        
        $data = array(
            
            'user_myself' => $myself['myself_info'],
            'user_info' => $userDetails['user_info'],
            'user_language' => $language['language_info'],
            'buddies' => $buddiesList['buddiesList_info'],
            'user_interests' => $interests['interests_info'],
            'user_preference' => $preference['preference_info'],
            'buddiesCount' => $buddiesCount['buddiesCount_info'],
            'userOnlineStatus' => $userOnlineStatus['users_status'],
            'newActivityNotice' => $newActivityNotice['notification_info'], 
            'newMessageCount' => $newMessageCount['newmsg_count'], 
            'newMessageDetails' => $newMessageDetails['newmsg_details'],
            'newChatCount' => $newChatCount['newchat_count'], 
            'newChatDetails' => $newChatDetails['newchat_details'],
            'matchInfo' => $matchInfo['people_info']['slightlyClose'],
            'subPlan' => $subPlan['result_message'], 
            'appSubPlan' => $appSubPlan['result_message'],
            'trancInfo' => $trancInfo['result_message'],
            'onlineNow' => $onlineNow,
            'userNoticeCount' => $userNoticeCount,
            'userLikesCount' => $userLikesCount,
            'userViewsCount' => $userViewsCount,
        );

        return $data; 
    }





















 


    //Create Interest route
    public function ajax_interest()
    {
        $v = new Validate();

        if (($_POST['interest']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $interest = $v->clean($_POST['interest']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('interest' => trim($interest), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $interest = ModelFactory::model('User')->new_interest($info);
            //var_dump($interest);
            echo $interest;
        }
    }



    //Create Language route
    public function ajax_language()
    {
        $v = new Validate();

        if (($_POST['lang']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $lang = $v->clean($_POST['lang']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('lang' => trim($lang), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $language = ModelFactory::model('User')->new_language($info);
            //var_dump($language);
            echo $language;
        }
    }


    
    //Create Work & Education route
    public function ajax_workneducation()
    {
        $v = new Validate();

        if (($_POST['workeduname']!="") && ($_POST['workedufrom']!="")) {
            // code...
            $name = $v->clean($_POST['workeduname']);
            $category = $v->clean($_POST['cat']);
            $from = $v->clean($_POST['workedufrom']);
            $to = $v->clean($_POST['workeduto']);
            $details = $v->clean($_POST['workedudetails']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('name' => trim($name), 'category' => trim($category), 'from' => trim($from),'to' => trim($to), 'details' => trim($details), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $workedu = ModelFactory::model('User')->new_workneducation($info);
            //var_dump($info);
            echo $workedu;
        }
    }



    
    //Create Self Details route
    public function ajax_myself()
    {
        $v = new Validate();

        if (($_POST['mydetails']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $myorientation = $v->clean($_POST['myorientation']);
            $myheight = $v->clean($_POST['myheight']);
            $myweight = $v->clean($_POST['myweight']);
            $mybodytype = $v->clean($_POST['mybodytype']);
            $myseeking = $v->clean($_POST['myseeking']);
            $myethnicity = $v->clean($_POST['myethnicity']);
            $myreligion = $v->clean($_POST['myreligion']);
            $mypets = $v->clean($_POST['mypets']);
            $mydates = $v->clean($_POST['mydates']);
            $myhavekids = $v->clean($_POST['myhavekids']);
            $mywantkids = $v->clean($_POST['mywantkids']);
            $mymaritalstatus = $v->clean($_POST['mymaritalstatus']);
            $mydress = $v->clean($_POST['mydress']);
            $myeating = $v->clean($_POST['myeating']);
            $mysmoking = $v->clean($_POST['mysmoking']);
            $mydrinking = $v->clean($_POST['mydrinking']);
            $mycomplexion = $v->clean($_POST['mycomplexion']);
            $myemployment = $v->clean($_POST['myemployment']);
            $mydetails = $v->clean($_POST['mydetails']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $myinfo = array('orientation' => trim($myorientation), 'height' => trim($myheight), 'weight' => trim($myweight),'bodytype' => trim($mybodytype), 'seeking' => trim($myseeking), 'ethnicity' => trim($myethnicity), 'religion' => trim($myreligion), 'pets' => trim($mypets), 'dates' => trim($mydates), 'havekids' => trim($myhavekids), 'wantkids' => trim($mywantkids), 'maritalstatus' => trim($mymaritalstatus), 'dress' => trim($mydress), 'eating' => trim($myeating), 'smoking' => trim($mysmoking), 'drinking' => trim($mydrinking), 'color' => trim($mycomplexion), 'employment' => trim($myemployment), 'details' => trim($mydetails), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $workedu = ModelFactory::model('User')->update_myself($myinfo);
            //var_dump($info);
            echo $workedu;
        }
    }



    
    //Create Self Details route
    public function ajax_preference()
    {
        $v = new Validate();

        if (($_POST['uniqueid']!="") && ($_POST['prefdetails']!="")) {
            // code...
            $prefgender = $v->clean($_POST['prefgender']);
            $preforientation = $v->clean($_POST['preforientation']);
            $prefheight = $v->clean($_POST['prefheight']);
            $prefweight = $v->clean($_POST['prefweight']);
            $prefbodytype = $v->clean($_POST['prefbodytype']);
            $prefseeking = $v->clean($_POST['prefseeking']);
            $prefethnicity = $v->clean($_POST['prefethnicity']);
            $prefreligion = $v->clean($_POST['prefreligion']);
            $prefpets = $v->clean($_POST['prefpets']);
            $prefdates = $v->clean($_POST['prefdates']);
            $prefhavekids = $v->clean($_POST['prefhavekids']);
            $prefwantkids = $v->clean($_POST['prefwantkids']);
            $prefmaritalstatus = $v->clean($_POST['prefmaritalstatus']);
            $prefdress = $v->clean($_POST['prefdress']);
            $prefeating = $v->clean($_POST['prefeating']);
            $prefsmoking = $v->clean($_POST['prefsmoking']);
            $prefdrinking = $v->clean($_POST['prefdrinking']);
            $prefcomplexion = $v->clean($_POST['prefcomplexion']);
            $prefemployment = $v->clean($_POST['prefemployment']);
            $prefdetails = $v->clean($_POST['prefdetails']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $mypref = array('gender' => trim($prefgender), 'orientation' => trim($preforientation), 'height' => trim($prefheight), 'weight' => trim($prefweight),'bodytype' => trim($prefbodytype), 'seeking' => trim($prefseeking), 'ethnicity' => trim($prefethnicity), 'religion' => trim($prefreligion), 'pets' => trim($prefpets), 'dates' => trim($prefdates),  'havekids' => trim($prefhavekids), 'wantkids' => trim($prefwantkids), 'maritalstatus' => trim($prefmaritalstatus), 'dress' => trim($prefdress), 'eating' => trim($prefeating), 'smoking' => trim($prefsmoking), 'drinking' => trim($prefdrinking), 'color' => trim($prefcomplexion), 'employment' => trim($prefemployment), 'details' => trim($prefdetails), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $workedu = ModelFactory::model('User')->update_preference($mypref);
            //var_dump($info);
            echo $workedu;

        } 
    }



    //Create Location route
    public function ajax_location()
    {
        $v = new Validate();

        if (($_POST['city']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $address = $v->clean($_POST['address']);
            $city = $v->clean($_POST['city']);
            $country = $v->clean($_POST['country']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('address' => trim($address), 'city' => trim($city),'country' => trim($country), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $location = ModelFactory::model('User')->new_location($info);
            //var_dump($location);
            echo $location;
        }
    }



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
            $details = $v->clean($_POST['biodetails']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('details' => trim($details), 'occupation' => trim($occupation), 'gender' => trim($gender), 'dob' => trim($dob), 'lname' => trim($lname), 'fname' => trim($fname),'number' => trim($number), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $location = ModelFactory::model('User')->update_bio($info);
            //var_dump($location);
            echo $location;
        }
    }


    //Create Password Change route
    public function ajax_password_change()
    {
        $v = new Validate();

        if (($_POST['oldpass']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $oldpass = $v->clean($_POST['oldpass']);
            $newpass = $v->clean($_POST['newpass']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('oldpass' => trim($oldpass), 'newpass' => trim($newpass), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->update_password($info);

            echo $pass;
        }
    }


    //Create Photo Change route
    public function ajax_profile_photo()
    {
        $v = new Validate();

        if (($_POST['profileimage']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $type = "Profile";
            // File name
            $value = $_FILES['profileimage']['name'];
            $temp = $_FILES['profileimage']['tmp_name'];

            $image = $this->uploadFile($type, $value, $temp);

            $info = array('type' => $image['fileType'], 'profileimage' => trim($image['pics']), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->upload_profile_photo($info);
            //var_dump($info);
            echo $info;
        }
    }





    //Create Photo Change route
    public function ajax_cover_photo()
    {
        $v = new Validate();

        if (($_POST['coverimage']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            // File name
            $file = $_FILES['coverimage']['name'];
            //Temp Name
            $temp = $_FILES['coverimage']['tmp_name'];
            $type = "Cover";

            $image = $this->uploadFile($type, $file, $temp);

            $info = array('type' => $image['fileType'], 'coverimage' => trim($image['pics']), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->upload_cover_photo($info);

            echo $pass;
        }
    }





    //Create Password Change route
    public function ajax_send_buddy_request()
    {
        $v = new Validate();

        if (($_POST['buddyid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $buddyid = $v->clean($_POST['buddyid']);
            $buddyname = $v->clean($_POST['buddyname']);
            $request = $v->clean($_POST['re']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('request' => trim($request), 'buddyid' => trim($buddyid), 'buddyname' => trim($buddyname), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->user_add_buddy($info);

            echo $pass;
        }
    }




    //Create Password Change route
    public function ajax_accept_buddy_request()
    {
        $v = new Validate();

        if (($_POST['buddyid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $buddyid = $v->clean($_POST['buddyid']);
            $buddyname = $v->clean($_POST['buddyname']);
            $request = $v->clean($_POST['re']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('request' => trim($request), 'buddyid' => trim($buddyid), 'buddyname' => trim($buddyname), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->user_accept_buddy($info);

            echo $pass;
        }
    }
    



    //Create Password Change route
    public function ajax_send_buddy_action()
    {
        $v = new Validate();

        if (($_POST['buddyid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $buddyid = $v->clean($_POST['buddyid']);
            $buddyname = $v->clean($_POST['buddyname']);
            $action = $v->clean($_POST['act']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('action' => trim($action), 'uniqueid' => trim($buddyid), 'buddyname' => trim($buddyname), 'viewerid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->user_buddy_action($info);

            echo $pass;
        }
    }



    //Ajax Post View Create route
    public function ajax_post_view()
    {
        $v = new Validate();

        if (($_POST['postid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $postid = $v->clean($_POST['postid']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('postid' => trim($postid), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->user_post_view($info);

            echo $pass;
        }
    }




    //Ajax Post View Create route
    public function ajax_post_actions()
    {
        $v = new Validate();

        if (($_POST['postid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $postid = $v->clean($_POST['postid']);
            $postedby = $v->clean($_POST['postedby']);
            $action = $v->clean($_POST['action']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('action' => trim($action), 'postid' => trim($postid), 'postedby' => trim($postedby), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->user_post_action($info);

            echo $pass;
        }
    }




    //Ajax Post Comments route
    public function ajax_post_comment()
    {
        $v = new Validate();

        if (($_POST['postid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $postid = $v->clean($_POST['postid']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $sender = $v->clean($_POST['sender']);
            $receiver = $v->clean($_POST['receiver']);
            $username = $v->clean($_POST['username']);
            $commentid = $v->clean($_POST['commentid']);
            $details = $v->clean($_POST['details']);

            $info = array('sender' => trim($sender), 'receiver' => trim($receiver), 'commentid' => trim($commentid), 'details' => trim($details), 'postid' => trim($postid), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            
            //Call API Function
            $pass = ModelFactory::model('User')->user_post_comment($info);

            echo $pass;
        }
    }

      



    //Ajax Report Post route
    public function ajax_report_post()
    {
        $v = new Validate();

        if (($_POST['postid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $postid = $v->clean($_POST['postid']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $reason = $v->clean($_POST['reason']);

            $info = array('postid' => trim($postid), 'reason' => trim($reason), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->user_post_report($info);

            echo $pass;
        }
    }



    //Ajax Make Payment route
    public function ajax_make_payment()
    {
        $v = new Validate();

        if (($_POST['planid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $planid = $v->clean($_POST['planid']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('planid' => trim($planid), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->user_make_payment($info);
            //var_dump($pass);
            echo $pass;
        }
    }




    //Ajax Notification Status route
    public function ajax_notify_status()
    {
        $v = new Validate();

        if (($_POST['id']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $id = $v->clean($_POST['id']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $status = $v->clean($_POST['status']);

            $info = array('status' => trim($status), 'id' => trim($id), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->update_notification_status($info);
            //var_dump($pass);
            echo $pass;
        }
    }





    //Ajax Notification Status route
    public function ajax_activity_status()
    {
        $v = new Validate();

        if (($_POST['id']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $id = $v->clean($_POST['id']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);
            $status = $v->clean($_POST['status']);

            $info = array('status' => trim($status), 'id' => trim($id), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->update_activity_status($info);
                //var_dump($pass);
            echo $pass;
        }
    }





    //Ajax Report Post route
    public function ajax_delete_post()
    {
        $v = new Validate();

        if (($_POST['postid']!="") && ($_POST['uniqueid']!="")) {
            // code...
            $postid = $v->clean($_POST['postid']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $username = $v->clean($_POST['username']);

            $info = array('status' => "Trash", 'postid' => trim($postid), 'uniqueid' => trim($uniqueid), 'username' => trim($username), );
            //Call API Function
            $pass = ModelFactory::model('User')->user_post_delete($info);

            echo $pass;
        }
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





    //Get Payment Gateway
    protected function payment_api()
    {
        $allAPI = ModelFactory::model('User')->card_payment_info();

        foreach ($allAPI['post_details'] as $key => $value) {

            if ($value['name'] == "Paystack" && $value['status'] == "Active") {
                // code...
                $id = new Paystack();
                return $id;
            } elseif ($value['name'] == "Monnify" && $value['status'] == "Active") {
                // code...
                //$id = new Monnify();
                //return $id;
            }
        }
        //Return Value
        
    }













/**
 * End Of User Controller
 */
}
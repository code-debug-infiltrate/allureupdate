<?php 

namespace App\Controllers;

use Config\Controller;
use Config\Validate;
use Config\ModelFactory;

/**
 * Homepage Controller
 */
class HomeController extends Controller
{


    /**
     * Display method for static route
     */
    public function index()
    {
        $this->visitor_details();
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $blogPosts = ModelFactory::model('User')->get_latest_blog_posts();
        $blogPostsAction = ModelFactory::model('User')->get_blog_posts_actions();
        $userProfiles = ModelFactory::model('User')->user_profiles();

        $data = array(
            'coyInfo' => $coyInfo, 
            'blogPosts' => $blogPosts, 
            'blogPostsAction' => $blogPostsAction,
            'userProfiles' => $userProfiles['user_profiles'],
        );

        $this->view('Front/index-page', $data);
    }




    /**
     * Display method for static route
     */
    public function about_us()
    {
        $coyInfo = ModelFactory::model('Register')->coy_info();
     
        $data = array(
            'coyInfo' => $coyInfo, 
        );

        $this->view('Front/about-us-page', $data);
    }



    /**
     * Display method for static route
     */
    public function how_it_works()
    {
        $coyInfo = ModelFactory::model('Register')->coy_info();
     
        $data = array(
            'coyInfo' => $coyInfo, 
        );

        $this->view('Front/how-it-works-page', $data);
    }




    /**
     * Display method for static route
     */
    public function safety_security()
    {
        $coyInfo = ModelFactory::model('Register')->coy_info();
     
        $data = array(
            'coyInfo' => $coyInfo, 
        );

        $this->view('Front/safety-security-page', $data);
    }




     /**
     * Display method for static route
     */
    public function blognews_update()
    {
        $this->visitor_details();
        $v = new Validate();
        //Parse URL
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $u = explode("/", $url);
        //Clean Input
        $lv1 = $v->clean($u[2]);
        $postid = str_replace("-", " ", trim($lv1));

        $cat = array('category' => $postid, );

        $coyInfo = ModelFactory::model('Register')->coy_info();
        $blogPosts = ModelFactory::model('User')->get_random_blog_posts($cat);
        $blogPostsAction = ModelFactory::model('User')->get_blog_posts_actions();
        $userProfiles = ModelFactory::model('User')->user_profiles();

        $data = array(
            'coyInfo' => $coyInfo, 
            'blogPosts' => $blogPosts,
            'blogPostsAction' => $blogPostsAction,
            'userProfiles' => $userProfiles['user_profiles'],
        );
        
        $this->view('Front/blog-home-page', $data);
    }





    /**
     * Display method for static route
     */
    public function blogpost_details()
    {
        $v = new Validate();
        //Parse URL
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $u = explode("/", $url);
        //Clean Input
        $postid = $v->clean($u[2]);
        $lv1 = $v->clean($u[3]);
        $lv2 = str_replace("-", " ", trim($lv1)); 

        $cat = array('category' => $lv2, );
        
        //$postid => $v->clean($_GET['id']);
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $userProfiles = ModelFactory::model('User')->user_profiles();
        
        $info = array('postid' => $postid, );
                           ModelFactory::model('User')->blog_post_views($info);
        $blogPostDetails = ModelFactory::model('User')->blog_post_details($info);

        $blogRandomPosts = ModelFactory::model('User')->get_random_blog_posts($cat);
        $blogLatestPosts = ModelFactory::model('User')->get_latest_blog_posts();
        $blogPostsAction = ModelFactory::model('User')->get_blog_posts_actions();
      
        $data = array(
            'coyInfo' => $coyInfo, 
            'blogRandomPosts' => $blogRandomPosts,
            'blogLatestPosts' => $blogLatestPosts,
            'blogPostDetails' => $blogPostDetails,
            'blogPostsAction' => $blogPostsAction,
            'userProfiles' => $userProfiles['user_profiles'],
        );
        
        $this->view('Front/blog-post-details', $data);
    }




     /**
     * Display method for static route
     */
    public function contact_us()
    {
        $coyInfo = ModelFactory::model('Register')->coy_info();
     
        $data = array(
            'coyInfo' => $coyInfo, 
        );

        $this->view('Front/contact-us-page', $data);
    }




     /**
     * Display method for static route
     */
    public function faqs()
    {
        $coyInfo = ModelFactory::model('Register')->coy_info();

        $data = array(
            'coyInfo' => $coyInfo, 
        );

        $this->view('Front/faqs-page', $data);
    }




     /**
     * Display method for static route
     */
    public function privacy_policy()
    {
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $data = array(
            'coyInfo' => $coyInfo, 
        );

        $this->view('Front/privacy-policy-page', $data);
    }




    /**
     * Display method for static route
     */
    public function testimonials()
    {
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $data = array(
            'coyInfo' => $coyInfo, 
        );

        $this->view('Front/testimonials-page', $data);
    }




    /**
     * Display method for static route
     */
    public function love_story()
    {
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $data = array(
            'coyInfo' => $coyInfo, 
        );

        $this->view('Front/love-story-page', $data);
    }




     /**
     * Display method for static route
     */
    public function terms_of_service()
    {
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $data = array(
            'coyInfo' => $coyInfo, 
        );

        $this->view('Front/terms-of-service-page', $data);
    }




    /**
     * Display method for static route
     */
    public function private_session()
    {
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $data = array(
            'coyInfo' => $coyInfo, 
        );

        $this->view('Front/private-session-page', $data);
    }








    /**
     * Display method for static route
     */
    public function mobile_view()
    {
        $coyInfo = ModelFactory::model('Register')->coy_info();
        $data = array(
            'coyInfo' => $coyInfo, 
        );

        $this->view('Front/mobile-view', $data);
    }
















    protected function visitor_details()
    {
        //Location
        $ip = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        //User Current Page
        $page = $_SERVER['SCRIPT_NAME'];
        //$query_string = $_SERVER['QUERY_STRING'];
        //$current_page = $page."?".$query_string;
        //Time
        date_default_timezone_set('UTC');
        $date = date("Y-m-d");
        $time = date("H:i:s");

        //Capture Visitor IP Address
        $info = array('ip' => $ip, 'user_agent' => $user_agent, 'page' => $page, 'date' => $date, 'time' => $time, );
        
        ModelFactory::model('Register')->visitor_info($info);
    }





























   //Subscribe To Newsletter
   public function ajax_subscribe()
   {
       $v = new Validate();

       if ($_POST['email']!="") {
           //Get form inputs
           $e = $v->clean($_POST['email']);
           $ip = $v->clean($_POST['ip']);
           $ua = $v->clean($_POST['ua']);

           $info = array('email' => trim($e), 'ip' => $ip, 'user_agent' => $ua,);
           //Call API Function
           $member = ModelFactory::model('Register')->confirm_subscriber($info);
           
           echo $member;
       }
   }





   //Subscribe To Newsletter
   public function ajax_blog_post_action()
   {
       $v = new Validate();

       if ($_POST['status']!="") {
           //Get form inputs
           $e = $v->clean($_POST['status']);
           $ip = $v->clean($_POST['postid']);

           $info = array('status' => trim($e), 'postid' => $ip, );
           //Call API Function
           $member = ModelFactory::model('User')->blog_post_action($info);
           
           echo $member;
       }
   }

   


   //Contact Us Ajax
   public function ajax_contact()
   {
       $v = new Validate();

       if (($_POST['email']!="") && ($_POST['fname']!="") && ($_POST['phone']!="")) {

           //Get form inputs
           $fname = $v->clean($_POST['fname']);
           $lname = $v->clean($_POST['lname']);
           $email = $v->clean($_POST['email']);
           $phone = $v->clean($_POST['phone']);
           $subject = $v->clean($_POST['subject']);
           $msg = $v->clean($_POST['msg']);
           $ip = $v->clean($_POST['ip']);
           $ua = $v->clean($_POST['ua']);

           $info = array('fname' => trim($fname), 'lname' => trim($lname), 'email' => trim($email), 'phone' => trim($phone), 'subject' => trim($subject), 'details' => $msg, 'ip' => $ip, 'user_agent' => $ua,);
           
           //Call API Function
           $member = ModelFactory::model('Register')->contact_us($info);
           
           echo $member;
       }
   }
   
   

   


   //Front Search Ajax
   public function ajax_front_search()
   {
       $v = new Validate();

       if ($_POST['search']!="") {

           //Get form inputs
           $title = $v->clean($_POST['search']);

           $info = array('title' => trim($title),);
           
           //Call API Function
           $member = ModelFactory::model('user')->search_info($info);
           
           echo $member;
       }
   }
   
   



















    /**
     * Display method for dynamic route
     * 
     * @param $dynamo
     */
    public function realDynamo($dynamo)
    {
        $data['dynamo'] = $dynamo;

        $this->view('dynamic', $data);
    }
}

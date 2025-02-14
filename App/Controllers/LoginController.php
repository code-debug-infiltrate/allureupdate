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

/**
 * LoginController
 */
class LoginController extends Controller
{



    //Log Members To Dashboard
    public function member_area()
    {
        $v = new Validate();

        $data = array( );

        return $this->view('Front/Auth/index', $data); 

    }





    //Log Members To Dashboard
    public function ajax_login()
    {
        $v = new Validate();

        if (($_POST['email']!="") && ($_POST['password']!="")) {
            //Get form inputs
            $e = $v->clean($_POST['email']);
            $p = $v->clean($_POST['password']);
            $ip = $v->clean($_POST['ip']);
            $ua = $v->clean($_POST['ua']);

            $info = array('email' => trim($e), 'password' => trim($p), 'ip' => $ip, 'user_agent' => $ua,);
            //Call API Function
            $member = ModelFactory::model('Login')->confirm_login($info);
            
            echo $member;
        }
    }
    
    
    
    
    
    
    







    //Forgot Password For Members
    public function forgot_password()
    {           
        $data = array( );
        $this->view('Front/Auth/forgot-password', $data);
    
    }
  

    //Display Forgot Password route
    public function ajax_forgotpassword()
    {
        $v = new Validate();

        if ($_POST['email']!="") {
            // code...
            $e = $v->clean($_POST['email']);
            $ip = $v->clean($_POST['ip']);
            $ua = $v->clean($_POST['ua']);

            $info = array('email' => trim($e), 'ip' => $ip, 'user_agent' => $ua,);
            //Call API Function
            $member = ModelFactory::model('Login')->forgot_password($info);
            
            echo $member;
        }
    }









    //Reset Password For Members
    public function reset_password()
    {           
        $data = array( );
        $this->view('Front/Auth/reset-password', $data);
    
    }
  

    //Display Reset Password route
    public function ajax_resetpassword()
    {
        $v = new Validate();

        if (($_POST['email']!="") && ($_POST['code']!="") && ($_POST['password']!="")) {
            // code...
            $email = $v->clean($_POST['email']);
            $password = $v->clean($_POST['password']);
            $code = $v->clean($_POST['code']);

            $info = array('email' => trim($email), 'code' => trim($code), 'password' => trim($password), );
            //Call API Function
            $member = ModelFactory::model('Login')->reset_password($info);
            
            echo $member;
        }
    }









//Display Unlock route
    public function unlock_member()
    {
        $v = new Validate();
        
        if (isset($_POST['unlock'])) {
                // code...
            $code = $v->clean($_POST['code']);
            $uniqueid = $v->clean($_POST['uniqueid']);
            $email = $v->clean($_POST['email']);

            $info = array('code' => trim($code), 'uniqueid' => $uniqueid,);

            $result = ModelFactory::model('Login')->member_unlock($info);

           if (isset($result['type'])) {

                $data = array(
                    'id' => $uniqueid,
                     'user' => $email,
                    'type' => "error",
                    'message' => "Wrong Or Expired Code Combination",
                );

                $this->view('Front/Auth/unlock', $data);
            }

        } else {

            $data = array( ); 

            $this->view('Front/Auth/unlock', $data);
        }
    }
  








//Display Logout route
    public function member_logout()
    {
       $v = new Validate();
       $id = $this->get_id();
       $uid = array('uniqueid' => $v->clean($id), );
       
        $result = ModelFactory::model('Login')->end_session($uid);
       
        $data = array(
            "type" => $result['result_info']['type'],
            "message" => $result['result_info']['message']
        );

        $this->view('Front/Auth/index', $data);
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
























/**
 * End Of Login Controller
 */
}
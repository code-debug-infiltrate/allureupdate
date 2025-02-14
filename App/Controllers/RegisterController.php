<?php 

/*
|----------------------------------------------
| Controller Configuration
|----------------------------------------------
| Here is where you can configure all logics for your application.
*/
namespace App\Controllers;

require 'vendor/autoload.php';

use Config\Validate;
use Config\Controller;
use Config\ModelFactory;


class RegisterController extends Controller
{



    //Display Register route
    public function new_membership()
    {
        $v = new Validate();
        $data = array(); 
        $this->view('Front/Auth/register', $data);
    }



    //Display Register route
    public function ajax_membership()
    {
        $v = new Validate();

        if (($_POST['fname']!="") && ($_POST['email']!="")) {
            // code...
            $f = $v->clean($_POST['fname']);
            $l = $v->clean($_POST['lname']);
            $e = $v->clean($_POST['email']);
            $dob = $v->clean($_POST['dob']);
            $gender = $v->clean($_POST['gender']);
            $ip = $v->clean($_POST['ip']);
            $ua = $v->clean($_POST['ua']);

            $info = array('gender' => trim($gender), 'dob' => trim($dob), 'email' => trim($e), 'fname' => trim($f), 'lname' => trim($l), 'ip' => $ip, 'user_agent' => $ua,);
            //Call API Function
            $member = ModelFactory::model('Register')->new_user($info);
            echo $member;
        }
    }







//Confirm Newly Registered User
    public function confirm_member()
    {
        $v = new Validate();

        if (isset($_GET['u']) && isset($_GET['h'])) {

            //Get form inputs
            $h = $v->clean($_GET['h']);
            $id = $v->clean($_GET['u']);
            $email = $v->clean($_GET['email']);

            // Verify A User...
            $info = array("key" => $h, "uniqueid" => $id, "email" => $email, );

            //Call API Function
            $member = ModelFactory::model('Register')->confirm_user($info);
            $result = json_decode($member, true);
           
            $data = array(
                'type' => $result['result_info']['type'],
                'message' => $result['result_info']['message'],
            ); 

            $this->view('Front/Auth/index', $data); 
        }       
    }





















    /**

     * End Of File

     */



}




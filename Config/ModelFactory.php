<?php 

namespace Config;
require 'vendor/autoload.php';

require_once 'App/Models/apiInfo.php';
require_once 'App/Models/Login.php';
require_once 'App/Models/Register.php';
require_once 'App/Models/User.php';
require_once 'App/Models/Admin.php';


//Email Alerts
require_once 'App/Mails/RegistrationAlert.php';
require_once 'App/Mails/LoginAlert.php';
require_once 'App/Mails/UserAlert.php';
require_once 'App/Mails/AdminAlert.php';




class ModelFactory

{
    /**
     * Accessing a Controller in Model.
     * 
     * @param $name The name of Controller should be case sensitive.
    */

    public static function controller($name)
    {
        $class = '\App\Controllers\\'.$name;
        return new $class;
    }



    /**
     * Accessing a model in controller.
     * 
     * @param $name The name of model should be case sensitive.
     */

    public static function model($name)

    {
        $class = '\App\Models\\'.$name;
        return new $class;
    }

}
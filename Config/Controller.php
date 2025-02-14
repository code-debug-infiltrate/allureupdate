<?php 

namespace Config;
require 'vendor/autoload.php';

abstract class Controller

{


    /**
     * Accessing a Controller in model.
     * 
     * @param $name The name of Controller should be case sensitive.
     */

    public static function control($name)

    {
        $class = '\App\Controllers\\'.$name;
        return new $class;
    }




    /**
     * Display data to browser from views.
     * @param string $file_path Path of file from folder app/view.
     * @param array $data The data that should be display.
     */
    protected function view($file_path, $data=[])
    {
        extract($data);
        require_once 'App/Views/'.$file_path.'.php';
    }
}


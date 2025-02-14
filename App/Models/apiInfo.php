<?php

namespace App\Models;



class apiInfo 
{


//Function to get Oriented API DETAILS
    public function token_details()
    {
        $link = trim(getenv('API_LINK'));
        $abb = trim(getenv('API_FOLDER'));
        $info =  array(
            'name' => trim(getenv('APP_NAME')),
            'token' => trim(getenv('API_TOKEN')),
            'url' => $link.$abb,
        ); 

        return $info;
    }



    


    //Function to Get CURL 
    public function get_curl($value)
    {
        $token_info = $this->token_details();
        $ch = curl_init($value);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/x-www-form-urlencoded', 'Authorization: Bearer', 'X-API-KEY: '.$token_info['token'].'',));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }




    //Function to POST CURL 
    public function post_curl($url, $params)
    {
        $token_info = $this->token_details();
        
        try {
            $ch = curl_init();
            // Check if initialization had gone wrong*    
            if ($ch === false) {
                return 'failed to initialize';
            }
        
            // Better to explicitly set URL
            curl_setopt($ch, CURLOPT_URL, $url);
            // Set more options
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/x-www-form-urlencoded', 'Authorization: Bearer', 'X-API-KEY: '.$token_info['token'].'',));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            $content = curl_exec($ch);
        
            // Check the return value of curl_exec(), too
            if ($content === false) {
                $error = array (curl_error($ch), curl_errno($ch)); 
                return $error;
            }
        
            // Check HTTP return code, too; might be something else than 200
            $httpReturnCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            /* Process $content here */
            return $content;
        
        } catch(Exception $e) {
        
            trigger_error(sprintf(
                'Curl failed with error #%d: %s',
                $e->getCode(), $e->getMessage()),
                E_USER_ERROR);
        
        } finally {
            // Close curl handle unless it failed to initialize
            if (is_resource($ch)) {
                curl_close($ch);
            }
        }
    }















/**
 * End File
 */



}
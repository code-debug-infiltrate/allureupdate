<?php

namespace App\Mails;

use Config\Mail;
use Config\ModelFactory;



class AdminAlert
{



//Mail to Notify User Of Post Messages
public function deposit_alert($buddy, $coyInfo)
{
    $sendMail = new Mail();

    //Send Email TO User    
    $sendMail->to = getenv('ALERT_EMAIL');
    $sendMail->from = getenv('APP_NAME');
    $sendMail->replyto = getenv('APP_EMAIL');
    $sendMail->subject = 'A Card|Online Trasaction Has Been Initiated For Consultation/Therapy';
    // To send HTML mail, the Content-type header must be set
    $sendMail->message_body = '
        <html>
            <body>
            <head>
                <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
            </head>

            <h3 style="margin: 10px;"> '.$buddy['currency'].''.$buddy['amount'].' Payment By  '.$buddy['username'].' For Consultation|Therapy </h3>
            <br><br>
            <p style="margin: 10px;">
            Hello Administrator,
            <br><br>
            '.$buddy['username'].'  Initiated a Transaction On '.getenv('APP_NAME').'.
            <br><br>
            <b>Below Are The Transaction Details:</b>
            <br>
            <b>Email ID:</b> '.$buddy['email'].'
            <br>
            <b>Amount:</b> '.$buddy['currency'].''.$buddy['amount'].'
            <br>
            <b>Details:</b> '.$buddy['details'].'
            <br><br>
            Login To Your Admin Dashboard To Confirm.. 
            <br><br>
            Customer Service Dept.
            <br>
            '.getenv('APP_NAME').'
            <br><br> 
            <i style="font-size: 12px; color: darkred;">If You Found This Email In Your Spam Or Junk Folder, Move To Inbox Or Mark As Not Spam For Future Notifications.</i>
            </p>

            <p style="font-size: 11px; text-align: left; padding: 10px;">
                Learn More About Us:
                <br>
                <a href="'.rtrim(getenv('baseURL')).'blog/" target="_blank" title="Read Our Articles">Read Our Articles</a> | <a href="'.rtrim(getenv('baseURL')).'faqs/" target="_blank" title="FAQs">FAQs</a> | <a href="'.rtrim(getenv('baseURL')).'register/" target="_blank" title="Find a Match">Find a Match</a> | <a href="'.rtrim(getenv('baseURL')).'unsubscribe/" target="_blank" title="Unsubscribe">Unsubscribe</a> | 
                <br><br> 
                This message is intended for '.getenv('ALERT_EMAIL').', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

                <br><br> 

                Share Your '.getenv('APP_NAME').' Experience By Following Us On Social Media!
                
                <br> 
                <center style="font-size: 8px;>
                    <a href="https://facebook.com/'.$coyInfo['facebook'].'" target="_blank" title="Facebook"><img src="'.rtrim(getenv('baseURL')).'Images/Socials/facebook.png" alt="Facebook" border="0"  style="padding-right: 20px; width:20px; height: 20px;"></a>

                <a href="https://instagram.com/'.$coyInfo['instagram'].'" target="_blank" title="Instagram" class="instagram"><img src="'.rtrim(getenv('baseURL')).'Images/Socials/instagram.png" alt="Instagram" border="0"  style="padding-right: 20px; width:20px; height: 20px;"></a>

                <a href="https://linkedin.com/'.$coyInfo['linkedin'].'" target="_blank" title="Linkedin"><img src="'.rtrim(getenv('baseURL')).'Images/Socials/linkedin.png" alt="LinkedIn" border="0"  style="padding-right: 20px; width:20px; height: 20px;"></a>

                <a href="https://twitter.com/'.$coyInfo['twitter'].'" target="_blank" title="twitter"><img src="'.rtrim(getenv('baseURL')).'Images/Socials/twitter.png" alt="Twitter" border="0"  style="padding-right: 20px; width:20px; height: 20px;"></a>

                <br><br> 
                    '.$coyInfo['address'].'

                    <br><br> 
                    &copy; Copyright '.date("Y").' '.getenv('APP_NAME').' All Rights Reserved. | <a href="'.rtrim(getenv('baseURL')).'unsubscribe/" target="_blank" title="Unsubscribe">Unsubscribe</a> | <a href="'.rtrim(getenv('baseURL')).'privacy-policy/" target="_blank" title="Privacy Policy">Privacy Policy</a> | <a href="'.rtrim(getenv('baseURL')).'terms-of-service/" target="_blank" title="Terms Of Service">Terms Of Service</a> | 
                </center>

                <br>
            </p>

            </body>
        </html>
        ';

    $sendMail->send();
}











//Mail to Notify User Of Post Messages
public function transaction_alert($buddy, $transaction, $coyInfo)
{
    $sendMail = new Mail();

    //Send Email TO User    
    $sendMail->to = getenv('ALERT_EMAIL');
    $sendMail->from = getenv('APP_NAME');
    $sendMail->replyto = getenv('APP_EMAIL');
    $sendMail->subject = 'A Trasaction Has Been Initiated';
    // To send HTML mail, the Content-type header must be set
    $sendMail->message_body = '
        <html>
            <body>
            <head>
                <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
            </head>

            <h3 style="margin: 10px;"> '.$transaction['currency'].''.$transaction['amount'].' Payment By  '.$buddy['fname'].' '.$buddy['lname'].' For '.$transaction['type'].' Is '.$transaction['status'].' </h3>
            <br><br>
            <p style="margin: 10px;">
            Hello Administrator,
            <br><br>
            '.$buddy['fname'].' '.$buddy['lname'].' Initiated a Transaction On '.getenv('APP_NAME').'.
            <br><br>
            <b>Below Are The Transaction Details:</b>
            <br><br>
            <b>Transaction ID:</b> '.$transaction['trancid'].' 
            <br>
            <b>User UniqueID:</b>  '.$transaction['uniqueid'].' 
            <br>
            <b>Amount:</b> '.$transaction['currency'].''.$transaction['amount'].'
            <br>
            <b>Status:</b> '.$transaction['status'].'
            <br>
            <b>Type:</b> '.$transaction['type'].'
            <br>
            <b>Duration/Span:</b> '.$transaction['expiry'].'
            <br>
            <b>Details:</b> '.$transaction['details'].'
            <br><br>
            Login To Your Admin Dashboard To Confirm.. 
            <br><br>
            Customer Service Dept.
            <br>
            '.getenv('APP_NAME').'
            <br><br> 
            <i style="font-size: 12px; color: darkred;">If You Found This Email In Your Spam Or Junk Folder, Move To Inbox Or Mark As Not Spam For Future Notifications.</i>
            </p>

            <p style="font-size: 11px; text-align: left; padding: 10px;">
                Learn More About Us:
                <br>
                <a href="'.rtrim(getenv('baseURL')).'blog/" target="_blank" title="Read Our Articles">Read Our Articles</a> | <a href="'.rtrim(getenv('baseURL')).'faqs/" target="_blank" title="FAQs">FAQs</a> | <a href="'.rtrim(getenv('baseURL')).'register/" target="_blank" title="Find a Match">Find a Match</a> | <a href="'.rtrim(getenv('baseURL')).'unsubscribe/" target="_blank" title="Unsubscribe">Unsubscribe</a> | 
                <br><br> 
                This message is intended for '.getenv('ALERT_EMAIL').', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

                <br><br> 

                Share Your '.getenv('APP_NAME').' Experience By Following Us On Social Media!
                
                <br> 
                <center style="font-size: 8px;>
                    <a href="https://facebook.com/'.$coyInfo['facebook'].'" target="_blank" title="Facebook"><img src="'.rtrim(getenv('baseURL')).'Images/Socials/facebook.png" alt="Facebook" border="0"  style="padding-right: 20px; width:20px; height: 20px;"></a>

                <a href="https://instagram.com/'.$coyInfo['instagram'].'" target="_blank" title="Instagram" class="instagram"><img src="'.rtrim(getenv('baseURL')).'Images/Socials/instagram.png" alt="Instagram" border="0"  style="padding-right: 20px; width:20px; height: 20px;"></a>

                <a href="https://linkedin.com/'.$coyInfo['linkedin'].'" target="_blank" title="Linkedin"><img src="'.rtrim(getenv('baseURL')).'Images/Socials/linkedin.png" alt="LinkedIn" border="0"  style="padding-right: 20px; width:20px; height: 20px;"></a>

                <a href="https://twitter.com/'.$coyInfo['twitter'].'" target="_blank" title="twitter"><img src="'.rtrim(getenv('baseURL')).'Images/Socials/twitter.png" alt="Twitter" border="0"  style="padding-right: 20px; width:20px; height: 20px;"></a>

                <br><br> 
                    '.$coyInfo['address'].'

                    <br><br> 
                    &copy; Copyright '.date("Y").' '.getenv('APP_NAME').' All Rights Reserved. | <a href="'.rtrim(getenv('baseURL')).'unsubscribe/" target="_blank" title="Unsubscribe">Unsubscribe</a> | <a href="'.rtrim(getenv('baseURL')).'privacy-policy/" target="_blank" title="Privacy Policy">Privacy Policy</a> | <a href="'.rtrim(getenv('baseURL')).'terms-of-service/" target="_blank" title="Terms Of Service">Terms Of Service</a> | 
                </center>

                <br>
            </p>

            </body>
        </html>
        ';

    $sendMail->send();
}








































































































    




    /*

        ******* 

        End oF file 

        ********

    */



}
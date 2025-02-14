<?php

namespace App\Mails;

use Config\Mail;
use Config\ModelFactory;



class LoginAlert
{





    //Mail to Unlock Account Dashboard
    public function unlockcode_alert($data, $coyInfo)
    {
        $sendMail = new Mail();

        //Send Email TO User    
        $sendMail->to = $data['email'];
        $sendMail->from = getenv('APP_NAME');
        $sendMail->replyto = getenv('APP_EMAIL');
        $sendMail->subject = 'Login Attempt Unlock Code';
        // To send HTML mail, the Content-type header must be set
        $sendMail->message_body = '
            <html>
                <body>
                <head>
                    <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
                </head>

                <h3 style="margin: 10px;">There Is a Login Attempt On Your Account</h3>
                <p style="margin: 10px;">
                Hello '.$data['username'].',
                <br>
                There is a login attempt on your account. If this is initiated by you, complete your login process with the code below.
                <br>
                <i style="font-size: 26px; color: darkred;">'.$data['code'].' </i>
                <br>
                If not, kindly ignore this message for safety.
                <br><br>
                Security Team
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
                    This message is intended for '.$data['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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








    //Mail to Reset Account Password
    public function passcode_alert($data, $coyInfo)
    {
        $sendMail = new Mail();

        //Send Email TO User    
        $sendMail->to = $data['email'];
        $sendMail->from = getenv('APP_NAME');
        $sendMail->replyto = getenv('APP_EMAIL');
        $sendMail->subject = 'Password Reset Attempt';
        // To send HTML mail, the Content-type header must be set
        $sendMail->message_body = '
            <html>
                <body>
                <head>
                    <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
                </head>

                <h3 style="margin: 10px;">Password Reset Attempt On Your Account</h3>

                <p style="margin: 10px;">
                Hello '.$data['username'].',
                <br>
                There is a password reset attempt on your account. If this is initiated by you, complete your password reset with the link and code below.
                <br><br>
                <a href="'.rtrim(getenv('baseURL')).'reset-password/?id='.$data['email'].'&otp='.$data['code'].'&uid='.$data['username'].'">Click This Link </a> Or Copy The Link Below Into A Browser.
                <br><br>
                '.rtrim(getenv('baseURL')).'reset-password/?id='.$data['email'].'&otp='.$data['code'].'&uid='.$data['username'].'
                <br><br>
                If not, kindly ignore this message for safety.
                <br><br>
                Security Team
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
                    This message is intended for '.$data['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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











    //Mail to Notify User Of Password Reset
    public function passreset_alert($data, $coyInfo)
    {
        $sendMail = new Mail();

        //Send Email TO User    
        $sendMail->to = $data['email'];
        $sendMail->from = getenv('APP_NAME');
        $sendMail->replyto = getenv('APP_EMAIL');
        $sendMail->subject = 'Password Changed';
        // To send HTML mail, the Content-type header must be set
        $sendMail->message_body = '
            <html>
                <body>
                <head>
                    <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
                </head>

                <h3 style="margin: 10px;">Password Changed Successfully</h3>
                <p style="margin: 10px;">
                Hello '.$data['username'].',
                <br>
                This is a notification to let you know that the password for your '.getenv('APP_NAME').' account '.$data['username'].' has been changed.
                <br>
                If this was not done by you, change your password immediately to secure your account.
                <br><br>
                Security Team
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
                    This message is intended for '.$data['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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
<?php

namespace App\Mails;

use Config\Mail;
use Config\ModelFactory;



class UserAlert
{





    //Mail to Alert User Of New Views
    public function profileview_alert($buddy, $viewer, $coyInfo)
    {
        $sendMail = new Mail();

        //Send Email TO User    
        $sendMail->to = $buddy['email'];
        $sendMail->from = getenv('APP_NAME');
        $sendMail->replyto = getenv('APP_EMAIL');
        $sendMail->subject = 'Your Profile Is Gaining Attention!';
        // To send HTML mail, the Content-type header must be set
        $sendMail->message_body = '
            <html>
                <body>
                <head>
                    <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
                </head>

                <h3 style="margin: 10px;">'.$viewer['fname'].' '.$viewer['lname'].' Just Checked You Out!</h3>
                <br><br>
                <p style="margin: 10px;">
                Hello '.$buddy['username'].',
                <br><br>
                Your Profile Is Gaining Attention From Buddies On '.getenv('APP_NAME').'.
                <br><br>
                <img src="'.rtrim(getenv('baseURL')).'/Public//other_assets/Profile/'.$viewer['profileimage'].'" alt="Buddy Profile Image" border="0"  style="padding-right: 20px; width: 150px; border-radius: 100%;">
                <br><br>
                '.$viewer['fname'].' '.$viewer['lname'].' Just Checked You Out Now. Login To Your Member Dashboard To Keep In Touch. 
                <br><br>
                Remember, Do Not Share Personal Information With Strangers. Report Accounts That Seem Like Scammers. Do Not Send Money To Anyone And Stay Safe Always. 
                <br><br><br>
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
                    This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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








    //Mail to Notify User Od Buddy Request 
    public function buddyrequest_alert($buddy, $sender, $coyInfo)
    {
        $sendMail = new Mail();

        //Send Email TO User    
        $sendMail->to = $buddy['email'];
        $sendMail->from = getenv('APP_NAME');
        $sendMail->replyto = getenv('APP_EMAIL');
        $sendMail->subject = 'You Have a New Buddy Pal Request';
        // To send HTML mail, the Content-type header must be set
        $sendMail->message_body = '
            <html>
                <body>
                <head>
                    <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
                </head>

                <h3 style="margin: 10px;">'.$sender['fname'].' '.$sender['lname'].' Wants To Make You a Pal</h3>
                <br><br>
                <p style="margin: 10px;">
                Hello '.$buddy['username'].',
                <br><br>
                Your Profile Is Gaining Attention From Buddies On '.getenv('APP_NAME').'.
                <br><br>
                <img src="'.rtrim(getenv('baseURL')).'/Public//other_assets/Profile/'.$sender['profileimage'].'" alt="Buddy Profile Image" border="0"  style="padding-right: 20px; width: 150px; border-radius: 100%;">
                <br><br>
                '.$sender['fname'].' '.$sender['lname'].' Just Checked You Out Now. Login To Your Member Dashboard To Accept The Buddy Request. 
                <br><br>
                Remember, Do Not Share Personal Information With Strangers. Report Accounts That Seem Like Scammers. Do Not Send Money To Anyone And Stay Safe Always. 
                <br><br><br>
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
                    This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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











    //Mail to Notify User Of New Profile Likes
    public function userlike_alert($buddy, $sender, $coyInfo)
    {
        $sendMail = new Mail();

        //Send Email TO User    
        $sendMail->to = $buddy['email'];
        $sendMail->from = getenv('APP_NAME');
        $sendMail->replyto = getenv('APP_EMAIL');
        $sendMail->subject = 'Your Profile Got a New Like';
        // To send HTML mail, the Content-type header must be set
        $sendMail->message_body = '
            <html>
                <body>
                <head>
                    <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
                </head>

                <h3 style="margin: 10px;">'.$sender['fname'].' '.$sender['lname'].' Liked Your Profile!</h3>
                <br><br>
                <p style="margin: 10px;">
                Hello '.$buddy['username'].',
                <br><br>
                Your Profile Is Gaining Attention From Buddies On '.getenv('APP_NAME').'.
                <br><br>
                <img src="'.rtrim(getenv('baseURL')).'/Public//other_assets/Profile/'.$sender['profileimage'].'" alt="Buddy Profile Image" border="0"  style="padding-right: 20px; width: 150px; border-radius: 100%;">
                <br><br>
                '.$sender['fname'].' '.$sender['lname'].' Just Liked Your Profile. Login To Your Member Dashboard To Check Buddy Out. 
                <br><br>
                Remember, Do Not Share Personal Information With Strangers. Report Accounts That Seem Like Scammers. Do Not Send Money To Anyone And Stay Safe Always. 
                <br><br><br>
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
                    This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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







    //Mail to Notify User Of New Post Likes
    public function postaction_alert($buddy, $sender, $coyInfo)
    {
        $sendMail = new Mail();

        //Send Email TO User    
        $sendMail->to = $buddy['email'];
        $sendMail->from = getenv('APP_NAME');
        $sendMail->replyto = getenv('APP_EMAIL');
        $sendMail->subject = 'Your Post Is Getting Attention';
        // To send HTML mail, the Content-type header must be set
        $sendMail->message_body = '
            <html>
                <body>
                <head>
                    <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
                </head>

                <h3 style="margin: 10px;">'.$sender['fname'].' '.$sender['lname'].' Liked Your Post!</h3>
                <br><br>
                <p style="margin: 10px;">
                Hello '.$buddy['username'].',
                <br><br>
                Your Post Is Gaining Attention From Buddies On '.getenv('APP_NAME').'.
                <br><br>
                <img src="'.rtrim(getenv('baseURL')).'/Public//other_assets/Profile/'.$sender['profileimage'].'" alt="Buddy Profile Image" border="0"  style="padding-right: 20px; width: 150px; border-radius: 100%;">
                <br><br>
                '.$sender['fname'].' '.$sender['lname'].' Just Liked Your Post. Login To Your Member Dashboard To Check Out Recent Notifications. 
                <br><br>
                Remember, Do Not Share Personal Information With Strangers. Report Accounts That Seem Like Scammers. Do Not Send Money To Anyone And Stay Safe Always. 
                <br><br><br>
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
                    This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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
    public function postmessage_alert($buddy, $sender, $coyInfo)
    {
        $sendMail = new Mail();

        //Send Email TO User    
        $sendMail->to = $buddy['email'];
        $sendMail->from = getenv('APP_NAME');
        $sendMail->replyto = getenv('APP_EMAIL');
        $sendMail->subject = 'Your Post Just Got a Mail';
        // To send HTML mail, the Content-type header must be set
        $sendMail->message_body = '
            <html>
                <body>
                <head>
                    <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
                </head>

                <h3 style="margin: 10px;">'.$sender['fname'].' '.$sender['lname'].' Dropped a Message On Your Post!</h3>
                <br><br>
                <p style="margin: 10px;">
                Hello '.$buddy['username'].',
                <br><br>
                Your Post Is Gaining Attention From Buddies On '.getenv('APP_NAME').'.
                <br><br>
                <img src="'.rtrim(getenv('baseURL')).'/Public//other_assets/Profile/'.$sender['profileimage'].'" alt="Buddy Profile Image" border="0"  style="padding-right: 20px; width: 150px; border-radius: 100%;">
                <br><br>
                '.$sender['fname'].' '.$sender['lname'].' Dropped a Message On Your Your Post. Login To Your Member Dashboard To Check Out Recent Messages And Continue The Interaction. 
                <br><br>
                Remember, Do Not Share Personal Information With Strangers. Report Accounts That Seem Like Scammers. Do Not Send Money To Anyone And Stay Safe Always. 
                <br><br><br>
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
                    This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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
    $sendMail->to = $buddy['email'];
    $sendMail->from = getenv('APP_NAME');
    $sendMail->replyto = getenv('APP_EMAIL');
    $sendMail->subject = 'Your Trasaction Has Been Initiated And '.$transaction['status'].'';
    // To send HTML mail, the Content-type header must be set
    $sendMail->message_body = '
        <html>
            <body>
            <head>
                <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
            </head>

            <h3 style="margin: 10px;">'.$transaction['currency'].''.$transaction['amount'].' Payment By  '.$buddy['fname'].' '.$buddy['lname'].' For '.$transaction['type'].' Is '.$transaction['status'].' </h3>
            <br><br>
            <p style="margin: 10px;">
            Hello '.$buddy['fname'].' '.$buddy['lname'].',
            <br><br>
            You Initiated a Transaction On '.getenv('APP_NAME').'.
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
            <a href="'.$transaction['payment_url'].'">Complete This Transaction</a> Now Or Copy This Link To Your Browser '.$transaction['payment_url'].'. 
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
                This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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







//Mail to Notify User Of Abandoned Transaction
public function sub_reminder_alert($transaction, $buddy, $coyInfo)
{
    $sendMail = new Mail();

    //Send Email TO User    
    $sendMail->to = $buddy['email'];
    $sendMail->from = getenv('APP_NAME');
    $sendMail->replyto = getenv('APP_EMAIL');
    $sendMail->subject = 'Your Pending Trasaction Needs Urgent Attention!';
    // To send HTML mail, the Content-type header must be set
    $sendMail->message_body = '
        <html>
            <body>
            <head>
                <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
            </head>

            <h3 style="margin: 10px;">'.$transaction['currency'].''.$transaction['amount'].' Payment By  '.$buddy['fname'].' '.$buddy['lname'].' For '.$transaction['type'].'. </h3>
            <br><br>
            <p style="margin: 10px;">
            Hello '.$buddy['fname'].' '.$buddy['lname'].',
            <br><br>
            You Have a Pending Transaction On '.getenv('APP_NAME').'.
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
            Login To Your Dashboard To Make Payment Now. Complete This Transaction To Earn Points. 
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
                This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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





//Mail to Notify User Of Abandoned Transaction
public function user_reminder_alert($buddy, $coyInfo)
{
    $sendMail = new Mail();

    //Send Email TO User    
    $sendMail->to = $buddy['email'];
    $sendMail->from = getenv('APP_NAME');
    $sendMail->replyto = getenv('APP_EMAIL');
    $sendMail->subject = $buddy['subject'];
    // To send HTML mail, the Content-type header must be set
    $sendMail->message_body = '
        <html>
            <body>
            <head>
                <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
            </head>

            <h3 style="margin: 10px;">'.$buddy['title'].'</h3>
            <br><br>
            <p style="margin: 10px;">
            <b>Hello '.$buddy['fname'].' '.$buddy['lname'].',</b>
            <br><br>
           
            <b style="word-spacing: 3px; line-break: 3px; line-height: 20px; font-weight: 300;">'.$buddy['details'].'</b>
            <br><br>
            
            '.getenv('APP_NAME').' Team
            <br><br> 
            <i style="font-size: 12px; color: darkred;">If You Found This Email In Your Spam Or Junk Folder, Move To Inbox Or Mark As Not Spam For Future Notifications.</i>
            </p>

            <p style="font-size: 11px; text-align: left; padding: 10px;">
                Learn More About Us:
                <br>
                <a href="'.rtrim(getenv('baseURL')).'blog/" target="_blank" title="Read Our Articles">Read Our Articles</a> | <a href="'.rtrim(getenv('baseURL')).'faqs/" target="_blank" title="FAQs">FAQs</a> | <a href="'.rtrim(getenv('baseURL')).'register/" target="_blank" title="Find a Match">Find a Match</a> | <a href="'.rtrim(getenv('baseURL')).'unsubscribe/" target="_blank" title="Unsubscribe">Unsubscribe</a> | 
                <br><br> 
                This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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





//Mail to Notify User Of Abandoned Transaction
public function activate_reminder_alert($buddy, $coyInfo)
{
    $sendMail = new Mail();

    //Send Email TO User    
    $sendMail->to = $buddy['email'];
    $sendMail->from = getenv('APP_NAME');
    $sendMail->replyto = getenv('APP_EMAIL');
    $sendMail->subject = "Your Attention Is Needed!";
    // To send HTML mail, the Content-type header must be set
    $sendMail->message_body = '
        <html>
            <body>
            <head>
                <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
            </head>

            <h3 style="margin: 10px;">Activate Your '.$coyInfo['coyname'].' Account Now!</h3>
            <br><br>
            <p style="margin: 10px;">
            <b>Hello '.$buddy['fname'].' '.$buddy['lname'].',</b>
            <br><br>
           
            <b style="word-spacing: 3px; line-break: 3px; line-height: 20px; font-weight: 300;">
            Once Last Step Is Required For You To Get Access!
            <br>
            Welcome To The World Of Endless Possibilities, Where We Help You Achieve Your Relationship Goals.
            <br><br>
            Your Registration Is Almost Completed, All You Need To Do Now Is <a href="'.rtrim(getenv('baseURL')).'verify-email/?u='.$buddy['uniqueid'].'&h='.$buddy['hash'].'&email='.$buddy['email'].'">Click This Link </a> Or Copy The Link Below Into A Browser To Confirm Your Account.
            <br><br>
            '.rtrim(getenv('baseURL')).'verify-email/?u='.$buddy['uniqueid'].'&h='.$buddy['hash'].'&email='.$buddy['email'].'
            <br><br> 
            Keep These Information Secure. If you ever feel your password has been compromised, Reset it immediately and dont forget to turn on the 2FA system on your dashboard. 
            <br><br>
            <br><br>
            
            '.getenv('APP_NAME').' Team
            <br><br> 
            <i style="font-size: 12px; color: darkred;">If You Found This Email In Your Spam Or Junk Folder, Move To Inbox Or Mark As Not Spam For Future Notifications.</i>
            </p>

            <p style="font-size: 11px; text-align: left; padding: 10px;">
                Learn More About Us:
                <br>
                <a href="'.rtrim(getenv('baseURL')).'blog/" target="_blank" title="Read Our Articles">Read Our Articles</a> | <a href="'.rtrim(getenv('baseURL')).'faqs/" target="_blank" title="FAQs">FAQs</a> | <a href="'.rtrim(getenv('baseURL')).'register/" target="_blank" title="Find a Match">Find a Match</a> | <a href="'.rtrim(getenv('baseURL')).'unsubscribe/" target="_blank" title="Unsubscribe">Unsubscribe</a> | 
                <br><br> 
                This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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






//Mail to Notify User Of Abandoned Transaction
public function profile_reminder_alert($buddy, $coyInfo)
{
    $sendMail = new Mail();

    //Send Email TO User    
    $sendMail->to = $buddy['email'];
    $sendMail->from = getenv('APP_NAME');
    $sendMail->replyto = getenv('APP_EMAIL');
    $sendMail->subject = "Your Profile Needs Urgent Attention!";
    // To send HTML mail, the Content-type header must be set
    $sendMail->message_body = '
        <html>
            <body>
            <head>
                <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
            </head>

            <h3 style="margin: 10px;">Your '.$coyInfo['coyname'].' Can Be Better Than It Is!</h3>
            <br><br>
            <p style="margin: 10px;">
            <b>Hello '.$buddy['fname'].' '.$buddy['lname'].',</b>
            <br><br>
           
            <b style="word-spacing: 3px; line-break: 3px; line-height: 20px; font-weight: 300;">
            Buddies Are Waiting To Know More About You!
            <br>
            Set Up Your Profile And Dive Into The World Of Endless Possibilities, Where We Help You Achieve Your Relationship Goals.
            <br><br>
            <a href="'.rtrim(getenv('baseURL')).'login/?">Set Up Profile </a>
            <br><br>
            '.rtrim(getenv('baseURL')).'login/?
            <br><br> 
            If you ever feel your password has been compromised, Reset it immediately and dont forget to turn on the 2FA system on your dashboard. 
            <br><br>
            <br><br>
            
            '.getenv('APP_NAME').' Team
            <br><br> 
            <i style="font-size: 12px; color: darkred;">If You Found This Email In Your Spam Or Junk Folder, Move To Inbox Or Mark As Not Spam For Future Notifications.</i>
            </p>

            <p style="font-size: 11px; text-align: left; padding: 10px;">
                Learn More About Us:
                <br>
                <a href="'.rtrim(getenv('baseURL')).'blog/" target="_blank" title="Read Our Articles">Read Our Articles</a> | <a href="'.rtrim(getenv('baseURL')).'faqs/" target="_blank" title="FAQs">FAQs</a> | <a href="'.rtrim(getenv('baseURL')).'register/" target="_blank" title="Find a Match">Find a Match</a> | <a href="'.rtrim(getenv('baseURL')).'unsubscribe/" target="_blank" title="Unsubscribe">Unsubscribe</a> | 
                <br><br> 
                This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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






//Mail to Notify User Of Abandoned Transaction
public function photo_reminder_alert($buddy, $coyInfo)
{
    $sendMail = new Mail();

    //Send Email TO User    
    $sendMail->to = $buddy['email'];
    $sendMail->from = getenv('APP_NAME');
    $sendMail->replyto = getenv('APP_EMAIL');
    $sendMail->subject = "Your Profile Needs a Beautiful Portrait Of You!";
    // To send HTML mail, the Content-type header must be set
    $sendMail->message_body = '
        <html>
            <body>
            <head>
                <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
            </head>

            <h3 style="margin: 10px;">'.$coyInfo['coyname'].' Buddies Would Like To See Your Charming Look!</h3>
            <br><br>
            <p style="margin: 10px;">
            <b>Hello '.$buddy['fname'].' '.$buddy['lname'].',</b>
            <br><br>
           
            <b style="word-spacing: 3px; line-break: 3px; line-height: 20px; font-weight: 300;">
            A Profile Without a Picture Is Incomplete. Buddies Are Waiting To Know More About You!
            <br>
            Set Up Your Profile And Dive Into The World Of Endless Possibilities, Where We Help You Achieve Your Relationship Goals.
            <br><br>
            <a href="'.rtrim(getenv('baseURL')).'login/?">Set Up Profile </a>
            <br><br>
            '.rtrim(getenv('baseURL')).'login/?
            <br><br> 
            If you ever feel your password has been compromised, Reset it immediately and dont forget to turn on the 2FA system on your dashboard. 
            <br><br>
            <br><br>
            
            '.getenv('APP_NAME').' Team
            <br><br> 
            <i style="font-size: 12px; color: darkred;">If You Found This Email In Your Spam Or Junk Folder, Move To Inbox Or Mark As Not Spam For Future Notifications.</i>
            </p>

            <p style="font-size: 11px; text-align: left; padding: 10px;">
                Learn More About Us:
                <br>
                <a href="'.rtrim(getenv('baseURL')).'blog/" target="_blank" title="Read Our Articles">Read Our Articles</a> | <a href="'.rtrim(getenv('baseURL')).'faqs/" target="_blank" title="FAQs">FAQs</a> | <a href="'.rtrim(getenv('baseURL')).'register/" target="_blank" title="Find a Match">Find a Match</a> | <a href="'.rtrim(getenv('baseURL')).'unsubscribe/" target="_blank" title="Unsubscribe">Unsubscribe</a> | 
                <br><br> 
                This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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






//Mail to Notify User Of Abandoned Transaction
public function dormant_reminder_alert($buddy, $coyInfo)
{
    $sendMail = new Mail();

    //Send Email TO User    
    $sendMail->to = $buddy['email'];
    $sendMail->from = getenv('APP_NAME');
    $sendMail->replyto = getenv('APP_EMAIL');
    $sendMail->subject = "Your Profile Is Dormant!";
    // To send HTML mail, the Content-type header must be set
    $sendMail->message_body = '
        <html>
            <body>
            <head>
                <img src="'.rtrim(getenv('baseURL')).'Images/Logo/favicon.png" alt="Logo" border="0"  style="margin: 20px; width:70px; height: 90px;"> 
            </head>

            <h3 style="margin: 10px;">Been a While You Came Around.</h3>
            <br><br>
            <p style="margin: 10px;">
            <b>Hello '.$buddy['fname'].' '.$buddy['lname'].',</b>
            <br><br>
           
            <b style="word-spacing: 3px; line-break: 3px; line-height: 20px; font-weight: 300;">
            Buddies Are Waiting To Welcome You With a Hug!
            <br>
            Hope You Are Doing Great. We Miss You At '.$coyInfo['coyname'].' And Buddies Want To Say Hi.
            <br><br>
            <a href="'.rtrim(getenv('baseURL')).'login/?"> Say Hello To Buddies </a>
            <br><br>
            '.rtrim(getenv('baseURL')).'login/?
            <br><br> 
            If you ever feel your password has been compromised, Reset it immediately and dont forget to turn on the 2FA system on your dashboard. 
            <br><br>
            <br><br>
            
            '.getenv('APP_NAME').' Team
            <br><br> 
            <i style="font-size: 12px; color: darkred;">If You Found This Email In Your Spam Or Junk Folder, Move To Inbox Or Mark As Not Spam For Future Notifications.</i>
            </p>

            <p style="font-size: 11px; text-align: left; padding: 10px;">
                Learn More About Us:
                <br>
                <a href="'.rtrim(getenv('baseURL')).'blog/" target="_blank" title="Read Our Articles">Read Our Articles</a> | <a href="'.rtrim(getenv('baseURL')).'faqs/" target="_blank" title="FAQs">FAQs</a> | <a href="'.rtrim(getenv('baseURL')).'register/" target="_blank" title="Find a Match">Find a Match</a> | <a href="'.rtrim(getenv('baseURL')).'unsubscribe/" target="_blank" title="Unsubscribe">Unsubscribe</a> | 
                <br><br> 
                This message is intended for '.$buddy['email'].', you are receiving this message because you are using one or more of '.getenv('APP_NAME').' service. 

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
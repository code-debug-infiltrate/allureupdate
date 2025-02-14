<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';

if (isset($_SERVER['HTTPS'])) { $url= "https://"; } else { $url = "http://"; }
?>

<title>Member Area | Sign Up Page |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>

<!-- contact-section -->
<section class="contact-section">
        <div class="container">
            <div class="row" style="margin-top: 50px; padding-top: 100px;">
                
                <div class="col-lg-5 col-md-5 col-sm-12 form-column">
                    <div class="contact-form-area">
                        <br /><br />
                        <div id="registerForm">
                            <h2>Ready To Dive In?</h2>
                            <div class="text" style="font-size: 12px;">
                                Already a Member? <a href="<?= baseURL('login/'); ?>">Sign In</a>
                                <br>
                                Fill The Form Fields Below To Register As a Member 
                            </div>
                            <br />
                        
                            <div class="formError_box" style="margin:10px 0px;"></div>

                            <form method="POST" id="contact-form" class="default-form"> 
                                <input type="hidden" id="ip" value="<?php echo $ip?>">
                                <input type="hidden" id="ua" value="<?php echo $user_agent?>">
                                <input type="hidden" id="urlReg" value="<?= trim(getenv('baseURL'))."ajax-register/";?>">

                                <div class="form-group">
                                    <input type="text" id="fname" placeholder="Your First Name" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" id="lname" placeholder="Your Last Name" required>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" id="email" placeholder="Your Email ID" required>
                                </div>

                                <div class="form-group" style="font-size: 12px;">
                                    <input type="password" id="password" placeholder="**********" required>
                                    
                                    <input type="checkbox" style="margin-top: 10px;" class="select-message" onclick="passwordToggle()"/><i class="check-box" style="margin-right: 8px;"></i> Show Password
                                </div>
                                
                                <div class="checkbox" style="font-size: 14px;">
                                    <input type="checkbox" id="accept" required="required"/> <i class="check-box" style="margin-right: 10px;"></i>You Must Accept Our<a href="<?= baseURL('terms-of-service/'); ?>"> Terms & Condition</a>
                                </div>
                                
                                <div class="form-group message-btn" style="margin-top: 50px; border-radius: 1px; width: 100%;">
                                    <img src="/Images/green-dots.gif" id="loader" style="display: none"/>
                                    <button type="submit" id="register">Continue</button>
                                </div>

                                <!-- <div class="text" style="text-align: right; font-size: 12px;">Already Registered? <a href="<?= baseURL('login/'); ?>">Sign In</a></div> -->
                                
                            </form>

                            <script>
                                function passwordToggle() {
                                    var x = document.getElementById("password");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }
                            </script>
                        </div>


                        <!-- Dashboard Login For Users -->
                        <div class="" id="loginForm" style="display: none; margin: 20px;"> 
                            <center><img src="/Images/Body/thumb-up.png" style="width: 150px; margin: 80px;" alt="Successful-icon"></center>
                            <h5 class="welcome log-title" style="text-align: center; font-weight: 600;">Congratulations!!!<br><br>You Are Now a Member!</h5>
                            <br>
                            <div class="clickable" style="font-size: 16px; font-weight: 700; text-align: center;">You Can Proceed To The <a href="<?= trim(getenv('baseURL'))."login/";?>">Login Portal</a></div>
                            <br><br>
                            <p class="notme" style="font-size: 11px; color: red; text-align: center;">Check Your Email Inbox Or Spam Folder For Your Membership Details. <br>Remember To Keep Your Account Information Safe!</p>
                            <br><br>
                        </div>

                        
                    </div>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-6 agent-column">
                    <div class="agent-content">
                        <img src="/Images/Banner/5.png" style="width: 100%; margin-left: 80px;" alt="Member-area-icon">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact-section end -->




                            
<!-- Include Creator script -->
<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/register.js') ?>"></script>



<?php include 'Layout/footer.php'; ?>
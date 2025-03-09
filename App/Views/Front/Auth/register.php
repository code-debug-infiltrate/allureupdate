<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';

if (isset($_SERVER['HTTPS'])) { $url= "https://"; } else { $url = "http://"; }
?>

 
<title>New Member Area | Sign Up Page |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>





    <!-- intro-style-two -->
    <section class="intro-style-two home-6" style="background-image: url(/Images/Banner/4.jpg);">
        <div class="container">
            <div class="row" style="margin-top: 50px; padding-top: 200px;">

                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <?php include 'auth-side.php'; ?>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div id="registerForm">
                            <h3>Ready For Valuable Connections?</h3>
                            <div class="text"> 
                                <b style="font-size: 10px; font-weight: 500; color: blue;">Registration Is For Matchmaking Only. <br>For <a href="<?= baseURL('consultation-and-therapy/'); ?>">Private Session</a>, <a href="<?= baseURL('consultation-and-therapy/'); ?>">Consultation</a> Or <a href="<?= baseURL('consultation-and-therapy/'); ?>">Therapy</a>, Kindly <a href="<?= baseURL('consultation-and-therapy/'); ?>">Click Here</a>.</b>
                            </div>
                            <div class="formError_box" style="margin:10px 0px;"></div>
                            <br>
                            <form method="POST" id="contact-form" class="signup-form"> 
                                <input type="hidden" id="ip" value="<?php echo $ip?>">
                                <input type="hidden" id="ua" value="<?php echo $user_agent?>">
                                <input type="hidden" id="urlReg" value="<?= trim(getenv('baseURL'))."ajax-register/";?>">

                                <div class="form-row" id="nameForm">
                                    <div class="text col-md-12">Tell Us Your Names </div>
                                    <div class="row">
                                        <div class="col-6">	
                                            <label class="control-label" for="input">First Name</label>	
                                            <input type="text" id="fname" placeholder="First Name" autofocus/>
                                        </div>
                                        <div class="col-6">	
                                            <label class="control-label" for="input">Last Name</label>		
                                            <input type="text" id="lname" placeholder="Last Name" onclick="showButton('nameButton');" required="required"/>
                                        </div>
                                        
                                        <div class="form-group col-md-12 message-btn" id="nameButton" style="margin-top: 10px; border-radius: 1px; width: 100%; display: none;">
                                            <hr>
                                            <button type="button" onclick="replace('nameForm','ageForm')"><span>Continue</span></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row" id="ageForm" style="display: none;">
                                    <div class="text col-md-12"> Select Your Gender And Date Of Birth </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <label class="control-label" for="input">Gender</label>	
                                            <select  id="gender" required="required">
                                                <option value="" disabled selected> -Gender- </option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                            </select>
                                        </div>
                                        <div class="col-7">	
                                            <label class="control-label" for="input">D O B</label>
                                            <input type="date" id="dob" onclick="showButton('ageButton');" required="required"/>
                                        </div>
                                        <hr>
                                        <a href="javascript:void(0);" id="ageForm" onclick="replace('ageForm','nameForm')" style="padding-top: 20px; padding-bottom: 30px; padding-left: 20px; font-size: 11px;">Back To Name</a>
                                        <div class="form-group col-md-12 message-btn" id="ageButton" style="margin-top: 10px; border-radius: 1px; width: 100%; display: none;">
                                           <button type="button" onclick="replace('ageForm','emailForm')"><span>Continue</span></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" id="emailForm" style="display: none;">
                                    <div class="form-group col-md-12">	
                                        <label class="control-label" for="input">Email ID</label>	
                                        <input type="email" id="email" autocomplete="off" placeholder="Email Address" required="required"/>
                                    </div>
                                    <div class="checkbox col-md-12">
                                        <label>
                                            <input type="checkbox" id="accept" onclick="showButton('emailButton');" required="required"/><i class="check-box"></i> Accept <a href="<?= baseURL('terms-of-service/'); ?>" style="color:#7005e3;">Terms & Conditions.</a>
                                        </label>
                                    </div>
                                    <hr>
                                    <a href="javascript:void(0);" id="emailForm" onclick="replace('emailForm','ageForm')" style="padding-top: 20px; padding-bottom: 30px; padding-left: 20px; font-size: 11px;">Back To Age & Gender</a> 
                                    <div class="col-md-12 message-btn" id="emailButton" style="margin-top: 10px; border-radius: 1px; width: 100%; display: none;">
                                        <img src="/Images/green-dots.gif" id="loader" style="display: none"/>
                                        <button type="submit" id="register"><span>Create Your Account</span></button>
                                    </div>
                                </div>
                                <br>
                                <p title="Register" style="font-size: 12px; margin-top: 20px; float: right;">Already Registered? <a href="<?= baseURL('login/'); ?>" style="color:#7005e3;">Login</a></p>
                            </form>

                            <script>
                                function passwordToggle() {
                                    var x = document.getElementById("password");
                                    if (x.type === "password") { x.type = "text"; } else { x.type = "password"; }
                                }
                            </script>
                       </div>
                        <!-- Dashboard Login For Users -->
                        <div class="" id="loginForm" style="display: none; margin: 20px;"> 
                            <center><img src="/Images/Body/thumb-up.png" style="width: 150px; margin: 80px;" alt="Successful-icon"></center>
                            <h5 class="welcome log-title" style="text-align: center; font-weight: 600;">Congratulations!!!<br><br>You Are Now a Member!</h5>
                            <br>
                            <div class="clickable" style="font-size: 16px; font-weight: 700; text-align: center;">Check Your Email Inbox Or Spam Folder For Your Password & Membership Details Then Proceed To The <a href="<?= trim(getenv('baseURL'))."login/";?>">Login Portal</a></div>
                            <br><br>
                            <p class="notme" style="font-size: 14px; color: red; text-align: center;">Remember To Keep Your Account Information Safe!</p>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro-style-two end -->






                            
<!-- Include Creator script -->
<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/register.js') ?>"></script>



<?php include 'Layout/footer.php'; ?>
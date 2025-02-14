<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';

if (isset($_SERVER['HTTPS'])) { $url= "https://"; } else { $url = "http://"; }
?>

<title>Start Your <?= $_GET['cat']; ?> Journey | Register For <?= $_GET['cat']; ?> |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>

<!-- contact-section -->
<section class="contact-section">
        <div class="container">
            <div class="row" style="margin-top: 50px; padding-top: 100px;">


                <div class="col-lg-7 col-md-7 col-sm-6 agent-column">
                    <div class="agent-content">
                        <br /><br />
                        <h2><?= $_GET['cat']; ?> Application Guidelines.</h2>
                        <div class="text" style="font-size: 14px;">
                            You are about to start a very crucial journey in your career. 
                            <br><br>We help get on your feet quickly using result focused steps and guidelines. 
                            <br><br>Our application process is easy and flexible for anyone willing to take part.
                            <br><br>This note covers the essential criteria to get started on the application process. 
                            <br><br><br>
                            <h2>Must Have Before You Apply</h2>
                            <b style="font-size: 16px;">🌟 Age Criteria:</b> Applicants must be between 14 to 28 years old.
                            <br><br><b style="font-size: 16px;">🌟 Skill Level:</b> Previous experience in competitive sports is highly recommended.
                            <br><br><b style="font-size: 16px;">🌟 Physical Fitness:</b> Undergo a thorough physical examination.
                            <br><br><b style="font-size: 16px;">🌟 Personal Statement:</b> Explain your sports journey, goals, and why you wish to join us.
                            <br><br><b style="font-size: 16px;">🌟 Parental/Guardian Consent:</b> Provide signed consent from a parent or guardian.
                            <br><br><b style="font-size: 16px;">🌟 International Passport:</b> For international applicants only
                            <br><br><br>
                            <b style="color: red; font-size: 16px;">If You Do Not Meet These Requirements, Please Do Not Attempt To Apply.</b>
                            <br><br>
                            <b style="font-size: 16px;">Good luck to all the aspiring athletes out there! <b style="font-size: 36px;">🏆</b></b>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5 col-md-5 col-sm-6 form-column">
                    <div class="contact-form-area" id="registerForm">
                        <br /><br />
                        <h2><?= $_GET['cat']; ?> Application Form</h2>
                        <div class="text" style="font-size: 14px;">
                            Already Submitted Your Application? <a href="<?= baseURL('login/'); ?>">Track It</a>
                            <br>
                            Fill The Form Fields Below To Submit An Application For <b><?= $_GET['cat']; ?></b> 
                        </div>
                        <br />

                        <div class="formError_box" style="margin:10px 0px;"></div>
                        
                        <form method="POST" id="contact-form" class="default-form"> 
                            <input type="hidden" id="ip" value="<?php echo $ip?>">
                            <input type="hidden" id="ua" value="<?php echo $user_agent?>">
                            <input type="hidden" id="urlReg" value="<?= trim(getenv('baseURL'))."ajax-new-player/";?>">
                            <input type="hidden" id="category" value="<?= $_GET['cat']; ?>">

                            <div class="form-group">
                                <label> First Name</label>
                                <input type="text" id="fname" placeholder="Applicant First Name" required>
                            </div>

                            <div class="form-group">
                                <label> Last Name</label>
                                <input type="text" id="lname" placeholder="Applicant Last Name" required>
                            </div>
                            
                            <div class="form-group">
                                <label> Email ID</label>
                                <input type="text" id="email" placeholder="Applicant Email ID" required>
                            </div>

                            <div class="form-group">
                                <label>Account Password</label>
                                <input type="password" id="password" placeholder="**********" required>
                                
								<input type="checkbox" style="margin-top: 10px;" class="select-message" onclick="passwordToggle()"/><i class="check-box" style="margin-right: 8px; font-size: 10px;"> Show Password</i> 
							</div>

                            <div class="form-group">
                                <label>Tell Us Why You Should Be Selected</label>
                                <textarea id="details" minlength="100" maxlength="10000" placeholder="Tell Us About Your Sports Experience And Why You Should Be Selected"></textarea>
                            </div>
                            
                            <div class="checkbox" style="font-size: 14px;">
								<input type="checkbox" id="accept" required="required"/> <i class="check-box" style="margin-right: 10px;"></i>You Must Accept Our<a href="<?= baseURL('terms-of-service/'); ?>"> Terms & Condition</a>
							</div>
                            
                            <div class="form-group message-btn" style="margin-top: 50px; border-radius: 1px; width: 100%;">
                                <img src="/Images/green-dots.gif" id="loader" style="display: none"/>
                                <button type="submit" id="apply1">Next Step</button>
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
        </div>
    </section>
    <!-- contact-section end -->



<!-- Include Creator script -->
<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/start-journey.js') ?>"></script>



<?php include 'Layout/footer.php'; ?>
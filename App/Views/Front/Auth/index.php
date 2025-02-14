<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>

<title>Member Area | Login Page |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>


    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            <div class="row" style="margin-top: 50px; padding-top: 100px;">
                
                <div class="col-lg-5 col-md-5 col-sm-12 form-column">
                    <div class="contact-form-area">
                    <br /><br />
                        <h2>Welcome Back</h2>

                        <div id="loginForm">
                            <div class="text" style="font-size: 12px;">
                                <!-- Not Yet a Member? <a href="<?= baseURL('join-us/'); ?>">Register Here</a>
                                <br> -->
                                Fill In Your Member Credentials In The Form Fields Below
                            </div>
                            <br />

                            <div class="formError_box" style="margin:10px 0px;"></div>

                            <form method="POST" class="default-form"> 
                                <input type="hidden" id="ip" value="<?php echo $ip?>">
                                <input type="hidden" id="ua" value="<?php echo $user_agent?>">
                                <input type="hidden" id="url" value="<?= trim(getenv('baseURL'));?>">
                                <input type="hidden" id="urlLog" value="<?= trim(getenv('baseURL'))."ajax-login/";?>">
                                
                                <div class="form-group">
                                    <input type="text" id="emailLog" placeholder="Email OR Member ID" required>
                                </div>

                                <div class="form-group" style="font-size: 12px;">
                                    <input type="password" id="password" placeholder="**********" required>
                                    
                                    <input type="checkbox" style="margin-top: 10px;" class="select-message" onclick="passwordToggle()"/><i class="check-box" style="margin-right: 8px;"></i> Show Password
                                </div>

                                <div class="text" style="text-align: right; font-size: 12px;">Forgot Password? <a href="<?= baseURL('forgot-password/'); ?>">Reset Now</a></div>
                                
                                <div class="form-group message-btn" style="margin-top: 20px; border-radius: 1px; width: 100%;">
                                    <img src="/Images/green-dots.gif" id="loader" style="display: none"/>
                                    <button type="submit" id="login">Continue</button>
                                </div>
                                
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
                        <div class="" id="dashboardForm" style="display: none"> 

                            <br>
                            <center><div class="profileimage"></div></center>

                            <h1 class="welcome log-title" style="text-align: center;"></h1>
                            <br>
                            <div class="clickable" style="font-size: 16px; text-align: center;"></div>
                            <br>
                            <p class="notme"></p>

                        </div>

                    </div>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-6 agent-column">
                    <div class="agent-content">
                        <br><br>
                        <img src="/Images/Banner/5.png" style="width: 100%; margin-left: 80px;" alt="Member-area-icon">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact-section end -->




    <!-- Include Login script -->
<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/login.js') ?>"></script>



<?php include 'Layout/footer.php'; ?>
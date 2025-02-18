<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>

<title>Member Area | Login Page |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>



    <!-- intro-style-two -->
    <section class="intro-style-two home-6" style="background-image: url(/Images/Banner/4.jpg);">
        <div class="container">
            <div class="row" style="margin-top: 50px; padding-top: 200px;">

                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <?php include 'auth-side.php'; ?>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <h3>Welcome Back, Login</h3>
                        <div class="text"> 
                            Fill In Your Member Credentials In The Form Fields Below
                            <br>
                            Not Yet a Member? <a href="<?= baseURL('new-member/'); ?>">Create Your Account</a>
                        </div>
                        <div class="formError_box" style="margin:10px 0px;"></div>

                            <form method="POST" class="signup-form"> 
                                <input type="hidden" id="ip" value="<?php echo $ip?>">
                                <input type="hidden" id="ua" value="<?php echo $user_agent?>">
                                <input type="hidden" id="url" value="<?= trim(getenv('baseURL'));?>">
                                <input type="hidden" id="urlLog" value="<?= trim(getenv('baseURL'))."ajax-login/";?>">
                                
                                <div class="form-group">
                                    <label class="control-label" for="input">Email OR Member ID</label><i class="mtrl-select"></i>	
                                    <input type="email" id="emailLog" placeholder="Email OR Member ID" required focus>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>	
                                    <input type="password" id="password" placeholder="**********" required>
                                    
                                    <div class="text"style="font-size: 12px;"> <input type="checkbox" style="margin-top: 10px;" class="select-message" onclick="passwordToggle()"/><i class="check-box" style="margin-right: 8px; font-size: 20px;"></i> Show Password </div>
                                </div>

                                <div class="text" style="text-align: right; font-size: 12px;">Forgot Password? <a href="<?= baseURL('forgot-password/'); ?>">Reset Now</a></div>
                                
                                <div class="form-group message-btn" style="margin-top: 20px; border-radius: 1px; width: 100%;">
                                    <img src="/Images/green-dots.gif" id="loader" style="display: none"/>
                                    <button type="submit" id="login">Login To Dashboard</button>
                                </div>
                                
                            </form>

                            <script>
                                function passwordToggle() {
                                    var x = document.getElementById("password");
                                    if (x.type === "password") { x.type = "text"; } else { x.type = "password"; }
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
            </div>
        </div>
    </section>
    <!-- intro-style-two end -->




    <!-- Include Login script -->
<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/login.js') ?>"></script>



<?php include 'Layout/footer.php'; ?>
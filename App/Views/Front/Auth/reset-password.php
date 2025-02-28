<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>

<title>Member Area | Reset Password Page |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>








    <!-- intro-style-two -->
    <section class="intro-style-two home-6" style="background-image: url(/Images/Banner/4.jpg);">
        <div class="container">
            <div class="row" style="margin-top: 50px; padding-top: 200px;">

                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <?php include 'auth-side.php'; ?>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="" id="resetForm"> 
                            <h3>Create New Password</h3>
                            <div class="text"> 
                                Create And Confirm Your New Password In The Form Field Below
                                <br>
                                Didn't Forget Password? <a href="<?= baseURL('login/'); ?>">Login Here</a>
                            </div>
                            <div class="formError_box" style="margin:10px 0px;"></div>

                            <form method="POST" class="signup-form"> 
                                <input type="hidden" id="ip" value="<?php echo $ip?>">
                                <input type="hidden" id="ua" value="<?php echo $user_agent?>">
                                <input type="hidden" id="url" value="<?= trim(getenv('baseURL'));?>">
                                <input type="hidden" id="url1" value="ajax-reset/">
                                <input type="hidden" id="email" value="<?= $_GET['id']; ?>"/>
                                
                                <div class="form-group">
                                    <label class="control-label" for="input">One-Time Code</label><i class="mtrl-select"></i>
                                    <input type="text" id="code" value="<?= $_GET['otp']; ?>" required="required" autofocus/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input">New Password</label><i class="mtrl-select"></i>
                                    <input type="password" id="password" placeholder="**********" required="required"/>

                                    <input type="checkbox" class="select-message" onclick="passwordToggle()"/><i class="check-box"></i> Show Password
                                </div>
                                
                                <script>
                                    function passwordToggle() {
                                        var x = document.getElementById("password");
                                        if (x.type === "password") { x.type = "text"; } else { x.type = "password"; }
                                    }
                                </script>
                               
                                <div class="form-group message-btn" style="margin-top: 20px; border-radius: 1px; width: 100%;">
                                    <img src="/Images/green-dots.gif" id="loader" style="display: none"/>
                                    <button type="submit" id="reset">Create New Password</button>
                                </div>
                                
                                <p title="Register" style="margin-top: 10px; float: right;">Not <?= $_GET['uid']; ?>? <a href="<?= baseURL('login/'); ?>" style="color:#7005e3;">Login</a></p> 
                                
                            </form>
                            
                        </div>
                        <!-- Form Login For Users -->
                        <div class="" id="loginForm" style="display: none"> 
                            <center><img src="/Images/Body/thumb-up.png" style="width: 150px; margin: 80px;" alt="Successful-icon"></center>
                            <h5 class="welcome log-title" style="text-align: center; font-weight: 600;">Well Done<br><br>You Created a New Password!</h5>
                            <br>
                            <div class="clickable" style="font-size: 16px; font-weight: 700; text-align: center;">You Can Proceed To The <a href="<?= trim(getenv('baseURL'))."login/";?>">Login Portal</a></div>
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






    <!-- Include Login script -->
<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/reset.js') ?>"></script>



<?php include 'Layout/footer.php'; ?>
<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>

<title>Member Area | Forgot Password Page |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>





    <!-- intro-style-two -->
    <section class="intro-style-two home-6" style="background-image: url(/Images/Banner/4.jpg);">
        <div class="container">
            <div class="row" style="margin-top: 50px; padding-top: 200px;">

                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <?php include 'auth-side.php'; ?>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <h3>Forgot Password</h3>
                        <div class="text"> 
                            Enter Your Member Email ID In The Form Field Below
                            <br>
                            Didn't Forget Password? <a href="<?= baseURL('login/'); ?>">Login Here</a>
                        </div>
                        <div class="emailError_box" style="margin:10px 0px;"></div>

                            <form method="POST" class="signup-form"> 
                                <input type="hidden" id="ip" value="<?php echo $ip?>">
                                <input type="hidden" id="ua" value="<?php echo $user_agent?>">
                                <input type="hidden" id="url" value="<?= trim(getenv('baseURL'));?>">
                                <input type="hidden" id="url1" value="ajax-forgot/">
                                
                                <div class="form-group">
                                    <label class="control-label" for="input">Email OR Member ID</label><i class="mtrl-select"></i>	
                                    <input type="email" id="email" placeholder="Email ID" required focus>
                                </div>

                                <div class="form-group message-btn" style="margin-top: 20px; border-radius: 1px; width: 100%;">
                                    <img src="/Images/green-dots.gif" id="loader" style="display: none"/>
                                    <button type="submit" id="forgot">Request Password Reset Link</button>
                                </div>
                                
                            </form>
                            
                       </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro-style-two end -->






    <script src="<?= public_asset('/other_assets/Front/js/ajaxForms/forgot.js') ?>"></script>



<?php include 'Layout/footer.php'; ?>
<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>

<title>Member Area | Reset Password Page |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>


    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            <div class="row" style="margin-top: 50px; padding-top: 100px;">
                
                <div class="col-lg-5 col-md-5 col-sm-12 form-column">
                    <div class="contact-form-area">
                    <br /><br />
                        <h2>Reset Password</h2>

                        <div id="loginForm">
                            <div class="text" style="font-size: 12px;">
                                <!-- Not Yet a Member? <a href="<?= baseURL('join-us/'); ?>">Register Here</a>
                                <br> -->
                                Fill In Your New Account Password In The Form Field Below
                            </div>
                            <br />

                            <div class="formError_box" style="margin:10px 0px;"></div>

                            <form method="POST" class="default-form"> 
                                <input type="hidden" name="ip" value="<?php echo $ip?>">
                                <input type="hidden" name="ua" value="<?php echo $user_agent?>">
                                <input type="hidden" name="uniqueid" value="<?= $_GET['id']; ?>">
                                <input type="hidden" name="email" value="<?= $_GET['e']; ?>">
                                <input type="hidden" name="name" value="<?= $_GET['u']; ?>">
                                
                                <div class="form-group">
                                    <input type="text" name="code" minlength="4" maxlength="7" placeholder="One-Time Code" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" minlength="5" maxlength="20" placeholder="New Password" required>

                                    <input type="checkbox" style="margin-top: 10px;" class="select-message" onclick="passwordToggle()"/><i class="check-box" style="margin-right: 8px; font-size: 10px;"> Show Password</i>
                                </div>

                                <div class="text" style="text-align: right; font-size: 12px;">Did Not Forget Password? <a href="<?= baseURL('login/'); ?>">Login Now</a></div>
                                
                                <div class="form-group message-btn" style="margin-top: 20px; border-radius: 1px; width: 100%;">
                                    <img src="/Images/green-dots.gif" id="loader" style="display: none"/>
                                    <button type="submit" name="reset">Continue</button>
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
<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/reset.js') ?>"></script>



<?php include 'Layout/footer.php'; ?>
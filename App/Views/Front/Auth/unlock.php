<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>

<title>Member Area | Login Page |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>




    <!-- about-banner -->
    <section class="about-banner" style="background-image: url(/Images/Body/news.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Member Area</h1>
                <div class="text">Restricted Area (Members Only) <br />Fill the form fields below to login.</div>
            </div>
        </div>
    </section>
    <!-- about-banner end -->



    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 agent-column">
                    <div class="agent-content">
                        <h2>Useful Links</h2>
                        <div class="single-agent-box">
                            <div class="content-box">
                                <figure class="agent-image"><img src="/Images/Body/meeting.jpg" alt="Our Team"></figure>
                                <h4><?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></h4>
                                <span>Member Area Links</span>
                                <div class="text">Forgot Password? <a href="<?= baseURL('forgot-password/'); ?>">Reset Now</a></div>
                                <div class="text">Not Yet a Member? <a href="<?= baseURL('register/'); ?>">Register Here</a></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="contact-form-area">

                            <h2>Member Credentials</h2>
                            <form method="POST" action="<?= baseURL('unlock/'); ?>" id="contact-form" class="default-form"> 
                                <input type="hidden" name="ip" value="<?php echo $ip?>">
                                <input type="hidden" name="ua" value="<?php echo $user_agent?>">
                                
                                <div class="form-group col-md-10">
                                    <input type="text" name="u" minlength="5" maxlength="30" placeholder="Email OR Member ID" required>
                                </div>

                                <div class="form-group col-md-10">
                                    <input type="password" name="p" minlength="5" maxlength="30" placeholder="**********" required>
                                </div>
                                
                                <div class="form-group message-btn" style="margin-top: 20px;">
                                    <button type="submit" class="theme-btn" name="signin">Continue</button>
                                </div>
                            </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact-section end -->



<?php include 'Layout/footer.php'; ?>
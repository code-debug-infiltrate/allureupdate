
<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';

if (isset($_SERVER['HTTPS'])) { $url= "https://"; } else { $url = "http://"; }

?>
<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->
<title>Write Us | Support |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>



    <!-- about-banner -->
    <section class="about-banner" style="background-image: url(/Images/Body/newsletter.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>We Love To Hear From You</h1>
                <div class="text">Do you have concerns about any services on <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?>? <br />Fill the form fields below to contact us.</div>
            </div>
        </div>
    </section>
    <!-- about-banner end -->



    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-12 col-sm-12 agent-column">
                    <div class="agent-content">
                        <h2>Chat a Team Member</h2>
                        <div class="single-agent-box">
                            <div class="content-box">
                                <figure class="agent-image"><img src="/Images/Body/private-session.gif" alt="Our Team"></figure>
                                <h4><?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></h4>
                                <span>Customer Representatives</span>
                                <br>
                                <?php if(isset($coyInfo['phone'])) { ?>
                                    <div class="phone"><b>Call Us:</b> <a href="tel:<?= $coyInfo['phone']; ?>"><?= $coyInfo['phone']; ?></a></div>
                                <?php } ?>
                                <?php if($coyInfo['phone1']) { ?>
                                    <div class="phone"><b>Call Us:</b> <a href="tel:<?= $coyInfo['phone1']; ?>"><?= $coyInfo['phone1']; ?></a></div>
                                <?php } ?>
                                <div class="phone"><b>Whatsapp:</b> <a href="https://api.whatsapp.com/send?phone=<?= $coyInfo['phone']; ?>&text=hello, good day! I want to make enquiries about some of your service..." target="_blank">Chats Only</a></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-7 col-md-12 col-sm-12 form-column" style="background: white; padding: 50px; border-radius: 5px;">
                    <div class="contact-form-area">

                        <h2>Tell Us Whats On Your Mind!</h2>
                        
                        <div class="formError_box" style="margin:10px 0px;"></div>

                        <form method="POST" action="" id="contact-form" class="default-form"> 
                            <input type="hidden" name="ip" id="ip" value="<?php echo $ip?>">
		                	<input type="hidden" name="ua" id="ua" value="<?php echo $user_agent?>">
                            <input type="hidden" id="urlCon" value="<?= trim(getenv('baseURL'))."ajax-contact/";?>">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="fname" id="fname" minlength="5" maxlength="30" placeholder="Your first name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="lname" id="lname" minlength="5" maxlength="30" placeholder="Your last name" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" id="email" minlength="5" maxlength="50" placeholder="Email address" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="phone" id="phone" minlength="10" maxlength="18" placeholder="Phone Number" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" id="s" minlength="30" maxlength="90" placeholder="Give This Message a Relevant Subject" required>
                            </div>
                            
                            <div class="form-group">
                                <textarea name="message" minlength="100" id="m" maxlength="10000" placeholder="Tell Us More About The Subject Matter But Be Brief"></textarea>
                            </div>

                            <div class="form-group message-btn">
                                <img src="/Images/green-dots.gif" id="loader" style="display: none"/>
                                <button type="submit" class="theme-btn" id="send_msg" name="submit">Continue</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact-section end -->


    
    <!-- contact-info-section -->
    <section class="contact-info-section contact-page-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-location"></i></div>
                        <h3>Walk-In-Anytime</h3>

                        <?php if($coyInfo['address']) { ?>
                        <div class="text">
                            <p style="text-align: left;"><b>Head Office:</b> <?= $coyInfo['address']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-telephone"></i></div>
                        <h3>Call us on</h3>

                        <?php if($coyInfo['phone']) { ?>
                        <div class="text">
                            <p><b>Line 1:</b> <?= $coyInfo['phone']; ?></p>
                        </div>
                        <?php } ?>

                        <br>
                        <?php if($coyInfo['phone1']) { ?>
                        <div class="text">
                            <p><b>Line 2:</b> <?= $coyInfo['phone1']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-envelope"></i></div>
                        <h3>Send An Email</h3>

                        <?php if($coyInfo['email']) { ?>
                        <div class="text">
                            <p><b>Mail:</b> <a href="mailto:<?= $coyInfo['email']; ?>">Send a Message</a></p>
                        </div>
                        <?php } ?>
                        <br>
                        <?php if($coyInfo['email1']) { ?>
                        <div class="text">
                            <p><b>Mail:</b> <a href="mailto:<?= $coyInfo['email1']; ?>">Send a Message</a></p>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->



<!-- Include Creator script -->
<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/contact.js') ?>"></script>



<?php include 'Layout/footer.php'; ?>










	
<!-- Bothelp.io widget -->
<script type="text/javascript">!function(){var e={"token":"<?= $coyInfo['phone']; ?>","position":"left","bottomSpacing":"150","callToActionMessage":"","displayOn":"everywhere","subtitle":"International Match Maker And Therapist!","message":{"name":"Allure-D Official","content":"Hello There, How Can We Help You Today? "}},t=document.location.protocol+"//bothelp.io",o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=t+"/widget-folder/widget-whatsapp-chat.js",o.onload=function(){BhWidgetWhatsappChat.init(e)};var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(o,n)}();</script>
<!-- /Bothelp.io widget -->



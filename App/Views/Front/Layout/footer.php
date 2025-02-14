    <!-- main-footer -->
    <footer class="main-footer style-two">
        <div class="container">
            <div class="footer-top">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="logo-widget footer-widget">
                                <figure class="footer-logo"><a href="<?= baseURL('index/'); ?>"><img src="/Images/Logo/favicon.png" width="60px" alt="Logo"></a></figure>
                                <div class="text" style="font-size: 12px;"><?= $coyInfo['slogan']; ?></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget company-widget footer-widget">
                                <h4 class="widget-title">Quick Links</h4>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="<?= baseURL('index/'); ?>">Home</a></li>
                                        <li><a href="<?= baseURL('about-us/'); ?>">About Us</a></li>
                                        <li><a href="<?= baseURL('privacy-policy/'); ?>">Privacy Policy</a></li>
                                        <li><a href="<?= baseURL('terms-of-service/'); ?>">Terms Of Service</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Start Your Journey</h4>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="<?= baseURL('new-registration/'); ?>?cat=Academy"> Academy </a></li>
                                        <li><a href="<?= baseURL('new-registration/'); ?>?cat=Scouting"> Scouting </a></li>
                                        <li><a href="<?= baseURL('new-registration/'); ?>?cat=Tournament"> Tournament </a></li>
                                        <li><a href="<?= baseURL('login/'); ?>">Member Area</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Need Help?</h4>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="<?= baseURL('faqs/'); ?>">FAQs</a></li>
                                        <li><a href="<?= baseURL('write-us/'); ?>">Write Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom clearfix">
                <div class="copyright pull-left" style="font-size: 12px;">
                    <strong>
                        &copy; Copyright <span> 
                        <script type="text/JavaScript">
                            document.write(new Date().getFullYear());
                        </script> 
                        <?= trim(getenv('APP_NAME'));?></span>. All Rights Reserved 
                    <br>
                    <i style="font-weight: 200;"> Designed And Powered By <a href="<?= getenv('DV_LINK')?>" class="text-muted" target="_blank"><?= getenv('DV_NAME')?></a> </i>
                    </strong>
                </div>
                <?php if ($coyInfo) { ?>
                <ul class="footer-social pull-right">
                    <?php if ($coyInfo['instagram']) { ?>
                        <li><a href="https://instagram.com/<?= $coyInfo['instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <?php } ?>
                    <?php if ($coyInfo['facebook']) { ?>
                        <li><a href="https://facebook.com/<?= $coyInfo['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <?php } ?>
                    <?php if ($coyInfo['twitter']) { ?>
                        <li><a href="https://twitter.com/<?= $coyInfo['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <?php } ?>
                    <?php if ($coyInfo['linkedin']) { ?>
                        <li><a href="https://linkedin.com/<?= $coyInfo['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <?php } ?>
                    <?php if ($coyInfo['phone']) { ?>
                        <li><a href="https://api.whatsapp.com/send?phone=<?= $coyInfo['phone']; ?>&text=hello, good day! I want to make enquiries about some of your products..." target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>


<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">
                
                <!-- Sidebar Info Content -->
            <div class="sidebar-info-contents">
                <div class="content-inner">
                    <div class="logo">
                        <a href="<?= baseURL('index/'); ?>"><img src="/Images/Logo/favicon.png" alt="Logo" /></a>
                    </div>
                    
                    <?php if ($coyInfo) { ?>

                    <div class="content-box">
                        <h4>About Us</h4>
                        <p class="text"><?= $coyInfo['slogan']; ?></p>
                        <br>
                        <a href="<?= baseURL('about-us/'); ?>">Learn More</a>
                    </div>
                    <div class="contact-info">
                        <h4>Contact Info</h4>
                        <ul>
                            <li><?= $coyInfo['address']; ?></li>
                            <li><a href="tel:<?= $coyInfo['phone']; ?>"><?= $coyInfo['phone']; ?></a></li>
                            <li><a href="mailto:<?= $coyInfo['email']; ?>"><?= $coyInfo['email']; ?></a></li>
                        </ul>
                    </div>
                    <!-- Social Box -->
                    <ul class="social-box">
                        <?php if ($coyInfo['instagram']) { ?>
                            <li><a href="https://instagram.com/<?= $coyInfo['instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <?php } ?>
                        <?php if ($coyInfo['facebook']) { ?>
                            <li><a href="https://facebook.com/<?= $coyInfo['facebook']; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <?php } ?>
                        <?php if ($coyInfo['twitter']) { ?>
                            <li><a href="https://twitter.com/<?= $coyInfo['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <?php } ?>
                        <?php if ($coyInfo['linkedin']) { ?>
                            <li><a href="https://linkedin.com/<?= $coyInfo['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <?php } ?>
                        <?php if ($coyInfo['phone']) { ?>
                            <li><a href="https://api.whatsapp.com/send?phone=<?= $coyInfo['phone']; ?>&text=hello, good day! I want to make enquiries about some of your products..." target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </div>
            </div>
                
            </div>
        </div>
    </div>
</div>
<!-- END sidebar widget item -->




	
<!-- Bothelp.io widget -->
<script type="text/javascript">!function(){var e={"token":"+905060610316","position":"left","bottomSpacing":"150","callToActionMessage":"","displayOn":"everywhere","subtitle":"International Professional Sports Agency!","message":{"name":"Splendid Global Sports","content":"Hello There, How Can We Help You Today? "}},t=document.location.protocol+"//bothelp.io",o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=t+"/widget-folder/widget-whatsapp-chat.js",o.onload=function(){BhWidgetWhatsappChat.init(e)};var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(o,n)}();</script>
<!-- /Bothelp.io widget -->


	
	
<!-- START Bootstrap-Cookie-Alert -->
<div class="cookiealert" role="alert">
    This site uses cookies for analytics and personalized content. For more information, Read the <a href="<?= baseURL('privacy-policy/'); ?>">Privacy Policy</a> and <a href="<?= baseURL('terms-of-service/'); ?>">terms of service</a> 
    <button type="button" class="btn acceptcookies"><span>Accept</span></button>
</div>





<!-- jequery plugins -->
<script src="<?= public_asset('/other_assets/Front/js/popper.min.js') ?>"></script>
<script src="<?= public_asset('/other_assets/Front/js/bootstrap.min.js') ?>"></script>

<script src="<?= public_asset('/other_assets/Front/js/owl.js') ?>"></script>
<script src="<?= public_asset('/other_assets/Front/js/wow.js') ?>"></script>
<script src="<?= public_asset('/other_assets/Front/js/validation.js') ?>"></script>
<script src="<?= public_asset('/other_assets/Front/js/jquery.fancybox.js') ?>"></script>
<script src="<?= public_asset('/other_assets/Front/js/appear.js') ?>"></script>
<script src="<?= public_asset('/other_assets/Front/js/aos.js') ?>"></script>
<script src="<?= public_asset('/other_assets/Front/js/isotope.js') ?>"></script>
<script src="<?= public_asset('/other_assets/Front/js/jquery.countTo.js') ?>"></script>
<script src="<?= public_asset('/other_assets/Front/js/jquery-ui.js') ?>"></script>
<script src="<?= public_asset('/other_assets/Front/js/nav-tool.js') ?>"></script>

<!-- main-js -->
<script src="<?= public_asset('/other_assets/Front/js/script.js') ?>"></script>
<!-- Include cookiealert script -->
<script src="<?= public_asset('/other_assets/Front/js/cookiealert.js') ?>"></script>

</body><!-- End of .page_wrapper -->

</html>
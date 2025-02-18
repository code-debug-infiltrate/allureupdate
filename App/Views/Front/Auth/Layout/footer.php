    <!-- main-footer -->
    <footer class="main-footer style-two">
        <div class="container">
            <div class="footer-top">
                <div class="widget-section">
                    
                </div>
            </div>
            <div class="footer-bottom clearfix">
                <div class="copyright pull-left">
                    <strong>
                        &copy; Copyright <span> 
                        <script type="text/JavaScript">
                            document.write(new Date().getFullYear());
                        </script> 
                        <?= trim(getenv('APP_NAME'));?></span>. All Rights Reserved 
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
                        <a href="<?= baseURL('index/'); ?>"><img src="/Images/Logo/allure-official.png" alt="Logo" /></a>
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



<!-- jequery plugins -->
<script src="<?= public_asset('/other_assets/Front/js/jquery.js') ?>"></script>
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

</body><!-- End of .page_wrapper -->

</html>
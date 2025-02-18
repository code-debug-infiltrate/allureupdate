<?php 
//Parse URL
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$tN = explode("/", $url);
$curURL = $tN[1];
?> 


    <!-- search-box-layout -->
    <div class="wraper_flyout_search">
        <div class="table">
            <div class="table-cell">
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-close">
                    <span class="flyout-search-close-line"></span>
                    <span class="flyout-search-close-line"></span>
                </div>
                <div class="flyout_search">
                    <div class="flyout-search-title">
                        <h4>Search</h4>
                    </div>
                    <div class="flyout-search-bar">
                        <form role="search" method="POST" action="<?= baseURL('search/')?>">
                            <div class="form-row">
                                <input type="search" placeholder="Search <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?>..." name="search" required>
                                <button type="submit" name="formSearch"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-box-layout end -->


    <!-- main header -->
    <header class="main-header style-seven style-eight">

        <!-- header-upper -->
        <div class="header-upper">
            <div class="container">
                <div class="inner-container clearfix">
                    <div class="left-content pull-left">
                        <figure class="logo-box"><a href="<?= baseURL('index/'); ?>"><img src="/Images/Logo/favicon.png" alt="Logo"></a></figure>
                    </div>
                    <div class="right-content pull-right">
                    <?php if ($coyInfo) { ?>
                        <div class="info-box">
                        <?php if ($coyInfo['phone']) { ?>
                            <div class="icon-box"><i class="flaticon-telephone"></i></div>
                            <h3><a href="tel:<?= $coyInfo['phone']; ?>">Call</a></h3>
                            <div class="text">For Any Support</div>
                        <?php } ?>
                        </div>
                        <div class="info-box">
                        <?php if ($coyInfo['email']) { ?>
                            <div class="icon-box"><i class="flaticon-envelope"></i></div>
                            <h3><a href="mailto:<?= $coyInfo['email']; ?>">Email</a></h3>
                            <div class="text">For Messaging</div>
                        <?php } ?>
                        </div>
                        <ul class="social-list">
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
        </div><!-- header-upper end -->

        <!-- header-bottom -->
        <div class="header-bottom">
            <div class="container">
                <div class="outer-container">
                    <div class="nav-outer clearfix">
                        <div class="menu-area pull-left clearfix">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="<?php if ($curURL == "index" || $curURL == "") {echo "current";}?>"><a href="<?= baseURL('index/'); ?>">Home</a></li>

                                        <li class="<?php if ($curURL == "about-us" || $curURL == "how-it-works" || $curURL == "privacy-policy" || $curURL == "terms-of-service") {echo "current";}?> dropdown"><a href="#">Who We Are</a>
                                            <ul>
                                                <li><a href="<?= baseURL('about-us/'); ?>">About Us</a></li>
                                                <li><a href="<?= baseURL('how-it-works/'); ?>">How It Works</a></li>
                                                <li class="dropdown"><a href="#">Legal</a>
                                                    <ul>
                                                        <li><a href="<?= baseURL('privacy-policy/')?>">Privacy Policy</a></li>
                                                        <li><a href="<?= baseURL('terms-of-service/')?>">Terms Of Service</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> 

                                        <li class="<?php if ($curURL == "testimonials") {echo "current";}?>"><a href="<?= baseURL('testimonials/'); ?>">Love Stories</a></li>

                                        <li class="<?php if ($curURL == "safety-security" || $curURL == "faqs" || $curURL == "write-us") {echo "current";}?> dropdown"><a href="#">Need Help?</a>
                                            <ul>
                                                <li><a href="<?= baseURL('faqs/'); ?>">Faqs</a></li>
                                                <li><a href="<?= baseURL('safety-security/'); ?>">Safety & Security</a></li>
                                                <li><a href="<?= baseURL('write-us/'); ?>">Write Us</a></li>
                                            </ul>
                                        </li> 

                                        <li class="<?php if ($curURL == "new-member" || $curURL == "login") {echo "current";}?> dropdown"><a href="#">Member Area</a>
                                            <ul>
                                                <li><a href="<?= baseURL('login/'); ?>">Login</a></li>
                                                <li><a href="<?= baseURL('new-member/'); ?>">Register</a></li>
                                            </ul>
                                        </li> 

                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="info-box pull-right clearfix">
                            <div class="btn-box"><a href="<?= baseURL('blog/'); ?>all/">News & Updates<i class="fas fa-arrow-right"></i></a></div>
                            <div class="search-box">
                                <div class="header-flyout-searchbar">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            <div class="shop-cart"> <!-- <a href="#"> <i class="flaticon-shopping-bag"></i> <span>0</span> </a> --> </div>
                            <div class="nav-box">
                                <div class="nav-btn nav-toggler navSidebar-button clearfix">
                                    <span class="icon"></span>
                                    <span class="icon"></span>
                                    <span class="icon"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- header-bottom end -->

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="<?= baseURL('index/'); ?>"><img src="/Images/Logo/favicon.png" alt="Logo"></a></figure>
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="<?php if ($curURL == "index" || $curURL == "") {echo "current";}?>"><a href="<?= baseURL('index/'); ?>">Home</a></li>

                                <li class="<?php if ($curURL == "about-us" || $curURL == "how-it-works" || $curURL == "privacy-policy" || $curURL == "terms-of-service") {echo "current";}?> dropdown"><a href="#">Who We Are</a>
                                    <ul>
                                        <li><a href="<?= baseURL('about-us/'); ?>">About Us</a></li>
                                        <li><a href="<?= baseURL('how-it-works/'); ?>">How It Works</a></li>
                                        <li class="dropdown"><a href="#">Legal</a>
                                            <ul>
                                                <li><a href="<?= baseURL('privacy-policy/')?>">Privacy Policy</a></li>
                                                <li><a href="<?= baseURL('terms-of-service/')?>">Terms Of Service</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> 

                                <li class="<?php if ($curURL == "testimonials") {echo "current";}?>"><a href="<?= baseURL('testimonials/'); ?>">Love Stories</a></li>

                                <li class="<?php if ($curURL == "safety-security" || $curURL == "faqs" || $curURL == "write-us") {echo "current";}?> dropdown"><a href="#">Need Help?</a>
                                    <ul>
                                        <li><a href="<?= baseURL('faqs/'); ?>">Faqs</a></li>
                                        <li><a href="<?= baseURL('safety-security/'); ?>">Safety & Security</a></li>
                                        <li><a href="<?= baseURL('write-us/'); ?>">Write Us</a></li>
                                    </ul>
                                </li> 

                                <li class="<?php if ($curURL == "blog") {echo "current";}?>"><a href="<?= baseURL('blog/'); ?>all/">News & Updates</a></li>
                                 
                                <li class="<?php if ($curURL == "new-member" || $curURL == "login") {echo "current";}?> dropdown"><a href="#">Member Area</a>
                                    <ul>
                                        <li><a href="<?= baseURL('login/'); ?>">Login</a></li>
                                        <li><a href="<?= baseURL('new-member/'); ?>">Register</a></li>
                                    </ul>
                                </li> 

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- main-header end -->


    
<!-- Alerts For Notifications & Messages -->
<?php include 'alert.php'; ?>

<div class="flash-outer closer" id="closerFlash" onclick="$('#closerFlash').hide()"></div>
<!-- End Alerts For Notifications & Messages -->	
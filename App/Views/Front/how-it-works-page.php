<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>
<!-- preloader -->
 <div class="preloader"></div>
<!-- preloader -->
<title>How It Works | Dating Pool |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>



    <!-- about-banner -->
    <section class="about-banner" style="background-image: url(/Images/Banner/3.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Most Advanced Algorithm</h1>
                <div class="text"><b>Compatibility Methodology:</b> <br> What happens when you apply scientific research to dating behavior? A whole lotta love! But this isn’t destiny, it’s deliberate.</div>
            </div>
        </div>
    </section>
    <!-- about-banner end -->



    <!-- service-style-four -->
    <section class="service-style-four centred">
        <div class="container" id="therapy">
            <div class="title-box">
                <div class="top-text">At <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></div>
                <h1>Result Focused Consultation/Therapy is Guaranteed</h1>
                <h3>Here Are Step By Step Guides To Book Your Slot!</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-heartbeat"></i></div>
                            <h3><a href="<?= baseURL('blog/'); ?>">Therapy Services</a></h3>
                            <div class="text">If You Want Consultation Session Or Theraphy As Individuals, Couples Or Group, We Got You Covered. <br> Just Select Therapy Option, Schedule Your Time, Make Payment And You Will Be Booked Immediately. <br>Remember To Follow All Instructions Or Chat One Of Our Representatives Using Our <a href="<?= baseURL('write-us/')?>">Contact Us</a> Page. </div>
                            <div class="btn-box"><a href="<?= baseURL('consultation-and-therapy/'); ?>">Start Here</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-edit"></i></div>
                            <h3><a href="<?= baseURL('consultation-and-therapy/'); ?>">Your BIO</a></h3>
                            <div class="text"> Needing Help Is Not Weakness. It's a Path Way To Solution. <br>Filling Out The Bio Form Is The First Step. Basic Details About You And The Most Convenient Time To Have a Conversation Then Schedule a Meeting.</div>
                            <div class="btn-box"><a href="<?= baseURL('consultation-and-therapy/'); ?>">Start Here</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-donate"></i></div>
                            <h3><a href="<?= baseURL('login/'); ?>">Payment</a></h3>
                            <div class="text">Your Booking Is Already In Progress. <br>Payment Is Required To Complete Your Booking. After Payment Is Confirmed, Your Spot Is Secured. </div>
                            <div class="btn-box"><a href="<?= baseURL('consultation-and-therapy/'); ?>">Make Payment</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-four end -->


    
    <!-- service-style-four -->
    <section class="service-style-four centred">
        <div class="container" id="matchmaking">
            <div class="title-box">
                <div class="top-text">At <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></div>
                <h1>Finding Your Ideal Match is Guaranteed</h1>
                <h3>Here Are Step By Step Guides To Get You Started!</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-edit"></i></div>
                            <h3><a href="<?= baseURL('new-member/'); ?>">Registration</a></h3>
                            <div class="text"> Your Ideal Match Might Just Be a Profile Away. <a href="<?= baseURL('new-member/'); ?>">Register</a> Your Details. <br>Your Welcome Message Which Includes Password Will Be Sent To Your Email Inbox Or SPam Folder.<br>Find Your Welcome Message And Follow The Instructions In The Email To <a href="<?= baseURL('login/'); ?>">Login</a> To Your Dashboard.</div>
                            <div class="btn-box"><a href="<?= baseURL('new-member/'); ?>">Join Free</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-user"></i></div>
                            <h3><a href="<?= baseURL('login/'); ?>">Profile Setup</a></h3>
                            <div class="text">If You Found Your Welcome Email In Your Inbox Folder, Good, Else Check Your Spam Folder. <br><a href="<?= baseURL('login/'); ?>">Login</a> To Your <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> Member Dashboard. Your Profile Setup Steps Will Be Waiting. <br>Answer All Questions And You're Already On Your Way To Finding Love. You Don't Need To Do Much, Our Algorithm Will Do The Rest.</div>
                            <div class="btn-box"><a href="<?= baseURL('login/'); ?>">Setup profile</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-users"></i></div>
                            <h3><a href="<?= baseURL('login/'); ?>">Preference Setup</a></h3>
                            <div class="text">Select Options That Best Describes Your Ideal Partner. <br> This Helps The Algorithm To Make The Best Choice For You. <br>After a Complete Display Of All Your Matches, All You Need To DO Is Surf And Find That One That Captivates Your Mind. <a href="<?= baseURL('write-us/')?>">Contact Us</a> For Private Matching. </div>
                            <div class="btn-box"><a href="<?= baseURL('login/'); ?>">Setup Preference</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-four end -->






<?php include 'Layout/footer.php'; ?>
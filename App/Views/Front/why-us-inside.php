
    <!-- service-style-four -->
    <section class="service-style-four centred">
        <div class="container">
            <div class="title-box">
                <div class="top-text">At <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></div>
                <h1>Finding Your Ideal Match is Guaranteed</h1>
                <h3>We are proud to welcome you to our new Global Dating Platform For Allure Singles. <br>Get Expert help, tips and support for a healthier, happier and more fulfilling relationship</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-users"></i></div>
                            <h3><a href="<?= baseURL('new-member/'); ?>"> Match Making</a></h3>
                            <div class="text">Get matched based on your request. We dont leave this to algorithms, we commit to meet your emotional needs.</div>
                            <div class="btn-box"><a href="<?= baseURL('new-member/'); ?>">Join Free</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-headphones"></i></div>
                            <h3><a href="<?= baseURL('write-us/'); ?>">Private Sessions</a></h3>
                            <div class="text">Book a private session with one of our experts. Where you get to meet virtually for result focused interactions.</div>
                            <div class="btn-box"><a href="<?= baseURL('write-us/'); ?>">Book Session</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-four wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="left-layer"></div>
                            <div class="right-layer"></div>
                            <div class="icon-box"><i class="fa fa-heartbeat"></i></div>
                            <h3><a href="<?= baseURL('consultation-and-therapy/'); ?>">Therapy Services</a></h3>
                            <div class="text">Individuals, Couples and Group. Priotize your mental health - Personalized therapy for a happier and healthier you.</div>
                            <div class="btn-box"><a href="<?= baseURL('consultation-and-therapy/'); ?>">Start Here</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-four end -->
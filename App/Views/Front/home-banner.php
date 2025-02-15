<!-- main-slider -->
<section class="slider-style-seven home-8">
    <div class="main-slider-carousel-2 owl-carousel owl-theme">
        <div class="slide" style="background-image:url(/Images/Banner/1.jpg)">
            <div class="container">
                <div class="content-box">
                    <h5>Welcome To <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></h5>
                    <h1>Unlock Your <br/> Potentials</h1>
                    <div class="text">Train With Professional Coaches and State-Of-The-Art Facilities.</div>
                    <div class="btn-box"><a href="<?= baseURL('login/'); ?>">Member Area</a></div>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image:url(/Images/Banner/2.jpg)">
            <div class="container">
                <div class="content-box">
                    <h5>Comprehensive Programs</h5>
                    <h1>Professional Trials <br/> & Scholarships</h1>
                    <div class="text">Nurturing Young Talents From Grassroots To Advanced Levels.</div>
                    <div class="btn-box"><a href="<?= baseURL('about-us/'); ?>">Learn More</a></div>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image:url(/Images/Banner/3.jpg)">
            <div class="container">
                <div class="content-box">
                    <h5>Path Way To Success</h5>
                    <h1>Achieve Your <br/> Sportmanship Goals</h1>
                    <div class="text">Supportive Community Fostering Growth On And Off The Field.</div>
                    <div class="btn-box"><a href="<?= baseURL('new-registration/'); ?>?cat=Academy">Get Started</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main-slider end -->

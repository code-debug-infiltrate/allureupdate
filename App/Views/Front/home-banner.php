<!-- main-slider -->
<section class="slider-style-seven home-8">
    <div class="main-slider-carousel-2 owl-carousel owl-theme">
        <div class="slide" style="background-image:url(/Images/Banner/1.jpg)">
            <div class="container">
                <div class="content-box">
                    <h5>Welcome To <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></h5>
                    <h1>Stop Searching <br/> Start Dating</h1>
                    <div class="text">Our dating site helps genuine singles find real love.</div>
                    <div class="btn-box"><a href="<?= baseURL('login/'); ?>">Login</a></div>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image:url(/Images/Banner/2.jpg)">
            <div class="container">
                <div class="content-box">
                    <h5>Advanced Matching</h5>
                    <h1>Get Who <br/> Gets You</h1>
                    <div class="text">Never been easier with groundbreaking overhaul of <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></div>
                    <div class="btn-box"><a href="<?= baseURL('testimonials/'); ?>">Love Stories</a></div>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image:url(/Images/Banner/3.jpg)">
            <div class="container">
                <div class="content-box">
                    <h5>Compatibility Counts</h5>
                    <h1>Scientific Research <br/> Dating Behavior</h1>
                    <div class="text">What happens when you apply scientific research to dating behavior? A whole lotta love! But this isn’t destiny, it’s deliberate.</div>
                    <div class="btn-box"><a href="<?= baseURL('new-member/'); ?>">Get Started</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main-slider end -->

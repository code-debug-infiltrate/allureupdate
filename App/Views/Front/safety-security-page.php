<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>


<title>Safety & Security |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>




    <!-- case-banner -->
    <section class="case-banner centred" style="background-image: url(/Images/Body/privacy.png);">
        <div class="container">
            <div class="content-box" style="margin-top: 150px;">
                <h1>Safety & Security</h1>
                <h3>Since Inception, Singles Have <br />Depended on <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> For a More Fulfilling Relationship Journey.</h3>
            </div>
        </div>
    </section>
    <!-- case-banner end -->


    
    <!-- testimonial-style-six -->
    <section class="testimonial-style-six testimonial-page centred">
        <div class="container">
            <div class="sec-title">
                <div class="top-text">Safety Tips</div>
                <h1>NOTE! We strongly recommend our members to follow NJ Rev Stat § 56:8–171 (2017):</h1>
            </div>

            <div class="inner-box">
                <div class="text">"On Allure-D I met Richy, a man whose kindness and warmth captivated me from our first conversations. After weeks of laughter and confidence, I traveled to Bogota for work and we took the opportunity to meet in person. Our first meeting was in a park, where we walked, laughed and enjoyed a..."</div>
            </div>

        </div>
    </section>









    <?php include 'Layout/footer.php'; ?>
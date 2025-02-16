<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>


<title>Testimonials | Love Stories |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>




    <!-- case-banner -->
    <section class="case-banner centred" style="background-image: url(/Images/Banner/4.jpg);">
        <div class="container">
            <div class="content-box" style="margin-top: 150px;">
                <h1>Love Stories</h1>
                <h3>Since Inception, Singles Have <br />Depended on <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> For a More Fulfilling Relationship Journey.</h3>
            </div>
        </div>
    </section>
    <!-- case-banner end -->


    <!-- project-style-two -->
    <section class="project-style-two case-page-1 centred">
        <div class="top-content">
            <div class="container">
                <div class="title-box">
                    <div class="title-inner">
                        <div class="top-text">Our Some Project</div>
                        <h1>Discover our industrial Case and Work History</h1>
                        <h3>Customers all over the world are choosing Acto innovative power solutions Discover companies like yours who have found success</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-content-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                        <div class="project-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="images/gallery/project-5.jpg" alt=""></figure>
                                    <a href="images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a>
                                </div>
                                <div class="lower-content">
                                    <div class="count-number">01</div>
                                    <h3><a href="case-single.html">Chittagong Port</a></h3>
                                    <div class="text">Factory OS is revolutionizing home construction. We’ve combined pioneering technology</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'Layout/footer.php'; ?>
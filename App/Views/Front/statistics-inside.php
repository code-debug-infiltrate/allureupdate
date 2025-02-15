<!-- statistics-section -->
<section class="statistics-section" style="background-image: url(/Images/Body/2.jpg);">
    <div class="container">
        <div class="outer-container">
            <div class="row">
                <div class="col-xl-7 col-lg-12 col-md-12 offset-xl-5 inner-column">
                    <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">

                        <?php if ($coyInfo['videourl']) { ?>
                            <div class="video-box"><a href="<?= $coyInfo['videourl']; ?>" class="lightbox-image" data-caption="">Watch  <i class="fas fa-play"></i></a></div>
                        <?php } ?>
                        
                        <div class="top-box">
                            <h2>Celebrating Years Of Excellence</h2>
                            <div class="text">As we excitedly head into the future, we thought you might like to see a brief snapshot of important events that together, have helped create the <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> we know today:</div>
                            <h4>Delivering the very best sports men and supporting them with an unmatched level of quality training and mentoring — <br />that's <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></h4>
                            <a href="<?= baseURL('new-registration/'); ?>?cat=Academy">Start Your Journey</a>
                        </div>
                        <div class="lower-box">
                            <h2>We’ve built a reputation for helping young talents succeed, and we take that seriously.</h2>
                            <div class="text">We’ll help you find the best placements for international clubs to ensure you get it done correctly, efficiently and on budget.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- statistics-section end -->

<br><br>
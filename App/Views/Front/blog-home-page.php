<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>

<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->
 
<title>Blog News & Updates |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>




    <!-- case-banner -->
    <section class="case-banner centred" style="background-image: url(/Images/Body/outdoor.jpg);">
        <div class="container">
            <div class="content-box" style="margin-top: 150px;">
                <h1>News & Updates</h1>
                <h3>Since Inception, <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> Has Been Keen on Helping Genuine People <br />Build There Mind And Emotions For a More Fulfilling Relationship Journey.</h3>
            </div>
        </div>
    </section>
    <!-- case-banner end -->





     <!-- news-style-four -->
     <section class="news-style-four" style="margin-top: 100px;">
        <div class="container">
            <div class="sec-title centred">
                <div class="top-text">Your Mindset Is The Foundation Of Your Evolution.</div>
                <h1>Latest News And Updates</h1>
            </div>
            <div class="row">

            <?php if (isset($blogPosts) && (count($blogPosts) > 0)) { ?>

            <?php foreach ($blogPosts as $key => $post) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-two news-block-three wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <a href="<?= $post['url']; ?>"><img src="/Images/Blog/<?= $post['file']; ?>" alt="Post Image" class="img-size-50" style="width: 100%; height: 250px;"></a>
                            </figure>
                            <div class="lower-content">
                                <h4><a href="<?= $post['url']; ?>"><?= substr($post['title'], 0, 45); ?>...</a></h4>
                                <div class="post-info">
                                <?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $post['uniqueid']) { ?>
											<a href="<?= $post['url']; ?>#writerProfile" title="Writer Profile"><?= $user['fname']; ?> <?= $user['lname']; ?></a>
										<?php } } ?>
											- <?php echo(''.timeAgo(date('Y/m/d', strtotime($post['created']))).''); ?> 
                                </div>
                                <div class="text"><?= substr($post['introduction'], 0, 60); ?>...</div>
                                <div class="link-btn"><a href="<?= $post['url']; ?>">Read More<i class="flaticon-slim-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
             <?php } ?>

             <?php } else { ?>	
                <div class="" style="margin-left: auto; margin-right: auto; text-align: center;"><p style="font-size: 24px; margin: 20px; color: black;"><i class="fa fa-smile-o" style="font-size: 48px; margin: 20px;"></i>  There Are Currently No Published Articles.<br><br>Check Again In a While... <br><br><a href="<?= baseURL('index/')?>" style="color: blueviolet; font-size: 18px;">Go Back to Homepage</a></p></div>
            <?php } ?>
                
            </div>
            
            <div class="col-lg-12" style="margin-top: 100px;">
                <?php if (count($blogPosts) > 9) { ?>
                <div class="pagination-wrapper centred">
                    <ul class="pagination">
                        <li><a href="#" class="active" style="color:rgb(16, 0, 16);">1</a></li>
                        <li><a href="#">2</a></li>
                    </ul>
                </div>
                <?php } ?>
            </div>

        </div>
    </section>
    <!-- news-style-four end -->






    <?php include 'Layout/footer.php'; ?>
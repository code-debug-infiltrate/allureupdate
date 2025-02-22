<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>

<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->
 
<title>Search Page |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>




    <!-- case-banner -->
    <section class="case-banner centred" style="background-image: url(/Images/Banner/5.jpg);">
        <div class="container">
            <div class="content-box" style="margin-top: 150px;">
                <h1>Search Page</h1>
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
                <h1>Search Result Updates</h1>
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
                                    <h4><a href="<?= $post['url']; ?>"><?= substr($post['title'], 0, 55); ?>...</a></h4>
                                    <div class="post-info">
                                    <?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $post['uniqueid']) { ?>
                                                <a href="<?= $post['url']; ?>#writerProfile" title="Writer Profile"><?= $user['fname']; ?> <?= $user['lname']; ?></a>
                                            <?php } } ?>
                                                - <?php echo(''.timeAgo(date('Y/m/d', strtotime($post['created']))).''); ?> 
                                    </div>
                                    <div class="text"><?= substr($post['introduction'], 0, 80); ?>...</div>
                                    <div class="link-btn"><a href="<?= $post['url']; ?>">Read More<i class="flaticon-slim-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            <?php } else { ?>	
                <div class="" style="margin-left: auto; margin-right: auto; text-align: center;">
                    <p style="font-size: 24px; margin: 20px; color: black;"><i class="fa fa-smile-o" style="font-size: 48px; margin: 20px;"></i>  There Are No Results For Your Search Query.<br><br></p>
                    <div class="search-box">
                        <div class="header-flyout-searchbar">
                            <i class="fa fa-search"> Search Again</i>
                        </div>
                    </div>
                </div>
            <?php } ?>
                
            </div>

        </div>
    </section>
    <!-- news-style-four end -->






    <?php include 'Layout/footer.php'; ?>

    <!-- news-style-four -->
    <section class="news-style-four" style="margin-top: 100px;">
        <div class="container">
            <div class="sec-title centred">
                <div class="top-text">Your Mindset Is The Foundation Of Your Evolution.</div>
                <h1>Latest News And Updates</h1>
            </div>
            <div class="row">

            <?php $i=0; foreach ($blogPosts as $key => $post) { ?>
                <?php if ($i <= 5) {  ?>
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
            <?php $i++; } ?>
                
            </div>
        </div>
    </section>
    <!-- news-style-four end -->
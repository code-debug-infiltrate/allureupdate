<div class="section-area">
    <div class="container">

        <?php if ($latestPosts) { ?>
            <?php foreach ($latestPosts as $key => $post) { if ($post['uniqueid'] == $userInfo['uniqueid']) { ?>
       
                <div class="row">
                    <div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">


                        <?php if ($post['file']) { ?>
                            <div class="item">
                                <div class="event-bx">
                                    <div class="action-box">
                                        <img src="<?= public_asset('/other_assets/Posts/') ?><?= $post['file']; ?>" loading="lazy" style="width: 100%; height: 400px;" alt="Post Image">
                                    </div>
                                    <div class="info-bx d-flex">
                                        <div class="event-info">
                                            <p><?= $post['details']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($post['file1']) { ?>
                            <div class="item">
                                <div class="event-bx">
                                    <div class="action-box">
                                        <img src="<?= public_asset('/other_assets/Posts/') ?><?= $post['file1']; ?>" loading="lazy" style="width: 100%; height: 400px;" alt="Post Image">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($post['file2']) { ?>
                            <div class="item">
                                <div class="event-bx">
                                    <div class="action-box">
                                        <img src="<?= public_asset('/other_assets/Posts/') ?><?= $post['file2']; ?>" loading="lazy" style="width: 100%; height: 400px;" alt="Post Image3">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($post['file3']) { ?>
                            <div class="item">
                                <div class="event-bx">
                                    <div class="action-box">
                                        <img src="<?= public_asset('/other_assets/Posts/') ?><?= $post['file3']; ?>" loading="lazy" style="width: 100%; height: 400px;" alt="Post Image4">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($post['file4']) { ?>
                            <div class="item">
                                <div class="event-bx">
                                    <div class="action-box">
                                        <img src="<?= public_asset('/other_assets/Posts/') ?><?= $post['file4']; ?>" loading="lazy" style="width: 100%; height: 400px;" alt="Post Image5">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>

            <?php } } ?>
        <?php } ?>
    </div>	
</div>
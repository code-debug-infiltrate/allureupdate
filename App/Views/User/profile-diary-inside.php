
      <!-- contact area -->
      <div class="content-block">
			<!-- Portfolio  -->
			<div class="section-area section-sp1 gallery-bx">
				<div class="container">
					<div class="clearfix">
						<ul id="masonry" class="ttr-gallery-listing magnific-image row">


                        <?php if ($latestPosts) { ?>
                            <?php foreach ($latestPosts as $key => $post) { if ($post['uniqueid'] == $userInfo['uniqueid']) { ?>

                                <?php if ($post['file']) { ?>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 book">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
                                            <img src="<?= public_asset('/other_assets/Posts/') ?><?= $post['file']; ?>" loading="lazy" style="width: 100%; height: 400px;" alt="Post Image">
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="<?= public_asset('/other_assets/Posts/') ?><?= $post['file']; ?>" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="#">Open Photo Book</a></h4>
											</div>
										</div>
									</div>
								</div>
							</li>
                            <?php } ?>

                            <?php } } ?>
                        <?php } ?>
                            

						</ul>
					</div>
				</div>
			</div>
        </div>
		<!-- contact area END -->
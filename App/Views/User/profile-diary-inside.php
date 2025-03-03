
      <!-- contact area -->
      <div class="content-block" id="diaryFullTab">
			<!-- Portfolio  -->
			<div class="section-area section-sp1 gallery-bx">
				<div class="container">
					<div class="clearfix">
						<ul id="masonry" class="ttr-gallery-listing magnific-image row">


                        <?php if ($latestPosts) { ?>
                            <?php foreach ($latestPosts as $key => $book) { if ($book['uniqueid'] == $userInfo['uniqueid']) { ?>

                                <?php if ($book['file']) { ?>
							<li class="action-card col-lg-3 col-md-4 col-sm-6 book">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
                                            <img src="<?= public_asset('/other_assets/Posts/') ?><?= $book['file']; ?>" loading="lazy" style="width: 100%; height: 400px;" alt="Post Image">
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="<?= public_asset('/other_assets/Posts/') ?><?= $book['file']; ?>" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
											<div class="portfolio-info-bx bg-primary">
												<h4><a href="javascript:void(0);" onclick="openPhotobook('diaryFullTab', 'photobookFullTab');">Open Photo Book</a></h4>
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



		<div class="section-area" id="photobookFullTab" style="display: none;">
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





<script>
    function openPhotobook( hide, show ) {
        document.getElementById(hide).style.display="none";
        document.getElementById(show).style.display="block";
    }
</script>
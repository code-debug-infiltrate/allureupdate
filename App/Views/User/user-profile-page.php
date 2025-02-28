<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title> <?= $userInfo['username']; ?>'s Buddy | Buddy Profile | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">


	<div class="container-fluid">


		<!-- <div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 15px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-user"></i>Buddy</a></li>
				<li>Profile</li>
			</ul>
		</div> -->
		




			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12">
					<div class="widget">
						<!-- <div class="wc-title">
							<h4>Courses Bookmarks</h4>
						</div> -->
						
						<?php if ($viewUser['dob']) { $newDob = $viewUser['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>

						<div class="widget-inner">
							<div class="card-courses-list bookmarks-bx">
								<div class="card-courses-media">
									<img alt="User Photo" src="<?= public_asset('/other_assets/Profile/') ?><?= $viewUser['profileimage']; ?>"/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4 class="m-b5"><?= $viewUser['fname']; ?> <?= $viewUser['lname']; ?> [<?= $viewUser['username']; ?>]</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="">
												<?php if ($viewUser['dob']) { ?>
													<h5 style="color: #000000; font-size: 12px;">Age</h5>
													<p style="font-size: 14px;"><?= $age; ?> Years</p>
												<?php } else { ?>
													<a href="<?= baseURL('us-settings/'); ?><?= $viewUser['uniqueid']; ?>/?tab=bioTab" style="font-size: 11px; margin: 5px;">No Age Yet</a>
												<?php } ?>
											</li>
											<li class="">
												<?php if ($viewUser['gender']) { ?>
													<h5 style="color: #000000; font-size: 12px;">Gender</h5>
													<p style="font-size: 14px;"><?= $viewUser['gender']; ?></p>
												<?php } else { ?>
													<a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/?tab=bioTab" style="font-size: 11px; margin: 5px;">No Gender Yet</a>
												<?php } ?>
											</li>
											<li class="">
												<?php if ($viewUser['occupation']) { ?>
													<h5 style="color: #000000; font-size: 12px;">Occupation</h5>
													<p style="font-size: 14px;"><?= $viewUser['occupation']; ?></p>
												<?php } else { ?>
													<a href="<?= baseURL('us-settings/'); ?><?= $viewUser['uniqueid']; ?>/?tab=bioTab" style="font-size: 11px; margin: 5px;">No Occupation Yet</a>
												<?php } ?>
											</li>
											<!-- <li class="">
												<?php if ($viewUser['number']) { ?>
													<h5 style="color: #000000; font-size: 12px;">Phone No.</h5>
													<p style="font-size: 14px;"><?= substr($viewUser['number'], 0, 6); ?>******</p>
												<?php } else { ?>
													<a href="<?= baseURL('us-settings/'); ?><?= $viewUser['uniqueid']; ?>/?tab=bioTab" style="font-size: 11px; margin: 5px;">No Phone No. Yet</a>
												<?php } ?>	
											</li>
											<li class="">
												<h5 style="color: #000000; font-size: 12px;">Email</h5>
												<p style="font-size: 14px;"><?= substr($viewUser['email'], 0, 6); ?>@<?= $coyInfo['coyname']; ?>.com</p>
											</li> -->
											<li class="">
												<?php if ($viewUser['address']) { ?>
													<h5 style="color: #000000; font-size: 12px;">Location</h5>
													<p style="font-size: 14px;"><?= $viewUser['city']; ?>, <?= $viewUser['country']; ?></p>
												<?php } else { ?>
													<a href="<?= baseURL('us-settings/'); ?><?= $viewUser['uniqueid']; ?>/?tab=addressTab" style="font-size: 11px; margin: 5px;"> No Address Yet</a>
												<?php } ?>
											</li>
											<li class="">
												<h5 style="color: #000000; font-size: 12px;">Member Since</h5>
												<p style="font-size: 14px;"><?= $viewUser['created']; ?></p>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
										<?php if ($viewUser['details']) { ?>
											<p><?= $viewUser['details']; ?> </p>
										<?php } else { ?>
											<center> <a href="<?= baseURL('us-settings/'); ?><?= $viewUser['uniqueid']; ?>/?tab=bioTab" style="font-size: 16px; margin: 5px;"><?= $viewUser['username']; ?> Hasn't Told The World Facsinating Details Of Him/Her Self.</a> </center>
											<?php } ?>		
										</div>
										<div class="row col-md-12">
											<p> </p>	
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>












			<div class="section-area">
				<div class="container">

					<?php if ($latestPosts) { ?>
						<?php foreach ($latestPosts as $key => $post) { if ($post['uniqueid'] == $viewUser['uniqueid']) { ?>
				
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












        <?php include 'profile-preferences-inside.php'; ?>


<!-- End oF file -->

	</div>
</main>



<?php include 'Layout/footer.php'; ?>
<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title> <?= $userInfo['username']; ?>'s Buddy | Buddy Profile View | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


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
													<a href="javascript:void(0);" style="font-size: 11px; margin: 5px;">No Age Yet</a>
												<?php } ?>
											</li>
											<li class="">
												<?php if ($viewUser['gender']) { ?>
													<h5 style="color: #000000; font-size: 12px;">Gender</h5>
													<p style="font-size: 14px;"><?= $viewUser['gender']; ?></p>
												<?php } else { ?>
													<a href="javascript:void(0);" style="font-size: 11px; margin: 5px;">No Gender Yet</a>
												<?php } ?>
											</li>
											<li class="">
												<?php if ($viewUser['occupation']) { ?>
													<h5 style="color: #000000; font-size: 12px;">Occupation</h5>
													<p style="font-size: 14px;"><?= $viewUser['occupation']; ?></p>
												<?php } else { ?>
													<a href="javascript:void(0);" style="font-size: 11px; margin: 5px;">No Occupation Yet</a>
												<?php } ?>
											</li>
											<!-- <li class="">
												<?php if ($viewUser['number']) { ?>
													<h5 style="color: #000000; font-size: 12px;">Phone No.</h5>
													<p style="font-size: 14px;"><?= substr($viewUser['number'], 0, 6); ?>******</p>
												<?php } else { ?>
													<a href="javascript:void(0);" style="font-size: 11px; margin: 5px;">No Phone No. Yet</a>
												<?php } ?>	
											</li> -->
											<li class="">
												<h5 style="color: #000000; font-size: 12px;">Email</h5>
												<p style="font-size: 14px;"><?= substr($viewUser['email'], 0, 6); ?>@<?= $coyInfo['coyname']; ?>.com</p>
											</li>
											<li class="">
												<?php if ($viewUser['address']) { ?>
													<h5 style="color: #000000; font-size: 12px;">Location</h5>
													<p style="font-size: 14px;"><?= $viewUser['city']; ?>, <?= $viewUser['country']; ?></p>
												<?php } else { ?>
													<a href="javascript:void(0);" style="font-size: 11px; margin: 5px;"> No Address Yet</a>
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
											<center> <a href="javascript:void(0);" style="font-size: 16px; margin: 5px;"><?= $viewUser['username']; ?> Hasn't Told The World Facsinating Details Of 
											
											<?php if ($viewUser['gender'] == "Male") { ?>Himself <?php } else { ?>Herself<?php } ?>.</a> </center>
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




<?php include 'profile-pops.php'; ?>




		<!-- contact area -->
		<div class="content-block" id="diaryFullTab">
			<!-- Portfolio  -->
			<div class="section-area section-sp1 gallery-bx">
				<div class="container">
					<div class="clearfix">
						<ul id="masonry" class="ttr-gallery-listing magnific-image row">


                        <?php if ($latestPosts) { ?>
                            <?php foreach ($latestPosts as $key => $book) { if ($book['uniqueid'] == $viewUser['uniqueid']) { ?>

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





<script>
    function openPhotobook( hide, show ) {
        document.getElementById(hide).style.display="none";
        document.getElementById(show).style.display="block";
    }
</script>








<div class="row">
          
		  <!-- First Column Side -->
		  <div class="col-md-4 col-lg-4">
  
			  <?php if ($user_interests) { ?>
			  <h2><?= $viewUser['fname']?>'s Interests</h2>
				  <ul class="ttr-header-navigation">
					  <?php foreach($user_interests as $key => $interest) { ?>
					  <li>
						  <i class="ti-game mr-2"></i> <?= $interest['details']; ?></a>
					  </li>
					  <?php } ?>
				  </ul>
			  <?php } else { ?>
				  <p class="m-5"><a href="javascript:void(0);"><?= $viewUser['fname']?> Has No Interests</a></p>
			  <?php } ?>
  
			  <hr>
			  <?php if ($user_language) { ?>
			  <h2><?= $viewUser['fname']?>'s Languages</h2>
				  <ul class="ttr-header-navigation">
					  <?php foreach($user_language as $key => $language) { ?>
					  <li>
						  <i class="ti-game mr-2"></i> <?= $language['language']; ?></a>
					  </li>
					  <?php } ?>
				  </ul>
			  <?php } else { ?>
				  <p class="m-5"><a href="javascript:void(0);"><?= $viewUser['fname']?> Has No Languages</a></p>
			  <?php } ?>
  
			  <hr>
			  <?php if ($user_workeduc) { ?>
			  <h2><?= $viewUser['fname']?>'s Education | Work </h2>
			  <?php } else { ?>
				  <p class="m-5"><a href="javascript:void(0);"><?= $viewUser['fname']?> Has No Education And Work</a></p>
			  <?php } ?>
  
		  </div>
		  <!-- End First Column Side -->            
		  
  
  
		  <!-- Second Column Side -->
		  <div class="col-md-4 col-lg-4">
  
			  <?php if ($user_myself) { ?>
			  <h2><?= $viewUser['fname']?>'s Qualities</h2>
			  <ul class="ttr-header-navigation">
				  
				  <li>
					  <b>🌟  Sexual Orientation: </b> <?= $user_myself['orientation']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Ethnicity:</b>  <?= $user_myself['ethnicity']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Body Type: </b> <?= $user_myself['bodytype']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Height: </b> <?= $user_myself['height']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Weight: </b> <?= $user_myself['weight']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Skin Color: </b> <?= $user_myself['color']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Pets: </b> <?= $user_myself['pets']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Smoking Habit: </b> <?= $user_myself['smoking']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Eating Habit: </b> <?= $user_myself['eating']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Alcohol: </b> <?= $user_myself['drinking']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Employment: </b> <?= $user_myself['employment']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Religion: </b> <?= $user_myself['religion']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Dress Sense: </b> <?= $user_myself['dress']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Outing|Dates: </b> <?= $user_myself['dates']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  My Kids: </b> <?= $user_myself['havekids']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Want Kids: </b> <?= $user_myself['wantkids']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Marital Status: </b> <?= $user_myself['maritalstatus']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Looking For: </b> <?= $user_myself['seeking']; ?></a>
				  </li>
				  
			  </ul>
			  
			  <hr>
			  <?php } else { ?>
				  <p class="m-5"><a href="javascript:void(0);"><?= $viewUser['fname']?> Has Not Set Up Profile</a></p>
			  <?php } ?>
			  
		  </div>
		  <!-- End Second Column Side -->
  
		  
  
		  <!-- Third Column Side -->
		  <div class="col-md-4 col-lg-4">
  
			  <?php if ($user_preference) { ?>
			  <h2>Ideal Partner Qualities</h2>
			  <ul class="ttr-header-navigation">
				  
			  <li>
					  <b>🌟  Sexual Orientation: </b> <?= $user_preference['orientation']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Ethnicity:</b>  <?= $user_preference['ethnicity']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Body Type: </b> <?= $user_preference['bodytype']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Height: </b> <?= $user_preference['height']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Weight: </b> <?= $user_preference['weight']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Skin Color: </b> <?= $user_preference['color']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Pets: </b> <?= $user_preference['pets']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Smoking Habit: </b> <?= $user_preference['smoking']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Eating Habit: </b> <?= $user_preference['eating']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Alcohol: </b> <?= $user_preference['drinking']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Employment: </b> <?= $user_preference['employment']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Religion: </b> <?= $user_preference['religion']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Dress Sense: </b> <?= $user_preference['dress']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Outing|Dates: </b> <?= $user_preference['dates']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Have Kids: </b> <?= $user_preference['havekids']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Want Kids: </b> <?= $user_preference['wantkids']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Marital Status: </b> <?= $user_preference['maritalstatus']; ?></a>
				  </li>
				  <hr>
				  <li>
					  <b>🌟  Looking For: </b> <?= $user_preference['seeking']; ?></a>
				  </li>
				  
			  </ul>
			  
			  <hr>
			  <?php } else { ?>
				  <p class="m-5"><a href="javascript:void(0);"><?= $viewUser['fname']?> Has Not Set Up Ideal Preference</a></p>
			  <?php } ?>
			  
		  </div>
		  <!-- End Third Column Side -->
  
	  </div>





	<div class="section-area">
		<div class="container">

		</div>
	</div>



















<!-- End oF file -->

	</div>
</main>



<?php include 'Layout/footer.php'; ?>
<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title><?= $userInfo['username']; ?>'s Profile | Personal Profile Page | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">


	<div class="container-fluid">


		<!-- <div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 15px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="<?= baseURL('us-profile/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-user"></i>Profile</a></li>
				<li>Personal</li>
			</ul>
		</div> -->

                                    
		<?php include 'profile-banner-inside.php'; ?>

		<!-- Update Preferences ==== -->
		<div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(/Images/Body/outdoor.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="join-content-bx text-white">
							<!-- <h4><span class="">Never Let The Fun Slide Without Memories</h4> -->
							<h2>Enrich Your Profile With Moments</h2>
							<!-- <p>Updating Your Preferences Will Reshuffle Your Match Pool And Find You Befitting Connections.</p> -->
							<a href="#" data-toggle="modal" data-target="#addPhotoBookModal" class="btn button-md">Create a Photobook</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Update Preferences END ==== -->

        <?php include 'profile-diary-inside.php'; ?>

        <?php include 'profile-preferences-inside.php'; ?>

		<?php include 'random-buddies-inside.php'; ?>




					<!--Photo Book Modal -->
					<div class="modal fade review-bx-reply" id="addPhotoBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content" style="background: #fff;">
								<div class="modal-header">
									<h5 class="modal-title" style="float: center; padding: 10px; font-weight: 600;">Create a Photo Book</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								

								<form method="POST" action="" enctype="multipart/form-data">

								<div class="modal-body">

								<input type="hidden" name="uniqueid" id="uniqueid" value="<?= $userInfo['uniqueid']; ?>" required>
										<input type="hidden" name="username" id="username" value="<?= $userInfo['username']; ?>" required>
										<input type="hidden" name="url" id="url" value="<?= baseURL('view-ads/');?>">

										<textarea rows="4" name="postdetails" class="form-control" id="postDetails" minlength="50" maxlength="1500" placeholder="Share Your Fun Moments With Buddies. Upload One To Five(5) Photos..." required></textarea>
										<div class="attachments">
											
											<i class="fa fa-camera"></i>
											<label class="fileContainer">
												<input type="file" id="postimage" class="form-control" name="postimage[]" onchange="validatePostImage(event)" accept="image/*" multiple required>
											</label>
										</div>

										<div class="postDetailsError_box" style="margin:10px 0px;"></div>

										<center><figure><img src="" id="output_postimage" alt=""></figure></center>

								</div>
								<div class="modal-footer">
									<button type="submit" name="createPost" class="btn-secondry add-item m-r5">Spill It Out <i class="ti-arrow-right"></i> </button>
								</div>

								</form>

							</div>
						</div>
					</div>
					<!-- Photo Book Modal End -->

	</div>
</main>
<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/create-post.js') ?>"></script>


<?php include 'Layout/footer.php'; ?>
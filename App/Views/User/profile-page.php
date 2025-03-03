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
							<a href="javascript:void(0);" class="btn button-md">Create a Photobook</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Update Preferences END ==== -->

        <?php include 'profile-diary-inside.php'; ?>

        <?php include 'profile-preferences-inside.php'; ?>


<!-- End oF file -->

	</div>
</main>



<?php include 'Layout/footer.php'; ?>
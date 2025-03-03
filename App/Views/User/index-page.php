<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title><?= $userInfo['username']; ?>'s Virtual Pool | Virual Pool Page | Meet New Buddies | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">


	<div class="container-fluid">


		<!-- <div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg1" style="font-size: 15px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-home"></i>Home</a></li>
				<li>Dashboard</li>
			</ul>
		</div> -->




		<?php if ($userInfo['profileimage'] == "favicon.png") { ?>
                                    
			<?php include 'profile-photo-inside.php'; ?>

		<?php } elseif ((!$user_myself) || (!$user_preference)) { ?>

			<?php include 'preferences-inside.php'; ?>

		<?php } else { ?>

			<?php include 'dating-pool-inside.php'; ?>

			<!-- Update Preferences ==== -->
			<div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(/Images/Body/animated-bg2.png);">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="join-content-bx text-white">
								<h4><span class="counter"><?= number_format(count($userProfiles))?> </span> Active Buddies</h4>
								<h2>Get More Possible Matches</h2>
								<!-- <p>Updating Your Preferences Will Reshuffle Your Match Pool And Find You Befitting Connections.</p> -->
								<a href="<?= baseURL('us-preferences/')?><?= $userInfo['uniqueid']; ?>/" class="btn button-md">Update Your Preferences</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Update Preferences END ==== -->

			<?php include 'random-buddies-inside.php'; ?>

		<?php } ?>

		<?php include 'random-buddies-modal.php'; ?>
<!-- End oF file -->

	</div>
</main>



<?php include 'Layout/footer.php'; ?>
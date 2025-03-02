<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title>Welcome Back <?= $userInfo['username']; ?> | Home Page | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


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

		<?php } elseif (!$user_myself) { ?>

			<?php include 'myself-inside.php'; ?>

		<?php } elseif (!$user_preference) { ?>

			<?php include 'preferences-inside.php'; ?>

		<?php } else { ?>

			<?php include 'dating-pool-inside.php'; ?>

			<?php include 'random-buddies-inside.php'; ?>

		<?php } ?>



		<?php include 'random-buddies-modal.php'; ?>
<!-- End oF file -->

	</div>
</main>



<?php include 'Layout/footer.php'; ?>
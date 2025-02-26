<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title>Welcome Back <?= $userInfo['username']; ?> | Home Page | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">


	<div class="container-fluid">


		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 15px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="<?= baseURL('us-profile/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-user"></i>Profile</a></li>
				<li>Personal</li>
			</ul>
		</div>

                                    
		<?php include 'profile-banner-inside.php'; ?>

        <?php include 'profile-diary-inside.php'; ?>

        <?php include 'profile-preferences-inside.php'; ?>


<!-- End oF file -->

	</div>
</main>



<?php include 'Layout/footer.php'; ?>
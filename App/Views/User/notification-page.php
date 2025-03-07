<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title><?= $userInfo['username']; ?>'s Notifications | Notification History  | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<!-- <div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 15px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="<?= baseURL('us-notifications/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-bell"></i>Notifications</a></li>
				<li>Alerts</li>
			</ul>

		</div> -->


		<div class="row">


		<!-- First Column Side -->
		<div class="col-md-2 col-lg-2">

                

		</div>
		<!-- End First Column Side -->




		<!-- Second Column Side -->
		<div class="col-md-8 col-lg-8">

			<!-- Your Profile Views Chart -->

			<?php if ($buddyActivity) { ?>

				<?php foreach ($buddyActivity as $key => $activity) { ?>

					<div class="new-user-list" style="margin: 5px;" id="not<?= $activity['id']; ?>">
							<ul>
							<span class="close" style="font-size: 40px; padding: 10px;" onclick="document.getElementById('not<?= $activity['id']; ?>').style.display='none'"> &times;</span>
								<li>
								<?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $activity['user_uniqueid']) { ?>
									<span class="new-users-pic">
										<a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $activity['user_uniqueid']; ?>&tab=about" class="new-users-name"><img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="Buddy-Photo" style="height: 50px; width: 60px;"></a>
									</span>
									<span class="new-users-text">
										<a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $activity['user_uniqueid']; ?>&tab=about" class="new-users-name"><?= $user['fname']; ?> <?= $user['lname']; ?></a>
										<span class="new-users-info"><?= $activity['details']; ?></span>
									</span>
									
									<!-- <span class="new-users-btn">
										<a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $activity['user_uniqueid']; ?>&tab=about" class="btn button-sm outline">Check Buddy Out</a>
									</span> -->
									<?php } } ?>
								</li>
							</ul>
							<hr>
						</div>
				<?php } ?>
				<?php } else { ?>
						<p style="text-align: center; font-size: 20px;">You Do Not Have Any Notifications Yet </p>
					<?php } ?>
			<!-- Your Profile Views Chart END-->

			</div>
            <!-- End Second Column Side -->


            <!-- Third Column Side -->
            <div class="col-md-2 col-lg-2">

                

            </div>
            <!-- End Third Column Side -->


			<?php include 'random-buddies-inside.php'; ?>

<!-- End oF file -->

	</div>
</main>

<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>

<?php include 'Layout/footer.php'; ?>
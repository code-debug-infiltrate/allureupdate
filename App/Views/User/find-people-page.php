<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title> <?= $userInfo['username']; ?>'s Chat | Find Buddies Page | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">


	<div class="container-fluid">


		<!-- <div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 15px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-home"></i>Home</a></li>
                <li><a href=""><i class="fa fa-group"></i>Virtual Pool</a></li>
				<li>Buddies</li>
			</ul>
		</div> -->



				


		<div class="row">
			<?php if ($randomBuddy) { ?>
			<?php foreach($randomBuddy as $key => $info) { ?>	
				<?php foreach ($userProfiles as $key => $user) { if (($user['uniqueid'] == $info['uniqueid']) && ($userInfo['gender'] != $user['gender'])) { ?>

					<?php if ($user['dob']) { $newDob = $user['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>

					<div class="col-lg-3 m-b30" id="<?= $info['uniqueid']; ?>">
						<span class="close" id="<?= $info['uniqueid']; ?>" style="font-size: 30px; padding: 5px;" onclick="document.getElementById('<?= $info['uniqueid']; ?>').style.display='none'"> &times;</span>
						<div class="widget-box image-effect"  style="background: transparent; border:2px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40);">

							<div class="wc-title">
								
								<a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
									<center> <img class="card-img-top" src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="<?= $user['fname']?> Photo" style="width: 180px; height: 200px;"/></center>
								</a>    
							</div>

							<div class="widget-inner" style="padding-bottom: 0;">
								<div class="separator-solid"></div>
								<h6 class="card-title" style="margin-top: -40px;">
									<a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
										<?php foreach ($userOnlineStatus as $key => $logstatus) { if ($logstatus['uniqueid'] == $info['uniqueid']) { ?>
											<?php if ($logstatus['login_status'] == "Logged_in") { ?>
												<img src="/Images/Body/online.png" style="max-width: 12px; margin-right: 5px;"/>
											<?php } else { ?>
												<img src="/Images/Body/offline.png" style="max-width: 12px; margin-right: 5px;"/>
										<?php } } } ?>
										
										<b><?= $user['fname']?>,</b> <i style="font-size: 11px;"><?= $age; ?> Yrs | <?= $user['city']?> </i>
									</a> 
								</h6>
								
								<p class=""style="line-height: 17px;"> <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about" style="font-size: 12px; color: black;"><?= substr($info['details'], 0, 60); ?>...</a> </p>
							
							</div>

						</div>
					</div>

				<?php } } ?>
			<?php } ?>
			<?php } else { ?>
				<div class="col-lg-12" style="text-align: center;"><p class="mt-5 mb-5" style="font-size: 20px;">There Are Currently NO Random Buddies! <br><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/">Go To Virtual Pool</a></p></div>
			<?php } ?>
		</div>




<!-- End oF file -->

	</div>
</main>



<?php include 'Layout/footer.php'; ?>





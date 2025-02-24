<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title>Notification History  | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 15px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="<?= baseURL('us-notifications/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-donate"></i>Messaging</a></li>
				<li>Notifications</li>
			</ul>

		</div>


		<div class="row">
			<!-- Your Profile Views Chart -->

			<?php if ($userNotice) { ?>

				<?php foreach ($userNotice as $key => $notif) { ?>

					<div class="col-lg-12 m-b30" id="not<?= $notif['id']; ?>">
					<div class="row mb-3">
						<div class="col-md-12">
						<span class="close" style="font-size: 40px; padding: 10px;" onclick="document.getElementById('not<?= $notif['id']; ?>').style.display='none'"> &times;</span>
							<div class="widget-box" style="padding: 20px;">
								<h4><img src="/Images/Body/alert.png" style="width: 50px;"> <?= $notif['subject']; ?></h4>
								<p>Posted: <?= $notif['created']; ?></p>
								<h6 class="m-b10"><?= $notif['details']; ?></h6>	
							</div>
						</div>
					</div>
					</div>

				<?php } ?>
					
			<?php } ?>
				
			
			<!-- Your Profile Views Chart END-->

			<h5 class="col-md-10 mx-auto" style="text-align: center;">You Can Always Contact Support By Raising a <a href="<?= baseURL('us-message/')?><?= $userInfo['uniqueid']; ?>/" style="color: blue;">Ticket Here</a> </h5>
		</div>

<div class="ttr-overlay"></div>





<?php include 'caution-alert.php'; ?>






<!-- End oF file -->

	</div>
</main>

<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>

<?php include 'Layout/footer.php'; ?>
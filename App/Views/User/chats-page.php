<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title> <?= $userInfo['username']; ?>'s Chat | Buddy Chats Page | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">


	<div class="container-fluid">


		<!-- <div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 15px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-envelope"></i>Messaging</a></li>
				<li>Chats</li>
			</ul>
		</div> -->


		<div class="row">
          
          <!-- First Column Side -->
            <div class="col-md-2 col-lg-2">
            
            </div>
            <!-- End First Column Side -->            
            


            <!-- Second Column Side -->
            <div class="col-md-8 col-lg-8">

				<?php if ($userChats) { ?>
					<?php foreach ($userChats as $key => $subplan) { ?>
					<div class="new-user-list" style="margin: 5px;">
						<ul>
							<li>
								<span class="new-users-pic">
									<img src="/Images/Body/money.png" alt="Payment Plan"/>
								</span>
								<span class="new-users-text">
									<a href="#" class="new-users-name"> Topic</a>
									<span class="new-users-info"><?= $subplan['details']; ?></span>
								</span>
								<span class="new-users-btn">
									<a href="#" class="btn button-sm outline">Make Payment</a>
								</span>
							</li>
						</ul>
					</div>
					<hr>
					<?php } ?>
				<?php } else { ?>
					<p>You Currently Have No Messages. Start a Chat With a Buddy.</p>
				<?php } ?>

				</div>
            <!-- End Second Column Side -->

            

            <!-- Third Column Side -->
            <div class="col-md-2 col-lg-2">
            
            </div>
            <!-- End Third Column Side -->

    </div>


<!-- End oF file -->

	</div>
</main>



<?php include 'Layout/footer.php'; ?>

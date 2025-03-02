



<!-- Random Buddies -->
<div class="section-area section-sp2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading-bx left">
				<h2 class="title-head">Connect With Random <span> Buddies</span></h2>
				<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page</p> -->
			</div>
		</div>
		<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">

		<?php if ($randomBuddy) { ?>
			<?php foreach($randomBuddy as $key => $info) { ?>	
				<?php foreach ($userProfiles as $key => $user) { if (($user['uniqueid'] == $info['uniqueid']) && ($userInfo['gender'] != $user['gender'])) { ?>

					<?php if ($user['dob']) { $newDob = $user['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>


			<div class="item">
				<div class="recent-news">
					<div class="action-box">
						<a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
							<center> <img class="card-img-top" src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="<?= $user['fname']?> Photo" style="width: 180px; height: 200px;"/></center>
						</a>  
					</div>
					<div class="info-bx">
						<ul class="media-post">
							<li><a href="#"><i class="fa fa-calendar"></i><?= $age; ?> Yrs</a></li>
							<li><a href="#"><i class="fa fa-street-view"></i><?= $user['city']?></a></li>
						</ul>
                        
						<a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
						<h5 class="post-title row">
						<?php foreach ($userOnlineStatus as $key => $logstatus) { if ($logstatus['uniqueid'] == $info['uniqueid']) { ?>
								<?php if ($logstatus['login_status'] == "Logged_in") { ?>
									<img src="/Images/Body/online.png" style="height: 8px; width: 10px; margin: 10px;"/>
								<?php } else { ?>
									<img src="/Images/Body/offline.png" style="height: 8px; width: 10px; margin: 10px;"/>
							<?php } } } ?>
							<b><?= $user['fname']?></b>
						</h5>
                        </a>
						<p><a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about" style="font-size: 12px; color: black;"><?= substr($info['details'], 0, 50); ?>...</a></p>
						
					</div>
				</div>
			</div>
		<?php } } ?>
			<?php } ?>
			<?php } else { ?>
				<div class="col-lg-12" style="text-align: center;"><p class="mt-5 mb-5" style="font-size: 20px;">There Are Currently NO Random Buddies! <br><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/">Go To Virtual Pool</a></p></div>
			<?php } ?>
			
		</div>
	</div>
</div>
<!-- Random Buddies End -->
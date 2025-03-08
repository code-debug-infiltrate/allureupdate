<!-- Random Buddies ==== -->
<div class="section-area section-sp2">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading-bx left">
				<h2 class="title-head text-uppercase"> Random <span> Buddies</span></h2>
				<p> Valuable Connections With a Click. Take The First Shot At a Buddy.</p>
			</div>
		</div>
		<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">

		<?php if ($randomBuddy) { ?>
			<?php foreach($randomBuddy as $key => $info) { ?>	
				<?php foreach ($userProfiles as $key => $user) { if (($user['uniqueid'] == $info['uniqueid']) && ($userInfo['gender'] != $user['gender'])) { ?>

					<?php if ($user['dob']) { $newDob = $user['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>

			<div class="item">
				<a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
				<div class="testimonial-bx">
					<div class="testimonial-thumb">
						<img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="Buddy-Image">
					</div>
					<div class="testimonial-info">
						<h5 class="row name">
						<?php foreach ($userOnlineStatus as $key => $logstatus) { if ($logstatus['uniqueid'] == $info['uniqueid']) { ?>
							<?php if ($logstatus['login_status'] == "Logged_in") { ?>
								<img src="/Images/Body/online.png" style="height: 8px; width: 10px; margin: 10px;"/>
							<?php } else { ?>
								<img src="/Images/Body/offline.png" style="height: 8px; width: 10px; margin: 10px;"/>
						<?php } } } ?>
						<b><?= $user['fname']?></b>
						</h5>
						<p><i class="fa fa-calendar" title="Age"></i> <?= $age; ?> Yrs | <i class="fa fa-street-view" title="City"></i> <?= $user['city']?></p>
					</div>
					<div class="testimonial-content" style="font-size: 12px;">
						<p><?= substr($info['details'], 0, 80); ?>...</p>
					</div>
				</div>
				</a>
			</div>
			
			<?php } } ?>
			<?php } ?>
			<?php } else { ?>
				<div class="col-lg-12" style="text-align: center;"><p class="mt-5 mb-5" style="font-size: 20px;">There Are Currently NO Random Buddies! <br><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/">Go To Virtual Pool</a></p></div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- Testimonials END ==== -->
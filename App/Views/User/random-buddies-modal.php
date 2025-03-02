<?php if ($randomBuddy) { ?>


<!-- Random Buddies Modal -->
<div class="modal fade review-bx-reply buddiesModal" id="buddiesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="background: #fff;">
			<div class="modal-header">
				<h5 class="modal-title" style="float: center; padding: 10px; color: #fff; border-radius: 10px;">Random Buddy</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

			<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">

				
					<?php foreach($randomBuddy as $key => $info) { ?>	
						<?php foreach ($userProfiles as $key => $user) { if (($user['uniqueid'] == $info['uniqueid']) && ($userInfo['gender'] != $user['gender'])) { ?>

							<?php if ($user['dob']) { $newDob = $user['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>


					
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
					
				<?php } } ?>
					<?php } ?>
					
						
				</div>

			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn mr-auto">Reply</button>
			</div> -->
		</div>
	</div>
</div>

<?php } ?>



<script>
//Show Modal
setInterval(function () {
	$('.buddiesModal').modal('show');
}, 500000);
</script>
<!-- Left sidebar menu start -->
	<div class="ttr-sidebar" style="background: #fbcdfb;">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/?tab=profileImageTab"><img alt="Logo" src="<?= public_asset('/other_assets/Profile/') ?><?= $userInfo['profileimage']; ?>" style="border-radius: 50%; height: 40px; width: 40px;"></a>

				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
				
				<span class="ttr-label">
					<b id="grtnMsg" style="font-size: 16px;"></b> <br> <i style="font-size: 14px; text-transform: capitalize;"> <?= $userInfo['username']; ?></i>
				</span>

				<!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">

				<ul> 
					
					<li class="ttr-seperate"></li>

					
					<!-- <div style="margin-top: 10px; text-align: center;"><p style="color: #700bcd;"><b>Dashboard</b> Analysis</p></div> -->
						<div class="card-body" style="background: transparent; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40);">
							<a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><span style="font-size: 12px;"><img src="/Images/Body/ideal.png" style="width: 40px; margin-right: 8px;"> Virtual Pool <em style="margin-left: 8px;"><?php if ($matchCount) { echo number_format(count($matchCount)); } else { echo 0; }?></em></span></a>
							<hr>
							<a href="<?= baseURL('us-chats/'); ?><?= $userInfo['uniqueid']; ?>/"><span style="font-size: 12px;"><img src="/Images/Body/msg.gif" style="width: 40px; margin-right: 8px;"> Buddy Chats <em style="margin-left: 8px;"><?= number_format($newChatCount);?></em></span></a>
							<hr>
							<a href="<?= baseURL('us-buddies/'); ?><?= $userInfo['uniqueid']; ?>/"><span style="font-size: 12px;"><img src="/Images/Body/channel.png" style="border-radius: 50%; width: 40px; margin-right: 8px;"> Random Buddies </span></a>
						</div>

						<div class="mt-3">
							<a href="#" data-toggle="modal" data-target="#subModal"><img src="/Images/Body/subscribe.png" alt="Subscribe Button" style="width: 100%; height: 80px;"></a>
						</div>
						
						

						<div class="card-body" style="background: transparent; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40);">
							
							<li>
								<a href="#" class="ttr-material-button">
									<span class="ttr-icon"><i class="ti-settings"></i></span>
									<span class="ttr-label"> Settings</span>
									<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
								</a>
								<ul>
									<li>
										<a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Account</span></a>
									</li>
									<li>
										<a href="<?= baseURL('us-preferences/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button"><span class="ttr-label"><i class="fa fa-toggle-off" style="margin-right: 5px;"></i>Preference</span></a>
									</li>
								</ul>
							</li>
							<a href="<?= baseURL('logout/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button">
								<span class="ttr-icon"><i class="ti-power-off"></i></span>
								<span class="ttr-label">Log Out</span>
							</a>
							<hr> 
							<span style="font-size: 12px;"><img src="/Images/Body/online.png" style="width: 20px; margin-right: 8px;"/> Online Buddies Around You <em style="margin-left: 8px;"><?= number_format($onlineNow); ?></em></span>
						
						</div>
				

				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->




	<!-- Subscribe Modal -->
	<div class="modal fade review-bx-reply" id="subModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="background: #fbcdfb;">
				<div class="modal-header">
					<h5 class="modal-title" style="float: center; padding: 10px; font-weight: 600;">All Service Subscription</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					
				<?php if ($subPlans) { ?>
					<?php foreach ($subPlans as $key => $subplan) { if ($subplan['type'] != "Consultation") {  ?>
						<div class="new-user-list" style="margin: 5px;">
							<ul>
								<li>
									<span class="new-users-pic">
										<img src="/Images//Body/money.png" alt="Payment Plan"/>
									</span>
									<span class="new-users-text">
										<a href="#" class="new-users-name"><?= $subplan['type']; ?> | <?= $curInfo['currency']; ?><?= $subplan['amount']; ?></a>
										<span class="new-users-info"><?= $subplan['details']; ?></span>
									</span>
									<span class="new-users-btn">
										<a href="#" class="btn button-sm outline">Make Payment</a>
									</span>
								</li>
							</ul>
						</div>
						<hr>
					<?php } } ?>
				<?php } else { ?>
					<p>No Subscription Plans</p>
				<?php } ?>
				
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn mr-auto">Reply</button>
				</div> -->
			</div>
		</div>
	</div>
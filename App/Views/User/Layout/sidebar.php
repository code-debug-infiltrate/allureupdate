<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="<?= baseURL('us-profile-settings/'); ?><?= $userInfo['uniqueid']; ?>/#profileImage"><img alt="Logo" src="<?= public_asset('/other_assets/Profile/') ?><?= $userInfo['profileimage']; ?>" style="border-radius: 50%; height: 40px; width: 40px;"></a>

				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
				
				<span class="ttr-label">
					<b id="grtnMsg1" style="font-size: 18px;"></b>
            		<br />
            		<i style="font-size: 14px; text-transform: capitalize;"> <?= $userInfo['username']; ?></i>
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

					<div class="card card-round" style="margin: 10px;">
					<!-- <div style="margin-top: 10px; text-align: center;"><p style="color: #700bcd;"><b>Dashboard</b> Analysis</p></div> -->
					<div class="card-body" style="background: #fff; border-radius: 10px;">
						<span style="font-size: 10px; font-weight: 600;"><img src="/Images/Body/msg.gif" style="width: 40px; margin-right: 8px;"> Buddy Chats <em style="margin-left: 8px;"><?= number_format($newChatCount);?></em></span>
						<hr>      
						<span style="font-size: 10px; font-weight: 600;"><img src="/Images/Body/ideal.png" style="width: 40px; margin-right: 8px;"> Match Pool <em style="margin-left: 8px;"><?php if ($matchCount) { echo number_format(count($matchCount)); } else { echo 0; }?></em></span>
						<hr>
						<span style="font-size: 10px; font-weight: 600;"><img src="/Images/Body/online.png" style="width: 20px; margin-right: 8px;"/> Online Around You <em style="margin-left: 8px;"><?= number_format($onlineNow); ?></em></span>
						
					</div>
					</div>

					<div class="">
						<a href="#" data-toggle="modal" data-target="#subModal"><img src="/Images/Body/subscribe.png" alt="Subscribe Button" style="width: 100%; height: 100px;"></a>
					</div>

					<?php if($randomBuddy != null) { ?>
                
						<div class="card card-round" style="margin: 10px;">
						<div style="margin-top: 10px; text-align: center;"><p style="color: #700bcd;"><b>Random</b> Buddies</p></div>
						<div class="card-body">
							<!-- <div class="card-title fw-mediumbold">Random Meet Ups</div> -->
							<div class="card-list">
							<?php foreach ($randomBuddy as $key => $buddy) { ?>
							<?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $buddy['uniqueid']) { ?>
							<div class="item-list">
								<div class="avatar">
								<a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $buddy['uniqueid']; ?>&tab=about" data-toggle="tooltip" title="View Buddy Profile">
								<img
									src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>"
									alt="Buddy Photo"
									class="avatar-img rounded-circle"
								/>
								</a>
								</div>
								<div class="info-user ms-3">
								<?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $buddy['uniqueid']) { ?>
									<div class="username"><?= $user['fname']; ?> <?= $user['lname']; ?></div>
									<div class="status"><?= $user['occupation']; ?></div>
								<?php } } ?>
								</div>
								<a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $buddy['uniqueid']; ?>&tab=about">
								<button class="btn btn-icon btn-primary btn-round btn-xs">
									<i class="fa fa-plus"></i>
								</button>
								</a>
							</div>
							<?php } } ?>
							</div>
						</div>
						</div>
					
					<?php } } ?>

					<li>
						<a href="<?= baseURL('us-need-help/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-help-alt"></i></span>
		                	<span class="ttr-label">Need Help?</span>
		                </a>
		            </li>
		            <li class="ttr-seperate"></li>

		            <li>
						<a href="<?= baseURL('logout/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-power-off"></i></span>
		                	<span class="ttr-label">Log Out</span>
		                </a>
		            </li>
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
                    <div class="modal-content" style="background: #fff;">
                        <div class="modal-header">
                            <h5 class="modal-title widget-bg1" style="float: center; padding: 10px; color: #fff; border-radius: 10px;">Service Subscription</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <p class="mt-5" style="text-align: center; font-size: 16px; color: green;">This Service Is Currently Not Available In Your Region. </p>
                            
                            <!-- <textarea class="form-control" placeholder="Type text"></textarea> -->
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn mr-auto">Reply</button>
                        </div> -->
                    </div>
                </div>
            </div>
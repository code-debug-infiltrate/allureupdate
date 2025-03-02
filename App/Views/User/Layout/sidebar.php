<!-- Left sidebar menu start -->
	<div class="ttr-sidebar" style="">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			
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
							<a href="<?= baseURL('us-notifications/'); ?><?= $userInfo['uniqueid']; ?>/"><span style="font-size: 12px;"><img src="/Images/Body/love.gif" style="border-radius: 50%; width: 40px; margin-right: 8px;"> Notifications <em style="margin-left: 8px;"><?= number_format($userNoticeCount); ?></em> </span></a>
						</div>

						<div class="mt-3">
							<a href="#" data-toggle="modal" data-target="#addBalanceModal"><img src="/Images/Body/subscribe.png" alt="Subscribe Button" style="width: 100%; height: 80px;"></a>
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

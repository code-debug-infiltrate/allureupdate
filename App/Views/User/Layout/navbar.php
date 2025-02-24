<!-- header start -->
<header class="ttr-header">
	<div class="ttr-header-wrapper">
		<!--sidebar menu toggler start -->
		<div class="ttr-toggle-sidebar ttr-material-button">
			<i class="ti-close ttr-open-icon"></i>
			<i class="ti-menu ttr-close-icon"></i>
		</div>
		<!--sidebar menu toggler end -->
		<!--logo start -->
		<div class="ttr-logo-box">
			<div>
				<a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-logo">
					<img class="ttr-logo-mobile" alt="Coy-Logo" src="/Images/Logo/favicon.png" width="100" height="80">
					<img class="ttr-logo-desktop" alt="Coy-Logo" src="/Images/Logo/favicon.png" width="150" height="100">
				</a>
			</div>
		</div>
		<!--logo end -->
		<div class="ttr-header-menu">
			<!-- header left menu start -->
			<ul class="ttr-header-navigation">
				<!-- <li>
					<a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button ttr-submenu-toggle"><i class="ti-home mr-2"></i> Home Page</a>
				</li> -->
				
				<!-- <li>
					<a href="#" class="ttr-material-button ttr-submenu-toggle">TASK BOARD <i class="fa fa-angle-down"></i></a>
					<div class="ttr-header-submenu">
						<ul>
	                	
	                	<li>
	                		<a href="<?= baseURL('tasks/'); ?><?= $userInfo['uniqueid']; ?>/"><span class="ttr-label">All Tasks</span></a>
	                	</li>
						<li>
							<a href="<?= baseURL('earn-badge/'); ?><?= $userInfo['uniqueid']; ?>/"><span class="ttr-label">Earn Badge</span></a>
						</li>
						
	                	<li>
	                		<a href="<?= baseURL('us-tasks/'); ?><?= $userInfo['uniqueid']; ?>/" class="ttr-material-button"><span class="ttr-label">My Tasks</span></a>
	                	</li>
						
	                </ul>
					</div>
				</li> -->
				
			</ul>
			<!-- header left menu end -->
		</div>
		<div class="ttr-header-right ttr-with-seperator">
			<!-- header right menu start -->
			<ul class="ttr-header-navigation">
				<!-- <li>
					<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
				</li> -->

				<li>
					<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-envelope"></i><span class="counter" style="font-weight: lighter; top: -10px;"><?= count($userNewMsgs); ?></span></a>
					<div class="ttr-header-submenu noti-menu">
						<?php $i=0; if ($userNewMsgs) { ?>
						<div class="ttr-notify-header">
							<span class="ttr-notify-text-top"><?= count($userNewMsgs); ?> Messages</span>
							<span class="ttr-notify-text"><a href="<?= baseURL('us-messages/')?><?= $userInfo['uniqueid']; ?>/">All Messages</a></span>
						</div>
						<div class="noti-box-list">
							<ul>
								<?php foreach ($userNewMsgs as $key => $msg) { ?>
									<?php if ($i <= 2) {  ?>
									<li id="msg<?= $msg['id']; ?>">
										<span class="notification-icon dashbg-primary">
											<i class="fa fa-bullhorn"></i>
										</span>
										<span class="notification-text" style="font-size: 10px;">
											<span style="font-size: 14px;"><b><?= substr($msg['subject'], 0, 20); ?>...</b></span> 
											<br>
											<?= substr($msg['details'], 0, 150); ?>
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close" onclick="document.getElementById('msg<?= $msg['id']; ?>').style.display='none'"></a>
											<span style="font-size: 7px;"> <?php echo(''.timeAgo(date('Y/m/d', strtotime($msg['created']))).''); ?></span>
										</span>
									</li>
								<?php } ?>
							<?php $i++; } ?>
							</ul>
						</div>
						<?php } ?>
					</div>
				</li>

				<li>
					<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i><span class="counter" style="font-weight: lighter; top: -10px;"><?= count($userNotice); ?></span></a>
					<div class="ttr-header-submenu noti-menu">
						<?php $i=0; if ($userNotice) { ?>
						<div class="ttr-notify-header">
							<span class="ttr-notify-text-top"><?= count($userNotice); ?> Notifications</span>
							<span class="ttr-notify-text"><a href="<?= baseURL('us-notifications/')?><?= $userInfo['uniqueid']; ?>/">All Notifications</a></span>
						</div>
						<div class="noti-box-list">
							<ul>
								<?php foreach ($userNotice as $key => $notice) { ?>
									<?php if ($i <= 2) {  ?>
								<li id="notice<?= $notice['id']; ?>">
									<span class="notification-icon dashbg-primary">
										<i class="fa fa-bullhorn"></i>
									</span>
									<span class="notification-text" style="font-size: 10px;">
										<span style="font-size: 14px;"><b><?= $notice['subject']; ?></b></span> 
										<br>
										<?= $notice['details']; ?>
									</span>
									<span class="notification-time">
										<a href="#" class="fa fa-close" onclick="document.getElementById('notice<?= $notice['id']; ?>').style.display='none'"></a>
										<span style="font-size: 7px;"> <?php echo(''.timeAgo(date('Y/m/d', strtotime($notice['created']))).''); ?></span>
									</span>
								</li>

								<?php } ?>
							<?php $i++; } ?>
							</ul>
						</div>
						<?php } ?>
					</div>
				</li>
				<li>
					<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="Profile-Img" src="<?= public_asset('/other_assets/Profile/') ?><?= $userInfo['profileimage']; ?>" width="52" height="52"></span></a>
					<div class="ttr-header-submenu">
						<ul>
							<li><a href="<?= baseURL('us-account-settings/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="ti-settings mr-2"></i> Account Settings</a></li>
							<li class="ttr-seperate"></li>

							<li><a href="<?= baseURL('us-account-settings/'); ?><?= $userInfo['uniqueid']; ?>/#password"><i class="ti-key mr-2"></i> Change Password</a></li>
							<li class="ttr-seperate"></li>

							<li><a href="<?= baseURL('us-need-help/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="ti-help-alt mr-2"></i> Need Help</a></li>
							<li class="ttr-seperate"></li>

							<li><a href="<?= baseURL('us-profile-settings/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="ti-user mr-2"></i> Profile Settings</a></li>
							<li class="ttr-seperate"></li>

							<li><a href="<?= baseURL('logout/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="ti-power-off mr-2"></i> Logout</a></li>

						</ul>
					</div>
				</li>
				<!-- <li class="ttr-hide-on-mobile">
					<a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
					<div class="ttr-header-submenu ttr-extra-menu">
						<a href="#">
							<i class="fa fa-music"></i>
							<span>Musics</span>
						</a>
						<a href="#">
							<i class="fa fa-youtube-play"></i>
							<span>Videos</span>
						</a>
						<a href="#">
							<i class="fa fa-envelope"></i>
							<span>Emails</span>
						</a>
						<a href="#">
							<i class="fa fa-book"></i>
							<span>Reports</span>
						</a>
						<a href="#">
							<i class="fa fa-smile-o"></i>
							<span>Persons</span>
						</a>
						<a href="#">
							<i class="fa fa-picture-o"></i>
							<span>Pictures</span>
						</a>
					</div>
				</li> -->
			</ul>
			<!-- header right menu end -->
		</div>
		<!--header search panel start -->
		<div class="ttr-search-bar">
			<form class="ttr-search-form">
				<div class="ttr-search-input-wrapper">
					<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
					<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
				</div>
				<span class="ttr-search-close ttr-search-toggle">
					<i class="ti-close"></i>
				</span>
			</form>
		</div>
		<!--header search panel end -->
	</div>
</header>
<!-- header end -->


				

<!-- Alerts For Notifications & Messages -->
<?php include 'alert.php'; ?>

<div class="flash-outer closer" id="closerFlash9" onclick="$('#closerFlash9').hide()"></div>
<!-- End Alerts For Notifications & Messages -->


<?php if (isset($_SERVER['HTTPS'])) { $url= "https://"; } else { $url = "http://"; }?>


    
<input type="hidden" name="uniqueid" id="uniqueid" value="<?= $userInfo['uniqueid']; ?>" required>
<input type="hidden" name="username" id="username" value="<?= $userInfo['username']; ?>" required>
<input type="hidden" name="fname" id="fname" value="<?= $userInfo['fname']; ?>" required>
<input type="hidden" name="lname" id="lname" value="<?= $userInfo['lname']; ?>" required>
<input type="hidden" name="email" id="email" value="<?= $userInfo['email']; ?>" required>
<input type="hidden" name="currency" id="currency" value="<?= $curInfo['currency']; ?>" required>
<input type="hidden" name="cur" id="cur" value="<?= $userInfo['wallet']; ?>" required>
<input type="hidden" name="sec" id="sec" value="<?= $userInfo['pin']; ?>" required>
<input type="hidden" name="urlWallet" id="urlWallet" value="<?= $url.$_SERVER['HTTP_HOST']."/";?>">
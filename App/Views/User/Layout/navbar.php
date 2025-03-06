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
					<img class="ttr-logo-mobile" alt="Coy-Logo" src="/Images/Logo/favicon.png" width="40" height="20">
					<img class="ttr-logo-desktop" alt="Coy-Logo" src="/Images/Logo/favicon.png" width="50" height="30">
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
				<?php if (($userNoticeCount > 0) || ($newChatCount > 0) || ($newChatCount > 0)) { ?>
				<iframe src="/Images/Sounds/ding-sound.mp3" allow="autoplay" style="display:none" autoplay></iframe>
				<?php } ?>

				<li>
					<a href="#" class="ttr-material-button ttr-submenu-toggle"><img src="/Images/Body/msg.gif" alt="Email" style="width: 30px;"><span class="counter" style="font-weight: lighter; top: -10px;"><?= number_format($newChatCount); ?></span></a>
					<div class="ttr-header-submenu noti-menu">
						<?php $i=0; if ($newChatDetails) { ?>
						<div class="ttr-notify-header">
							<span class="ttr-notify-text-top"><?= number_format($newChatCount); ?> Messages</span>
							<span class="ttr-notify-text"><a href="<?= baseURL('us-messages/')?><?= $userInfo['uniqueid']; ?>/">All Messages</a></span>
						</div>
						<div class="noti-box-list">
							<ul>
								<?php foreach ($newChatDetails as $key => $msg) { ?>
									<?php if ($i <= 4) {  ?>
									<li id="msg<?= $msg['id']; ?>">
										<?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $msg['sender']) { ?>
											
										<span class="notification-icon dashbg-primary">
											<img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="Buddy-Photo" style="height: 40px; width: 40px;">
										</span>

										<span class="notification-text" style="font-size: 10px;">
											<span style="font-size: 14px;"><b><?= $user['fname']; ?> <?= $user['lname']; ?></b></span> 
											<br>
											<?= substr($msg['details'], 0, 50); ?>
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close" onclick="document.getElementById('msg<?= $msg['id']; ?>').style.display='none'"></a>
											<span style="font-size: 7px;"> <?php echo(''.timeAgo(date('Y/m/d', strtotime($msg['created']))).''); ?></span>
										</span>
										<?php } } ?>
									</li>
								<?php } ?>
							<?php $i++; } ?>
							</ul>
						</div>
						<?php } ?>
					</div>
				</li>

				<li>
					<a href="#" class="ttr-material-button ttr-submenu-toggle"><img src="/Images/Body/love.gif" alt="Notify" style="width: 30px;"><span class="counter" style="font-weight: lighter; top: -10px;"><?= number_format($userNoticeCount); ?></span></a>
					<div class="ttr-header-submenu noti-menu">
						<?php $i=0; if ($newActivityNotice) { ?>
						<div class="ttr-notify-header">
							<span class="ttr-notify-text-top"><?= number_format($userNoticeCount); ?> Notifications</span>
							<span class="ttr-notify-text"><a href="<?= baseURL('us-notifications/')?><?= $userInfo['uniqueid']; ?>/">All Notifications</a></span>
						</div>
						<div class="noti-box-list">
							<ul>
								<?php foreach ($newActivityNotice as $key => $notice) { ?>
									<?php if ($i <= 4) {  ?>
									<li id="notice<?= $notice['id']; ?>">
										<?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $notice['user_uniqueid']) { ?>
										
										<span class="notification-icon dashbg-primary">
											<img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="Buddy-Photo" style="height: 40px; width: 40px;">
										</span>
										<span class="notification-text" style="font-size: 10px;">
											<span style="font-size: 14px;"><b><?= $user['fname']; ?> <?= $user['lname']; ?></b></span> 
											<br>
											<?= $notice['details']; ?>
										</span>
										<span class="notification-time">
											<a href="#" class="fa fa-close" onclick="document.getElementById('notice<?= $notice['id']; ?>').style.display='none'"></a>
											<span style="font-size: 7px;"> <?php echo(''.timeAgo(date('Y/m/d', strtotime($notice['created']))).''); ?></span>
										</span>
										<?php } } ?>
									</li>
								<?php } ?>
							<?php $i++; } ?>
							</ul>
						</div>
						<?php } ?>
					</div>
				</li>
				<li>
					<a href="#" class="ttr-material-button ttr-submenu-toggle">
						<span class="ttr-user-avatar">
							<img alt="Profile-Img" src="<?= public_asset('/other_assets/Profile/') ?><?= $userInfo['profileimage']; ?>" width="52" height="52">
						</span>
					</a>
					<div class="ttr-header-submenu" style="padding: 20px;">
						<ul>
							<li><a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="ti-user mr-3" style="color: rgb(57, 6, 91);"></i> Account Settings</a></li>

							<li><a href="<?= baseURL('us-preferences/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="ti-layout-accordion-list mr-3" style="color: rgb(57, 6, 91);"></i> Preference Settings</a></li>
							
							<li class="ttr-seperate" style="border: 1px solid rgb(202, 201, 202);"></li>
							<li><a href="<?= baseURL('us-profile/'); ?><?= $userInfo['uniqueid']; ?>/"><img src="/Images/Body/done.png" style="width: 20px; margin-right: 8px;">  My Profile</a></li>
							
							<li class="ttr-seperate" style="border: 1px solid rgb(202, 201, 202);"></li>
							<li><a href="<?= baseURL('logout/'); ?><?= $userInfo['uniqueid']; ?>/"><img src="/Images/Body/alert.png" style="width: 20px; margin-right: 8px;">  Logout</a></li>

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
<input type="hidden" name="url" id="url" value="<?= $url.$_SERVER['HTTP_HOST']."/";?>">
<input type="hidden" name="currency" id="currency" value="<?= $curInfo['currency'];?>">
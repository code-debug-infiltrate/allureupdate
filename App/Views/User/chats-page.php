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
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget">
						<div class="email-wrapper">
							<div class="email-menu-bar">
								<div class="email-menu-bar-inner"  style="border:1px solid #ffffff; padding: 2px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40);">
									<ul>

										<?php foreach ($buddiesList as $key => $budReq) { ?>
											<?php foreach ($userProfiles as $key => $user) { ?>
												<?php if (($budReq['uniqueid'] == $userInfo['uniqueid']) && ($budReq['buddyid'] == $user['uniqueid']) && ($budReq['request'] != "Deactivated")) { ?>
													<li>
														<span style="font-size: 14px; font-weight: 500;">
															<a href="<?= baseURL('us-chats/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $budReq['buddyid']; ?>">
															<img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="Buddy-Photo" style="width: 30px; height: 30px; border-radius: 100%; margin-right: 10px;">
																
															<?php if ($userChats) { foreach ($userChats as $eachChat => $chatDetails) {?>
																<?php if (($budReq['uniqueid'] == $chatDetails['receiver'])) { ?>
																	<?php if ($chatDetails['status'] == "Unread") {?>
																		<span class="star-this starred"><img src="/Images/Body/msgcount1.gif" style="width: 30px;" alt="New Chat"> </span>
																<?php } break; } ?>
															<?php } } ?>

															<?= $user['fname']; ?> <?= $user['lname']; ?>
														</a></span>
													</li>
												<?php } elseif (($budReq['uniqueid'] != $userInfo['uniqueid']) && ($budReq['uniqueid'] == $user['uniqueid']) && ($budReq['request'] != "Deactivated")) { ?>
													<li>
														<span style="font-size: 14px; font-weight: 500;"><a href="<?= baseURL('us-chats/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $budReq['uniqueid']; ?>">
															<img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="Buddy-Photo" style="width: 30px; height: 30px; border-radius: 100%; margin-right: 10px;">

															<?php if ($userChats) { foreach ($userChats as $eachChat => $chatDetails) {?>
																<?php if (($budReq['uniqueid'] == $chatDetails['sender'])) { ?>
																	<?php if ($chatDetails['status'] == "Unread") {?>
																		<span class="star-this starred"><img src="/Images/Body/msgcount1.gif" style="width: 30px;" alt="New Chat"> </span>
																<?php } break; } ?>
															<?php } } ?>
															
															<?= $user['fname']; ?> <?= $user['lname']; ?>
														</a></span>		
													</li>
												<?php } ?>
											<?php } } ?>
										
									</ul>
								</div>
							</div>
							<div class="mail-list-container">
								<div class="mailbox-view">
									<!-- <div class="mailbox-view-title">
										<h5 class="send-mail-title">Your message title goes here</h5>
									</div> -->
									<div class="send-mail-details">
										<div class="d-flex"  style="border:1px solid #ffffff; padding: 2px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40);">
											<div class="send-mail-user">
											<?php if (isset($_GET['buddy'])) { $chatBuddy = $_GET['buddy']; ?>
												<?php foreach ($userProfiles as $key => $user) { if ($chatBuddy == $user['uniqueid']) { ?>
												<div class="send-mail-user-pic">
													<img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="Buddy Image">
												</div>
												<div class="send-mail-user-info">
													<h4><?= $user['fname']; ?> <?= $user['lname']; ?> </h4>
													<!-- <h5>From: example@info.com</h5> -->
												</div>
												<?php } } ?>
											</div>
											<div class="ml-auto send-mail-full-info">
												<!-- <div class="time"><span>10:25 PM</span></div> -->
												<!-- <span class="btn btn-info-icon">Reply</span> -->
												<div class="dropdown all-msg-toolbar ml-auto">
													<span class="btn btn-info-icon" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></span>
													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="#"><i class="fa fa-trash-o"></i> Block Buddy</a></li>
													</ul>
												</div>
											</div>
											
										</div>
										<?php if($userChats != NULL) { ?>
											<?php foreach ($userChats as $comC => $chats) { ?>
												<?php if ($chats['sender'] != $userInfo['uniqueid']) { ?>
													<div class="read-content-body" style="float: left; margin: 10px;" id="you">
														<?php if ($appSubPlan['status'] == "Paid") { ?>
															<?php if ($subPlan) { ?>
																<?php if ($subPlan['status'] == "Paid") {  ?>
														
																	<?php if ($chats['file']) { ?>
																		<img src="<?= public_asset('/other_assets/Chats/') ?><?= $chats['file']; ?>" style="width: 200px;" alt="Chat File">
																	<?php } ?>
																	<p style="font-size: 18px;"><?= $chats['details']; ?> <br><i style="font-size: 8px;">Received <?php echo(''.timeAgo(date('Y/m/d', strtotime($chats['created']))).''); ?></i></p>
																
																<?php } else { ?>

																	<p>This Message Is Temporarily Locked. <a href="javascript:void(0);" style="color: #7005e3;">Click Here To Unlock It</a> Now!</p>
																
														<?php } } } else { ?>
															<?php if ($chats['file']) { ?>
																<img src="<?= public_asset('/other_assets/Chats/') ?><?= $chats['file']; ?>" style="width: 200px;" alt="Chat File">
															<?php } ?>
															<p style="font-size: 18px;"><?= $chats['details']; ?> <br><i style="font-size: 8px;">Received <?php echo(''.timeAgo(date('Y/m/d', strtotime($chats['created']))).''); ?></i></p>
															
														<?php } ?>
													</div>
										
											<?php } else { ?>
												<div class="read-content-body" style="float: right; margin: 10px;" id="me">
													<?php if ($chats['file']) { ?>
														<img src="<?= public_asset('/other_assets/Chats/') ?><?= $chats['file']; ?>" style="width: 200px;" alt="Chat File">
													<?php } ?>
													<p style="font-size: 18px;"><?= $chats['details']; ?> <br><i style="font-size: 8px;">Sent <?php echo(''.timeAgo(date('Y/m/d', strtotime($chats['created']))).''); ?></i></p>
												</div>
										<?php } } ?>

										<?php } else { ?>
											<div class="col-lg-12"><center><p style="margin: 20px;">Start a Spark! <br> Send Buddy a Message! Say Hello...</p></center></div>
										<?php } ?>
									
										
										<div class="form-group">
											
											<div class="col-lg-12"><marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="4" width="100%" direction="left"><i style="font-size: 12px; font-weight: 300; margin-top: 10px;"><?= $userInfo['username']; ?>, Be Polite And Respectful. Do Not Use Vulgar Words. Remember You Are Here For a Good Purpose. All Chats On <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> Are End to End Secured.</i></marquee></div>
											
											<form method="POST" action="" enctype="multipart/form-data" style="width: 100%;">

												<input type="hidden" name="receiver" value="<?= $_GET['buddy']; ?>">
												<input type="hidden" name="sender" value="<?= $userInfo['uniqueid']; ?>" required>
												<input type="hidden" name="uniqueid" value="<?= $userInfo['uniqueid']; ?>" required>
												<input type="hidden" name="username" value="<?= $userInfo['username']; ?>" required>

												<?php if ($userChats) { ?>
													<?php foreach ($userChats as $comC => $chats) { ?>
														<?php if (($chats['sender'] == $userInfo['uniqueid'] && $chats['receiver'] == $_GET['buddy']) || ($chats['receiver'] == $userInfo['uniqueid'] && $chats['sender'] == $_GET['buddy'])) { ?>
															<input type="hidden" name="chatid" value="<?= $chats['chatid']; ?>">
														<?php } break; }  ?>
												<?php } else { ?>
													<input type="hidden" name="chatid" value="">
												<?php } ?>

												<center><img src="" id="output_postimage" alt="" style="height: 300px; margin: 10px;"></center>

												<textarea class="form-control" name="details" maxlength="500" placeholder="<?= $userInfo['username']; ?>, Share Your Thoughts With Your Buddy. You Can Attach an Image.." required></textarea>
												
												<input class="form-control" type="file" id="postimage" name="postimage[]" onchange="validatePostImage(event)" accept="image/*">
												
											
												<button class="btn mt-5" name="replychat" type="submit" data-toggle="tooltip" title="send">Send</button>
											
											</form>
										</div>
										
										<?php } else { ?>
											<div class="col-md-12"><center><p style="margin: 20px;">You Currently Do Not Have Any Chats! Connect With a Buddy And Say Hello...</p></center></div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div> 
				</div>
				<!-- Your Profile Views Chart END-->
			</div>

			<script src="<?= public_asset('/other_assets/Front/js/ajaxForms/create-post.js') ?>"></script>

<!-- End oF file -->

	</div>
</main>



<?php include 'Layout/footer.php'; ?>

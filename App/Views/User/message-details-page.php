<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>



<title>Message Details | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 15px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="<?= baseURL('support-ticket/'); ?><?= $userInfo['uniqueid']; ?>/?type=All"><i class="fa fa-edit"></i>Messaging</a></li>
				<li>Message Details</li>
			</ul>

		</div>


			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="email-wrapper">
							<div class="email-menu-bar">
								<div class="compose-mail">
									<a href="<?= baseURL('us-support-ticket/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All" class="btn-secondry">Raise Ticket</a>
								</div>
								<div class="email-menu-bar-inner">
								<ul>
										<li class="<?php if ($_GET['cat'] == "Inbox") { echo "active"; } ?>"><a href="<?= baseURL('us-messages/'); ?><?= $userInfo['uniqueid']; ?>/?cat=Inbox"><i class="fa fa-envelope-o"></i>Inbox <span class="badge badge-success"><?= $countUnreadTickets; ?></span></a></li>

										<li class="<?php if ($_GET['cat'] == "Sent") { echo "active"; } ?>"><a href="<?= baseURL('us-messages/'); ?><?= $userInfo['uniqueid']; ?>/?cat=Sent"><i class="fa fa-send-o"></i>Sent <span class="badge badge-info"><?= $countSentTickets; ?></span></a></li>

										<li class="<?php if ($_GET['cat'] == "Closed") { echo "active"; } ?>"><a href="<?= baseURL('us-messages/'); ?><?= $userInfo['uniqueid']; ?>/?cat=Closed"><i class="fa fa-file-text-o"></i>Closed <span class="badge badge-warning"><?= $countClosedTickets; ?></span></a></li>

									</ul>
								</div>
							</div>
							<div class="mail-list-container">

								<p class="ml-5" style="font-size: 26px;">: Message Details [ID: #<?= $messageInfo['ticketid']; ?>]</p>

									<?php if ($messageInfo) { ?>

										<div class="form-group col-12">
											<p class="mt-5" style="font-weight: 500; font-size: 20px;"><b>Subject: </b> <?= $messageInfo['subject']; ?> </p>
										</div>

										<?php if ($messageInfo['image']) { ?>
											<div class="form-group col-12">
												<center><img src="<?= public_asset('/other_assets/Support/') ?><?= $messageInfo['image']; ?>" width="100%"></center>
											</div>
										<?php } ?>


										<div class="form-group col-12">
											<p><?= $messageInfo['details']; ?></p>
										</div>

										<hr>

									<?php } ?>

								<?php if ($messageDetails) { ?>


									<?php foreach ($messageDetails as $key => $msgDet) {  ?>

										<?php if ($msgDet['image']) { ?>
											<div class="form-group col-12">
												<center><img src="<?= public_asset('/other_assets/Support/') ?><?= $msgDet['image']; ?>" width="100%"></center>
											</div>
										<?php } ?>

										<div class="form-group col-12">
											<p><?= $msgDet['details']; ?></p>
										</div>

										<hr>

									<?php } ?>

									<form action="" method="POST" class="mail-compose" enctype="multipart/form-data">
										<input type="hidden" name="uniqueid" id="uniqueid" value="<?= $userInfo['uniqueid']; ?>" required>
										<input type="hidden" name="username" id="username" value="<?= $userInfo['username']; ?>" required>
										<input type="hidden" name="ticketid" id="ticketid" value="<?= $messageInfo['ticketid']; ?>" required>

										<div class="form-group col-12">
											<label> Subject Of The Message</label>
											<input class="form-control" type="text" name="subject" id="subject" placeholder="GIve Your Message a Topic" maxlength="150">
										</div>

										<div class="form-group col-12">
											<label>Give Detailed Information About This Subject</label>
											<textarea class="form-control" rows="10" name="details" id="details" maxlength="5000" placeholder="Ask Your Question(s) OR Remember To Tell Us About The Problem" required></textarea>
										</div>
										
										<div class="form-group col-12">
											<label>Upload a Relevant Image If You Have One</label>
											<br>
											<input type="file" accept="image/*" name="pics" id="pics">
										</div>

										<div class="form-group col-12">
											<button type="submit" id="replyTicket" name="replyTicket" class="btn-secondry add-item m-r5 mt-5"><i class="fa fa-fw fa-plus-circle"></i> Raise a Ticket</button>
										</div>
									</form>

								<?php } ?>


							</div>
						</div>
					</div> 
				</div>
				<!-- Your Profile Views Chart END-->
			</div>

	<div class="ttr-overlay"></div>



<!-- End oF file -->

	</div>
</main>


<?php include 'Layout/footer.php'; ?>
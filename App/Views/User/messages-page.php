<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title><?= $userInfo['username']; ?>'s Messages | All Messages Page | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<!-- <div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 15px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="<?= baseURL('us-messages/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All"><i class="fa fa-envelope-open"></i>Messaging</a></li>
				<li>Message Box</li>
			</ul>

		</div> -->


			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="email-wrapper">
							<div class="email-menu-bar">
								<div class="compose-mail">
									<a href="<?= baseURL('us-support-ticket/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All" class="btn-secondry add-item m-r5 mt-2"> <i class="fa fa-fw fa-plus-circle"></i> Raise a Ticket</a>
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
								<?php if ($userTickets) { ?>
								<div class="mail-toolbar">
									<div class="check-all">
										<div class="custom-control custom-checkbox checkbox-st1">
											<input type="checkbox" class="custom-control-input" id="check1">
											<label class="custom-control-label" for="check1"></label>
										</div>
									</div>
									<div class="mail-search-bar">
										<input type="text" class="form-control" placeholder="Search"/>
									</div>
									 <div class="dropdown all-msg-toolbar">
										<span class="btn-secondry btn-info-icon" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></span>
										<ul class="dropdown-menu">
											<li><a href="javascript:void(0);"><i class="fa fa-trash-o"></i> Delete</a></li>
											<li><a href="javascript:void(0);"><i class="fa fa-file-text-o"></i> Archive</a></li>
										</ul>
									</div> 
									<?php if ($userTickets) { if (count($userTickets) > "15") { ?>
										<div class="next-prev-btn">
											<a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
											<a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
										</div>
									<?php } } ?>
								</div>


								<?php foreach ($userTickets as $key => $tck) { ?>

									<div class="mail-list-info">
										<!-- <div class="checkbox-list">
											<div class="custom-control custom-checkbox checkbox-st1">
												<input type="checkbox" class="custom-control-input" id="check9">
												<label class="custom-control-label" for="check9"></label>
											</div>
										</div> -->
										<!-- <div class="mail-rateing">
											<span><i class="fa fa-star-o"></i></span>
										</div> -->
										<div class="mail-list-title-info">
											<form method="POST" action="<?= baseURL('us-messages/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All">
												<input type="hidden" name="uniqueid" value="<?= $userInfo['uniqueid']; ?>">
												<input type="hidden" name="id" value="<?= $tck['id']; ?>">
												<input type="hidden" name="ticketid" value="<?= $tck['ticketid']; ?>">

												<input type="submit" name="readMsg" style="background: none; color: inherit; border: none; padding: 0; font: inherit; font-size: 14px; cursor: pointer; outline: inherit; padding-left: 15px;" value="<?= $tck['subject']; ?>">
											</form>
										</div>
										<div class="mail-list-title-info">
											<!-- <?php if ($tck['status'] == "Unread") { ?>
												<p style="font-size: 10px; color: blue"><?= $tck['status']; ?></p>
											<?php } elseif ($tck['status'] == "Read") { ?>
												<p style="font-size: 10px; color: brown"><?= $tck['status']; ?></p>
											<?php } else {  ?> 
												<p style="font-size: 10px; color: red"><?= $tck['status']; ?></p>
											<?php } ?>  -->
										</div>
										<div class="mail-list-time">
											<span><?php echo(''.timeAgo(date('Y/m/d', strtotime($tck['created']))).''); ?></span>
										</div>
										<ul class="mailbox-toolbar">
											<li data-toggle="tooltip" title="Close Ticket"><i class="fa fa-trash-o"></i></li> 

											<!-- <li data-toggle="tooltip" title="Archive"><i class="fa fa-arrow-down"></i></li>
											 <li data-toggle="tooltip" title="Mark as unread"><i class="fa fa-envelope-open"></i></li> -->

											<li data-toggle="tooltip" title="Read Message"><i class="fa fa-eye"></i></li>
											
											
										</ul>
									</div>
									
									

								<?php } ?>

								</div>
								<?php } else { ?>

									<center>
										<p class="mt-5"> You Currently Have No <?php if (($_GET['cat'] == "Inbox") || ($_GET['cat'] == "All")) { echo "New"; } elseif ($_GET['cat'] == "Sent") { echo "Sent"; } elseif ($_GET['cat'] == "Closed") { echo "Closed"; } ?> Messages. <a href="<?= baseURL('us-support-ticket/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All">Raise a Ticket.</a> </p>
									</center>

								<?php } ?>
							</div>
						</div>
					</div> 
				</div>
				<!-- Your Profile Views Chart END-->
			</div>

	<div class="ttr-overlay"></div>









	<?php include 'caution-alert.php'; ?>


<!-- End oF file -->

	</div>
</main>

<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>

<?php include 'Layout/footer.php'; ?>
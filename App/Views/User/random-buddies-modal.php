
<!-- Random Buddies Modal -->
<div class="modal fade review-bx-reply buddiesModal" id="buddiesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content bg-fix ovbl-dark" style="background-image:url(/Images/Body/animated-bg2.png);">
			
			<div class="modal-body">
				
			<!-- Update Preferences ==== -->
			<div class="section-area section-sp2 bg-fix ovbl-dark join-bx text-center" style="background-image:url(/Images/Body/animated-bg2.png);">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true" style="font-size: 34px; color: #fff;">&times;</span>
							</button>
							<div class="join-content-bx text-white">
								<h4><span class="counter"><?= number_format(count($userProfiles)*25)?> </span> Buddies</h4>
								<h2>Are Interested In <?php if ($user_myself) { if ($user_myself['seeking'] == "Any") { ?>You<?php } else { ?><?= $user_myself['seeking']; ?><?php } } else { echo "You"; } ?></h2>
								<!-- <p>Updating Your Preferences Will Reshuffle Your Match Pool And Find You Befitting Connections.</p> -->
								<a href="<?= baseURL('us-preferences/')?><?= $userInfo['uniqueid']; ?>/" class="btn button-md">Be More Visible</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Update Preferences END ==== -->

			</div>
		</div>
	</div>
</div>



<script>
//Show Modal
	setInterval(function () {
		$('.buddiesModal').modal('show');
	}, 500000);
</script>
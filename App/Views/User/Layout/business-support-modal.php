<!-- Business Support Modal -->
<div class="modal fade review-bx-reply" id="supportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="background: #fff;">
			<div class="modal-header">
				<h5 class="modal-title widget-bg4" style="float: center; padding: 10px; color: #fff; border-radius: 10px;">Business Support</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php if ($userInfo['wallet'] < "5000") { ?>

					<p class="mt-5" style="text-align: center; font-size: 16px; color: green;">Your Account Balance Is Too Low To Use This Service. <br>Make a Deposit To Start Enjoying Full Membership Features...</p>

				<?php } else { ?>

					<p class="mt-5" style="text-align: center; font-size: 16px; color: green;">You Do Not QUALIFY To Use This Service Now. <br>Use Your Account For Sometime To Qualify...</p>

				<?php } ?>
                
				<!-- <textarea class="form-control" placeholder="Type text"></textarea> -->
			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn mr-auto">Reply</button>
			</div> -->
		</div>
	</div>
</div>

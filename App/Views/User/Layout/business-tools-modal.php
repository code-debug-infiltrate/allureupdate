<!-- Business Tools Modal -->
<div class="modal fade review-bx-reply" id="businessToolsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="background: #fff;">
			<div class="modal-header">
				<h5 class="modal-title widget-bg2" style="float: center; padding: 10px; color: #fff; border-radius: 10px;">Business Tool</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

			<?php if ($userInfo['wallet'] < "5000") { ?>

				<p class="mt-5" style="text-align: center; font-size: 16px; color: green;">Your Account Balance Is Too Low To Use This Service. <br>Make a Deposit To Start Enjoying Full Membership Features...</p>

			<?php } else { ?>

				<p class="mt-5" style="text-align: center; font-size: 16px; color: green;">This Service Is Currently Not Available. Check Back Again Shortly...</p>

			<?php } ?>
                
				<!-- <textarea class="form-control" placeholder="Type text"></textarea> -->
			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn mr-auto">Reply</button>
			</div> -->
		</div>
	</div>
</div>

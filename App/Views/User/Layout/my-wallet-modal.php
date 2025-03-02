<!-- Add Balance Modal
============================== -->
<div id="addBalanceModal" class="modal fade" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content border-0">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body py-4 px-0">
				<div class="row">
					<div class="col-12 col-md-12 mx-auto" id="depositForm">
						<!-- <h2 class="fw-400 text-4 text-center mt-1">Subscription Plans!</h2> 
						<p class="lead text-3 text-center mb-2">Select & Pay Your TV Plan Anytime, Anywhere!</p> -->
						<div class="col-md-12 mx-auto">
							<div class="bg-white shadow-sm rounded">

							<form method="POST" action="" autocomplete="off">
								<div class="amountDepositError_box" style="margin:10px 0px;"></div>
								<?php if ($subPlans) { ?>
									<div class="mb-3">
										<label for="youSend" class="form-label">Select a Plan (Pay In <?= $curInfo['name']; ?>)</label>
										<div class="input-group">
											<select class="form-control" id="amountDeposit">
												<option value=""></option>
												<?php foreach ($subPlans as $key => $subplan) { if ($subplan['type'] != "Consultation") {  ?>
													<option value="<?= $subplan['amount']; ?>"><?= $subplan['type']; ?> For <?= $curInfo['currency']; ?><?= $subplan['amount']; ?></option>
												<?php } }  ?>
											</select>
										</div>
									</div>
									<?php  } ?>
									<div class="memoDepositError_box" style="margin:10px 0px;"></div>
									<div class="mb-3">
										<label for="youSend" class="form-label">Narration</label>
										<div class="input-group">
											<span class="input-group-text"><i class="fa fa-comments"></i></span>
											<input type="text" class="form-control"  id="memoDeposit" maxlength="200" value="<?= $userInfo['username']; ?> Matchmaking Subscription Payment" placeholder="Transaction Details" required>
											
										</div>
									</div>

									<?php if ($bankInfo['status'] == "Publish") { ?>
									<div class="modal-footer">
										<button type="submit" id="payWithTransfer" class="btn-secondry add-item m-r5"><img src="/Images/Body/transfers.png" style="width: 15%; margin-right: 20px;"> Bank Transfer </button>
									</div>
									<?php } ?>
									<hr>
									<center><label style="color: red; font-size: 12px;">Service Fees May Apply For Online | Card Payments.</label></center>
									<div class="modal-footer">
										<button type="submit" id="payWithOnline" class="btn-secondry add-item m-r5"><img src="/Images/Body/card-pay.png" style="width: 15%; margin-right: 20px;"> Online | Cards </button>
									</div>
								</form>
								

							</div>
						</div>
					</div>




					<!-- Card|Online Payment result -->
					<div class="col-12 col-md-12 mx-auto mb-3" id="online_info" style="display: none;">
						<h2 class="fw-400 text-4 text-center mt-1">Online Card Transfer! </h2>

						<p class="text-center" style="font-size: 16px;">You Will Be Re-Directed To Make Payment. Your Deposit Will Be Added Automatically.</p>
						
						<div class="col-12 col-md-12 mx-auto">
							<div class="mb-3">
								<p class="payInfo"></p>
							</div>
							
							<div>
								<center><p style="color: blue; font-size: 12px;">Click The Button Below Only If You Are Ready To Make The Payment. <br><i class="text-danger"><b>Note That Service Fee May Apply.</b></i></p></center>
								<hr>
								<div class="modal-footer">
									<div class="urlLink"></div>
								</div>
								<hr>
							</div>
						</div>
					</div>
					<!-- Card|Online Payment result End -->

					

								
					<!-- Bank Payment result -->
					<div class="col-12 col-md-12 mx-auto mb-3" id="transfer_info" style="display: none;">
						<h2 class="fw-400 text-4 text-center mt-1">Bank Transfer Details! </h2>
						<p class="text-center" style="font-size: 12px; color: blue;">Please Follow The Instructions On This Page Carefully To Prevent Issues With Your Deposit. <br>Use The Narration Correctly, Your Deposit Will Be Added Automatically.</p>
						
						<div class="col-12 col-md-12 mx-auto">
							<div class="mb-3">
								<p class="bankName"></p>
								<p class="accountName"></p>
								<p class="acccountNumber"></p>
								<p class="amount"></p>
								<p class="narration"></p>
								<p class="swiftCode"></p>
							</div>

							<hr>
							<div>
								<center><label style="color: green; font-size: 12px;">Click The Button Below Only If You Have Made The Payment</label></center>
								<div class="modal-footer">
									<button type="button" id="doneBankTransfer" class="btn-secondry add-item m-r5"><img src="/Images/Body/thumb-up.png" style="width: 15%; margin-right: 20px;"> I Have Transfered Money </button>
								</div>
							</div>
						</div>
					</div>
					<!-- Bank Payment result End -->


					<!-- Bank Payment Done -->
					<div class="col-12 col-md-12 mx-auto mb-3" id="transfer_done_info" style="display: none;">
						<h2 class="fw-400 text-4 text-center mt-1">Bank Transfer Sent! </h2>
						<p class="text-center" style="font-size: 12px; color: blue;">Please Hold On For a Moment, Our System Is Watching Out For Your Deposit To Be Confirmed. <br>If You Used The Narration Correctly, Your Deposit Will Be Added Automatically.</p>
						
						<div class="col-12 col-md-12 mx-auto">

							<hr>
							<center>
								<img src="/Images/Body/thumb-up.png" style="width: 40%;"> 
								<hr><br>
								<label style="color: green; font-size: 18px;">Our System Will Keeping Monitoring Your Payment. You WIll Be Alerted As Soon As It's Confirmed!</label>
							</center>

						</div>
					</div>
					<!-- Bank Payment Done End -->

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Add Balance Modal End --> 





<!-- Internal Transfer Modal
============================== -->
<div id="internalTransferModal" class="modal fade" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content border-0">
			<div class="modal-header">
				<h5 class="modal-title fw-400 text-4 text-center widget-bg1" style="float: center;  padding: 10px; color: #fff; border-radius: 10px;">Fondo Pay</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body py-4 px-0">
				<div class="row">
					<div class="col-12 col-md-12 mx-auto">
						<h2 class="fw-400 text-4 text-center mt-1">Transfer To a FondoEx User!</h2> 
						<div class="col-md-10 mx-auto">
							<div class="bg-white shadow-sm rounded">
								<form method="POST" action="<?= baseURL('us-fondotransfer/'); ?><?= $userInfo['uniqueid']; ?>/" autocomplete="off">
								<div class="mb-3">
									<label for="emailID" class="form-label">Email ID</label>
									<div class="fondoEmailError_box" style="margin:10px 0px; font-size: 12px;"></div>
									<div class="input-group">
                                  		<span class="input-group-text"><i class="fa fa-envelope"></i></span>
										<input type="email" class="form-control" id="fondoEmail" name="fondoEmail" placeholder="Email ID Of The Beneficiary" required>
									</div>
									<div class="fondoEmailAlert_box" style="margin:10px 0px; font-size: 14px;"></div>
								</div>
                              <div class="mb-3">
                                <label for="youSend" class="form-label">Amount</label>
								<div class="fondoAmountError_box" style="margin:10px 0px; font-size: 12px;"></div>
                                <div class="input-group">
                                  <span class="input-group-text"><?= $curInfo['name']; ?></span>
                                  <input type="number" class="form-control" id="fondoAmount" name="fondoAmount" placeholder="How Much Are You Sending?" required>
								  
								</div>
                              </div>
                              <div class="mb-3">
                                <label for="youSend" class="form-label">Transaction Pin</label>
								<div class="fondoPinError_box" style="margin:10px 0px; font-size: 12px;"></div>
                                <div class="input-group">
                                  <span class="input-group-text"><i class="fa fa-key"></i></span>
                                  <input type="password" class="form-control" id="fondoPin" name="fondoPin" maxlength="5" placeholder="*****" required>
								</div>
                                   <a href="<?= baseURL('us-account-settings/'); ?><?= $userInfo['uniqueid']; ?>/#transferPin" style="color: blue; font-size: 12px;">Forgot Pin?</a>
                              </div>
                              <div class="mb-3">
                                <label for="youSend" class="form-label">Narration</label>
								<div class="fondoMemoError_box" style="margin:10px 0px; font-size: 12px;"></div>
                                <div class="input-group">
                                  <span class="input-group-text"><i class="fa fa-comments"></i></span>
                                  <input type="text" class="form-control" id="fondoMemo" name="fondoMemo" maxlength="100" placeholder="Transaction Details" required>
                                </div>
                              </div>
                              <p class="text-1 text-danger text-center"><i class="fa fa-question-circle"></i> Security Alert: Do Not Expose Your Pin!</p>
									<div class="modal-footer">
										<center><div id="fondoTransfer_done" style="font-size: 16px; color: green; display: none;">Transaction Completed Successfully! <br><a href="<?= baseURL('us-transactions/')?><?= $userInfo['uniqueid']; ?>/" style="color: blue;">View Transaction Details Here</a><br><a href="" style="color: blue;">Click Here</a> To Send More Money.</div></center>
										<button type="button" id="fondoTransfer" class="btn-secondry add-item m-r5"> Make Transfer <i class="ti-arrow-right"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Internal Transfer Modal End --> 




<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/subSelect.js') ?>"></script>
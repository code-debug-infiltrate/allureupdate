<!-- Add Balance Modal
============================== -->
<div id="addBalanceModal" class="modal fade" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content border-0">
			<div class="modal-header">
				<h5 class="modal-title fw-400 text-4 text-center widget-bg1" style="float: center;  padding: 10px; color: #fff; border-radius: 10px;">Add Money</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body py-4 px-0">
				<div class="row">
					<div class="col-12 col-md-12 mx-auto" id="depositForm">
						<h2 class="fw-400 text-4 text-center mt-1">Make a Deposit!</h2> 
						<!-- <p class="lead text-3 text-center mb-2">Select & Pay Your TV Plan Anytime, Anywhere!</p> -->
						<div class="col-md-10 mx-auto">
							<div class="bg-white shadow-sm rounded">
								<form method="POST" action="" autocomplete="off">
								<div class="amountDepositError_box" style="margin:10px 0px;"></div>
									<div class="mb-3">
										<label for="youSend" class="form-label">Amount (Pay In <?= $curInfo['name']; ?>)</label>
										<div class="input-group">
											<span class="input-group-text"><?= $curInfo['name']; ?></span>
											<input type="number" class="form-control" id="amountDeposit" name="amount" placeholder="How Much Are You Paying Into Your Online Wallet?" value="" required>
										</div>
									</div>

									<div class="memoDepositError_box" style="margin:10px 0px;"></div>
									<div class="mb-3">
										<label for="youSend" class="form-label">Narration</label>
										<div class="input-group">
											<span class="input-group-text"><i class="fa fa-comments"></i></span>
											<input type="text" class="form-control"  id="memoDeposit" maxlength="200" placeholder="Transaction Details" required>
											
										</div>
									</div>

									<?php if ($bankInfo['status'] == "Active") { ?>
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





<!-- Crypto Modal -->
<div class="modal fade review-bx-reply" id="cryptoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="background: #fff;">
			<div class="modal-header">
				<h5 class="modal-title widget-bg1" style="float: center; padding: 10px; color: #fff; border-radius: 10px;">Crypto Currency</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

			<?php if ($userInfo['wallet'] < "5000") { ?>

				<p class="mt-5" style="text-align: center; font-size: 16px; color: green;">Your Account Balance Is Too Low To Use This Service. <br>Make a Deposit To Start Enjoying Full Membership Features...</p>

			<?php } else { ?>

				<p class="mt-5" style="text-align: center; font-size: 16px; color: green;">This Service Is Currently Not Available In Your Region. </p>

			<?php } ?>
                
				<!-- <textarea class="form-control" placeholder="Type text"></textarea> -->
			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn mr-auto">Reply</button>
			</div> -->
		</div>
	</div>
</div>




<!-- Virtual Account Modal -->
<div class="modal fade review-bx-reply" id="virtualAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="background: #fff;">
			<div class="modal-header">
				<h5 class="modal-title widget-bg1" style="float: center; padding: 10px; color: #fff; border-radius: 10px;">Account Details</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <p class="mt-5" style="text-align: center; font-size: 16px; color: green;">You Do Not QUALIFY To Use This Service Now. <br>Complete Your KYC (Know Your Customer) Verification First...</p>
				<!-- <textarea class="form-control" placeholder="Type text"></textarea> -->
			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn mr-auto">Reply</button>
			</div> -->
		</div>
	</div>
</div>




<!-- Money Converter Modal -->
<div class="modal fade review-bx-reply" id="converterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="background: #fff;">
			<div class="modal-header">
				<h5 class="modal-title widget-bg1" style="float: center; padding: 10px; color: #fff; border-radius: 10px;">Check Today's Rate</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p style="margin: 10px; font-size: 12px; text-align: center;"><b>Our Currency Converter Updates Every 24 Hours.</b> <br>Select The Currency You Have(From) And The Currency You Want(To) Then Enter An From To Get Current Rate Instantly.</p>
				<div class="row mt-5">
					
					<div class="col-md-5">
						<label>From</label>
						<div class="fromCurrencyError_box" style="margin:10px 0px; font-size: 12px;"></div>
						<select class="form-control" id="fromCurrency">
							<option value=""></option>
							<option value="AUD">Australian Dollar</option>
							<option value="CAD">Canadian Dollar</option>
							<option value="EGP">Egyptian Pounds</option>
							<option value="EUR">European Euro</option>
							<option value="GMD">Gambian Dalasi</option>
							<option value="GHS">Ghanian Cedis</option>
							<option value="KES">Kenyan Shilings</option>
							<option value="UGX">Ugandan Shilings</option>
							<option value="NGN">Nigerian Naira</option>
							<option value="GBP">Pounds Sterling</option>
							<option value="AED">UAE Dirhams</option>
							<option value="USD">United States Dollar</option>
							<option value="JPY">Japanese YEN</option>
						</select>
					</div>
					<div class="col-md-7">
						<label>How Much Are You Converting?</label>
						<div class="fromRateError_box" style="margin:10px 0px; font-size: 12px;"></div>
						<input type="number" class="form-control" id="fromRate">
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-5">
						<label>To</label>
						<div class="toCurrencyError_box" style="margin:10px 0px; font-size: 12px;"></div>
						<select class="form-control" id="toCurrency">
							<option value=""></option>
							<option value="AUD">Australian Dollar</option>
							<option value="CAD">Canadian Dollar</option>
							<option value="EGP">Egyptian Pounds</option>
							<option value="EUR">European Euro</option>
							<option value="GMD">Gambian Dalasi</option>
							<option value="GHS">Ghanian Cedis</option>
							<option value="KES">Kenyan Shilings</option>
							<option value="UGX">Ugandan Shilings</option>
							<option value="NGN">Nigerian Naira</option>
							<option value="GBP">Pounds Sterling</option>
							<option value="AED">UAE Dirhams</option>
							<option value="USD">United States Dollar</option>
							<option value="JPY">Japanese YEN</option>
						</select>
					</div>
					<div class="col-md-7">
						<label>Equivalent Amount</label>
						<div class="toRateError_box" style="margin:10px 0px; font-size: 12px;"></div>
						<div class="toRateAlert_box" style="margin:10px 0px; font-size: 12px;"></div>
						<div id="toRate">
					</div>
				</div>
                <!-- <p class="mt-5" style="text-align: center; font-size: 16px; color: green;">You Do Not QUALIFY To Use This Service Now. <br>Complete Your KYC (Know Your Customer) Verification First...</p> -->
				<!-- <textarea class="form-control" placeholder="Type text"></textarea> -->
			</div>
			<div class="modal-footer">
				<button type="button" id="checkRate" class="btn-secondry add-item m-r5">Check Current Rate <i class="ti-arrow-right"></i> </button>
			</div>
		</div>
	</div>
</div>




<script src="<?= public_asset('/other_assets/AjaxForms/User/my-wallet-modal.js') ?>"></script>
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
						<h2 class="fw-400 text-4 text-center mt-1"><!--<img src="/Images/Body/subscribe.png" style="width: 100%; height: 80px;"> -->Get Unlimited Access!</h2> 
						<!-- <p class="lead text-3 text-center mb-2">Select & Pay Your TV Plan Anytime, Anywhere!</p> -->
						<div class="col-md-12 mx-auto">
							<div class="bg-white shadow-sm rounded">

								<?php if ($exchangeInfo) { foreach ($exchangeInfo as $key => $exchange) { if ($exchange['currency'] == "Naira") {  ?>
									<input type="hidden" class="form-control"  id="cardamount" value="<?= $exchange['rate']; ?>" placeholder="Transaction Amount" required>
								<?php } } } ?>

								<input type="hidden" class="form-control"  id="memo" value="<?= $userInfo['fname']; ?> <?= $userInfo['lname']; ?> Matchmaking Subscription Payment" placeholder="Transaction Details" required>
								
								<div class="amountDepositError_box text-center" style="margin:10px 0px;"></div>


									<div class="col-lg-12 row">
										<?php if ($subPlans) { ?>
										<?php foreach ($subPlans as $key => $subplan) { if ($subplan['type'] != "Consultation") {  ?>
											<div class="form-group col-md-12">
												<div class="input-group">
													<a href="javascript:void(0);" id="<?= str_replace(' ', '_', $subplan['type']); ?>" style="font-size: 16px;"><img src="/Images/Body/unlock1.gif" style="width: 50px; margin-right: 10px;"> <?= $subplan['expiry']; ?> (<?= $subplan['type']; ?>)  <b style="font-size: 22px; margin-left: 10px;"><?= $curInfo['currency']; ?><?= $subplan['amount']; ?></b></a>
												</div>
											</div>
										<?php } }  ?>
										<?php  } ?>
										
										<div class="form-group col-md-12">
											<div class="input-group">
												<input id="planAmount" type="hidden" class="form-control" required>
											</div>
										</div>

										<script>
											$(document).ready(function(){
												var amount = document.getElementById("planAmount");

												$("#Quarterly_Plan").click(function(){
													var newAddress = "Quarterly Plan";
													if (amount.value != "Quarterly Plan") {
														amount.value = "";
														amount.value += newAddress;
														$("#Quarterly_Plan").css({"text-decoration": "none", "color": "green", "font-size": "18px"});
														$("#Semestral_Plan").css({"text-decoration": "line-through", "color": "brown", "font-size": "10px"});
														$("#Yearly_Plan").css({"text-decoration": "line-through", "color": "brown", "font-size": "10px"});
													}
												});

												$("#Semestral_Plan").click(function(){
													var newAddress = "Semestral Plan";
													if (amount.value != "Semestral Plan") {
														amount.value = "";
														amount.value += newAddress;
														$("#Semestral_Plan").css({"text-decoration": "none", "color": "green", "font-size": "18px"});
														$("#Quarterly_Plan").css({"text-decoration": "line-through", "color": "brown", "font-size": "10px"});
														$("#Yearly_Plan").css({"text-decoration": "line-through", "color": "brown", "font-size": "10px"});
													}
												});

												$("#Yearly_Plan").click(function(){
													var newAddress = "Yearly Plan";
													if (amount.value != "Yearly Plan") {
														amount.value = "";
														amount.value += newAddress;
														$("#Yearly_Plan").css({"text-decoration": "none", "color": "green", "font-size": "18px"});
														$("#Quarterly_Plan").css({"text-decoration": "line-through", "color": "brown", "font-size": "10px"});
														$("#Semestral_Plan").css({"text-decoration": "line-through", "color": "brown", "font-size": "10px"});
													}
												});
											});
										</script>
									</div>

									<?php if ($bankInfo['status'] == "Publish") { ?>
									<div class="modal-footer">
										<button type="submit" id="payWithTransfer" class="btn-secondry add-item m-r5"><img src="/Images/Body/transfers.png" style="width: 25%; margin-right: 20px;"> Bank Transfer </button>
									</div>
									<?php } ?>
									<hr>
									<center><label style="color: red; font-size: 12px;">Service Fees May Apply For Online | Card Payments.</label></center>
									<div class="modal-footer">
										<button type="submit" id="payWithOnline" class="btn-secondry add-item m-r5"><img src="/Images/Body/card-pay.png" style="width: 15%; margin-right: 20px;"> Online | Cards </button>
									</div>
						
								

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
						<h2 class="fw-400 text-4 text-center mt-1"><img src="/Images/Body/transfers.png" style="width: 350px;"> </h2>
						<p class="text-center" style="font-size: 12px; color: blue;">Please Follow The Instructions On This Page Carefully. <br>Use The Narration Correctly, Your Access Will Be Granted Automatically.</p>
						
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
						<h2 class="fw-400 text-4 text-center mt-1">Awaiting Confirmation! </h2>
						<p class="text-center" style="font-size: 12px; color: blue;">Thank You For Your Payment.<br>If You Used The Narration Correctly, Your Deposit Will Be Added Automatically.</p>
						
						<div class="col-12 col-md-12 text-center mx-auto">
							<img src="/Images/Body/pending.png" style="width: 100%;"> 
							<hr>
							<p style="color: blue; font-size: 14px;">Our System Will Keep Monitoring Your Payment.<br>You Will Be Alerted As Soon As It's Confirmed!</p>
					
						</div>
					</div>
					<!-- Bank Payment Done End -->

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Add Balance Modal End --> 






<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/subSelect.js') ?>"></script>
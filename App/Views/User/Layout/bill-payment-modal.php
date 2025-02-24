<!-- Educational Pin Modal
============================== -->
<div id="educationalModal" class="modal fade" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content border-0">
			<div class="modal-header">
				<h5 class="modal-title fw-400 text-4 text-center widget-bg1" style="float: center; padding: 10px; color: #fff; border-radius: 10px;">Educational Pin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body py-4 px-0">
				<div class="row">
					<div class="col-12 col-md-12 mx-auto">
						<h2 class="fw-400 text-4 text-center mt-1">JAMB | WAEC Examination!</h2> 
						<!-- <p class="lead text-3 text-center mb-2">Select & Pay Your TV Plan Anytime, Anywhere!</p> -->
						<div class="col-md-10 mx-auto">
							<div class="bg-white shadow-sm rounded">
								<center>
									<div class="mb-10">
										<div class="form-check form-check-inline" style="background:rgb(247, 174, 181);">
											<a href="#" id="Jamb" onclick="selectExamType(this)">
												<span class="border text-black rounded-pill fw-500 text-3 px-3 py-1 ms-2 ml-3" name="serviceID" value="jamb">UTME-JAMB</span>
											</a>
										</div>
										<div class="form-check form-check-inline" style="background:rgb(160, 178, 244);">
											<a href="#" id="Waec" onclick="selectExamType(this)">
												<span class="border text-black rounded-pill fw-500 text-3 px-3 py-1 ms-2 ml-3" name="WAEC">WAEC</span>
											</a>
										</div>
									</div>
									<br>
								</center>

								<form  method="POST" action="<?= baseURL('us-educational/'); ?><?= $userInfo['uniqueid']; ?>/" autocomplete="off">

									<input type="hidden" class="form-control" name="eduService" value="TV Sub" required>
									
									<div><p>Select Education PIN Type</p></div>
									
									
									<div id="WaecForm" class="mb-3" style="display: none;">
										<label for="youSend" class="form-label">Exam Type</label>
										<div class="input-group">
											<select  class="form-select form-control" name="eduServiceID" required>
												<option value="waec-registration">WAEC Registration</option>
												<option value="waec">WAEC</option>
											</select>
										</div>
									</div>

									<div id="JambForm" class="mb-3" style="display: none;">
										<label for="youSend" class="form-label">UTME Card Number</label>
										<div class="input-group">
											<span class="input-group-text"><i class="fa fa-edit"></i></span>
											<input type="number" class="form-control" name="eduBillersCode" placeholder="Card Number" maxlength="20">
										</div>
										<i class="text-1 text-danger">UTME Only</i>
									</div>

									<script type="text/javascript">
										function selectExamType(e){
											var cur = e.id;
											if (cur === "Jamb") {
												document.getElementById("JambForm").style.display = "block";
												document.getElementById("WaecForm").style.display = "none";
											} else {
												document.getElementById("WaecForm").style.display = "block";
												document.getElementById("JambForm").style.display = "none";
											}
										}
									</script>


								<div class="mb-3">
									<label class="form-label">Mobile Number</label>
									<div class="eduNumberError_box" style="margin:10px 0px; font-size: 12px;"></div>
									<div class="input-group">
									<span class="input-group-text"><i class="fa fa-phone"></i></span>
									<input type="text" class="form-control" id="eduNumber" maxlength="12" placeholder="081003003003" required>
									</div>
										<a href="javascript:void(0);" class="" style="color: blue; font-size: 10px;">Make Sure Applicant Mobile Number Is Correct </a>
								</div>

								<div class="mb-3">
									<label for="youSend" class="form-label">Transaction Pin</label>
									<div class="eduPinError_box" style="margin:10px 0px; font-size: 12px;"></div>
									<div class="input-group">
									<span class="input-group-text"><i class="fa fa-key"></i></span>
									<input type="password" class="form-control" id="eduPin" maxlength="5" placeholder="*****" required>
									</div>
									<a href="<?= baseURL('us-account-settings/'); ?><?= $userInfo['uniqueid']; ?>/#transferPin" style="color: blue; font-size: 12px;">Forgot Pin?</a>
								</div>

								<div class="mb-3">
									<label for="youSend" class="form-label">Narration</label>
									<div class="eduMemoError_box" style="margin:10px 0px; font-size: 12px;"></div>
									<div class="input-group">
									<span class="input-group-text"><i class="fa fa-comments"></i></span>
									<input type="text" class="form-control" id="eduMemo" maxlength="100" placeholder="Transaction Details" required>
									</div>
								</div>
								<p class="text-1 text-danger text-center"><i class="fa fa-question-circle"></i> Security Alert: Do Not Expose Your Pin!</p>

								<div class="eduAlert_box" style="margin:10px 0px; font-size: 16px;"></div>

								<div class="modal-footer">
									<button type="button" id="eduPurchase" class="btn-secondry add-item m-r5"> Make Purchase <i class="ti-arrow-right"></i></button>
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
<!-- Educational Pin Modal End --> 







<!-- Electricity Modal
============================== -->
<div id="electricityModal" class="modal fade" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content border-0">
			<div class="modal-header">
				<h5 class="modal-title fw-400 text-4 text-center widget-bg1" style="float: center;  padding: 10px; color: #fff; border-radius: 10px;">Electricity</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body py-4 px-0">
				<div class="row">
					<div class="col-12 col-md-12 mx-auto">
						<h2 class="fw-400 text-4 text-center mt-1">Pay Your Electricity Bill!</h2> 
						<!-- <p class="lead text-3 text-center mb-2">Select & Pay Your TV Plan Anytime, Anywhere!</p> -->
						<div class="col-md-10 mx-auto">
							<div class="bg-white shadow-sm rounded">
								<form  method="POST" action="<?= baseURL('us-electricity/'); ?><?= $userInfo['uniqueid']; ?>/" autocomplete="off">

									<div class="mb-3">
										<label for="youSend" class="form-label">Service Provider</label>
										<div class="input-group">
											<select  class="form-select form-control" id="electricServiceID" required>
												<option value="abuja-electric">Abuja-electric</option>
												<option value="eko-electric">Eko-electric</option>
												<option value="ibadan-electric">Ibadan-electric</option>
												<option value="ikeja-electric">Ikeja-electric</option>
												<option value="jos-electric">Jos-electric</option>
												<option value="portharcourt-electric">PortHarcourt-electric</option>
												<option value="kaduna-electric">Kaduna-electric</option>
												<option value="kano-electric">Kano-electric</option>
											</select>
										</div>
									</div>
									<div class="mb-3">
										<label for="youSend" class="form-label">Service Type</label>
										<div class="input-group">
											<select  class="form-select form-control" id="electricType" required>
											<option value="postpaid">Postpaid</option>
											<option value="prepaid">Prepaid</option>
											</select>
										</div>
									</div>
									<div class="mb-3">
										<label for="youSend" class="form-label">Meter Number</label>
										<div class="input-group">
											<span class="input-group-text"><i class="fa fa-mobile"></i></span>
											<input type="number" class="form-control" id="electricBillersCode" placeholder="Meter Number" maxlength="20" required>
										</div>
									</div>

								<div class="mb-3">
									<label class="form-label">Mobile Number</label>
									<div class="electricNumberError_box" style="margin:10px 0px; font-size: 12px;"></div>
									<div class="input-group">
									<span class="input-group-text"><i class="fa fa-phone"></i></span>
									<input type="text" class="form-control" id="electricNumber" maxlength="12" placeholder="081003003003" required>
									</div>
										<a href="javascript:void(0);" class="" style="color: blue; font-size: 10px;">Make Sure Owner Mobile Number Is Correct </a>
								</div>

								<div class="mb-3">
									<label for="youSend" class="form-label">Transaction Pin</label>
									<div class="electricPinError_box" style="margin:10px 0px; font-size: 12px;"></div>
									<div class="input-group">
									<span class="input-group-text"><i class="fa fa-key"></i></span>
									<input type="password" class="form-control" id="electricPin" maxlength="5" placeholder="*****" required>
									</div>
									<a href="<?= baseURL('us-account-settings/'); ?><?= $userInfo['uniqueid']; ?>/#transferPin" style="color: blue; font-size: 12px;">Forgot Pin?</a>
								</div>

								<div class="mb-3">
									<label for="youSend" class="form-label">Narration</label>
									<div class="electricMemoError_box" style="margin:10px 0px; font-size: 12px;"></div>
									<div class="input-group">
									<span class="input-group-text"><i class="fa fa-comments"></i></span>
									<input type="text" class="form-control" id="electricMemo" maxlength="100" placeholder="Transaction Details" required>
									</div>
								</div>
								<p class="text-1 text-danger text-center"><i class="fa fa-question-circle"></i> Security Alert: Do Not Expose Your Pin!</p>

								<div class="electricAlert_box" style="margin:10px 0px; font-size: 16px;"></div>

								<div class="modal-footer">
									<button type="button" id="electricPurchase" class="btn-secondry add-item m-r5"> Make Purchase <i class="ti-arrow-right"></i></button>
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
<!-- Electricity Modal End --> 








<!-- Tv Subscription Transfer Modal
============================== -->
<div id="tvSubscriptionModal" class="modal fade" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content border-0">
			<div class="modal-header">
				<h5 class="modal-title fw-400 text-4 text-center widget-bg1" style="float: center;  padding: 10px; color: #fff; border-radius: 10px;">Tv Subscription</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body py-4 px-0">
				<div class="row">
					<div class="col-12 col-md-12 mx-auto">
						<h2 class="fw-400 text-4 text-center mt-1">Select & Pay Your TV Plan!</h2> 
						<!-- <p class="lead text-3 text-center mb-2">Select & Pay Your TV Plan Anytime, Anywhere!</p> -->
						<div class="col-md-10 mx-auto">
							<div class="bg-white shadow-sm rounded">
								<form  method="POST" action="<?= baseURL('us-tvpayment/'); ?><?= $userInfo['uniqueid']; ?>/" autocomplete="off">
									<div class="mb-3">
										<label for="youSend" class="form-label">Service Provider</label>
										<div class="input-group">
											<select  class="form-control" name="serviceID" required>
												<option value="dstv">DStv</option>
												<option value="gotv">GOtv</option>
												<option value="startimes">Star Times</option>
												<option value="showmax">Show Max</option>
											</select>
										</div>
									</div>
									<div class="mb-3">
										<label for="youSend" class="form-label">Card Number</label>
										<div class="input-group">
											<span class="input-group-text"><i class="fa fa-calendar"></i></span>
											<input type="number" class="form-control"  name="billersCode" placeholder="Card Number" maxlength="20" required>
										</div>
										<i class="text-1 text-danger">Show Max Subscribers (Enter Phone Number) </i>
									</div>
								<div class="mb-3">
									<label class="form-label">Mobile Number</label>
									<div class="electricNumberError_box" style="margin:10px 0px; font-size: 12px;"></div>
									<div class="input-group">
									<span class="input-group-text"><i class="fa fa-phone"></i></span>
									<input type="text" class="form-control" id="electricNumber" maxlength="12" placeholder="081003003003" required>
									</div>
										<a href="javascript:void(0);" class="" style="color: blue; font-size: 10px;">Make Sure Owner Mobile Number Is Correct </a>
								</div>

								<div class="mb-3">
									<label for="youSend" class="form-label">Transaction Pin</label>
									<div class="electricPinError_box" style="margin:10px 0px; font-size: 12px;"></div>
									<div class="input-group">
									<span class="input-group-text"><i class="fa fa-key"></i></span>
									<input type="password" class="form-control" id="electricPin" maxlength="5" placeholder="*****" required>
									</div>
									<a href="<?= baseURL('us-account-settings/'); ?><?= $userInfo['uniqueid']; ?>/#transferPin" style="color: blue; font-size: 12px;">Forgot Pin?</a>
								</div>

								<div class="mb-3">
									<label for="youSend" class="form-label">Narration</label>
									<div class="electricMemoError_box" style="margin:10px 0px; font-size: 12px;"></div>
									<div class="input-group">
									<span class="input-group-text"><i class="fa fa-comments"></i></span>
									<input type="text" class="form-control" id="electricMemo" maxlength="100" placeholder="Transaction Details" required>
									</div>
								</div>
								<p class="text-1 text-danger text-center"><i class="fa fa-question-circle"></i> Security Alert: Do Not Expose Your Pin!</p>

								<div class="electricAlert_box" style="margin:10px 0px; font-size: 16px;"></div>

								<div class="modal-footer">
									<button type="button" id="electricPurchase" class="btn-secondry add-item m-r5"> Make Purchase <i class="ti-arrow-right"></i></button>
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
<!-- Tv Subscription Modal End --> 




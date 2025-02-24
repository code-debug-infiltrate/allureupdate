<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 

?>

<title>Account Settings | <?= $userInfo['username']; ?>'s Settings | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 14px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="<?= baseURL('us-account-settings/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-cogs"></i>Settings</a></li>
				<li>Account</li>
			</ul>
		</div>	

	
		<div class="row">


            <!-- Password Change -->
			<div class="col-lg-4 m-b30" id="password">
                <span class="close" id="password" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('password').style.display='none'"> &times;</span>
				<div class="widget-box">
					<div class="wc-title">
						<h4>Change Password  
							<br>
						<i style="font-size: 11px; color: darkblue;">Helps Keep Your Account Secured.</i></h4>
					</div>
					<div class="widget-inner">

						<form class="edit-profile m-b30" method="POST">
							<div class="row">
								
								<div class="col-12">

									<table id="item-add" style="width:100%;">
										<tr class="list-item">
											<td>
												
                                                <div class="col-md-12">
                                                    <label class="col-form-label">Current Password</label>
                                                    <div class="oldPassError_box" style="margin:10px 0px;"></div>
                                                    <div>
                                                        <input class="form-control" type="password" id="oldpass" minlength="5" maxlength="50" placeholder="**********" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="col-form-label">New Password</label>
                                                    <div class="newPassError_box" style="margin:10px 0px;"></div>
                                                    <div>
                                                        <input class="form-control" id="newpass" minlength="5" maxlength="50" type="password" placeholder="**********" required>
                                                    </div>
                                                </div>
    
                                                <div class="col-md-12 mt-5">
                                                    <img src="/Images/Body/green-dots.gif" id="loader" style="display: none"/>
                                                    <button type="submit" id="updatePass" class="btn-secondry add-item"><i class="fa fa-fw fa-plus-circle"></i> Update Password</button>
                                                    <!-- <button type="reset" class="btn">Save changes</button> -->
                                                </div>
												
											</td>
										</tr>
									</table>
								</div>
								
							</div>
						</form>
					</div>
				</div>
				<script src="<?= public_asset('/other_assets/AjaxForms/User/change-password.js') ?>"></script>
			</div>
			<!-- Password Change END-->




			<!-- 2FA Security -->
			<div class="col-lg-4 m-b30"  id="2fa">
                <span class="close" id="2fa" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('2fa').style.display='none'"> &times;</span>
				<div class="widget-box">
					<div class="wc-title">
						<?php if ($userInfo['notify'] == "Off") { ?>
							<h4>Secure Your Account  <br><i style="font-size: 11px; color: darkblue;">Turn On Your 2FA For Secured Login. </i></h4>
						<?php } else { ?>
							<h4>Your Account Is Secure <br><i style="font-size: 11px; color: darkblue;">You Do Not Need To Take Any Action. </i></h4>
						<?php } ?>
					</div>
					<div class="widget-inner">
						
						<form class="edit-profile m-b30" method="POST" action="<?= baseURL('security-update/'); ?><?= $userInfo['uniqueid']; ?>/">
							<div class="row">
								
								<div class="col-12 m-t20 mb-2">
									<div class="ml-auto">
										<center>
										<?php if ($userInfo['notify'] == "Off") { ?>
											<i class="ml-3" style="font-size: 11px; color: darkblue;">Get Notifications On All Account Activities.</i>
										<?php } else { ?>
											<i class="ml-3" style="font-size: 11px; color: darkblue;">Notifications Are Sent To Your <?= $userInfo['email']; ?>.</i>
										<?php } ?>
									</center>
									</div>
								</div>
								<div class="col-12">

									<table id="item-add" style="width:100%;">
										<tr class="list-item">
											<td>
												<div class="row">
													<div class="col-md-12">
														<center>
														<?php if ($userInfo['notify'] == "Off") { ?>

															<div>
																<input class="form-control" type="hidden" id="notify" value="On">
																<i class="fa fa-fw mr-3" style="color: red;">OFF</i>
																<button type="submit" id="updateNotify" class="btn-secondry add-item mt-2"><i class="fa fa-fw" style="color: green;">ON</i></button>
															</div>

														<?php } else { ?>

															<div>
																<input class="form-control" type="hidden" id="notify" value="Off">
                                                                <button type="submit" id="updateNotify" class="btn-secondry add-item mt-2"><i class="fa fa-fw" style="color: red;">OFF</i></button>
																<i class="fa fa-fw ml-3" style="color: green;">ON</i>
															</div>

														<?php } ?>
														</center>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>

							</div>
						</form>
					</div>
				</div>
                <script src="<?= public_asset('/other_assets/AjaxForms/User/update-2fa.js') ?>"></script>
			</div>
			<!-- 2FA Security END-->




            <!-- Transaction Pin -->
            <div class="col-lg-4 m-b30"  id="transferPin">
                <span class="close" id="transferPin" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('transferPin').style.display='none'"> &times;</span>
				<div class="widget-box">
					<div class="wc-title">
							<h4>Transaction PIN <br><i style="font-size: 11px; color: darkblue;">Reset Your Transaction Pin For More Secured Transactions </i></h4>
					</div>
					<div class="widget-inner">
						
						<form class="edit-profile m-b30" method="POST" action="<?= baseURL('security-update/'); ?><?= $userInfo['uniqueid']; ?>/">
							<div class="row">
                                <div class="ml-auto">
                                    <center>
                                        <p style="font-size: 20px;"><b>PIN Hint:</b> <?= substr($userInfo['pin'], 0, 2);?>** <a href="#" id="sendPin" style="font-size: 12px; color: blue; margin-left: 20px;">Click Here If You Forgot PIN</a></p>
                                    </center>
                                </div>
								<div class="col-12">

									<table id="item-add" style="width:100%;">
										<tr class="list-item">
											<td>
												<div class="row">
                                                    <div class="pinAlert_box" style="margin:10px 0px;"></div>
													<div class="col-md-12">
                                                        <?php if ($securityInfo) { ?>
                                                            <label class="form-label">Answer Any Previous Security Question </label>
                                                            <input type="text" id="changeAnswer" placeholder="Answer To Any Of Your Security Questions" class="form-control" minlength="5" maxlength="50" required>
															<a href="#" data-toggle="modal" data-target="#secQuestionModal" style="font-size: 11px; color: blue; margin-left: 10px;">Check Your Questions</a>
															<hr>
                                                            <label>Set New Secret Pin</label>
                                                            <input type="text" id="newPin" class="form-control" minlength="4" maxlength="5" placeholder="Set New 4 DIGITs Pin">
                                                            
                                                            <div class="mt-4">
                                                                <button type="submit" id="updatePin" class="btn-secondry add-item m-r5 mt-2"><i class="fa fa-fw fa-plus-circle"></i> Update Pin</button>
                                                            </div>

															

															<!-- Security Question Modal -->
															<div class="modal fade review-bx-reply" id="secQuestionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog" role="document">
																	<div class="modal-content" style="background: #fff;">
																		<div class="modal-header">
																			<h5 class="modal-title widget-bg1" style="float: center; padding: 10px; color: #fff; border-radius: 10px;">Security Questions</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<hr><br>
																		<div class="modal-body" style="margin-top: 10px;">
																			<p style="text-align: center; font-size: 16px;">🌟 <?= $securityInfo['secq1']; ?> </p>
																			<p style="text-align: center; font-size: 16px;">🌟 <?= $securityInfo['secq2']; ?> </p>
																		</div>
																	</div>
																</div>
															</div>


                                                        <?php } else { ?>
                                                            <p><a href="#securityQuestions" style="color: blue;">Set Your Security Questions And Answers</a> To Change Your Transaction Pin</p>
                                                        <?php } ?>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>

							</div>
						</form>
					</div>
				</div>
                <script src="<?= public_asset('/other_assets/AjaxForms/User/security-pin.js') ?>"></script>
			</div>
			<!-- Transaction Pin END-->


                                                            


			<!-- Security Questions-->
			<div class="col-lg-4 m-b30"  id="securityQuestions">
                <span class="close" id="securityQuestions" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('securityQuestions').style.display='none'"> &times;</span>
				<div class="widget-box">
					<div class="wc-title">
							<h4>Security Questions  <br><i style="font-size: 12px; color: red; text-align: center;">NOTE: Write Down Your Answers In a Safe Place!</i></h4>
						
					</div>
					<div class="widget-inner">
						
						<form class="edit-profile m-b30" method="POST" action="<?= baseURL('security-update/'); ?><?= $userInfo['uniqueid']; ?>/">
							<div class="row">

								<div class="col-12">

									<table id="item-add" style="width:100%;">
										<tr class="list-item">
											<td>
												<div class="row">
													<div class="col-md-12">
                                                    <div class="securityAlert_box" style="margin:10px 0px;"></div>
															<div>
                                                                <?php if ($securityInfo) { ?>
                                                                    <label class="form-label">Answer To Set Question</label>
                                                                    <input type="text" id="answer" placeholder="Answer To Any Of The Previous Questions" class="form-control" minlength="5" maxlength="50" required>
																	<a href="#" data-toggle="modal" data-target="#secQuestionModal" style="font-size: 11px; color: blue; margin-left: 10px;">Check Your Questions</a>
																	<hr><br>
                                                                <?php } ?>
                                                                <label class="form-label">Question 1</label>
                                                                <select class="form-control" id="secq1" required>
                                                                    <option> </option>
                                                                    <option value="What's Your Mother Maiden Name?">What's Your Mother Maiden Name?</option>
                                                                    <option value="What's The Name Of Your Birth Place?">What's The Name Of Your Birth Place?</option>
                                                                    <option value="What's Your Best Teachers Name?">What's Your Best Teachers Name?</option>
                                                                    <option value="What's Your First Pets Name?">What's Your First Pets Name?</option>
                                                                    <option value="Where Did You Spend Your Last Vacation?">Where Did You Spend Your Last Vacation?</option>
                                                                    <option value="What's The Name Of Your Best Novel?">What's The Name Of Your Best Novel?</option>
                                                                    <option value="What's The Name Of Your Dream Car?">What's The Name Of Your Dream Car?</option>
                                                                </select>
                                                                <label class="form-label">Answer 1</label>
                                                                <input type="text" id="seca1" placeholder="Answer Questions 1" class="form-control" minlength="5" maxlength="50" required>
                                                                <hr>
                                                                <label class="form-label">Question 2</label>
                                                                <select class="form-control" id="secq2" required>
                                                                    <option> </option>
                                                                    <option value="What's Your Mother Maiden Name?">What's Your Mother Maiden Name?</option>
                                                                    <option value="What's The Name Of Your Birth Place?">What's The Name Of Your Birth Place?</option>
                                                                    <option value="What's Your Best Teachers Name?">What's Your Best Teachers Name?</option>
                                                                    <option value="What's Your First Pets Name?">What's Your First Pets Name?</option>
                                                                    <option value="Where Did You Spend Your Last Vacation?">Where Did You Spend Your Last Vacation?</option>
                                                                    <option value="What's The Name Of Your Best Novel?">What's The Name Of Your Best Novel?</option>
                                                                    <option value="What's The Name Of Your Dream Car?">What's The Name Of Your Dream Car?</option>
                                                                </select>

                                                                <label class="form-label">Answer 2</label>
                                                                <input type="text" id="seca2" placeholder="Answer Questions 2" class="form-control" minlength="5" maxlength="50" required>
                                                                
                                                                <div class="mt-4">
                                                                    <img src="/Images/Body/green-dots.gif" id="loader" style="display: none"/>

                                                                    <?php if ($securityInfo) { ?>
                                                                        <button type="submit" id="updateSecurity" class="btn-secondry add-item m-r5 mt-2"><i class="fa fa-fw fa-plus-circle"></i> Update Questions</button>
                                                                    <?php } else { ?>
                                                                        <button type="submit" id="updateSecurity" class="btn-secondry add-item m-r5 mt-2"><i class="fa fa-fw fa-plus-circle"></i> Set Questions</button>
                                                                    <?php } ?>
                                                                </div>
																
															</div>

														
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
                               
							</div>
						</form>
					</div>
				</div>
                <script src="<?= public_asset('/other_assets/AjaxForms/User/update-security.js') ?>"></script>
			</div>
			<!-- Security Questions END-->





			<!-- Delete Account -->

			<div class="col-lg-4 m-b30" id="deleteAccount">
                <span class="close" id="deleteAccount" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('deleteAccount').style.display='none'"> &times;</span>
                <div class="widget-box">
					<div class="wc-title">
						<h4 class="text-danger"><i class="ti-face-sad mr-3" style="font-size: 34px;"></i> Delete Your Account<br><i style="font-size: 12px; color: darkblue;">Your Account Will Be Deactivated Now But Permanently Deleted After Six (6) Months.</i>  </h4>
					</div>
					<div class="widget-inner">

						<form class="edit-profile m-b30" method="POST">
							<div class="row">

								<h3 class="m-form__section">
									<i style="font-size: 12px; color: darkblue;"> If You Are Having Problems Using Your Account? <a href="<?= baseURL('us-support-ticket/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All" style="color: blue;">Write Us</a>.</i>
								</h3>

								<div class="col-12">

									<table id="item-add" style="width:100%;">
										<tr class="list-item">
											<td>
												<div class="row">
                                                    <div class="col-md-12">
                                                        <div class="deleteAcc_box" style="margin:10px 0px;"></div>
														<label class="col-form-label">Tell Us Why You Want To Leave</label>
                                                        <div>
                                                            <select  class="form-control" id="details" required>
                                                                <option> </option>
                                                                <option value="I Don't Like How The App Works">I Don't Like How The App Works</option>
                                                                <option value="I Got A Better Alternative">I Got A Better Alternative</option>
                                                                <option value="I Signed Up and Discovered It's Not What I Need">I Signed Up and Discovered It's Not What I Need</option>
                                                                <option value="Its Taking My Time">Its Taking My Time</option>
                                                                <option value="I Could Not Find What I'm Looking For">I Could Not Find What I'm Looking For</option>
                                                            </select>
                                                        </div>
													</div>

													<div class="col-md-12">
														<label class="col-form-label">Enter Your Password</label>
														<div>
															<input class="form-control" type="password" id="pass" minlength="5" maxlength="50" placeholder="**********" required>
														</div>
													</div>
													<div class="col-md-12 mt-5">
                                                        <img src="/Images/Body/green-dots.gif" id="loader" style="display: none"/>
														<button type="submit" onclick="return accountDeleteFunction();" id="delAct" class="btn-secondry add-item m-r5 mt-2"><i class="fa fa-fw fa-plus-circle"></i> Delete Account</button>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</div>
								<script>
                                    function accountDeleteFunction() {
                                        if (confirm("Sorry To See You Go? \n\nAre You Sure You Want To Delete This Account?")) {
                                        // do stuff
                                        } else {
                                        return false;
                                        }
                                    }
                                </script>
							</div>
						</form>
					</div>
				</div>
				<script src="<?= public_asset('/other_assets/AjaxForms/User/delete-account.js') ?>"></script>
			</div>

			<!-- Delete Account End -->








		</div>


	</div>
</main>














<?php include 'Layout/footer.php'; ?>
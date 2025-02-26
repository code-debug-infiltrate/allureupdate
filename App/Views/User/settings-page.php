<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 

?>

<title><?= $userInfo['username']; ?>'s Settings | Profile Settings Page | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 14px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-cogs"></i>Settings</a></li>
				<li>Profile</li>
			</ul>
		</div>	

	
		<div class="row">

			<!-- First Column Side -->
			<div class="col-md-3 col-lg-3">

                

			</div>
			<!-- End First Column Side -->




			<!-- Second Column Side -->
			<div class="col-md-6 col-lg-6" style="background: #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40);">


				<!-- Username -->
				<div class="col-lg-12 m-b30" id="usernameTab">
					<span class="close" id="usernameTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('usernameTab').style.display='none'"> &times;</span>
					<div class="card-body">
						<div class="wc-title">
							<h4 class="">Account Username  <br><i class="" style="font-size: 11px; color: darkblue;">Create New Username</i> </h4>
						</div>
						<div class="widget-inner">

							<form class="edit-profile m-b30" method="POST">
								<div class="row">

									<div class="col-12">

										<table id="item-add" style="width:100%;">
											<tr class="list-item">
												<td>
													<div class="row">
														<div class="usernameError_box" style="margin:10px 0px;"></div>
														<div class="col-md-12">
															<label class="col-form-label">New Username</label>
															<div>
																<input type="hidden" name="uniqueid" id="uniqueid" value="<?= $userInfo['uniqueid']; ?>" required>
																<input type="hidden" name="username" id="username" value="<?= $userInfo['username']; ?>" required>
																<input class="form-control" type="text" value="<?= $userInfo['username']; ?>" name="userid" minlength="5" maxlength="50" placeholder="User Name" required>
															</div>
														</div>
														<div class="col-md-12">
															<br>
															<button type="submit" name="updateUserID" class="btn-secondry add-item m-r5 mt-2"><i class="fa fa-fw fa-plus-circle"></i> Update Username</button>
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
					<a href="javascript:void(0);" onclick="replace('usernameTab','deleteAccountTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px; color: red;">Delete Account</a>
					<a href="javascript:void(0);" onclick="replace('usernameTab','profileImageTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To Profile Photo</a>
					
				</div>
				<!-- Username End -->

				
				<!-- Profile Photo -->
				<div class="col-lg-12 m-b30" style="display: none;" id="profileImageTab">
					<span class="close" id="profileImageTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('profileImageTab').style.display='none'"> &times;</span>
					<div class="card-body">
						<div class="wc-title">
							<?php if ($userInfo['profileimage'] == "profile.png") { ?>
								<h4>You Need a Better Profile Photo. <br><i style="font-size: 11px; color: darkblue;">Make Sure Your Face Is Visible!</i></h4>
							<?php } else { ?>
								<h4>More Professional Photo?<br><i style="font-size: 11px; color: darkblue;">Make Sure Your Face Is Visible!</i></h4>
							<?php } ?>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="POST" action="" enctype="multipart/form-data">
								<div class="row">
									
									<div class="col-12">
										<table id="item-add" style="width:100%;">
											<tr class="list-item">
												<td>
													<div class="row">
														<div class="col-md-12">

															<input type="hidden" class="form-control" name="uniqueid" value="<?= $userInfo['uniqueid']; ?>">
															<input type="hidden" class="form-control" name="username" value="<?= $userInfo['username']; ?>">
															<!-- <label class="col-form-label">Choose an Image To Upload</label> -->
															<center><figure class="logo-box"><img src="<?= public_asset('/other_assets/Profile/'); ?><?= $userInfo['profileimage']; ?>" id="output_profileimage" alt="Profile Photo" style="width: 200px;"></figure></center>
															<br>
															<div class="form-group">
																<label> Upload Profile Photo</label>
																<input type="file" name="profileimage" id="profileimage" class="form-control" placeholder="Profile Photo Image" onchange="validateProfileImage(event)" accept="image/*" required>
															</div>

															<div class="col-12 mt-5">
																<button type="submit" id="submitImage"class="btn-secondry add-item m-r5" name="submitProfile"><i class="fa fa-fw fa-plus-circle"></i> Update Profile Photo</button>
															</div>
														</div>
													</div>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</form>
							<script src="<?= public_asset('/other_assets/User/js/validateImage.js') ?>"></script>
						</div>
					</div>
					<a href="javascript:void(0);" onclick="replace('profileImageTab','2faTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Go To 2FA Authentication</a>
					<a href="javascript:void(0);" onclick="replace('profileImageTab','addressTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To Address</a>
					
				</div>
				<!-- Profile Photo END-->
				


				<!-- Address Info -->
				<div class="col-lg-12 m-b30" style="display: none;" id="addressTab">
					<span class="close" id="addressTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('addressTab').style.display='none'"> &times;</span>
					<div class="card-body">
						<div class="wc-title">
							<h4> Contact Information  <br><i style="font-size: 11px; color: darkblue;">Only Provide Accurate Information. Information Provided May Be Subject To Verification.</i></h4>
						</div>
						<div class="widget-inner">
							
								<div class="row">
									<div class="addressError_box" style="margin:10px 0px;"></div>
									<div class="col-12">
									<input type="hidden" name="url" id="url4" value="/ajax-location">
										<table id="item-add" style="width:100%;">
											<tr class="list-item">
												<td>
													<div class="col-md-12">
														<label class="col-form-label">Home Address</label>
														<div>
															<input class="form-control" id="address" maxlength="50" type="text" value="<?php if ($userInfo['address']) { echo $userInfo['address']; } ?>" required>
														</div>
													</div>
													<div class="col-md-12">
														<label class="col-form-label">City | State</label>
														<div>
															<input class="form-control" id="city" maxlength="20" type="text" value="<?php if ($userInfo['city']) { echo $userInfo['city']; } ?>" required>
														</div>
													</div>
													<div class="col-md-12">
														<label class="col-form-label">Country</label>
														<div>
															<input class="form-control" type="text" id="country" value="<?php if ($userInfo['country']) { echo $userInfo['country']; } ?>" required>
														</div>
													</div>
													<div class="col-12 mt-5">
														<button type="submit" id="updateAddress" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i> Update Address</button>
														<!-- <button type="reset" class="btn">Save changes</button> -->
													</div>
													
												</td>
											</tr>
										</table>
									</div>
								</div>
							
						</div>
						<a href="javascript:void(0);" onclick="replace('addressTab','passwordTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Go To Password</a>
						<a href="javascript:void(0);" onclick="replace('addressTab','bioTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To Bio Details</a>
						<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/create-location.js') ?>"></script>
					</div>
				</div>
				<!-- Address Info END-->



				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30" style="display: none;" id="bioTab">
					<div class="card-body">
						<div class="wc-title">
							<h4>Keep Your Personal Details Updated!</h4>
						</div>
						<div class="widget-inner">
						<input type="hidden" name="url" id="url5" value="/ajax-update-bio">
								<div class="">
									<div class="form-group row">
										<div class="col-sm-12  ml-auto">
											<h3>1. Personal Details</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">First Name</label>
										<div class="col-sm-8">
											<div class="fnameError_box" style="margin:10px 0px;"></div>
											<input class="form-control" type="text" id="fname" maxlength="30" value="<?= $userInfo['fname']; ?>" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Last Name</label>
										<div class="col-sm-8">
											<div class="lnameError_box" style="margin:10px 0px;"></div>
											<input class="form-control" type="text" id="lname" maxlength="30" value="<?= $userInfo['lname']; ?>" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Phone</label>
										<div class="col-sm-8">
											<div class="phoneError_box" style="margin:10px 0px;"></div>
											<input class="form-control" type="text" id="number" maxlength="15" value="<?= $userInfo['number']; ?>" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Occupation</label>
										<div class="col-sm-8">
											<div class="occupationError_box" style="margin:10px 0px;"></div>
											<input class="form-control" type="text" id="occupation" maxlength="50" value="<?= $userInfo['occupation']; ?>" required>
											<span class="help" style="font-size: 10px;">This Is Your Job | Work. What You Do For Living</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Date Of Birth</label>
										<div class="col-sm-8">
											<div class="dobError_box" style="margin:10px 0px;"></div>
											<input class="form-control" type="date" id="dob" value="<?= $userInfo['dob']; ?>" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Gender</label>
										<div class="col-sm-8">
											<div class="genderError_box" style="margin:10px 0px;"></div>
											<select class="form-control" id="gender">
												<option value="<?= $userInfo['gender']; ?>"><?= $userInfo['gender']; ?></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
									</div>

									<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

									<div class="form-group row">
										<div class="col-sm-12 ml-auto">
											<h3 class="m-form__section">2. About Yourself</h3>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Tell Us Facsinating Things About You.</label>
										<div class="col-sm-8">
											<div class="bioError_box" style="margin:10px 0px;"></div>
											<textarea class="form-control" id="biodetails" maxlength="15000" required><?= $userInfo['details']; ?></textarea>
										</div>
									</div>
								</div>
								<div class="">
									<div class="">
										<div class="row">
											<div class="col-sm-4">
											</div>
											<div class="col-sm-8">
												<button type="submit" id="updateBio" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i> Update Bio Details </button>
											</div>
										</div>
									</div>
								</div>
							
						</div>
					</div>
					<a href="javascript:void(0);" onclick="replace('bioTab','profileImageTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Go To Profile Photo</a>
					<a href="javascript:void(0);" onclick="replace('bioTab','passwordTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To Password</a>
					<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/create-bio.js') ?>"></script>
				</div>
				<!-- Your Profile Views Chart END-->



				<!-- Password Change -->
				<div class="col-lg-12 m-b30" style="display: none;" id="passwordTab">
					<span class="close" id="password" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('password').style.display='none'"> &times;</span>
					<div class="card-body">
						<div class="wc-title">
							<h4>Update Your Account Password  
								<br>
							<i style="font-size: 11px; color: darkblue;">This Helps Keep Your Account More Secured.</i></h4>
						</div>
						<div class="widget-inner">

						<input type="hidden" name="url" id="url2" value="/ajax-password-change">
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
														
														<button type="submit" id="updatePass" class="btn-secondry add-item"><i class="fa fa-fw fa-plus-circle"></i> Update Password</button>
														<!-- <button type="reset" class="btn">Save changes</button> -->
													</div>
													
												</td>
											</tr>
										</table>
									</div>
									
								</div>
						</div>
					</div>
					<a href="javascript:void(0);" onclick="replace('passwordTab','usernameTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Go To Username</a>
					<a href="javascript:void(0);" onclick="replace('passwordTab','2faTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To 2FA Authentication</a>
						<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/change-password.js') ?>"></script>
				</div>
				<!-- Password Change END-->




			<!-- 2FA Security -->
			<div class="col-lg-12 m-b30" style="display: none;" id="2faTab">
                <span class="close" id="2fa" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('2fa').style.display='none'"> &times;</span>
				<div class="card-body">
					<div class="wc-title">
						<?php if ($userInfo['notify'] == "Off") { ?>
							<h4>Secure Your Account  <br><i style="font-size: 11px; color: darkblue;">Turn On Your 2FA For Secured Login. </i></h4>
						<?php } else { ?>
							<h4>Your Account Is Secure <br><i style="font-size: 11px; color: darkblue;">You Do Not Need To Take Any Action. </i></h4>
						<?php } ?>
					</div>
					<div class="widget-inner">
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

								<input type="hidden" name="url" id="url2" value="/ajax-notify-status">

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
					</div>
				</div>
					<a href="javascript:void(0);" onclick="replace('2faTab','addressTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Go To Address</a>
					<a href="javascript:void(0);" onclick="replace('2faTab','usernameTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To Username</a>
					<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/update-2fa.js') ?>"></script>
			</div>
			<!-- 2FA Security END-->
			
			

			<!-- Delete Account -->
			<div class="col-lg-12 m-b30" style="display: none;" id="deleteAccountTab">
                <span class="close" id="deleteAccount" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('deleteAccount').style.display='none'"> &times;</span>
                <div class="card-body">
					<div class="wc-title">
						<h4 class="text-danger"><i class="ti-face-sad mr-3" style="font-size: 34px;"></i> Delete Your Account<br><i style="font-size: 12px; color: darkblue;">Your Account Will Be Deactivated Now But Permanently Deleted After Six (6) Months.</i>  </h4>
						
						<i style="font-size: 12px; color: darkblue;"> If You Are Having Problems Using Your Account? <a href="<?= baseURL('us-support-ticket/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All" style="color: blue;">Write Us</a>.</i>
					</div>
					<div class="widget-inner">

						<form class="edit-profile m-b30" method="POST">
							<div class="row">

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
                                                        
														<button type="submit" onclick="return accountDeleteFunction();" id="deleteAccount" class="btn-secondry add-item m-r5 mt-2"><i class="fa fa-fw fa-plus-circle"></i> Delete Account</button>
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
					
					<a href="javascript:void(0);" onclick="replace('deleteAccountTab','usernameTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Go To Username</a>
					<a href="javascript:void(0);" onclick="replace('deleteAccountTab','profileImageTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To Profile Photo</a>
					
				<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/delete-account.js') ?>"></script>
			</div>

			<!-- Delete Account End -->
			
			


			</div>
            <!-- End Second Column Side -->


            <!-- Third Column Side -->
            <div class="col-md-3 col-lg-3">

                

            </div>
            <!-- End Third Column Side -->




			

		</div>


	</div>
</main>








<script>
	
    function replace( hide, show ) {
        document.getElementById(hide).style.display="none";
        document.getElementById(show).style.display="block";
    }

 </script>





<?php include 'Layout/footer.php'; ?>
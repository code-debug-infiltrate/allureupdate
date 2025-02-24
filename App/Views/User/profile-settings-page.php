<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 

?>

<title>Profile Settings | <?= $userInfo['username']; ?>'s Settings | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 14px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="<?= baseURL('us-profile-settings/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-cogs"></i>Settings</a></li>
				<li>Profile</li>
			</ul>
		</div>	

	
		<div class="row">



			<!-- Username -->

			<div class="col-lg-4 m-b30" id="usernameTab">
				<span class="close" id="usernameTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('usernameTab').style.display='none'"> &times;</span>
				<div class="widget-box">
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
															<input class="form-control" type="text" value="<?= $userInfo['username']; ?>" id="newUsername" minlength="5" maxlength="50" placeholder="**********" required>
														</div>
													</div>
													<div class="col-md-12">
														<br>
														<button type="submit" id="updateUsername" class="btn-secondry add-item m-r5 mt-2"><i class="fa fa-fw fa-plus-circle"></i> Update Username</button>
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
				<script src="<?= public_asset('/other_assets/AjaxForms/User/update-username.js') ?>"></script>
			</div>

			<!-- Username End -->


			<!-- Profile Photo -->
			<div class="col-lg-4 m-b30" id="profileImageTab">
				<span class="close" id="profileImageTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('profileImageTab').style.display='none'"> &times;</span>
				<div class="widget-box">
					<div class="wc-title">
						<?php if ($userInfo['profileimage'] == "profile.png") { ?>
							<h4>You Need a Better Profile Photo. <br><i style="font-size: 11px; color: darkblue;">Make Sure Your Face Is Visible!</i></h4>
						<?php } else { ?>
							<h4>More Professional Photo?<br><i style="font-size: 11px; color: darkblue;">Make Sure Your Face Is Visible!</i></h4>
						<?php } ?>
					</div>
					<div class="widget-inner">
						<form class="edit-profile m-b30" method="POST" action="<?= baseURL('us-profile-settings/'); ?><?= $userInfo['uniqueid']; ?>/" enctype="multipart/form-data">
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
														<figure class="logo-box"><img src="<?= public_asset('/other_assets/Profile/'); ?><?= $userInfo['profileimage']; ?>" id="output_profileimage" alt="Profile Photo" style="width: 200px;"></figure>
														<br>
														<div class="form-group">
															<label> Upload Profile Photo</label>
															<input type="file" name="pics" id="profileimage" placeholder="Profile Photo Image" onchange="validateProfileImage(event)" accept="image/*" required>
														</div>

														<div class="col-12 mt-5">
															<button type="submit" id="submitImage"class="btn-secondry add-item m-r5" name="uploadPics"><i class="fa fa-fw fa-plus-circle"></i> Update Profile Photo</button>
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
			</div>
			<!-- Profile Photo END-->



			
			<!-- Address Info -->
			<div class="col-lg-4 m-b30" id="addressTab">
				<span class="close" id="addressTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('addressTab').style.display='none'"> &times;</span>
				<div class="widget-box">
					<div class="wc-title">
						<h4> Contact Information  <br><i style="font-size: 11px; color: darkblue;">Only Provide Accurate Information. Information Provided May Be Subject To Verification.</i></h4>
					</div>
					<div class="widget-inner">
						<form class="edit-profile m-b30" method="POST" action="<?= baseURL('us-profile-settings/'); ?><?= $userInfo['uniqueid']; ?>/">
							<div class="row">
								<div class="addressError_box" style="margin:10px 0px;"></div>
								<div class="col-12">
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
						</form>
					</div>
					<script src="<?= public_asset('/other_assets/AjaxForms/User/update-address.js') ?>"></script>
				</div>
			</div>
			<!-- Address Info END-->





			<!-- Your Profile Views Chart -->
			<div class="col-lg-12 m-b30" id="bio">
				<div class="widget-box">
					<div class="wc-title">
						<h4>About Yourself!  <i class="" style="font-size: 11px; color: darkblue;">Set Up Your Bio</i></h4>
					</div>
					<div class="widget-inner">
						<form class="edit-profile m-b30" method="POST" action="<?= baseURL('my-settings/'); ?><?= $userInfo['uniqueid']; ?>/">
							<div class="">
								<div class="form-group row">
									<div class="col-sm-10  ml-auto">
										<h3>1. Personal Details</h3>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">First Name</label>
									<div class="col-sm-7">
										<div class="fnameError_box" style="margin:10px 0px;"></div>
										<input class="form-control" type="text" id="fname" maxlength="30" value="<?= $userInfo['fname']; ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Last Name</label>
									<div class="col-sm-7">
										<div class="lnameError_box" style="margin:10px 0px;"></div>
										<input class="form-control" type="text" id="lname" maxlength="30" value="<?= $userInfo['lname']; ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Phone</label>
									<div class="col-sm-7">
										<div class="phoneError_box" style="margin:10px 0px;"></div>
										<input class="form-control" type="text" id="phone" maxlength="15" value="<?= $userInfo['phone']; ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Occupation</label>
									<div class="col-sm-7">
										<div class="occupationError_box" style="margin:10px 0px;"></div>
										<input class="form-control" type="text" id="occupation" maxlength="50" value="<?= $userInfo['occupation']; ?>" required>
										<span class="help">This Is Your Job | Work. What You Do For Living</span>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Date Of Birth</label>
									<div class="col-sm-7">
										<div class="dobError_box" style="margin:10px 0px;"></div>
										<input class="form-control" type="date" id="dob" value="<?= $userInfo['dob']; ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Gender</label>
									<div class="col-sm-7">
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
									<div class="col-sm-10 ml-auto">
										<h3 class="m-form__section">2. About Yourself</h3>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Tell Us Facsinating Things About You.</label>
									<div class="col-sm-7">
										<div class="detailsError_box" style="margin:10px 0px;"></div>
										<textarea class="form-control" id="details" maxlength="15000" required><?= $userInfo['details']; ?></textarea>
									</div>
								</div>
							</div>
							<div class="">
								<div class="">
									<div class="row">
										<div class="col-sm-2">
										</div>
										<div class="col-sm-7">
											<button type="submit" id="updateBio" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i> Update Bio Details </button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<script src="<?= public_asset('/other_assets/AjaxForms/User/update-bio.js') ?>"></script>
			</div>
			<!-- Your Profile Views Chart END-->




			

		</div>


	</div>
</main>














<?php include 'Layout/footer.php'; ?>
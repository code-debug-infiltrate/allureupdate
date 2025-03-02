<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 

?>

<title><?= $userInfo['username']; ?>'s Settings | Profile Settings Page | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<!-- <div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 14px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>"><i class="fa fa-cogs"></i>Settings</a></li>
				<li>Profile</li>
			</ul>
		</div>	 -->

	
		<div class="row">

			<!-- First Column Side -->
			<div class="col-md-3 col-lg-3">

                

			</div>
			<!-- End First Column Side -->




			<!-- Second Column Side -->
			<div class="col-md-6 col-lg-6">


				<!-- Username -->
				<div class="col-lg-12 m-b30" style="border:1px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40);" id="usernameTab">
					<!-- <span class="close" id="usernameTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('usernameTab').style.display='none'"> &times;</span> -->
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
					<a href="javascript:void(0);" onclick="replace('usernameTab','interestTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Go To Interest</a>
					<a href="javascript:void(0);" onclick="replace('usernameTab','profileImageTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To Profile Photo</a>
					
				</div>
				<!-- Username End -->



				<!-- Interests -->
				<div class="col-lg-12 m-b30" style="border:1px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40); display: none;" id="interestTab">
					<!-- <span class="close" id="interestTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('interestTab').style.display='none'"> &times;</span> -->
					<div class="card-body">
						<div class="wc-title">
							<h4 class="">Personal Interests  <br><i class="" style="font-size: 11px; color: darkblue;">Add up to FIVE (5) Interesting activities you enjoy. <br>Tell others about what you enjoy spending time doing. It's a great way to get to know you.</i> </h4>
						</div>
						<div class="widget-inner">

							<form class="edit-profile m-b30" method="POST">
								<div class="row">

									<div class="col-12">
										<input type="hidden" name="url" id="url1" value="/ajax-interest">
										<table id="item-add" style="width:100%;">
											<tr class="list-item">
												<td>
													<div class="row">
														<div class="interestError_box" style="margin:10px 0px;"></div>
														<div class="col-md-12">
															<label class="col-form-label">Add Interest:</label>
															<div>
																<input type="hidden" name="uniqueid" id="uniqueid" value="<?= $userInfo['uniqueid']; ?>" required>
																<input type="hidden" name="username" id="username" value="<?= $userInfo['username']; ?>" required>
																<input type="text" class="form-control" id="interest" placeholder="Photography, Cycling, traveling." maxlength="20" required>
															</div>
														</div>
														<div class="col-md-12">
															<br>
															<button type="submit" id="addNew" class="btn-secondry add-item m-r5 mt-2"><i class="fa fa-fw fa-plus-circle"></i> Add Interest</button>
														</div>
													</div>
												</td>
											</tr>
										</table>
									</div>
									
								</div>
							</form>
							<?php if (isset($user_interests)) { ?>
								<ul class="interest-added gap">
									<?php foreach ($user_interests as $key => $int) { ?>
										<li style="margin: 10px;"><a href="#" data-toggle="tooltip" title="<?= $int['details']; ?>"><?= $int['details']; ?></a><span class="remove" style="margin-left: 20px; color: red; font-weight: lighter;" data-toggle="tooltip" title="remove"><i class="fa fa-close"></i></span></li>
									<?php } ?>
									<li id="newList" style="color: white;"></li>
								</ul>
							<?php } else { ?>
								<p class="gap"> Add an interest </p>
							<?php } ?>
						</div>
					</div>
					<a href="javascript:void(0);" onclick="replace('interestTab','deleteAccountTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px; color: red;">Delete Account</a>
					<a href="javascript:void(0);" onclick="replace('interestTab','workNeducationTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To Work & Education</a>
					<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/create-interests.js') ?>"></script>
				</div>
				<!-- Interests End -->



				<!-- Work & Education -->
				<div class="col-lg-12 m-b30" style="border:1px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40); display: none;" id="workNeducationTab">
					<!-- <span class="close" id="workNeducationTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('workNeducationTab').style.display='none'"> &times;</span> -->
					<div class="card-body">
						<div class="wc-title">
							<h4 class=""> Work & Education  <br><i class="" style="font-size: 11px; color: darkblue;">Tell The World About Your Work Or Education Expereience</i> </h4>
						</div>
						<div class="widget-inner">

							<form class="edit-profile m-b30" method="POST">
								<div class="row">
								<input type="hidden" id="url9" value="ajax-worknedu/">
									<div class="col-12">

										<table id="item-add" style="width:100%;">
											<tr class="list-item">
												<td>
													<div class="row">
													<div class="wrkeduError_box" style="margin:10px 0px;"></div>

														<div class="col-md-12">	
															<select class="form-control" id="cat">
																<option value="Work">Work</option>
																<option value="School">School</option>
															</select>
														</div>
														
														<div class="col-md-12">	
															<label class="control-label" for="input">Institution Name</label>
															<input class="form-control" type="text" id="workeduname" required="required"/>
														</div>

														<div class="col-md-6">	
															<label class="control-label" for="input">From</label>
															<input class="form-control" type="date" id="workedufrom" required="required"/>
														</div>

														<div class="col-md-6">	
															<label class="control-label" for="input">To</label>
															<input class="form-control" type="date" id="workeduto" required="required"/>
														</div>

														<div class="col-md-12">	
															<label class="control-label" for="textarea">Additional Information</label>
															<textarea class="form-control" rows="4" id="workedudetails" required="required"></textarea>
														</div>
														<div class="col-md-12">
															<br>
															<button type="submit" name="addWorkedu" class="btn-secondry add-item m-r5 mt-2"><i class="fa fa-fw fa-plus-circle"></i> Add New</button>
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
					<a href="javascript:void(0);" onclick="replace('workNeducationTab','deleteAccountTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px; color: red;">Delete Account</a>
					<a href="javascript:void(0);" onclick="replace('workNeducationTab','languageTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To Language</a>
					<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/create-workedu.js') ?>"></script>
				</div>
				<!-- Work & Education End -->



				<!-- Language -->
				<div class="col-lg-12 m-b30" style="border:1px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40); display: none;" id="languageTab">
					<!-- <span class="close" id="languageTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('languageTab').style.display='none'"> &times;</span> -->
					<div class="card-body">
						<div class="wc-title">
							<h4 class="">Language  <br><i class="" style="font-size: 11px; color: darkblue;">Add up to FIVE (5) Languages you speak. It's a great way for others to get to know you.</i> </h4>
						</div>
						<div class="widget-inner">

							<form class="edit-profile m-b30" method="POST">
								<div class="row">
								<input type="hidden" id="url3" value="ajax-language/">
									<div class="col-12">

										<table id="item-add" style="width:100%;">
											<tr class="list-item">
												<td>
													<div class="row">
														<div class="usernameError_box" style="margin:10px 0px;"></div>
														<div class="col-md-12">
															<label class="col-form-label">Add a Language:</label>
															<div>
																<input type="hidden" name="uniqueid" id="uniqueid" value="<?= $userInfo['uniqueid']; ?>" required>
																<input type="hidden" name="username" id="username" value="<?= $userInfo['username']; ?>" required>
																<input  class="form-control" type="text" id="lang" placeholder="French, Spanish" maxlength="10" required>
															</div>
														</div>
														<div class="col-md-12">
															<br>
															<button type="submit" id="addLanguage" class="btn-secondry add-item m-r5 mt-2"><i class="fa fa-fw fa-plus-circle"></i> Add New</button>
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
					<a href="javascript:void(0);" onclick="replace('languageTab','interestTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Go To Interest</a>
					<a href="javascript:void(0);" onclick="replace('languageTab','profileImageTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To Profile Photo</a>
					<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/create-language.js') ?>"></script>
				</div>
				<!-- Language End -->



				
				<!-- Profile Photo -->
				<div class="col-lg-12 m-b30" style="border:1px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40); display: none;" id="profileImageTab">
					<!-- <span class="close" id="profileImageTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('profileImageTab').style.display='none'"> &times;</span> -->
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
				<div class="col-lg-12 m-b30" style="border:1px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40); display: none;" id="addressTab">
					<!-- <span class="close" id="addressTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('addressTab').style.display='none'"> &times;</span> -->
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
														<select id="country">
															<option value="<?php if(!$userInfo['country']){echo "Country";}else{echo $userInfo['country'];}  ?>" selected><?php if(!$userInfo['country']){echo "Country";}else{echo $userInfo['country'];}  ?></option>
															<option value="AFG">Afghanistan</option>
															<option value="ALA">Ƭand Islands</option>
															<option value="ALB">Albania</option>
															<option value="DZA">Algeria</option>
															<option value="ASM">American Samoa</option>
															<option value="AND">Andorra</option>
															<option value="AGO">Angola</option>
															<option value="AIA">Anguilla</option>
															<option value="ATA">Antarctica</option>
															<option value="ATG">Antigua and Barbuda</option>
															<option value="ARG">Argentina</option>
															<option value="ARM">Armenia</option>
															<option value="ABW">Aruba</option>
															<option value="AUS">Australia</option>
															<option value="AUT">Austria</option>
															<option value="AZE">Azerbaijan</option>
															<option value="BHS">Bahamas</option>
															<option value="BHR">Bahrain</option>
															<option value="BGD">Bangladesh</option>
															<option value="BRB">Barbados</option>
															<option value="BLR">Belarus</option>
															<option value="BEL">Belgium</option>
															<option value="BLZ">Belize</option>
															<option value="BEN">Benin</option>
															<option value="BMU">Bermuda</option>
															<option value="BTN">Bhutan</option>
															<option value="BOL">Bolivia, Plurinational State of</option>
															<option value="BES">Bonaire, Sint Eustatius and Saba</option>
															<option value="BIH">Bosnia and Herzegovina</option>
															<option value="BWA">Botswana</option>
															<option value="BVT">Bouvet Island</option>
															<option value="BRA">Brazil</option>
															<option value="IOT">British Indian Ocean Territory</option>
															<option value="BRN">Brunei Darussalam</option>
															<option value="BGR">Bulgaria</option>
															<option value="BFA">Burkina Faso</option>
															<option value="BDI">Burundi</option>
															<option value="KHM">Cambodia</option>
															<option value="CMR">Cameroon</option>
															<option value="CAN">Canada</option>
															<option value="CPV">Cape Verde</option>
															<option value="CYM">Cayman Islands</option>
															<option value="CAF">Central African Republic</option>
															<option value="TCD">Chad</option>
															<option value="CHL">Chile</option>
															<option value="CHN">China</option>
															<option value="CXR">Christmas Island</option>
															<option value="CCK">Cocos (Keeling) Islands</option>
															<option value="COL">Colombia</option>
															<option value="COM">Comoros</option>
															<option value="COG">Congo</option>
															<option value="COD">Congo, the Democratic Republic of the</option>
															<option value="COK">Cook Islands</option>
															<option value="CRI">Costa Rica</option>
															<option value="CIV">C𴥠d'Ivoire</option>
															<option value="HRV">Croatia</option>
															<option value="CUB">Cuba</option>
															<option value="CUW">Cura袯</option>
															<option value="CYP">Cyprus</option>
															<option value="CZE">Czech Republic</option>
															<option value="DNK">Denmark</option>
															<option value="DJI">Djibouti</option>
															<option value="DMA">Dominica</option>
															<option value="DOM">Dominican Republic</option>
															<option value="ECU">Ecuador</option>
															<option value="EGY">Egypt</option>
															<option value="SLV">El Salvador</option>
															<option value="GNQ">Equatorial Guinea</option>
															<option value="ERI">Eritrea</option>
															<option value="EST">Estonia</option>
															<option value="ETH">Ethiopia</option>
															<option value="FLK">Falkland Islands (Malvinas)</option>
															<option value="FRO">Faroe Islands</option>
															<option value="FJI">Fiji</option>
															<option value="FIN">Finland</option>
															<option value="FRA">France</option>
															<option value="GUF">French Guiana</option>
															<option value="PYF">French Polynesia</option>
															<option value="ATF">French Southern Territories</option>
															<option value="GAB">Gabon</option>
															<option value="GMB">Gambia</option>
															<option value="GEO">Georgia</option>
															<option value="DEU">Germany</option>
															<option value="GHA">Ghana</option>
															<option value="GIB">Gibraltar</option>
															<option value="GRC">Greece</option>
															<option value="GRL">Greenland</option>
															<option value="GRD">Grenada</option>
															<option value="GLP">Guadeloupe</option>
															<option value="GUM">Guam</option>
															<option value="GTM">Guatemala</option>
															<option value="GGY">Guernsey</option>
															<option value="GIN">Guinea</option>
															<option value="GNB">Guinea-Bissau</option>
															<option value="GUY">Guyana</option>
															<option value="HTI">Haiti</option>
															<option value="HMD">Heard Island and McDonald Islands</option>
															<option value="VAT">Holy See (Vatican City State)</option>
															<option value="HND">Honduras</option>
															<option value="HKG">Hong Kong</option>
															<option value="HUN">Hungary</option>
															<option value="ISL">Iceland</option>
															<option value="IND">India</option>
															<option value="IDN">Indonesia</option>
															<option value="IRN">Iran, Islamic Republic of</option>
															<option value="IRQ">Iraq</option>
															<option value="IRL">Ireland</option>
															<option value="IMN">Isle of Man</option>
															<option value="ISR">Israel</option>
															<option value="ITA">Italy</option>
															<option value="JAM">Jamaica</option>
															<option value="JPN">Japan</option>
															<option value="JEY">Jersey</option>
															<option value="JOR">Jordan</option>
															<option value="KAZ">Kazakhstan</option>
															<option value="KEN">Kenya</option>
															<option value="KIR">Kiribati</option>
															<option value="PRK">Korea, Democratic People's Republic of</option>
															<option value="KOR">Korea, Republic of</option>
															<option value="KWT">Kuwait</option>
															<option value="KGZ">Kyrgyzstan</option>
															<option value="LAO">Lao People's Democratic Republic</option>
															<option value="LVA">Latvia</option>
															<option value="LBN">Lebanon</option>
															<option value="LSO">Lesotho</option>
															<option value="LBR">Liberia</option>
															<option value="LBY">Libya</option>
															<option value="LIE">Liechtenstein</option>
															<option value="LTU">Lithuania</option>
															<option value="LUX">Luxembourg</option>
															<option value="MAC">Macao</option>
															<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
															<option value="MDG">Madagascar</option>
															<option value="MWI">Malawi</option>
															<option value="MYS">Malaysia</option>
															<option value="MDV">Maldives</option>
															<option value="MLI">Mali</option>
															<option value="MLT">Malta</option>
															<option value="MHL">Marshall Islands</option>
															<option value="MTQ">Martinique</option>
															<option value="MRT">Mauritania</option>
															<option value="MUS">Mauritius</option>
															<option value="MYT">Mayotte</option>
															<option value="MEX">Mexico</option>
															<option value="FSM">Micronesia, Federated States of</option>
															<option value="MDA">Moldova, Republic of</option>
															<option value="MCO">Monaco</option>
															<option value="MNG">Mongolia</option>
															<option value="MNE">Montenegro</option>
															<option value="MSR">Montserrat</option>
															<option value="MAR">Morocco</option>
															<option value="MOZ">Mozambique</option>
															<option value="MMR">Myanmar</option>
															<option value="NAM">Namibia</option>
															<option value="NRU">Nauru</option>
															<option value="NPL">Nepal</option>
															<option value="NLD">Netherlands</option>
															<option value="NCL">New Caledonia</option>
															<option value="NZL">New Zealand</option>
															<option value="NIC">Nicaragua</option>
															<option value="NER">Niger</option>
															<option value="NGA">Nigeria</option>
															<option value="NIU">Niue</option>
															<option value="NFK">Norfolk Island</option>
															<option value="MNP">Northern Mariana Islands</option>
															<option value="NOR">Norway</option>
															<option value="OMN">Oman</option>
															<option value="PAK">Pakistan</option>
															<option value="PLW">Palau</option>
															<option value="PSE">Palestinian Territory, Occupied</option>
															<option value="PAN">Panama</option>
															<option value="PNG">Papua New Guinea</option>
															<option value="PRY">Paraguay</option>
															<option value="PER">Peru</option>
															<option value="PHL">Philippines</option>
															<option value="PCN">Pitcairn</option>
															<option value="POL">Poland</option>
															<option value="PRT">Portugal</option>
															<option value="PRI">Puerto Rico</option>
															<option value="QAT">Qatar</option>
															<option value="REU">R궮ion</option>
															<option value="ROU">Romania</option>
															<option value="RUS">Russian Federation</option>
															<option value="RWA">Rwanda</option>
															<option value="BLM">Saint Barthꭥmy</option>
															<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
															<option value="KNA">Saint Kitts and Nevis</option>
															<option value="LCA">Saint Lucia</option>
															<option value="MAF">Saint Martin (French part)</option>
															<option value="SPM">Saint Pierre and Miquelon</option>
															<option value="VCT">Saint Vincent and the Grenadines</option>
															<option value="WSM">Samoa</option>
															<option value="SMR">San Marino</option>
															<option value="STP">Sao Tome and Principe</option>
															<option value="SAU">Saudi Arabia</option>
															<option value="SEN">Senegal</option>
															<option value="SRB">Serbia</option>
															<option value="SYC">Seychelles</option>
															<option value="SLE">Sierra Leone</option>
															<option value="SGP">Singapore</option>
															<option value="SXM">Sint Maarten (Dutch part)</option>
															<option value="SVK">Slovakia</option>
															<option value="SVN">Slovenia</option>
															<option value="SLB">Solomon Islands</option>
															<option value="SOM">Somalia</option>
															<option value="ZAF">South Africa</option>
															<option value="SGS">South Georgia and the South Sandwich Islands</option>
															<option value="SSD">South Sudan</option>
															<option value="ESP">Spain</option>
															<option value="LKA">Sri Lanka</option>
															<option value="SDN">Sudan</option>
															<option value="SUR">Suriname</option>
															<option value="SJM">Svalbard and Jan Mayen</option>
															<option value="SWZ">Swaziland</option>
															<option value="SWE">Sweden</option>
															<option value="CHE">Switzerland</option>
															<option value="SYR">Syrian Arab Republic</option>
															<option value="TWN">Taiwan, Province of China</option>
															<option value="TJK">Tajikistan</option>
															<option value="TZA">Tanzania, United Republic of</option>
															<option value="THA">Thailand</option>
															<option value="TLS">Timor-Leste</option>
															<option value="TGO">Togo</option>
															<option value="TKL">Tokelau</option>
															<option value="TON">Tonga</option>
															<option value="TTO">Trinidad and Tobago</option>
															<option value="TUN">Tunisia</option>
															<option value="TUR">Turkey</option>
															<option value="TKM">Turkmenistan</option>
															<option value="TCA">Turks and Caicos Islands</option>
															<option value="TUV">Tuvalu</option>
															<option value="UGA">Uganda</option>
															<option value="UKR">Ukraine</option>
															<option value="ARE">United Arab Emirates</option>
															<option value="GBR">United Kingdom</option>
															<option value="USA">United States</option>
															<option value="UMI">United States Minor Outlying Islands</option>
															<option value="URY">Uruguay</option>
															<option value="UZB">Uzbekistan</option>
															<option value="VUT">Vanuatu</option>
															<option value="VEN">Venezuela, Bolivarian Republic of</option>
															<option value="VNM">Viet Nam</option>
															<option value="VGB">Virgin Islands, British</option>
															<option value="VIR">Virgin Islands, U.S.</option>
															<option value="WLF">Wallis and Futuna</option>
															<option value="ESH">Western Sahara</option>
															<option value="YEM">Yemen</option>
															<option value="ZMB">Zambia</option>
															<option value="ZWE">Zimbabwe</option>
														</select>
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
						
					</div>
					<a href="javascript:void(0);" onclick="replace('addressTab','passwordTab')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Go To Password</a>
						<a href="javascript:void(0);" onclick="replace('addressTab','bioTab')" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Go To Bio Details</a>
						<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/create-location.js') ?>"></script>
				</div>
				<!-- Address Info END-->



				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30" style="border:1px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40); display: none;" id="bioTab">
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
				<div class="col-lg-12 m-b30" style="border:1px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40); display: none;" id="passwordTab">
					<!-- <span class="close" id="password" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('password').style.display='none'"> &times;</span> -->
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
			<div class="col-lg-12 m-b30" style="border:1px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40); display: none;" id="2faTab">
                <!-- <span class="close" id="2fa" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('2fa').style.display='none'"> &times;</span> -->
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
			<div class="col-lg-12 m-b30" style="border:1px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40); display: none;" id="deleteAccountTab">
                <!-- <span class="close" id="deleteAccount" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('deleteAccount').style.display='none'"> &times;</span> -->
                <div class="card-body">
					<div class="wc-title">
						<h4 class="text-danger"><i class="ti-face-sad mr-3" style="font-size: 34px;"></i> Delete Your Account<br><i style="font-size: 12px; color: darkblue;">Your Account Will Be Deactivated Now But Permanently Deleted After Six (6) Months.</i>  </h4>
						
						<i style="font-size: 12px; color: darkblue;"> If You Are Having Problems Using Your Account? <a href="<?= baseURL('write-us/'); ?><?= $userInfo['uniqueid']; ?>/?cat=All" style="color: blue;">Write Us</a>.</i>
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

<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';

if (isset($_SERVER['HTTPS'])) { $url= "https://"; } else { $url = "http://"; }

?>
<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->
<title>Consultation And Therapy | Get Help |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>



    <!-- about-banner -->
    <section class="about-banner" style="background-image: url(/Images/Body/newsletter.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Asking For Help Is Not Weakness</h1>
                <div class="text">It's a Path Way To Solution. <br>We are focused and dedicated to helping individuals become more healthy and happier.</div>
            </div>
        </div>
    </section>
    <!-- about-banner end -->



    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-12 col-sm-12 agent-column">
                    <div class="agent-content">
                        <h2>Chat a Team Member</h2>
                        <div class="single-agent-box">
                            <div class="content-box">
                                <figure class="agent-image"><img src="/Images/Body/private-session.gif" alt="Our Team"></figure>
                                <h4><?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></h4>
                                <span>Customer Representatives</span>
                                <br>
                                <?php if(isset($coyInfo['phone'])) { ?>
                                    <div class="phone"><b>Call Us:</b> <a href="tel:<?= $coyInfo['phone']; ?>"><?= $coyInfo['phone']; ?></a></div>
                                <?php } ?>
                                <?php if($coyInfo['phone1']) { ?>
                                    <div class="phone"><b>Call Us:</b> <a href="tel:<?= $coyInfo['phone1']; ?>"><?= $coyInfo['phone1']; ?></a></div>
                                <?php } ?>
                                <div class="phone"><b>Whatsapp:</b> <a href="https://api.whatsapp.com/send?phone=<?= $coyInfo['phone']; ?>&text=hello, good day! I want to make enquiries about some of your service..." target="_blank">Chats Only</a></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-7 col-md-12 col-sm-12 form-column" style="background: white; padding: 50px; border-radius: 5px;">
                    <div class="contact-form-area" id="contactForm">

                        <h2>We Are Few Clicks Away!</h2>
                        <p>Fill All Form Fields Correctly With Accurate Information. The Provided Information Helps Us Get In Touch With You Faster. </p>
                        <hr>
                        <div class="formError_box" style="margin:10px 0px;"></div>

                         
                            <input type="hidden" name="ip" id="ip" value="<?php echo $ip?>">
		                	<input type="hidden" name="ua" id="ua" value="<?php echo $user_agent?>">
                            <input type="hidden" id="url" value="<?= trim(getenv('baseURL'));?>">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <input type="text" name="fname" id="fname" minlength="5" maxlength="30" placeholder="Your first name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" id="lname" minlength="5" maxlength="30" placeholder="Your last name" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Gender</label>
                                    <select class="form-control" id="gender" required>
                                    <option value="" disabled selected> -Gender- </option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label> Current Location</label>
                                <select class="form-control" id="location" required>
                                    <option value="" disabled selected> -Location- </option>
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

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Email ID</label>
                                    <input type="email" name="email" id="email" minlength="5" maxlength="50" placeholder="Email address" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" id="phone" minlength="10" maxlength="18" placeholder="Phone Number" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Preferred Contact Date</label>
                                    <input type="date" name="contactdate" id="contactdate"  placeholder="Preferred Contact Date" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label> Preferred Method To Contact You</label>
                                <select class="form-control" id="contactmethod" required>
                                    <option value="" disabled selected> -Method- </option>
                                    <option value="Through Email">Contact Me Through Email</option>
                                    <option value="Through Whatsapp">Contact Me Through Whatsapp</option>
                                    <option value="Zoom Call">Contact Me Through Zoom Call</option>
                                </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <textarea name="message" minlength="100" id="m" maxlength="10000" placeholder="Tell Us About The Challenges Or Issues You Are Currently Facing"></textarea>
                            </div>

                            <div class="form-group message-btn">
                                <img src="/Images/green-dots.gif" id="loader" style="display: none"/>
                                <button type="submit" class="theme-btn" id="startConsultation" name="submit">Continue To Payment</button>
                            </div>

                       

                    </div>

                    <div class="contact-form-area" id="paymentForm" style="display: none;">
                        <h2>Make Payment To Complete Booking.</h2>
                        <hr>
                        <?php foreach ($subPlans as $key => $subplan) { if (($subplan['type'] == "Consultation") || ($subplan['type'] == "Therapy")) {  ?>
                            <h2>Session Fee: <?= $curInfo['currency']; ?><?= $subplan['amount']?></h2>
                            <input type="hidden" class="form-control"  id="amount" value="<?= $subplan['amount']?>" placeholder="Transaction Amount" required>
                            
                            <?php if ($exchangeInfo) { foreach ($exchangeInfo as $key => $exchange) { if ($exchange['currency'] == "Naira") {  ?>
                                <p><b>Naira Rate:</b>  NGN<?= number_format($subplan['amount'] * $exchange['rate']); ?> Only</p>
                                <input type="hidden" class="form-control"  id="cardamount" value="<?= $subplan['amount'] * $exchange['rate']; ?>" placeholder="Transaction Amount" required>
                            <?php } } } ?>
                            
                            <p>Sessions Are One-Time Bills. You Can Book As Many Sessions As You Like.</p>
                        <?php } } ?>

                        <input type="hidden" class="form-control"  id="currency" value="<?= $curInfo['currency']; ?>" placeholder="Transaction Currency" required>
                        <input type="hidden" class="form-control"  id="memo" maxlength="200" value="One-Time Consultation|Therapy Payment (Single Session)" placeholder="Transaction Details" required>
                           
                        <hr>
                        <?php if ($bankInfo['status'] == "Publish") { ?>
                        <div class="form-group message-btn">
                            <button type="submit" id="payWithTransfer" class="theme-btn m-r5"><img src="/Images/Body/transfers.png" style="width: 15%; margin-right: 20px;"> Bank Transfer </button>
                        </div>
                        <?php } ?>
                        <hr>
                        <center><label style="color: red; font-size: 12px;">Service Fees May Apply For Online | Card Payments.</label></center>
                        <div class="form-group message-btn">
                            <button type="submit" id="payWithOnline" class="theme-btn m-r5"><img src="/Images/Body/card-pay.png" style="width: 15%; margin-right: 20px;"> Online | Cards </button>
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
						<h2 class="fw-400 text-4 text-center mt-1"><b>Bank Transfer Details!</b></h2>
						<p class="text-center" style="font-size: 12px; color: blue;">Please Follow The Instructions On This Page Carefully To Prevent Issues With Your Deposit. <br>Use The Narration Correctly, Your Deposit Will Be Added Automatically.</p>
						<br>
						<div class="col-12 col-md-12 mx-auto">
							<div class="mb-3">
								<p class="bankName"></p>
                                <br>
								<p class="accountName"></p>
                                <br>
								<p class="acccountNumber"></p>
                                <br>
								<p class="amount"></p>
                                <br>
								<p class="narration"></p>
                                <br>
								<p class="swiftCode"></p>
							</div>

							<hr>
							<div class="contact-form-area" >
								<center><label style="color: green; font-size: 12px;">Click The Button Below Only If You Have Made The Payment</label></center>
								<div class="form-group message-btn">
									<button type="submit" id="doneBankTransfer" class="theme-btn m-r5"><img src="/Images/Body/thumb-up.png" style="width: 15%; margin-right: 20px;"> I Have Transfered Money </button>
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
    </section>
    <!-- contact-section end -->


    
    <!-- contact-info-section -->
    <section class="contact-info-section contact-page-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-location"></i></div>
                        <h3>Walk-In-Anytime</h3>

                        <?php if($coyInfo['address']) { ?>
                        <div class="text">
                            <p style="text-align: left;"><b>Head Office:</b> <?= $coyInfo['address']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-telephone"></i></div>
                        <h3>Call us on</h3>

                        <?php if($coyInfo['phone']) { ?>
                        <div class="text">
                            <p><b>Line 1:</b> <?= $coyInfo['phone']; ?></p>
                        </div>
                        <?php } ?>

                        <br>
                        <?php if($coyInfo['phone1']) { ?>
                        <div class="text">
                            <p><b>Line 2:</b> <?= $coyInfo['phone1']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-envelope"></i></div>
                        <h3>Send An Email</h3>

                        <?php if($coyInfo['email']) { ?>
                        <div class="text">
                            <p><b>Mail:</b> <a href="mailto:<?= $coyInfo['email']; ?>">Send a Message</a></p>
                        </div>
                        <?php } ?>
                        <br>
                        <?php if($coyInfo['email1']) { ?>
                        <div class="text">
                            <p><b>Mail:</b> <a href="mailto:<?= $coyInfo['email1']; ?>">Send a Message</a></p>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->



<!-- Include Creator script -->
<script src="<?= public_asset('/other_assets/Front/js/AjaxForms/consultation.js') ?>"></script>



<?php include 'Layout/footer.php'; ?>










	
<!-- Bothelp.io widget -->
<script type="text/javascript">!function(){var e={"token":"<?= $coyInfo['phone']; ?>","position":"left","bottomSpacing":"150","callToActionMessage":"","displayOn":"everywhere","subtitle":"International Match Maker And Therapist!","message":{"name":"Allure-D Official","content":"Hello There, How Can We Help You Today? "}},t=document.location.protocol+"//bothelp.io",o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=t+"/widget-folder/widget-whatsapp-chat.js",o.onload=function(){BhWidgetWhatsappChat.init(e)};var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(o,n)}();</script>
<!-- /Bothelp.io widget -->



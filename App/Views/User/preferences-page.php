<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php'; 
include 'Layout/sidebar.php'; 
?>

<title><?= $userInfo['username']; ?>'s Preference Settings  | Find People Settings Page | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> </title>


<!--Main container start -->
<main class="ttr-wrapper">


	<div class="container-fluid">


		<!-- <div class="db-breadcrumb">
			<h4 class="breadcrumb-title" style="text-transform: capitalize;"><b id="grtnMsg" style="font-size: 15px;"></b> <?= $userInfo['username']; ?></h4>
			<ul class="db-breadcrumb-list">
				<li><a href="<?= baseURL('us-index/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="<?= baseURL('us-preferences/'); ?><?= $userInfo['uniqueid']; ?>/"><i class="fa fa-group"></i>Preferences</a></li>
				<li>Settings</li>
			</ul>
		</div> -->

        

			

        <div class="row">

            <!-- First Column Side -->
            <div class="col-md-3 col-lg-3">

                

            </div>
            <!-- End First Column Side -->


            <!-- Second Column Side -->
            <div class="col-md-6 col-lg-6">

                <div id="myself" style="display: none;">

                    <div class="card-header">
                        <img src="/Images/Body/done.png" alt="Preference Image" style="height: 120px;"/>
                        <div class="card-title"><b>Tell The World About Yourself</b></div>
                        <small class="form-text text-muted">Answer 19 Questions To Tell Us a Bit About Your Personality. <br>Select Options That Best Describes You Then Sit Back And Relax.</small>
                    </div>

                    <form method="post">
                        <input type="hidden" id="uniqueid" value="<?= $userInfo['uniqueid']; ?>" required>
                        <input type="hidden" id="username" value="<?= $userInfo['username']; ?>" required>
                        <input type="hidden" id="url" value="<?= trim(getenv('baseURL'));?>">
                        <input type="hidden" id="urlmy" value="ajax-myself/">
                        
                        <div class="myselfError_box" style="margin:10px 0px;"></div>

                        <div class="form-group" id="div1" onchange="replace('div1','div2')">
                            <i class="" style="font-size: 11px; color: #7005e3;">Step: 1 of 19</i> 
                            <br>
                            <label style="padding: 8px;"> My Sexual Orientation: </label>
                            <select class="form-select form-control"id="myorientation">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Straight">Straight</option>
                                <option value="Bisexual">Bisexual</option>

                                <?php if ($userInfo['gender'] == "Male") { ?>
                                    <option value="Gay">Gay</option>
                                <?php } elseif ($userInfo['gender'] == "Female") { ?>
                                    <option value="Lesbian">Lesbian</option>
                                <?php } else { ?>
                                    <option value="Gay">Gay</option>
                                    <option value="Lesbian">Lesbian</option>
                                <?php } ?>
                                <option value="Any">Any</option>
                            </select>
                        </div>
                        <div class="form-group" id="div2" style="display: none;" onchange="replace('div2','div3a')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 2 of 19</i> 
                        <br>
                            <label style="padding: 8px;">  My Height: </label>
                            <select class="form-select form-control"id="myheight">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="2Ft to 3Ft">2Ft to 3Ft</option>
                                <option value="3Ft to 4Ft">3Ft to 4Ft</option>
                                <option value="4Ft to 5Ft">4Ft to 5Ft</option>
                                <option value="5Ft to 6Ft">5Ft to 6Ft</option>
                                <option value="6Ft to 7Ft">6Ft to 7Ft</option>
                                <option value="8Ft To 9Ft">8Ft To 9Ft</option>
                            </select>
                            <a href="javascript:void(0);" id="div2" onclick="replace('div2','div1')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>
                        <div class="form-group" id="div3a" style="display: none;" onchange="replace('div3a','div3')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 3 of 19</i> 
                        <br>
                            <label style="padding: 8px;">  My Weight: </label>
                            <select class="form-select form-control"id="myweight">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="20Kg to 30Kg">20Kg to 30Kg</option>
                                <option value="30Kg to 40Kg">30Kg to 40Kg</option>
                                <option value="40Kg to 50Kg">40Kg to 50Kg</option>
                                <option value="50Kg to 60Kg">50Kg to 60Kg</option>
                                <option value="60Kg to 70Kg">60Kg to 70Kg</option>
                                <option value="80Kg To 90Kg">80Kg To 90Kg</option>
                                <option value="90Kg To 100Kg">90Kg To 100Kg</option>
                                <option value="100Kg To 110Kg">100Kg To 110Kg</option>
                                <option value="110Kg Above">110Kg Above</option>
                            </select>
                            <a href="javascript:void(0);" id="div3a" onclick="replace('div3a','div2')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>
                        <div class="form-group" id="div3" style="display: none;" onchange="replace('div3','div4a')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 4 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> My Body Type: </label>
                            <select class="form-select form-control"id="mybodytype">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Slim">Slim</option>
                                <option value="Ahtletic">Ahtletic</option>
                                <option value="Chubby">Chubby</option>
                                <option value="Fat">Fat</option>
                                <option value="Obess">Obess</option>
                                <option value="Skinny">Skinny</option>
                                <option value="Any">Any</option>
                            </select>
                            <a href="javascript:void(0);" id="div3" onclick="replace('div3','div3a')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>
                        <div class="form-group" id="div4a" style="display: none;" onchange="replace('div4a','div4')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 5 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> My Religion: </label>
                            <select class="form-select form-control"id="myreligion">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Islam">Islam</option>
                                <option value="Hinduist">Hinduist</option>
                                <option value="Buddhist">Buddhist</option>
                                <option value="Traditionist">Traditionist</option>
                                <option value="Irreligion">Irreligion</option>
                                <option value="Any">Any</option>
                            </select>
                            <a href="javascript:void(0);" id="div4a" onclick="replace('div4a','div3')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>
                        <div class="form-group" id="div4" style="display: none;" onchange="replace('div4','div5a')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 6 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> I'm Looking For: </label>
                            <select class="form-select form-control"id="myseeking">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Casual">Casual</option>
                                <option value="Flirting">Flirting</option>
                                <option value="Gist Pal">Gist Pal</option>
                                <option value="One Night Stand">One Night Stand</option>
                                <option value="Marriage">Marriage</option>
                                <option value="Any">Any</option>
                            </select>
                            <a href="javascript:void(0);" id="div4" onclick="replace('div4','div4a')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>
                        <div class="form-group" id="div5a" style="display: none;" onchange="replace('div5a','div5b')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 7 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> My Smoking Habit: </label>
                            <select class="form-select form-control"id="mysmoking">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Addict">Addict</option>
                                <option value="Often">Often</option>
                                <option value="Socially">Socially</option>
                                <option value="Once a Blue Moon">Once a Blue Moon</option>
                                <option value="Never Smoke">Never Smoke</option>
                            </select>
                            <a href="javascript:void(0);" id="div5a" onclick="replace('div5a','div4')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>
                        <div class="form-group" id="div5b" style="display: none;" onchange="replace('div5b','div5')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 8 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> My Complexion: </label>
                            <select class="form-select form-control"id="mycomplexion">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="White">White</option>
                                <option value="Fair">Fair</option>
                                <option value="Light">Light</option>
                                <option value="Chocolate">Chocolate</option>
                                <option value="Dark">Dark</option>
                                <option value="Black">Black</option>
                                <option value="Any">Any</option>
                            </select>
                            <a href="javascript:void(0);" id="div5b" onclick="replace('div5b','div5a')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>
                        <div class="form-group" id="div5" style="display: none;" onchange="replace('div5','div6a')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 9 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> My Ethnicity: </label>
                            <select class="form-select form-control"id="myethnicity">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="African">African</option>
                                <option value="American">American</option>
                                <option value="Australian">Australian</option>
                                <option value="European">European</option>
                                <option value="Asian">Asian</option>
                                <option value="Any">Any</option>
                            </select>
                            <a href="javascript:void(0);" id="div5" onclick="replace('div5','div5b')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>

                        <div class="form-group" id="div6a" style="display: none;" onchange="replace('div6a','div6b')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 10 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> I Drink (Alcohol & Others): </label>
                            <select class="form-select form-control"id="mydrinking">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Addict">Addict</option>
                                <option value="Often">Often</option>
                                <option value="Socially">Socially</option>
                                <option value="Once a Blue Moon">Once a Blue Moon</option>
                                <option value="Never Drink">Never Drink</option>
                            </select>
                            <a href="javascript:void(0);" id="div6a" onclick="replace('div6a','div5')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>

                        <div class="form-group" id="div6b" style="display: none;" onchange="replace('div6b','div6')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 11 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> My Eating Habit: </label>
                            <select class="form-select form-control"id="myeating">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Grazing">Grazing</option>
                                <option value="Snacking">Snacking</option>
                                <option value="Portion Distortion">Portion Distortion</option>
                                <option value="Super Sizing">Super Sizing</option>
                                <option value="Any">Any</option>
                            </select>
                            <a href="javascript:void(0);" id="div6b" onclick="replace('div6b','div6a')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>

                        <div class="form-group" id="div6" style="display: none;" onchange="replace('div6','div7')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 12 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> When It Comes To Pets, Its a: </label>
                            <select class="form-select form-control"id="mypets">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Any">Any</option>
                            </select>
                            <a href="javascript:void(0);" id="div6" onclick="replace('div6','div6b')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>

                        <div class="form-group" id="div7" style="display: none;" onchange="replace('div7','div7a')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 13 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> I Enjoy Dates: </label>
                            <select class="form-select form-control"id="mydates">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Regular">Regularly</option>
                                <option value="Once a While">Once a While</option>
                                <option value="I Dont Go">I Dont Go</option>
                            </select>
                            <a href="javascript:void(0);" id="div7" onclick="replace('div7','div6')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>

                        
                        <div class="form-group" id="div7a" style="display: none;" onchange="replace('div7a','div7b')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 14 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> Kids You Have: </label>
                            <select class="form-select form-control"id="myhavekids">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="0">0</option>
                                <option value="1-2">1-2</option>
                                <option value="3-4">3-4</option>
                                <option value="4-5">4-5</option>
                                <option value="6-7">6-7</option>
                                <option value="8-9">8-9</option>
                                <option value="9 & above">9 & above</option>
                            </select>
                            <a href="javascript:void(0);" id="div7a" onclick="replace('div7a','div7')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>

                        <div class="form-group" id="div7b" style="display: none;" onchange="replace('div7b','div7c')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 15 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> My Marital Status Is: </label>
                            <select class="form-select form-control"id="mymaritalstatus">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Single With Kids">Single With Kids</option>
                                <option value="Single & No Kids">Single & No Kids</option>
                                <option value="Never Married">Never Married</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                            <a href="javascript:void(0);" id="div7b" onclick="replace('div7b','div7a')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>

                        <div class="form-group" id="div7c" style="display: none;" onchange="replace('div7c','div8')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 16 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> Want Kids: </label>
                            <select class="form-select form-control"id="mywantkids">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Yes">Yes</option>
                                <option value="No Kids">No Kids</option>
                                <option value="Not Sure">Not Sure</option>
                            </select>
                            <a href="javascript:void(0);" id="div7c" onclick="replace('div7c','div7b')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>


                        <div class="form-group" id="div8" style="display: none;" onchange="replace('div8','div9')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 17 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> My Dress Sense: </label>
                            <select class="form-select form-control"id="mydress">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Casual">Casual</option>
                                <option value="Official">Official</option>
                                <option value="Liberal">Liberal</option>
                                <option value="Indifferent">Indifferent</option>
                                <option value="Any">Any</option>
                            </select>
                            <a href="javascript:void(0);" id="div8" onclick="replace('div8','div7c')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>

                        <div class="form-group" id="div9" style="display: none;" onchange="replace('div9','div10')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 18 of 19</i> 
                        <br>
                            <label style="padding: 8px;"> My Employment Status: </label>
                            <select class="form-select form-control"id="myemployment">
                                <option value="" disabled selected>Select An Option</option>
                                <option value="Employed">Employed</option>
                                <option value="Entrepreneur">Entrepreneur</option>
                                <option value="Unemployed">Unemployed</option>
                                <option value="Still Searching">Still Searching</option>
                                <option value="Self Employed">Self Employed</option>
                            </select>
                            <a href="javascript:void(0);" id="div9" onclick="replace('div9','div8')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                        </div>

                        <div class="form-group" id="div10" style="display: none;" onclick="replace('div9','div11')">
                        <i class="" style="font-size: 11px; color: #7005e3;">Step: 19 of 19</i> 
                        <br>	
                            <label class="control-label" for="textarea">Tell The World More Beautiful Things About Yourself</label><i class="mtrl-select"></i>
                            <textarea class="form-control" rows="7" id="mydetails" required="required" style="background: white;"></textarea>
                            
                        </div>

                        <img src="/Images/green-dots.gif" id="myselfLoader" style="display: none"/>
                        
                        <div class="card-action" id="div11" style="display: none;"  onclick="replace('myself','preference')">
                            <button type="submit" id="updateMyself" class="btn btn-success"><span>Save & Continue To Ideal Match</span></button>
                        </div>
                    
                        <a href="" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Click To Start Over</a>
                    </form>

                    <script src="<?= public_asset('/other_assets/Front/js/AjaxForms/create-myself.js') ?>"></script>
                </div>


                <div id="preference">
                <div class="card-header">
                        <img src="/Images/Body/ideal.png" alt="Preference Image" style="height: 150px;"/>
                        <div class="card-title"><b>Describe Your Ideal Partner</b></div>
                        <small class="form-text text-muted">Answer 20 Questions To Tell Us a Bit About Your Ideal Match. <br>Select Options That Best Describes What You Want In a Partner Then Sit Back And Relax.</small>
                    </div>
                    

                    <form method="post">
                        <input type="hidden" id="uniqueid" value="<?= $userInfo['uniqueid']; ?>" required>
                        <input type="hidden" id="username" value="<?= $userInfo['username']; ?>" required>
                        <input type="hidden" id="url" value="<?= trim(getenv('baseURL'));?>">
                        <input type="hidden" id="urlpref" value="ajax-preference/">

                        <div class="">

                            <div class="prefError_box" style="margin:10px 0px;"></div>

                            <div class="form-group" id="div12" onchange="replace('div12','div12a')">
                                <i class="" style="font-size: 10px; color: #7005e3;">Step: 1 of 20</i>
                                <br>
                                <label style="padding: 8px;"> Partner's Gender: </label>
                                <select class="form-control" id="prefgender">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Any">Any</option>
                                </select>
                            </div>
                            <div class="form-group" id="div12a" style="display: none;" onchange="replace('div12a','div13')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 2 of 20</i>
                            <br>
                                <label style="padding: 8px;"> Partner's Sexual Orientation: </label>
                                <select class="form-control" id="preforientation">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Straight">Straight</option>
                                    <option value="Bisexual">Bisexual</option>

                                    <?php if ($userInfo['gender'] == "Male") { ?>
                                        <option value="Gay">Gay</option>
                                    <?php } else { ?>
                                        <option value="Lesbian">Lesbian</option>
                                    <?php } ?>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div12a" onclick="replace('div12a','div12')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>
                            <div class="form-group" id="div13" style="display: none;" onchange="replace('div13','div13a')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 3 of 20</i>
                            <br>
                                <label style="padding: 8px;">  Partner's Height: </label>
                                <select class="form-control" id="prefheight">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="2Ft to 3Ft">2Ft to 3Ft</option>
                                    <option value="3Ft to 4Ft">3Ft to 4Ft</option>
                                    <option value="4Ft to 5Ft">4Ft to 5Ft</option>
                                    <option value="5Ft to 6Ft">5Ft to 6Ft</option>
                                    <option value="6Ft to 7Ft">6Ft to 7Ft</option>
                                    <option value="8Ft To 9Ft">8Ft To 9Ft</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div13" onclick="replace('div13','div12a')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>
                            <div class="form-group" id="div13a" style="display: none;" onchange="replace('div13a','div13b')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 4 of 20</i>
                            <br>
                            <label style="padding: 8px;">  Partner's Weight: </label>
                                <select class="form-control" id="prefweight">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="20Kg to 30Kg">20Kg to 30Kg</option>
                                    <option value="30Kg to 40Kg">30Kg to 40Kg</option>
                                    <option value="40Kg to 50Kg">40Kg to 50Kg</option>
                                    <option value="50Kg to 60Kg">50Kg to 60Kg</option>
                                    <option value="60Kg to 70Kg">60Kg to 70Kg</option>
                                    <option value="80Kg To 90Kg">80Kg To 90Kg</option>
                                    <option value="90Kg To 100Kg">90Kg To 100Kg</option>
                                    <option value="100Kg To 110Kg">100Kg To 110Kg</option>
                                    <option value="110Kg Above">110Kg Above</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div13a" onclick="replace('div13a','div13')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>
                            <div class="form-group" id="div13b" style="display: none;" onchange="replace('div13b','div14a')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 5 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Partner's Body Type: </label>
                                <select class="form-control" id="prefbodytype">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Slim">Slim</option>
                                    <option value="Ahtletic">Ahtletic</option>
                                    <option value="Chubby">Chubby</option>
                                    <option value="Fat">Fat</option>
                                    <option value="Obess">Obess</option>
                                    <option value="Skinny">Skinny</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div13b" onclick="replace('div13b','div13a')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>
                            <div class="form-group" id="div14a" style="display: none;" onchange="replace('div14a','div14')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 6 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Partner's Religion: </label>
                                <select class="form-control" id="prefreligion">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Christianity">Christianity</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hinduist">Hinduist</option>
                                    <option value="Buddhist">Buddhist</option>
                                    <option value="Traditionist">Traditionist</option>
                                    <option value="Irreligion">Irreligion</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div14a" onclick="replace('div14a','div13b')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>
                            <div class="form-group" id="div14" style="display: none;" onchange="replace('div14','div15a')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 7 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Who Is Looking For: </label>
                                <select class="form-control" id="prefseeking">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Flirting">Flirting</option>
                                    <option value="Gist Pal">Gist Pal</option>
                                    <option value="One Night Stand">One Night Stand</option>
                                    <option value="Marriage">Marriage</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div14" onclick="replace('div14','div13b')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>
                            <div class="form-group" id="div15a" style="display: none;" onchange="replace('div15a','div15b')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 8 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Partner's Smoking Habit: </label>
                                <select class="form-control" id="prefsmoking">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Addict">Addict</option>
                                    <option value="Often">Often</option>
                                    <option value="Socially">Socially</option>
                                    <option value="Once a Blue Moon">Once a Blue Moon</option>
                                    <option value="Never Smoke">Never Smoke</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div15a" onclick="replace('div15a','div14')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>
                            <div class="form-group" id="div15b" style="display: none;" onchange="replace('div15b','div15')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 9 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Partner's Complexion: </label>
                                <select class="form-control" id="prefcomplexion">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="White">White</option>
                                    <option value="Fair">Fair</option>
                                    <option value="Light">Light</option>
                                    <option value="Chocolate">Chocolate</option>
                                    <option value="Dark">Dark</option>
                                    <option value="Black">Black</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div15b" onclick="replace('div15b','div15a')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>
                            <div class="form-group" id="div15" style="display: none;" onchange="replace('div15','div16a')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 10 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Partner's Ethnicity: </label>
                                <select class="form-control" id="prefethnicity">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="African">African</option>
                                    <option value="American">American</option>
                                    <option value="Australian">Australian</option>
                                    <option value="European">European</option>
                                    <option value="Asian">Asian</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div15" onclick="replace('div15','div15b')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>

                            <div class="form-group" id="div16a" style="display: none;" onchange="replace('div16a','div16b')">
                                
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 11 of 20</i>
                                <br>
                                <label style="padding: 8px;"> Who Drinks (Alcohol & Others): </label>
                                <select class="form-control" id="prefdrinking">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Addict">Addict</option>
                                    <option value="Often">Often</option>
                                    <option value="Socially">Socially</option>
                                    <option value="Once a Blue Moon">Once a Blue Moon</option>
                                    <option value="Never Drink">Never Drink</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div16a" onclick="replace('div16a','div15')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>

                            <div class="form-group" id="div16b" style="display: none;" onchange="replace('div16b','div16')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 12 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Whose Eating Habit: </label>
                                <select class="form-control" id="prefeating">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Grazing">Grazing</option>
                                    <option value="Snacking">Snacking</option>
                                    <option value="Portion Distortion">Portion Distortion</option>
                                    <option value="Super Sizing">Super Sizing</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div16b" onclick="replace('div16b','div16a')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>

                            <div class="form-group" id="div16" style="display: none;" onchange="replace('div16','div17')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 13 of 20</i>
                            <br>
                            <label style="padding: 8px;"> When It Comes To Pets, Its a: </label>
                                <select class="form-control" id="prefpets">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div16" onclick="replace('div16','div16b')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>

                            <div class="form-group" id="div17" style="display: none;" onchange="replace('div17','div17a')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 14 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Who Enjoys Dates: </label>
                                <select class="form-control" id="prefdates">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Regular">Regularly</option>
                                    <option value="Once a While">Once a While</option>
                                    <option value="I Dont Go">I Dont Go</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div17" onclick="replace('div17','div16')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>

                            <div class="form-group" id="div17a" style="display: none;" onchange="replace('div17a','div17b')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 15 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Who Has Kids: </label>
                                <select class="form-control" id="prefhavekids">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="0">0</option>
                                    <option value="1-2">1-2</option>
                                    <option value="3-4">3-4</option>
                                    <option value="4-5">4-5</option>
                                    <option value="6-7">6-7</option>
                                    <option value="8-9">8-9</option>
                                    <option value="9 & above">9 & above</option>
                                </select>
                                <a href="javascript:void(0);" id="div17a" onclick="replace('div17a','div17')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>

                            <div class="form-group" id="div17b" style="display: none;" onchange="replace('div17b','div17c')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 16 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Whose Marital Status Is: </label>
                                <select class="form-control" id="prefmaritalstatus">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Single With Kids">Single With Kids</option>
                                    <option value="Single & No Kids">Single & No Kids</option>
                                    <option value="Never Married">Never Married</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div17b" onclick="replace('div17b','div17a')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>

                            <div class="form-group" id="div17c" style="display: none;" onchange="replace('div17c','div18')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 17 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Who Want Kids: </label>
                                <select class="form-control" id="prefwantkids">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No Kids">No Kids</option>
                                    <option value="Not Sure">Not Sure</option>
                                </select>
                                <a href="javascript:void(0);" id="div17c" onclick="replace('div17c','div17b')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>

                            <div class="form-group" id="div18" style="display: none;" onchange="replace('div18','div19')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 18 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Whose Dress Sense: </label>
                                <select class="form-control" id="prefdress">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Official">Official</option>
                                    <option value="Liberal">Liberal</option>
                                    <option value="Indifferent">Indifferent</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div18" onclick="replace('div18','div17c')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>

                            <div class="form-group" id="div19" style="display: none;" onchange="replace('div19','div20')">
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 19 of 20</i>
                            <br>
                            <label style="padding: 8px;"> Whose Employment Status: </label>
                                <select class="form-control" id="prefemployment">
                                    <option value="" disabled selected>Select An Option</option>
                                    <option value="Employed">Employed</option>
                                    <option value="Entrepreneur">Entrepreneur</option>
                                    <option value="Unemployed">Unemployed</option>
                                    <option value="Still Searching">Still Searching</option>
                                    <option value="Self Employed">Self Employed</option>
                                    <option value="Any">Any</option>
                                </select>
                                <a href="javascript:void(0);" id="div19" onclick="replace('div19','div18')" style="margin-top: 30px; margin-bottom: 30px; float: left; font-size: 11px;">Back One Step</a>
                            </div>

                            <div class="form-group" id="div20" style="display: none;" onclick="replace('div19','div21')">	
                            <i class="" style="font-size: 10px; color: #7005e3;">Step: 20 of 20</i>
                            <br>
                            <label class="control-label" for="textarea">Outline Any Other Information You Would Want In a Potential Match</label><i class="mtrl-select"></i>
                            <textarea class="form-control" rows="4" id="prefdetails" required style="background: white;"></textarea>
                            </div>
                            
                            <!-- <img src="/Images/green-dots.gif" id="prefLoader" style="display: none"/>
                            <img src="/Images/green-dots.gif" id="myselfLoader" style="display: none"/> -->
                            <div class="clickable" style="margin:10px 0px;"></div>
                            
                            <div class="submit-btns" id="div21" style="display: none;"  onclick="replace('preference','myself')">
                                <button type="submit" id="updatePreference" class="btn btn-success"><span>Save Ideal Match</span></button>
                            </div>
                        </div><!-- preference -->
                    
                        <a href="" style="margin-top: 30px; margin-bottom: 30px; float: right; font-size: 11px;">Click To Start Over</a>
                    
                    </form>

                    <script src="<?= public_asset('/other_assets/Front/js/AjaxForms/create-preference.js') ?>"></script>
                </div>

            </div>
            <!-- End Second Column Side -->


            <!-- Third Column Side -->
            <div class="col-md-3 col-lg-3">

                

            </div>
            <!-- End Third Column Side -->

        </div>
   









<!-- End oF file -->

	</div>
</main>



<?php include 'Layout/footer.php'; ?>


        <div class="row">

            <input type="hidden" id="uniqueid" value="<?= $userInfo['uniqueid']; ?>" required>
            <input type="hidden" id="username" value="<?= $userInfo['username']; ?>" required>
            <input type="hidden" id="url" value="<?= trim(getenv('baseURL'));?>">
            <input type="hidden" id="urlmy" value="ajax-myself/">

            <!-- First Column Side -->
            <div class="col-md-6 col-lg-3">

                

            </div>
            <!-- End First Column Side -->


            <!-- Second Column Side -->
            <div class="col-md-6 col-lg-6">

                <div id="myself">

                    <div class="card-header">
                        <img src="/Images/Body/done.png" alt="Preference Image" style="height: 120px;"/>
                        <div class="card-title">Tell The World About Yourself</div>
                        <small class="form-text text-muted">Answer 19 Questions To Tell Us a Bit About Your Personality, Select Options That Best Describes You Then Sit Back And Relax.</small>
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
                    
                        <a href="" style="margin-top: 30px; float: right; font-size: 11px;">Click To Start Over</a>
                    </form>

                    <script src="<?= public_asset('/other_assets/Front/js/ajaxForms/create-myself.js') ?>"></script>
                </div>


                <div id="preference" style="display: none;">
                    <?php include 'preference.php'; ?>
                </div>

            </div>
            <!-- End Second Column Side -->


            <!-- Third Column Side -->
            <div class="col-md-6 col-lg-3">

                

            </div>
            <!-- End Third Column Side -->

        </div>
   





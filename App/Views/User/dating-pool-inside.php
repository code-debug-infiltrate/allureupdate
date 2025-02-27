<div class="row" id="dating-pool-inside">
<?php if ($veryClose) { ?>
	<?php foreach($veryClose as $key => $info) { ?>	
    	<?php foreach ($userProfiles as $key => $user) { if (($user['uniqueid'] == $info['uniqueid']) && ($userInfo['uniqueid'] != $info['uniqueid']) && ($userInfo['gender'] != $user['gender'])) { ?>

            <?php if ($user['dob']) { $newDob = $user['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>

            <div class="col-lg-3 m-b30" id="supportTab">
                <span class="close" id="supportTab" style="font-size: 40px; padding: 5px;" onclick="document.getElementById('supportTab').style.display='none'"> &times;</span>
                <div class="widget-box">
                    <div class="wc-title">
                    <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
                        <center> <img class="card-img-top" src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="<?= $user['fname']?> Photo" style="width: 180px; height: 200px; border-radius: 100%;"/></center>    
                    </a>
                    </div>
			        <div class="widget-inner">
                        <div class="separator-solid"></div>
                        <p class="card-category text-info mb-1" style="margin-top: -40px;"> 
                            <i style="font-size: 12px;">Match Score:</i> <em style="color: green;">60%+</em>
                        </p>
                        <h3 class="card-title">
                            <?php foreach ($userOnlineStatus as $key => $logstatus) { if ($logstatus['uniqueid'] == $info['uniqueid']) { ?>
                                <?php if ($logstatus['login_status'] == "Logged_in") { ?>
                                    <img src="/Images/Body/online.png" style="max-width: 16px; margin-right: 10px;"/>
                                <?php } else { ?>
                                    <img src="/Images/Body/offline.png" style="max-width: 16px; margin-right: 10px;"/>
                            <?php } } }?>
                            <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about"> <?= $user['fname']?>, <?= $age; ?> </a> </h3>
                        <p class="card-text">
                            <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about" style="font-size: 11px; color: black;"><?= substr($info['details'], 0, 85); ?>...</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } } ?>
    <?php }  } ?>
</div>




<div class="row">
    <?php if ($slightlyClose) { ?>
	<?php foreach($slightlyClose as $key => $info) { ?>	
    	<?php foreach ($userProfiles as $key => $user) { if (($user['uniqueid'] == $info['uniqueid']) && ($userInfo['uniqueid'] != $info['uniqueid'])) { ?>

            <?php if ($user['dob']) { $newDob = $user['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>

            <div class="col-lg-3 m-b30" id="<?= $info['uniqueid']; ?>">
                <span class="close" id="<?= $info['uniqueid']; ?>" style="font-size: 30px; padding: 5px;" onclick="document.getElementById('<?= $info['uniqueid']; ?>').style.display='none'"> &times;</span>
                <div class="widget-box image-effect">
                    <div class="wc-title">
                        
                <p style="margin-top: -10px; font-size: 11px;">Match Score: <em style="color: red;">-50%</em></p>
                        <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
                            <center> <img class="card-img-top" src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="<?= $user['fname']?> Photo" style="width: 180px; height: 200px;"/></center>
                        </a>    
                    </div>
			        <div class="widget-inner">
                        <div class="separator-solid"></div>
                        <!-- <p class="card-category text-info mb-1"> 
                            <i style="font-size: 12px;">Match Score:</i> <em style="color: red; font-size: 12px;">-50%</em> 
                        </p> -->
                        <h6 class="card-title" style="margin-top: -40px;">
                            <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
                                <?php foreach ($userOnlineStatus as $key => $logstatus) { if ($logstatus['uniqueid'] == $info['uniqueid']) { ?>
                                    <?php if ($logstatus['login_status'] == "Logged_in") { ?>
                                        <img src="/Images/Body/online.png" style="max-width: 12px; margin-right: 5px;"/>
                                    <?php } else { ?>
                                        <img src="/Images/Body/offline.png" style="max-width: 12px; margin-right: 5px;"/>
                                <?php } } } ?>
                                
                                <b><?= $user['fname']?>,</b> <i style="font-size: 11px;"><?= $age; ?> | <?= $user['city']?> </i>
                            </a> 
                        </h6>
                        
                        <p class=""style="line-height: 17px;"> <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about" style="font-size: 12px; color: black;"><?= substr($info['details'], 0, 65); ?>...</a> </p>
                        
                        <div style="margin-top: -20px;">
                            <a href="#" data-toggle="modal" data-target="#msgModal<?= $info['uniqueid']; ?>" style="float: left; margin-bottom: 10px;"><img src="/Images/Body/msgcount1.gif" alt="Email" style="width: 50px;"></a>       <a href="#" data-toggle="modal" data-target="#pokeModal<?= $info['uniqueid']; ?>" style="float: right; margin-bottom: 5px;"><img src="/Images/Body/love.gif" alt="Poke" style="width: 50px;"></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Message Modal -->
            <div class="modal fade review-bx-reply" id="msgModal<?= $info['uniqueid']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background: #fbcdfb;">
                        <div class="modal-header">
                            <h5 class="modal-title" style="float: center; padding: 10px; font-weight: 600;">Send <?= $user['fname']; ?> <?= $user['lname']; ?> a Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <textarea class="form-control" placeholder="Send a Message to the <?= $user['fname']; ?>" rows="5"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="checkRate" class="btn-secondry add-item m-r5">Send Message <i class="ti-arrow-right"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Message Modal -->


            <!-- Poke Modal -->
            <div class="modal fade review-bx-reply" id="pokeModal<?= $info['uniqueid']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background: #fbcdfb;">
                        <div class="modal-header">
                            <h5 class="modal-title" style="float: center; padding: 10px; font-weight: 600;">Make The First Move On <?= $user['fname']; ?> <?= $user['lname']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="/Images/Body/love.gif" alt="Poke Icon" style="width: 150px;">
                            <button type="button" class="btn-secondry add-item m-r5">Poke <?= $user['fname']; ?></button>
                            <br>
                            <p style="text-align: center; font-size: 12px;">This a Good Way To Start a Conversation With <?= $user['fname']; ?> <?= $user['lname']; ?>. <br>Pokes Are Free!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Poke Modal -->

        <?php } } ?>
    <?php } ?>
    <?php } else { ?>
        <center><p class="mt-5 mb-5" style="font-size: 20px;">You Currently Have NO MATCH In The Virtual Pool! <br><a href="<?= baseURL('us-preferences/'); ?><?= $userInfo['uniqueid']; ?>/">Reset Your Preferences</a></p></center>
    <?php } ?>
</div>
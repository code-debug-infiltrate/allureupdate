<div class="row" id="dating-pool-inside">
<?php if ($veryClose) { ?>
	<?php foreach($veryClose as $key => $info) { ?>	
    	<?php foreach ($userProfiles as $key => $user) { if (($user['uniqueid'] == $info['uniqueid']) && ($userInfo['uniqueid'] != $info['uniqueid']) && ($userInfo['gender'] != $user['gender'])) { ?>

            <?php if ($user['dob']) { $newDob = $user['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>

            <div class="col-lg-3 m-b30" id="<?= $info['uniqueid']; ?>">
                <span class="close" id="<?= $info['uniqueid']; ?>" style="font-size: 30px; padding: 5px;" onclick="document.getElementById('<?= $info['uniqueid']; ?>').style.display='none'"> &times;</span>
                <div class="widget-box image-effect"  style="background: transparent; border:2px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40);">
                    <div class="wc-title">
                        
                        <p style="margin-top: -10px; font-size: 11px;">Match Score: <em style="color: green;">70%+</em></p>
                        <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
                            <center> <img class="card-img-top" src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="<?= $user['fname']?> Photo" style="width: 180px; height: 200px;"/></center>
                        </a>
                        <div class="separator-solid"></div>    
                    </div>
			        <div class="widget-inner" style="padding-bottom: 0;">
                        
                        <h6 class="card-title" style="margin-top: -30px;">
                            <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
                                <?php foreach ($userOnlineStatus as $key => $logstatus) { if ($logstatus['uniqueid'] == $info['uniqueid']) { ?>
                                    <?php if ($logstatus['login_status'] == "Logged_in") { ?>
                                        <img src="/Images/Body/online.png" style="max-width: 12px; margin-right: 5px;"/>
                                    <?php } else { ?>
                                        <img src="/Images/Body/offline.png" style="max-width: 12px; margin-right: 5px;"/>
                                <?php } } } ?>
                                
                                <b><?= $user['fname']?>,</b> <i style="font-size: 11px;"><?= $age; ?> Yrs | <?= $user['city']?> </i>
                            </a> 
                        </h6>
                        
                        <p class=""style="line-height: 17px;"> <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about" style="font-size: 12px; color: black;"><?= substr($info['details'], 0, 60); ?>...</a> </p>
                       
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
                <div class="widget-box image-effect" style="background: transparent; border:2px solid #ffffff; padding: 10px; border-radius: 5px; box-shadow:0 5px 10px 0px rgba(0,0,0,.40);">
                    <div class="wc-title">
                        
                        <p style="margin-top: -10px; font-size: 11px;">Match Score: <em style="color: red;">-50%</em></p>
                        <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
                            <center> <img class="card-img-top" src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="<?= $user['fname']?> Photo" style="width: 180px; height: 200px;"/></center>
                        </a>
                        <div class="separator-solid"></div>    
                    </div>
			        <div class="widget-inner" style="padding-bottom: 0;">
                        <h6 class="card-title" style="margin-top: -30px;">
                            <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
                                <?php foreach ($userOnlineStatus as $key => $logstatus) { if ($logstatus['uniqueid'] == $info['uniqueid']) { ?>
                                    <?php if ($logstatus['login_status'] == "Logged_in") { ?>
                                        <img src="/Images/Body/online.png" style="max-width: 12px; margin-right: 5px;"/>
                                    <?php } else { ?>
                                        <img src="/Images/Body/offline.png" style="max-width: 12px; margin-right: 5px;"/>
                                <?php } } } ?>
                                
                                <b><?= $user['fname']?>,</b> <i style="font-size: 11px;"><?= $age; ?> Yrs | <?= $user['city']?> </i>
                            </a> 
                        </h6>
                        
                        <p class=""style="line-height: 17px;"> <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about" style="font-size: 12px; color: black;"><?= substr($info['details'], 0, 60); ?>...</a> </p>
                       
                    </div>
                </div>
            </div>

        <?php } } ?>
    <?php } ?>
    <?php } else { ?>
        <div class="col-lg-12" style="text-align: center;"><p class="mt-5 mb-5" style="font-size: 20px;">You Currently Have NO MATCH In The Virtual Pool! <br><a href="<?= baseURL('us-preferences/'); ?><?= $userInfo['uniqueid']; ?>/">Reset Your Preferences</a></p></div>
    <?php } ?>
</div>
<div class="row">
<?php if ($veryClose) { ?>
	<?php foreach($veryClose as $key => $info) { ?>	
    	<?php foreach ($userProfiles as $key => $user) { if (($user['uniqueid'] == $info['uniqueid']) && ($userInfo['uniqueid'] != $info['uniqueid']) && ($userInfo['gender'] != $user['gender'])) { ?>

            <?php if ($user['dob']) { $newDob = $user['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>

            <div class="col-md-2 col-md-3">
                <div class="card card-post card-round">
                <center> <img class="card-img-top" src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="<?= $user['fname']?> Photo" style="width: 180px; height: 200px; border-radius: 100%;"/></center>
                    <div class="card-body">
                        <div class="separator-solid"></div>
                        <p class="card-category text-info mb-1" style="margin-top: -40px;"> 
                            <a href="javascript:void(0);" style="color: green;">70%+</a> 
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
    	<?php foreach ($userProfiles as $key => $user) { if (($user['uniqueid'] == $info['uniqueid']) && ($userInfo['uniqueid'] != $info['uniqueid']) && ($userInfo['gender'] != $user['gender'])) { ?>

            <?php if ($user['dob']) { $newDob = $user['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>

            <div class="col-md-2 col-md-3">
                <div class="card card-post card-round">
                    <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
                        <center> <img class="card-img-top" src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="<?= $user['fname']?> Photo" style="width: 180px; height: 200px; border-radius: 100%;"/></center>
                    </a>    
                    <div class="card-body">
                        <div class="separator-solid"></div>
                        <p class="card-category text-info mb-1" style="margin-top: -40px;"> 
                            <a href="javascript:void(0);" style="color: red;">-60%</a> 
                        </p>
                        <h3 class="card-title">
                            <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
                                <?php foreach ($userOnlineStatus as $key => $logstatus) { if ($logstatus['uniqueid'] == $info['uniqueid']) { ?>
                                    <?php if ($logstatus['login_status'] == "Logged_in") { ?>
                                        <img src="/Images/Body/online.png" style="max-width: 16px; margin-right: 10px;"/>
                                    <?php } else { ?>
                                        <img src="/Images/Body/offline.png" style="max-width: 16px; margin-right: 10px;"/>
                                <?php } } } ?>
                                <?= $user['fname']?>, <?= $age; ?> 
                            </a> 
                        </h3>
                        <p class="card-text">
                            <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about" style="font-size: 11px; color: black;"><?= substr($info['details'], 0, 85); ?>...</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } } ?>
    <?php } ?>
    <?php } else { ?>
        <center><p class="mt-5 mb-5" style="font-size: 20px;">You Currently Have NO MATCH In The Virtual Pool! <br><a href="<?= baseURL('us-preferences/'); ?><?= $userInfo['uniqueid']; ?>/">Reset Your Preferences</a></p></center>
    <?php } ?>
</div>
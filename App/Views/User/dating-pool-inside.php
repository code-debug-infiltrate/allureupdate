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
                <div class="widget-box">
                    <div class="wc-title">
                    <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about">
                        <center> <img class="card-img-top" src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="<?= $user['fname']?> Photo" style="width: 180px; height: 200px; border-radius: 100%;"/></center>
                    </a>    
                    </div>
			        <div class="widget-inner">
                        <div class="separator-solid"></div>
                        <p class="card-category text-info mb-1" style="margin-top: -40px;"> 
                            <i style="font-size: 12px;">Match Score:</i> <em style="color: red;">-50%</em> 
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
                        <div class="card-text">
                            <a href="#" data-toggle="modal" data-target="#msgModal" style="float: left;"><img src="/Images/Body/msg.gif" alt="Email" style="width: 60px;"></a>       <a href="#" data-toggle="modal" data-target="#pokeModal<?= $info['uniqueid']; ?>" style="float: right;"><img src="/Images/Body/love.gif" alt="Poke" style="width: 60px;"></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Poke Modal -->
            <div class="modal fade review-bx-reply" id="pokeModal<?= $info['uniqueid']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background: #fff;">
                        <div class="modal-header">
                            <h5 class="modal-title widget-bg1" style="float: center; padding: 10px; color: #fff; border-radius: 10px;">Poke <?= $user['fname']; ?> <?= $user['lname']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <p class="mt-5" style="text-align: center; font-size: 16px; color: green;">This Service Is Currently Not Available In Your Region. </p>
                            
                            <!-- <textarea class="form-control" placeholder="Type text"></textarea> -->
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn mr-auto">Reply</button>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Poke Modal -->

        <?php } } ?>
    <?php } ?>
    <?php } else { ?>
        <center><p class="mt-5 mb-5" style="font-size: 20px;">You Currently Have NO MATCH In The Virtual Pool! <br><a href="<?= baseURL('us-preferences/'); ?><?= $userInfo['uniqueid']; ?>/">Reset Your Preferences</a></p></center>
    <?php } ?>
</div>
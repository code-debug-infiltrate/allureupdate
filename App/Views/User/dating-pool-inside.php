<?php if ($veryClose) { ?>
	<?php foreach($veryClose as $key => $info) { ?>	
    	<?php foreach ($userProfiles as $key => $user) { if (($user['uniqueid'] == $info['uniqueid']) && ($userInfo['uniqueid'] != $info['uniqueid'])) { ?>

            <?php if ($user['dob']) { $newDob = $user['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>

            <div class="col-md-2 col-md-3">
                <div class="card card-post card-round">
                    <img class="card-img-top" src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="<?= $user['fname']?> Photo" />
                    <div class="card-body">
                        <div class="separator-solid"></div>
                        <p class="card-category text-info mb-1" style="margin-top: -40px;"> <a href="#">Design</a> </p>
                        <h3 class="card-title"><a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $info['uniqueid']; ?>&tab=about"> <?= $user['fname']?> <?= $user['lname']?>, <?= $age; ?> </a> </h3>
                        <p class="card-text">
                            <?= substr($user['details'], 0, 40); ?>...
                        </p>
                        <!-- <a href="#" class="btn btn-primary btn-rounded btn-sm">Read More</a> -->
                    </div>
                </div>
            </div>
        <?php } } ?>
    <?php } ?>
    <?php } else { ?>
        <center><p class="mt-5 mb-5" style="font-size: 24px;">You Currently Have NO MATCH In The Virtual Pool! <br>Reset Your Preferences</p></center>
    <?php } ?>
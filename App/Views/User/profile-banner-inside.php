<div class="row">
    <!-- Your Profile Views Chart -->
    <div class="col-lg-12">
        <div class="widget">
            <!-- <div class="wc-title">
                <h4>Courses Bookmarks</h4>
            </div> -->
            
            <?php if ($userInfo['dob']) { $newDob = $userInfo['dob']; $age = (date('Y') - date('Y', strtotime($newDob))); } ?>

            <div class="widget-inner">
                <div class="card-courses-list bookmarks-bx">
                    <div class="card-courses-media">
                        <img alt="User Photo" src="<?= public_asset('/other_assets/Profile/') ?><?= $userInfo['profileimage']; ?>"/>
                    </div>
                    <div class="card-courses-full-dec">
                        <div class="card-courses-title">
                            <h4 class="m-b5"><?= $userInfo['fname']; ?> <?= $userInfo['lname']; ?> [<?= $userInfo['username']; ?>]</h4>
                        </div>
                        <div class="card-courses-list-bx">
                            <ul class="card-courses-view">
                                <li class="">
                                    <h5 style="color: #000000; font-size: 12px;">Age</h5>
                                    <?php if ($userInfo['dob']) { ?>
                                        <p style="font-size: 14px;"><?= $age; ?> Years</p>
                                    <?php } else { ?>
                                        <a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/?tab=bioTab" style="font-size: 11px; margin: 5px;">Go To Settings</a>
                                    <?php } ?>
                                </li>
                                <li class="">
                                    <h5 style="color: #000000; font-size: 12px;">Gender</h5>
                                    <?php if ($userInfo['gender']) { ?>
                                        <p style="font-size: 14px;"><?= $userInfo['gender']; ?></p>
                                    <?php } else { ?>
                                        <a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/?tab=bioTab" style="font-size: 11px; margin: 5px;">Go To Settings</a>
                                    <?php } ?>
                                </li>
                                <li class="">
                                    <h5 style="color: #000000; font-size: 12px;">Occupation</h5>
                                    <?php if ($userInfo['occupation']) { ?>
                                        <p style="font-size: 14px;"><?= $userInfo['occupation']; ?></p>
                                    <?php } else { ?>
                                        <a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/?tab=bioTab" style="font-size: 11px; margin: 5px;">Go To Settings</a>
                                    <?php } ?>
                                </li>
                                <li class="">
                                     <h5 style="color: #000000; font-size: 12px;">Phone No.</h5>
                                    <?php if ($userInfo['number']) { ?>
                                        <p style="font-size: 14px;"><?= $userInfo['number']; ?> </p>
                                    <?php } else { ?>
                                        <a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/?tab=bioTab" style="font-size: 11px; margin: 5px;">Go To Settings</a>
                                    <?php } ?>	
                                </li>
                                <li class="">
                                    <h5 style="color: #000000; font-size: 12px;">Email</h5>
                                    <p style="font-size: 14px;"><?= $userInfo['email']; ?></p>
                                </li>
                                <li class="">
                                    <h5 style="color: #000000; font-size: 12px;">Location</h5>
                                    <?php if ($userInfo['address']) { ?>
                                        <p style="font-size: 14px;"><?= $userInfo['city']; ?>, <?= $userInfo['country']; ?></p>
                                    <?php } else { ?>
                                        <a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/?tab=addressTab" style="font-size: 11px; margin: 5px;">Go To Settings</a>
                                    <?php } ?>
                                </li>
                                <li class="">
                                    <h5 style="color: #000000; font-size: 12px;">Member Since</h5>
                                    <p style="font-size: 14px;"><?= $userInfo['created']; ?></p>
                                </li>
                            </ul>
                        </div>
                        <div class="row card-courses-dec">
                            <div class="col-md-12">
                            <?php if ($userInfo['details']) { ?>
                                <p><?= $userInfo['details']; ?> </p>
                            <?php } else { ?>
                                   <center> <a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/?tab=bioTab" style="font-size: 16px; margin: 5px;">Tell The World Facsinating Details About You.</a> </center>
                                <?php } ?>		
                            </div>
                            <div class="row col-md-12">
                                <p> </p>	
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
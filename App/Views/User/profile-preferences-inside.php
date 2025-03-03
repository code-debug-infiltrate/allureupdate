    <div class="row">
          
        <!-- First Column Side -->
        <div class="col-md-4 col-lg-4">

            <?php if ($user_interests) { ?>
            <h2>My Interests</h2>
                <ul class="ttr-header-navigation">
                    <?php foreach($user_interests as $key => $interest) { ?>
                    <li>
                        <i class="ti-game mr-2"></i> <?= $interest['details']; ?></a>
                    </li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <p class="m-5"><a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/?tab=bioTab">Add Your Interests</a></p>
            <?php } ?>

            <hr>
            <?php if ($user_language) { ?>
            <h2>My Languages</h2>
                <ul class="ttr-header-navigation">
                    <?php foreach($user_language as $key => $language) { ?>
                    <li>
                        <i class="ti-game mr-2"></i> <?= $language['language']; ?></a>
                    </li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <p class="m-5"><a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/?tab=bioTab">Add Your Languages</a></p>
            <?php } ?>

            <hr>
            <?php if ($user_workedu) { ?>
            <h2>My Education | Work </h2>
            <?php } else { ?>
                <p class="m-5"><a href="<?= baseURL('us-settings/'); ?><?= $userInfo['uniqueid']; ?>/?tab=bioTab">Add Your Education And Work</a></p>
            <?php } ?>

        </div>
        <!-- End First Column Side -->            
        


        <!-- Second Column Side -->
        <div class="col-md-4 col-lg-4">

            <?php if ($user_myself) { ?>
            <h2>My Qualities</h2>
            <ul class="ttr-header-navigation">
                
                <li>
                    <b>🌟  Sexual Orientation: </b> <?= $user_myself['orientation']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Ethnicity:</b>  <?= $user_myself['ethnicity']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Body Type: </b> <?= $user_myself['bodytype']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Height: </b> <?= $user_myself['height']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Weight: </b> <?= $user_myself['weight']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Skin Color: </b> <?= $user_myself['color']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Pets: </b> <?= $user_myself['pets']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Smoking Habit: </b> <?= $user_myself['smoking']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Eating Habit: </b> <?= $user_myself['eating']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Alcohol: </b> <?= $user_myself['drinking']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Employment: </b> <?= $user_myself['employment']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Religion: </b> <?= $user_myself['religion']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Dress Sense: </b> <?= $user_myself['dress']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Outing|Dates: </b> <?= $user_myself['dates']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  My Kids: </b> <?= $user_myself['havekids']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Want Kids: </b> <?= $user_myself['wantkids']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Marital Status: </b> <?= $user_myself['maritalstatus']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Looking For: </b> <?= $user_myself['seeking']; ?></a>
                </li>
                
            </ul>
            
            <hr>
            <?php } else { ?>
                <p class="m-5"><a href="<?= baseURL('us-preferences/'); ?><?= $userInfo['uniqueid']; ?>/?tab=bioTab">Set Up Your Profile</a></p>
            <?php } ?>
            
        </div>
        <!-- End Second Column Side -->

        

        <!-- Third Column Side -->
        <div class="col-md-4 col-lg-4">

            <?php if ($user_preference) { ?>
            <h2>Ideal Partner Qualities</h2>
            <ul class="ttr-header-navigation">
                
            <li>
                    <b>🌟  Sexual Orientation: </b> <?= $user_preference['orientation']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Ethnicity:</b>  <?= $user_preference['ethnicity']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Body Type: </b> <?= $user_preference['bodytype']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Height: </b> <?= $user_preference['height']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Weight: </b> <?= $user_preference['weight']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Skin Color: </b> <?= $user_preference['color']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Pets: </b> <?= $user_preference['pets']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Smoking Habit: </b> <?= $user_preference['smoking']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Eating Habit: </b> <?= $user_preference['eating']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Alcohol: </b> <?= $user_preference['drinking']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Employment: </b> <?= $user_preference['employment']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Religion: </b> <?= $user_preference['religion']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Dress Sense: </b> <?= $user_preference['dress']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Outing|Dates: </b> <?= $user_preference['dates']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Have Kids: </b> <?= $user_preference['havekids']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Want Kids: </b> <?= $user_preference['wantkids']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Marital Status: </b> <?= $user_preference['maritalstatus']; ?></a>
                </li>
                <hr>
                <li>
                    <b>🌟  Looking For: </b> <?= $user_preference['seeking']; ?></a>
                </li>
                
            </ul>
            
            <hr>
            <?php } else { ?>
                <p class="m-5"><a href="<?= baseURL('us-preferences/'); ?><?= $userInfo['uniqueid']; ?>/?tab=bioTab">Set Up Your Ideal Preference</a></p>
            <?php } ?>
            
        </div>
        <!-- End Third Column Side -->

    </div>
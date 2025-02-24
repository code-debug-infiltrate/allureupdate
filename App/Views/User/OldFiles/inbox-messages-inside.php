<?php if($randomBuddy != null) { ?>
                
    <div class="card card-round" style="margin: 10px;">
        <div class="card-body">
        <!-- <div class="card-title fw-mediumbold">Random Meet Ups</div> -->
        <div class="card-list">
        <?php foreach ($randomBuddy as $key => $buddy) { ?>
            <?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $buddy['uniqueid']) { ?>
            <div class="item-list">
            <div class="avatar">
                <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $buddy['uniqueid']; ?>&tab=about" data-toggle="tooltip" title="View Buddy Profile">
                <img
                src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>"
                alt="Buddy Photo"
                class="avatar-img rounded-circle"
                />
                </a>
            </div>
            <div class="info-user ms-3">
                <?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $buddy['uniqueid']) { ?>
                <div class="username"><?= $user['fname']; ?> <?= $user['lname']; ?></div>
                <div class="status"><?= $user['occupation']; ?></div>
                <?php } } ?>
            </div>
            <a href="<?= baseURL('view-user/'); ?><?= $userInfo['uniqueid']; ?>/?buddy=<?= $buddy['uniqueid']; ?>&tab=about">
                <button class="btn btn-icon btn-primary btn-round btn-xs">
                <i class="fa fa-plus"></i>
                </button>
            </a>
            </div>
            <?php } } ?>
        </div>
        </div>
    </div>
    
<?php } } ?>
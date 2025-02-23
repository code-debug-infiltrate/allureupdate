<!-- Sidebar -->
      <div class="sidebar" style="background: #fbcdfb;">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" style="background: #7005e3;">
            <a href="<?= baseURL('us-index/')?><?= $userInfo['uniqueid']; ?>/?tab=timeline" class="logo">
              <img
                src="/Images/Logo/favicon.png"
                alt="navbar brand"
                class="navbar-brand"
                height="50"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">

          <div style="margin: 10px; text-align: center;"><p style="color: #000f0f;"><b id="grtnMsg1"></b>  <br><?= $userInfo['username']; ?></p></div>

            <div class="card card-round" style="margin: 10px;">
              <div class="card-body" style="background: #fbcdfb; border-radius: 10px;">
                <span style="margin-bottom: 5px; font-size: 10px;"><i class="fa fa-comments" style="font-size: 16px; color: #700bcd; margin-right: 5px;"></i> Buddy Chats <em><?= number_format($newChatCount);?></em></span>
                <hr>
                <span style="margin-bottom: 5px; font-size: 10px;"><i class="fa fa-envelope" style="font-size: 16px; color: #700bcd; margin-right: 5px;"></i> Mail Box <em><?= number_format($newMessageCount);?></em></span>
                <hr>       
                <span style="margin-bottom: 5px; font-size: 10px;"><i class="fa fa-group" style="font-size: 16px; color: #700bcd; margin-right: 5px;"></i> Match Pool <em><?php if ($matchCount) { echo number_format(count($matchCount)); } else { echo 0; }?></em></span>
                <hr>
                <span style="margin-bottom: 5px; font-size: 10px;"><i class="fa fa-bell" style="font-size: 16px; color: #700bcd; margin-right: 5px;"></i> Notifications <em><?= number_format($userNoticeCount);?></em></span>
                <hr>
                <span style="margin-bottom: 5px; font-size: 10px;"><img src="/Images/Body/online.png" style="max-width: 16px;"/> Online Around You <em><?= number_format($onlineNow); ?></em></span>
                
              </div>
            </div>
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

          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      
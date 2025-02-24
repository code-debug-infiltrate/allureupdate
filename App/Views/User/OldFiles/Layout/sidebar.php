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

          <!-- <div style="margin: 10px; text-align: center;"><p style="color: #700bcd;"><b>Hi,</b> <?= $userInfo['username']; ?></p></div> -->

            <div class="card card-round" style="margin: 10px;">
              <!-- <div style="margin-top: 10px; text-align: center;"><p style="color: #700bcd;"><b>Dashboard</b> Analysis</p></div> -->
              <div class="card-body" style="background: #fff; border-radius: 10px;">
                <span style="font-size: 10px; font-weight: 600;"><img src="/Images/Body/msg.gif" style="width: 40px; margin-right: 8px;"> Buddy Chats <em style="margin-left: 8px;"><?= number_format($newChatCount);?></em></span>
                <hr>      
                <span style="font-size: 10px; font-weight: 600;"><img src="/Images/Body/ideal.png" style="width: 40px; margin-right: 8px;"> Match Pool <em style="margin-left: 8px;"><?php if ($matchCount) { echo number_format(count($matchCount)); } else { echo 0; }?></em></span>
                <hr>
                <span style="font-size: 10px; font-weight: 600;"><img src="/Images/Body/online.png" style="width: 20px; margin-right: 8px;"/> Online Around You <em style="margin-left: 8px;"><?= number_format($onlineNow); ?></em></span>
                
              </div>
            </div>

            <div class="" style="margin: 10px;">
              <a href=""><img src="/Images/Body/subscribe.png" alt="Subscribe Button" style="width: 100%; height: 100px;"></a>
            </div>




            <?php if($randomBuddy != null) { ?>
                
                <div class="card card-round" style="margin: 10px;">
                  <div style="margin-top: 10px; text-align: center;"><p style="color: #700bcd;"><b>Random</b> Buddies</p></div>
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

      
<!-- Sidebar -->
      <div class="sidebar" style="background: #7005e3;">
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
    <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
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
          <!-- Navbar Header -->
          <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom" >
            
            <?php if (($userNoticeCount > 0) || ($newChatCount > 0) || ($newMessageCount > 0)) { ?>
              <iframe src="/Images/Sounds/ding-sound.mp3" allow="autoplay" style="display:none" autoplay></iframe>
            <?php } ?>
          
            <div class="container-fluid">
              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="messageDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa-envelope" style="color: #fbcdfb;"></i>
                    <span class="notification"><?= number_format($newMessageCount);?></span>
                  </a>
                  <ul
                    class="dropdown-menu messages-notif-box animated fadeIn"
                    aria-labelledby="messageDropdown"
                  >
                    <li>
                      <div class="dropdown-title">
                        You have <?= number_format($newMessageCount);?> Message(s)
                      </div>
                    </li>

                    <!-- <li>
                      <div
                        class="dropdown-title d-flex justify-content-between align-items-center"
                      >
                        Messages
                        <a href="#" class="small">Mark all as read</a>
                      </div>
                    </li> -->
                    <li>
                      <div class="message-notif-scroll scrollbar-outer">
                        <div class="notif-center">
                        <?php if ($newMessageDetails) { ?>
                            <?php foreach ($newMessageDetails as $key => $msgDet) { ?>
                            <a href="<?= baseURL('us-messages/')?><?= $userInfo['uniqueid']; ?>/?box=Inbox" data-toggle="tooltip" title="Notifications">
                                <?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $msgDet['sender']) { ?>
                                <div class="notif-img">
                                    <img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="Buddy-Photo">
                                </div>
                                <div class="notif-content">
                                <span class="subject"><?= $user['fname']; ?> <?= $user['lname']; ?></span>
                                <span class="block"> <?= $msgDet['details']; ?> </span>
                                <span class="time"><?php echo(''.timeAgo(date('Y/m/d', strtotime($msgDet['created']))).''); ?></span>
                                </div>
                                <?php } } ?>
                            </a>
                            <?php } } else { ?>
								<center><p>No New Message</p></center>
							<?php } ?>
                          
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class="see-all" href="<?= baseURL('us-messages/')?><?= $userInfo['uniqueid']; ?>/?box=Inbox"
                        >See all<i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="notifDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa-bell" style="color: #fbcdfb;"></i>
                    <span class="notification"><?= number_format($userNoticeCount);?></span>
                  </a>
                  <ul
                    class="dropdown-menu notif-box animated fadeIn"
                    aria-labelledby="notifDropdown"
                  >
                    <li>
                      <div class="dropdown-title">
                        You have <?= number_format($userNoticeCount);?> notification
                      </div>
                    </li>
                    <li>
                      <div class="notif-scroll scrollbar-outer">
                        <div class="notif-center">
                        <?php if ($newActivityNotice) { ?>
                            <?php foreach ($newActivityNotice as $key => $notify) { ?>
                            <a href="<?= baseURL('us-notifications/')?><?= $userInfo['uniqueid']; ?>/">
                                <div class="notif-icon notif-primary">
                                <?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $notify['user_uniqueid']) { ?>
                                    <img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="Buddy-Photo" style="height: 40px; width: 40px;">
                                </div>
                                <div class="notif-content">
                                    <span class="subject"><h6><?= $user['fname']; ?> <?= $user['lname']; ?></span>
                                    <span class="block"> <?= $notify['details']; ?> </span>
                                    <span class="time"><?php echo(''.timeAgo(date('Y/m/d', strtotime($notify['created']))).''); ?></span>
                                </div>
                                <?php } } ?>
                            </a>
                          <?php } } else { ?>
                            <center><p>No New Notifications</p></center>
                        <?php } ?>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class="see-all" href="<?= baseURL('us-notifications/')?><?= $userInfo['uniqueid']; ?>/"
                        >See all<i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <i class="fa fa-list-alt" style="color: #fbcdfb;"></i>
                  </a>
                  <div class="dropdown-menu quick-actions animated fadeIn">
                    <div class="quick-actions-header">
                      <span class="title mb-1">Quick Actions</span>
                      <span class="subtitle op-7">Shortcuts</span>
                    </div>
                    <div class="quick-actions-scroll scrollbar-outer">
                      <div class="quick-actions-items">
                        <div class="row m-0">
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div class="avatar-item bg-danger rounded-circle">
                                <i class="far fa-calendar-alt"></i>
                              </div>
                              <span class="text">Calendar</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-warning rounded-circle"
                              >
                                <i class="fas fa-map"></i>
                              </div>
                              <span class="text">Maps</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div class="avatar-item bg-info rounded-circle">
                                <i class="fas fa-file-excel"></i>
                              </div>
                              <span class="text">Reports</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-success rounded-circle"
                              >
                                <i class="fas fa-envelope"></i>
                              </div>
                              <span class="text">Emails</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-primary rounded-circle"
                              >
                                <i class="fas fa-file-invoice-dollar"></i>
                              </div>
                              <span class="text">Invoice</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-secondary rounded-circle"
                              >
                                <i class="fas fa-credit-card"></i>
                              </div>
                              <span class="text">Payments</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="<?= public_asset('/other_assets/Profile/') ?><?= $userInfo['profileimage']; ?>"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username" style="color: #ffffff;">
                      <span class="op-7">Hi, </span>
                      <span class="fw-bold"> <?= $userInfo['username']; ?> </span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn" style="background: #fbcdfb;">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="<?= public_asset('/other_assets/Profile/') ?><?= $userInfo['profileimage']; ?>"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4><?= $userInfo['fname']; ?> <?= $userInfo['lname']; ?></h4>
                            <p class="text-muted"><?= $userInfo['email']; ?> </p>
                            <a
                              href="<?= baseURL('us-profile/')?><?= $userInfo['uniqueid']; ?>/?tab=Profile"
                              class="btn btn-xs btn-secondary btn-sm"
                              >View Profile</a
                            >
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= baseURL('us-settings/')?><?= $userInfo['uniqueid']; ?>/?tab=profile"> Settings</a>
                        <a class="dropdown-item" href="<?= baseURL('us-preferences/')?><?= $userInfo['uniqueid']; ?>/?tab=account">Preference</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= baseURL('us-notifications/')?><?= $userInfo['uniqueid']; ?>/?tab=Notify">Notifications</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= baseURL('logout/')?><?= $userInfo['uniqueid']; ?>/?tab=logout">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
<div class="row">


        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Analytics</h6>
                </li>
                <li><a class="dropdown-item" href="<?= baseURL('all-newsletter/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=Newsletter">Subscribers</a></li>
                <li><a class="dropdown-item" href="<?= baseURL('all-newsletter/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=WaitList"> Waiting List</a></li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">Activity <span>| Visitors</span></h5>

                <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <p> <i class="bi bi-pie-chart"></i> </p>
                </div>
                <div class="ps-3">
                    <span class="text-primary small pt-1 fw-bold"><?php if ($visitorsCount == NULL) { echo '0'; } else { echo number_format($visitorsCount); } ?></span> <span class="text-muted small pt-2 ps-1"> Visitors</span>
                    <br>
                    <span class="text-success small pt-1 fw-bold"><?php if ($activitiesCount == NULL) { echo '0'; } else { echo number_format($activitiesCount); } ?></span> <span class="text-muted small pt-2 ps-1">Activities</span>

                </div>
                </div>
            </div>

            </div>
        </div>
        <!-- End Revenue Card -->


        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Membership</h6>
            </li>
            <li><a class="dropdown-item" href="<?= baseURL('all-users/')?><?= $adminInfo['uniqueid']; ?>/?cat=User"> Users</a></li>
            <li><a class="dropdown-item" href="<?= baseURL('all-users/')?><?= $adminInfo['uniqueid']; ?>/?cat=Moderator"> Moderators</a></li>
            <li><a class="dropdown-item" href="<?= baseURL('all-users/')?><?= $adminInfo['uniqueid']; ?>/?cat=All">All Records</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Members <span>| Total</span></h5>

            <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <p>  <i class="bi bi-people"></i> </p>
            </div>
            <div class="ps-3">
                <span class="text-primary small pt-1 fw-bold"><?= $newUsersCount; ?></span> <span class="text-muted small pt-2 ps-1">New </span>
                <br>
                <span class="text-success small pt-1 fw-bold"><?= $allUsersCount; ?></span> <span class="text-muted small pt-2 ps-1"> Total</span>

            </div>
            </div>
        </div>

        </div>
    </div>
    <!-- End Sales Card -->





    <!-- Sales Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card customers-card">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Profile Setup</h6>
            </li>
            <li><a class="dropdown-item" href="<?= baseURL('all-tickets/')?><?= $adminInfo['uniqueid']; ?>/?cat=Unread">New Tickets</a></li>
            <li><a class="dropdown-item" href="<?= baseURL('all-tickets/')?><?= $adminInfo['uniqueid']; ?>/?cat=All">All Records</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Myself <span>| Preference</span></h5>

            <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <p> <i class="bi bi-list"></i> </p>
            </div>
            <div class="ps-3">
                <span class="text-primary small pt-1 fw-bold"><?= $userMyselfCount; ?></span> <span class="text-muted small pt-2 ps-1"> Myself </span>
                <br>
                <span class="text-success small pt-1 fw-bold"><?= $userPrefCount; ?></span> <span class="text-muted small pt-2 ps-1"> Preference</span>

            </div>
            </div>
        </div>

        </div>
    </div>
    <!-- End Sales Card -->





    <!-- Revenue Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Contact Messages</h6>
            </li>

            <li><a class="dropdown-item" href="<?= baseURL('all-messages/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=Unread">New Messages</a></li>
            <li><a class="dropdown-item" href="<?= baseURL('all-messages/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All"> All Records</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Messages <span>| Total</span></h5>

            <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <p> <i class="bi bi-envelope"></i>  </p>
            </div>
            <div class="ps-3">
                <span class="text-primary small pt-1 fw-bold"><?= $newMessagesCount; ?></span> <span class="text-muted small pt-2 ps-1">New </span>
                <br>
                <span class="text-success small pt-1 fw-bold"><?= $allMessagesCount; ?></span> <span class="text-muted small pt-2 ps-1"> Total</span>
            </div>
            </div>
        </div>

        </div>
    </div><!-- End Revenue Card -->





    <!-- Revenue Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Payments</h6>
            </li>
            <li><a class="dropdown-item" href="<?= baseURL('all-newsletter/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=Newsletter">Subscribers</a></li>
            <li><a class="dropdown-item" href="<?= baseURL('all-newsletter/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=WaitList"> Waiting List</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Transactions <span>| Total</span></h5>

            <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <p> <i class="bi bi-currency-dollar"></i> </p>
            </div>
            <div class="ps-3">
                <span class="text-primary small pt-1 fw-bold"><?php if ($newTrancCount == NULL) { echo '0'; } else { echo number_format($newTrancCount); } ?></span> <span class="text-muted small pt-2 ps-1"> Pending</span>
                <br>
                <span class="text-success small pt-1 fw-bold"><?php if ($allTrancCount == NULL) { echo '0'; } else { echo number_format($allTrancCount); } ?></span> <span class="text-muted small pt-2 ps-1">Total</span>

            </div>
            </div>
        </div>

        </div>
    </div>
    <!-- End Revenue Card -->



    

    <!-- Sales Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Subscriptions</h6>
            </li>
            <li><a class="dropdown-item" href="<?= baseURL('all-payment/')?><?= $adminInfo['uniqueid']; ?>/?cat=Deposit&s=Processing">New Deposits</a></li>
            <li><a class="dropdown-item" href="<?= baseURL('all-payment/')?><?= $adminInfo['uniqueid']; ?>/?cat=Deposit&s=All">All Deposits</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Active Access <span>| Total</span></h5>
            <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <p> <i class="bi bi-cart-plus"></i> </p>
            </div>
            <div class="ps-3">
                <span class="text-primary small pt-1 fw-bold"><?php if ($paidTrancCount == NULL) { echo '0'; } else { echo number_format($paidTrancCount); } ?></span> <span class="text-muted small pt-2 ps-1"> Paid</h6>
                <br>
                <span class="text-success small pt-1 fw-bold"><?php if ($expiredTrancCount == NULL) { echo '0'; } else { echo number_format($expiredTrancCount); } ?></span> <span class="text-muted small pt-2 ps-1"> Expired</span>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End Sales Card -->
        



    <!-- Revenue Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card customers-card">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>User ADS</h6>
            </li>

            <li><a class="dropdown-item" href="<?= baseURL('all-messages/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=Unread">New Messages</a></li>
            <li><a class="dropdown-item" href="<?= baseURL('all-messages/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All"> All Records</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Photo Book <span>| Total</span></h5>

            <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <p> <i class="bi bi-emoji-smile"></i>  </p>
            </div>
            <div class="ps-3">
                <span class="text-primary small pt-1 fw-bold"><?php if ($newUserPostsCount == NULL) { echo '0'; } else { echo number_format($newUserPostsCount); } ?></span> <span class="text-muted small pt-2 ps-1">New </span>
                <br>
                <span class="text-success small pt-1 fw-bold"><?php if ($allUserPostsCount == NULL) { echo '0'; } else { echo number_format($allUserPostsCount); } ?></span> <span class="text-muted small pt-2 ps-1"> Total</span>
            </div>
            </div>
        </div>

        </div>
    </div><!-- End Revenue Card -->





    <!-- Sales Card -->
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>News & Updates</h6>
            </li>
            <li><a class="dropdown-item" href="<?= baseURL('all-users/')?><?= $adminInfo['uniqueid']; ?>/?cat=User"> Users</a></li>
            <li><a class="dropdown-item" href="<?= baseURL('all-users/')?><?= $adminInfo['uniqueid']; ?>/?cat=All">All Records</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Blog Posts <span>| Total</span></h5>

            <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <p>  <i class="bi bi-newspaper"></i> </p>
            </div>
            <div class="ps-3">
                <span class="text-primary small pt-1 fw-bold"><?php if ($newBlogPostsCount == NULL) { echo '0'; } else { echo number_format($newBlogPostsCount); } ?></span> <span class="text-muted small pt-2 ps-1">New </span>
                <br>
                <span class="text-success small pt-1 fw-bold"><?php if ($allBlogPostsCount == NULL) { echo '0'; } else { echo number_format($allBlogPostsCount); } ?></span> <span class="text-muted small pt-2 ps-1"> Total</span>

            </div>
            </div>
        </div>

        </div>
    </div>
    <!-- End Sales Card -->






    




</div>
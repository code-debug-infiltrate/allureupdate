 <!-- ======= Header ======= -->

  <header id="header" class="header fixed-top d-flex align-items-center">



    <div class="d-flex align-items-center justify-content-between">

      <a href="<?= baseURL('ad-index/'); ?><?= $adminInfo['uniqueid']; ?>/" class="logo d-flex align-items-center">

        <img src="/Images/Logo/favicon.png" alt="Logo">

        <span class="d-none d-lg-block" style="color: #899bbd; font-size: 20px;"><?= getenv('APP_NAME')?></span>

      </a>

      <i class="bi bi-list toggle-sidebar-btn"></i>

    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">

      <ul class="d-flex align-items-center">



        <li class="nav-item d-block d-lg-none">

          <!-- <a class="nav-link nav-icon search-bar-toggle " href="#">

            <i class="bi bi-search"></i>

          </a> -->

        </li><!-- End Search Icon-->

        <!-- <li class="nav-item dropdown" title="New Products">

          <a class="nav-link nav-icon" href="<?= baseURL('new-product/'); ?><?= $adminInfo['uniqueid']; ?>/">

            <i class="bx bxs-gift"></i>

            <span class="badge bg-danger badge-number">0</span>

          </a>

        </li> -->



        <li class="nav-item dropdown" title="New Payments">

          <a class="nav-link nav-icon" href="<?= baseURL('ad-transactions/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=Processing">

            <i class="bi bi-cash-coin"></i>

            <span class="badge bg-danger badge-number"><?= $newTransactionsCount; ?></span>

          </a>

        </li>



        <li class="nav-item dropdown" title="New Messages">
          
          <a class="nav-link nav-icon" href="<?= baseURL('all-messages/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=New">

            <i class="bi bi-envelope"></i>

            <span class="badge bg-danger badge-number"><?= $newMessagesCount; ?></span>

          </a><!-- End Notification Icon -->

        </li>





        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="<?= baseURL('profile-settings/'); ?><?= $adminInfo['uniqueid']; ?>/" data-bs-toggle="dropdown">
            <img src="<?= public_asset('/other_assets/Profile/') ?><?= $adminInfo['profileimage']; ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $adminInfo['username']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

          <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= baseURL('control-panel/'); ?><?= $adminInfo['uniqueid']; ?>/">
                <i class="bi bi-sliders"></i>
                <span>Control Panel</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= baseURL('profile-settings/'); ?><?= $adminInfo['uniqueid']; ?>/">
                <i class="bx bx-user"></i>
                <span>Profile Setting</span>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= baseURL('logout/'); ?><?= $adminInfo['uniqueid']; ?>/">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
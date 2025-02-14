 <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="<?= baseURL('ad-index/'); ?><?= $adminInfo['uniqueid']; ?>/">
          <i class="bi bi-grid"></i>
          <span class="badge bg-success"><?= $adminInfo['profile']?> <?= $adminInfo['username']?></span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#component-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-business"></i><span>Company</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="component-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= baseURL('coy-gallery/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All">
              <i class="bi bi-circle"></i><span> Gallery</span>
            </a>
          </li>
          <li>
            <a href="<?= baseURL('view-coy/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All">
              <i class="bi bi-circle"></i><span> Profile</span>
            </a>
          </li>
          <li>
            <a href="<?= baseURL('team-member/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All">
              <i class="bi bi-circle"></i><span> Team</span>
            </a>
          </li>
        </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Users Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= baseURL('all-users/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All">
              <i class="bi bi-circle"></i><span>All Users</span>
            </a>
          </li>
          <li>
            <a href="<?= baseURL('all-activities/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All">
              <i class="bi bi-circle"></i><span>Activities</span>
            </a>
          </li>
          <li>
            <a href="<?= baseURL('all-visitors/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All">
              <i class="bi bi-circle"></i><span>Visitors</span>
            </a>
          </li>
        </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tranc-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cash-coin"></i><span>Transactions</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tranc-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= baseURL('ad-transactions/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All">
              <i class="bi bi-circle"></i><span>Payments</span>
            </a>
          </li>
        </ul>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#webmail-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-envelope-check"></i><span>Messaging</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="webmail-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= baseURL('ad-webmail/'); ?><?= $adminInfo['uniqueid']; ?>/">
              <i class="bi bi-circle"></i><span>Web Mail</span>
            </a>
          </li>
          <li>
            <a href="<?= baseURL('all-messages/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All">
              <i class="bi bi-circle"></i><span>In-app Mails</span>
            </a>
          </li>
        </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#settings-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-wrench"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="settings-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= baseURL('application-finance/'); ?><?= $adminInfo['uniqueid']; ?>/">
              <i class="bi bi-circle"></i><span>Finance</span>
            </a>
          </li>
          <li>
            <a href="<?= baseURL('application-notifications/'); ?><?= $adminInfo['uniqueid']; ?>/">
              <i class="bi bi-circle"></i><span>Notifications</span>
            </a>
          </li>
          <li>
            <a href="<?= baseURL('application-programs/'); ?><?= $adminInfo['uniqueid']; ?>/">
              <i class="bi bi-circle"></i><span>Programs</span>
            </a>
          </li>
        </ul>
      </li>

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#componen-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-user"></i><span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="componen-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= baseURL('profile-settings/'); ?><?= $adminInfo['uniqueid']; ?>/">
              <i class="bi bi-circle"></i><span>General</span>
            </a>
          </li>
        </ul>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= baseURL('control-panel/'); ?><?= $adminInfo['uniqueid']; ?>/">
          <i class="bi bi-sliders"></i>
          <span>Control panel</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= baseURL('logout/'); ?><?= $adminInfo['uniqueid']; ?>/">
          <i class="bi bi-box-arrow-right"></i>
          <span>Log Out</span>
        </a>
      </li>
      <!-- End Blank Page Nav -->


    </ul>



  </aside><!-- End Sidebar-->
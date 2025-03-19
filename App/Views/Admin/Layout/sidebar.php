<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="<?= baseURL('ad-index/'); ?><?= $adminInfo['uniqueid']; ?>/">
    <img src="<?= public_asset('/other_assets/Profile/') ?><?= $adminInfo['profileimage']; ?>" style="width: 40px; border-radius: 100%;" alt="User Image">
      <span><?= $adminInfo['profile']; ?> Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-heading">Application Data</li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person"></i><span>Membership</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= baseURL('ad-users/')?><?= $adminInfo['uniqueid']; ?>/?cat=User">
          <i class="bi bi-circle"></i><span>Users Data</span>
        </a>
      </li>
      <li>
        <a href="<?= baseURL('ad-newsletter/')?><?= $adminInfo['uniqueid']; ?>/?cat=User">
          <i class="bi bi-circle"></i><span>Newsletter Data</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Messaging</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= baseURL('ad-messages/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All">
          <i class="bi bi-circle"></i><span>Inbox</span>
        </a>
      </li>
      <li>
        <a href="<?= baseURL('ad-tickets/'); ?><?= $adminInfo['uniqueid']; ?>/">
          <i class="bi bi-circle"></i><span>Tickets</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="<?= baseURL('ad-notify/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=General">
      <i class="bi bi-bell"></i>
      <span>Notifications</span>
    </a>
  </li><!-- End Notifications Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gem"></i><span>Finance</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      
      <li>
        <a href="<?= baseURL('ad-transactions/'); ?><?= $adminInfo['uniqueid']; ?>/?cat=All">
          <i class="bi bi-circle"></i><span>Transactions</span>
        </a>
      </li>
    </ul>
  </li><!-- End Icons Nav -->

  <li class="nav-heading">News & Update Setup</li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart"></i><span>Blogging</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= baseURL('ad-create-blog-post/')?><?= $adminInfo['uniqueid']; ?>/?id=">
          <i class="bi bi-circle"></i><span>New Post</span>
        </a>
      </li>
      <li>
        <a href="<?= baseURL('ad-blog-posts/')?><?= $adminInfo['uniqueid']; ?>/?cat=All">
          <i class="bi bi-circle"></i><span>All Posts</span>
        </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->

  <li class="nav-heading">Application Setup</li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Company</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?= baseURL('ad-api-settings/')?><?= $adminInfo['uniqueid']; ?>/?cat=">
          <i class="bi bi-circle"></i><span>API Details</span>
        </a>
      </li>
      <li>
        <a href="<?= baseURL('ad-coy-settings/')?><?= $adminInfo['uniqueid']; ?>/?cat=">
          <i class="bi bi-circle"></i><span>Company Info</span>
        </a>
      </li>
      <li>
        <a href="<?= baseURL('ad-transactions/')?><?= $adminInfo['uniqueid']; ?>/?cat=All">
          <i class="bi bi-circle"></i><span>Finance Details</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-heading">Other Settings</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="<?= baseURL('ad-profile/'); ?><?= $adminInfo['uniqueid']; ?>/">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="<?= baseURL('logout/'); ?><?= $adminInfo['uniqueid']; ?>/">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End Login Page Nav -->

</ul>

</aside><!-- End Sidebar-->

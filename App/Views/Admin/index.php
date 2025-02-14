<?php

  include 'Layout/top.php';
  include 'Layout/navbar.php';
  include 'Layout/sidebar.php';

?>

  <title><?= $adminInfo['username']; ?> Dashboard | Admin Area | <?= getenv('APP_NAME')?></title>

  <main id="main" class="main">

    <div class="pagetitle">
        <h1>Welcome Back, <?= $adminInfo['username']; ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= baseURL('ad-index/'); ?><?= $adminInfo['uniqueid']; ?>/">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Index</li>
        </ol>
      </nav>

    </div><!-- End Page Title -->



    <section class="section dashboard">

      <div class="row">

        <?php include 'Layout/alert.php';?>

        
        <!-- Left side columns -->
        <div class="col-lg-8">

          <div class="row">

            <!-- Users Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Users</h6>
                    </li>
                    <li><a class="dropdown-item" href="<?= baseURL('all-users/')?><?= $adminInfo['uniqueid']; ?>/?cat=All">All Users</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total <span>| Registered</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <?= $newUsersCount; ?>
                    </div>

                    <div class="ps-3">
                     <h6> Users</h6>
                      <span class="text-success small pt-1 fw-bold"><?= $allUsersCount; ?></span> <span class="text-muted small pt-2 ps-1">Registered Users</span>
                    </div>
                  </div>

                </div>

              </div>
            </div><!-- End Users Card -->


            <!-- Revenue Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Messages</h6>
                    </li>

                    <li><a class="dropdown-item" href="<?= baseURL('all-messages/')?><?= $adminInfo['uniqueid']; ?>/?cat=All">All Messages</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total <span>| Messages</span></h5>
                  <div class="d-flex align-items-center">

                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <?= $newMessagesCount; ?>
                    </div>

                    <div class="ps-3">
                     <h6> Messages</h6>
                      <span class="text-success small pt-1 fw-bold"><?= $allMessagesCount; ?></span> <span class="text-muted small pt-2 ps-1">Total Received Messages</span>
                    </div>
                  </div>
                </div>

              </div>

            </div><!-- End Revenue Card -->


            <!-- Subscriber Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Subscribers</h6>
                    </li>

                    <li><a class="dropdown-item" href="<?= baseURL('all-subscribers/')?><?= $adminInfo['uniqueid']; ?>/?cat=All">All Subscribers</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total <span>| Subscribers</span></h5>
                  <div class="d-flex align-items-center">

                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <?= $newSubscribersCount; ?>
                    </div>

                    <div class="ps-3">
                    <h6> Subscribers</h6>
                      <span class="text-success small pt-1 fw-bold"><?= $allSubscribersCount; ?></span> <span class="text-muted small pt-2 ps-1">Total Subscribers</span>
                    </div>
                  </div>
                </div>

              </div>

            </div><!-- End Subscriber Card -->

            <!-- Transactions Card -->
            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bx bxs-mouse-alt" style="font-size: 20px;"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Payment</h6>
                    </li>
                    <li><a class="dropdown-item" href="<?= baseURL('ad-transactions/')?><?= $adminInfo['uniqueid']; ?>/?cat=All">All Payment</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total <span>| Payments</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <?= $newTransactionsCount; ?>
                    </div>

                    <div class="ps-3">
                     <h6> Transactions</h6>
                      <span class="text-success small pt-1 fw-bold"><?= $allTransactionsCount; ?></span> <span class="text-muted small pt-2 ps-1">Total Pay</span>
                    </div>
                  </div>

                </div>

              </div>
            </div><!-- End Transactions Card -->

          </div>
        </div><!-- End Left side columns -->



        <div class="col-lg-4">
          <!-- Recent Activity -->
          <div class="card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bxs-bell" style="font-size: 20px;"></i>
              </a>

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Recent Activity</h6>
                </li>
                <li><a class="dropdown-item" href="<?= baseURL('all-activities/')?><?= $adminInfo['uniqueid']; ?>/?cat=All">View All Activities</a>
                </li>
              </ul>
            </div>

            <div class="card-body">

              <h5 class="card-title"><i class="bx bx-broadcast"></i> <?= $activitiesCount; ?> Recent <span>| Activities</span></h5>
              <div class="activity">
              <?php $i=0; foreach ($recentActivities as $key => $value) { ?>
                <?php if ($i <= 5) {  ?>
                 <div class="activity-item d-flex">
                  <div class="activite-label">
                    <?php echo(''.timeAgo(date('Y/m/d', strtotime($value['created']))).'');?>
                  </div>

                  <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>

                  <div class="activity-content">
                    <?php echo(''.$value['details'].'');  ?>
                  </div>
                </div>
                <?php } ?>
                <?php $i++; } ?>

            </div> <!-- End activity item-->

          </div><!-- End sidebar recent posts-->

      </div><!-- End News & Updates -->

    </div><!-- End Right side columns -->






      <div class="col-lg-6">

        <div class="card">  

          <?php if ($graphStatus) { ?>
            <div class="card-body">
              <h5 class="card-title">Users Status </h5>

                <!-- Bar Chart -->
                <canvas id="barChart" style="max-height: 400px;"></canvas>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new Chart(document.querySelector('#barChart'), {
                      type: 'bar',
                      data: {
                        labels: [<?php foreach ($graphStatus as $key => $value)  

                        { 
                          echo "['".$value["status"]."', ],"; 
                        }  
                      ?>],

                        datasets: [{
                          label: 'Users Status',
                          data: [<?php foreach ($graphStatus as $key => $value)  
                        { 
                          echo "['".$value["count"]."', ],"; 
                        }  
                    ?>],
                          backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(193, 170, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                          ],
                          borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(193, 170, 255)',
                            'rgb(201, 203, 207)'
                          ],
                          borderWidth: 1
                        }]
                      },
                      options: {
                        scales: {
                          y: {
                            beginAtZero: false
                          }
                        }
                      }
                    });
                  });
                </script>

              <!-- End Bar CHart -->

            </div>
          <?php } ?>

          </div>
        </div>







      <div class="col-lg-6">

        <?php if ($graphUserTranc) { ?>
            <div class="card-body">

              <h5 class="card-title">Users Transaction Count </h5>
                <!-- Bar Chart -->
                <canvas id="pieChart" style="max-height: 400px;"></canvas>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new Chart(document.querySelector('#pieChart'), {
                      type: 'pie',
                      data: {
                        labels: [<?php foreach ($graphUserTranc as $key => $value)  
                        { 
                          echo "['".$value["status"]."', ],"; 
                        } 
                    ?>],
                        datasets: [{
                          label: 'User Transactions',
                          data: [<?php foreach ($graphUserTranc as $key => $value)  
                        { 
                          echo "['".$value["count"]."', ],"; 
                        }  
                    ?>],
                          backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(193, 170, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                          ],
                          hoverOffset: 50,
                        }]
                      },
                    });
                  });
                </script>
              <!-- End Bar CHart -->

            </div>
            <?php } ?>

        </div>







        </div>



      </div>

    </section>



  </main><!-- End #main -->









<?php

include 'Layout/footer.php';

?>
<!-- Recent Activity -->
        <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bxs-bell" style="font-size: 20px;"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Recent Activity</h6>
                </li>
                <li>
                  <a class="dropdown-item" href="<?= baseURL('all-visitors/')?><?= $adminInfo['uniqueid']; ?>/"> Visitors</a>
                </li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title" style="font-size: 16px;"><i class="bx bx-broadcast"></i> <?= $visitorsCount; ?> Recent <span>| Visitors</span></h5>
              
              <!-- Activity item-->
              <div class="activity">
                <?php $i = 0; foreach ($recentVisitors as $key => $value) {  ?>
                  <?php if ($i <= 5) {  ?>
                  <div class="activity-item d-flex" style="font-size: 12px;">
                    <div class="activite-label">
                      <?php echo(''.timeAgo(date('Y/m/d', strtotime($value['created']))).'');?>
                    </div>
                    <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                    <div class="activity-content">
                        <?= $value['ip'];  ?> visited <b><?= $value['count'];  ?> time(s)</b> using <?= substr($value['details'], 0, 40);  ?>.
                    </div>
                  </div>
                <?php } ?>
                <?php $i++; } ?>
              </div> 
              <!-- End activity item-->

          </div><!-- End sidebar recent posts-->
      </div><!-- End News & Updates -->
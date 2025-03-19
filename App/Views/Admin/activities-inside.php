<!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
                <h5 class="card-title" style="font-size: 14px;"><?= $activitiesCount; ?> Latest Activities <span>| <a href="<?= baseURL('all-activity/')?><?= $adminInfo['uniqueid']; ?>/" style="font-size: 12px;">View All</a></span></h5>

                <div class="news">

                    <?php $i = 0; foreach ($recentActivities as $key => $value) {  ?>
                        <?php if ($i <= 7) {  ?>
                            <div class="post-item clearfix">
                                <?php foreach ($userProfiles as $key => $user) { ?>
                                    <?php if ($user['uniqueid'] == $value['uniqueid']) { ?>  
                                        <center><img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="<?= $user['lname']; ?>" style="width: 40px;"></center>
                                        <h4 style="font-size: 12px;"><a href="<?= baseURL('user-profile/'); ?><?= $adminInfo['uniqueid']; ?>/?user=<?= $user['uniqueid']; ?>"><?= $user['fname']; ?> <?= $user['lname']; ?></a></h4>
                                    <?php } ?>
                                <?php } ?>

                                <p style="font-size: 11px;"><?php echo(''.$value['details'].''); ?>... <i style="font-size: 8px;"><?php echo(''.timeAgo(date('Y/m/d', strtotime($value['created']))).'');?></i></p>
                            </div>
                        <?php } ?>
                    <?php $i++; } ?>
                    
                </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->
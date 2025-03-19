            <!-- Second Step -->

                <!-- User Posts Records -->
                <?php if ($userPosts) { ?>
                  <div class="col-md-6">
                    <!-- PRODUCT LIST -->
                    <div class="card recent-sales overflow-auto">

                      <div class="filter">

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <h5 class="card-title"> Users PhotoBook <span>| Latest</span></h5>

                        <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                            <th scope="col">User Photo</th>
                            <th scope="col">Full Name</th>
                            <th scope="col"> Photobook Summary </th>
                            <th scope="col"> Created </th>
                            <th scope="col"> Del </th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php $i=0; foreach ($userPosts as $key => $post) { ?>
                              <?php if ($i <= 5) {  ?>
                                <tr style="font-size: 13px;">

                                  <th scope="row">
                                      <?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $post['uniqueid']) { ?>
                                        <img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="User Image" style="width: 40px; border-radius: 100%;">
                                      <?php } } ?>
                                  </th>
                                  <td style="font-size: 10px;">
                                      <?php foreach ($userProfiles as $key => $user) { ?>
                                          <?php if ($user['uniqueid'] == $post['uniqueid']) { ?>  
                                            <a href="<?= baseURL('ad-user-details/')?><?= $adminInfo['uniqueid']; ?>/?id=<?= $user['uniqueid']; ?>"><?= $user['fname']; ?> <?= $user['lname']; ?></a>
                                          <?php } ?>
                                      <?php } ?>
                                  </td>
                                  <td style="font-size: 10px;"><a href="<?= baseURL('ad-ads-details/'); ?><?= $adminInfo['uniqueid']; ?>/?id=<?= $post['postid']; ?>"><?= substr($post['details'], 0, 60) ?></a></td>
                                  <td style="font-size: 8px;"><?php echo(''.timeAgo(date('Y/m/d', strtotime($post['created']))).''); ?></td>
                                  <td>
                                      <form method="POST" action="">
                                        <input type="hidden" name="uniqueid" value="<?= $adminInfo['uniqueid']; ?>">
                                        <input type="hidden" name="username" value="<?= $adminInfo['username']; ?>">
                                        <input type="hidden" name="uUniqueid" value="<?= $post['uniqueid']; ?>">
                                        <input type="hidden" name="postid" value="<?= $post['postid']; ?>">
                                        <input type="hidden" name="status" value="Trash">
                                        <button type="submit" name="updateTranc" class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Trash PhotoBook" style="background: none; color: red; margin: 5px; font-size: 20px;"><i class="bi bi-trash"></i></button>
                                      </form> 
                                  </td>
                                  </tr>
                                <?php } ?>
                                <?php $i++; } ?>
                            </tbody>
                            </table>
                            
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
                  
                  <?php } ?>




                <!-- Blog Posts Records -->
                <?php if ($blogPosts) { ?>

                  <div class="col-md-6">
                    <!-- PRODUCT LIST -->
                    <div class="card recent-sales overflow-auto">

                      <div class="filter">

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <h5 class="card-title"> News & Updates <span>| Latest</span></h5>

                        <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                            <th scope="col">Prof. Img</th>
                            <th scope="col">Poster Name</th>
                            <th scope="col"> Blog Post Details </th>
                            <th scope="col"> Created </th>
                            <th scope="col"> Del </th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            <?php $i=0; foreach ($blogPosts as $key => $post) { ?>
                              <?php if ($i <= 5) {  ?>
                                <tr style="font-size: 13px;">

                                  <th scope="row">
                                      <?php foreach ($userProfiles as $key => $user) { if ($user['uniqueid'] == $post['uniqueid']) { ?>
                                        <img src="<?= public_asset('/other_assets/Profile/') ?><?= $user['profileimage']; ?>" alt="User Image" style="width: 40px; border-radius: 100%;">
                                      <?php } } ?>
                                  </th>
                                  <td style="font-size: 10px;">
                                      <?php foreach ($userProfiles as $key => $user) { ?>
                                          <?php if ($user['uniqueid'] == $post['uniqueid']) { ?>  
                                            <a href="<?= baseURL('ad-user-details/')?><?= $adminInfo['uniqueid']; ?>/?id=<?= $user['uniqueid']; ?>"><?= $user['fname']; ?> <?= $user['lname']; ?></a>
                                          <?php } ?>
                                      <?php } ?>
                                  </td>
                                  <td style="font-size: 10px;"><a href="<?= baseURL('ad-blog-post-details/')?><?= $adminInfo['uniqueid']; ?>/?id=<?= $post['postid']; ?>"> <?= substr($post['details'], 0, 80) ?> </a></td>
                                  <td style="font-size: 8px;"><?php echo(''.timeAgo(date('Y/m/d', strtotime($post['created']))).''); ?></td>
                                  <td>
                                      <form method="POST" action="">
                                        <input type="hidden" name="uniqueid" value="<?= $adminInfo['uniqueid']; ?>">
                                        <input type="hidden" name="username" value="<?= $adminInfo['username']; ?>">
                                        <input type="hidden" name="uUniqueid" value="<?= $post['uniqueid']; ?>">
                                        <input type="hidden" name="postid" value="<?= $post['postid']; ?>">
                                        <input type="hidden" name="status" value="Trash">
                                        <button type="submit" name="updateTranc" class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Trash PhotoBook" style="background: none; color: red; margin: 5px; font-size: 20px;"><i class="bi bi-trash"></i></button>
                                      </form> 
                                  </td>
                                  </tr>
                                <?php } ?>
                                <?php $i++; } ?>
                            </tbody>
                            </table>
                            
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                    <!-- /.col -->
                  
                  <?php } ?>

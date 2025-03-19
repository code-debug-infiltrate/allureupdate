<?php

  include 'Layout/top.php';
  include 'Layout/navbar.php';
  include 'Layout/sidebar.php';

?>

  <title>All Blog Posts | <?= $adminInfo['username']; ?> Dashboard | Admin Area | <?= getenv('APP_NAME')?></title>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1><b id="grtnMsg" style="font-size: 20px;"></b> <i style="font-size: 16px; text-transform: capitalize;"> <?= $adminInfo['username']; ?></i></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= baseURL('ad-index/'); ?><?= $adminInfo['uniqueid']; ?>/">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">All Posts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <?php include 'Layout/alert.php';?>
        
        


<!-- Recent Sales -->
    <div class="col-12">
        <div class="card recent-sales overflow-auto">

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

        <div class="card-body">
            <h5 class="card-title"> Blog Posts <span>| Latest</span></h5>

            <table class="table table-borderless datatable">
            <thead>
                <tr>
                <th>Created By</th>
                <th>Image</th>
                <th>Post Title</th>
                <th>Views</th>
                <th>Status</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                  <?php if ($blogPosts) { foreach ($blogPosts as $key => $post) { ?>
                  <tr>
                    <td>
                      <?php foreach ($userProfiles as $key => $user) { ?>
                        <?php if ($user['uniqueid'] == $post['uniqueid']) { ?>  
                            <?= $user['fname']; ?> <?= $user['lname']; ?>
                        <?php } ?>
                      <?php } ?>
                    </td>
                    <td>
                      <a href="<?= baseURL('ad-blog-post-details/')?><?= $adminInfo['uniqueid']; ?>/?id=<?= $post['postid']; ?>">
                        <img src="/Images/Blog/<?= $post['file']; ?>" alt="Post Image" style="width: 50px;">
                      </a>
                    </td>
                    <td><a href="<?= baseURL('ad-blog-post-details/')?><?= $adminInfo['uniqueid']; ?>/?id=<?= $post['postid']; ?>"><?= $post['title'];  ?></a></td>
                    <td>
                    <?php foreach ($blogPostsAction as $key => $postAction) { if ($postAction['postid'] == $post['postid']) { ?>
                        <?= $postAction['views']; ?>
                      
                      <?php } ?>
                    <?php } ?>
                    </td>
                    <!-- <td>
                    <i class="fas fa-thumbs-up" title="Likes" style="margin-left: 5px; color: blue; font-size: 14px;"></i>(0) 
                    <i class="fas fa-thumbs-down" title="Dislikes" style="margin-left: 5px; color: red; font-size: 14px;"></i>(0)
                    <i class="fas fa-comment" title="Comments" style="margin-left: 5px; color: orange; font-size: 14px;"></i>(0)
                    </td> -->
                    <td>
                      <?php if ($post['status'] == "Publish") { ?>
                        <span class="badge bg-success"><?= $post['status'];  ?></span>
                        <?php } elseif ($post['status'] == "New") { ?>
                          <span class="badge bg-warning"><?= $post['status'];  ?></span>
                        <?php } elseif ($post['status'] == "Draft") { ?>
                          <span class="badge bg-primary"><?= $post['status'];  ?></span>
                        <?php } else { ?>
                        <span class="badge bg-danger"><?= $post['status'];  ?></span>
                      <?php } ?>
                    </td>
                      <input type="hidden" id="urlCheck" value="<?= trim(getenv('baseURL'))."ajax-transaction-status/";?>">
                      <input type="hidden" id="urlRemind" value="<?= trim(getenv('baseURL'))."ajax-transaction-reminder/";?>">
                      <input type="hidden" id="uniqueid" value="<?= $adminInfo['uniqueid']; ?>" required>
                      <input type="hidden" id="username" value="<?= $adminInfo['username']; ?>" required>
                      <input type="hidden" id="useremail" value="<?= $post['uniqueid']; ?>" required>
                      
                    <td>
                      <?php if ($post['status'] == "New" || $post['status'] == "Draft") { ?>
                        <i class="bi bi-check" onclick="checkFunction(this);" alt="<?= $post['postid'];  ?>" id="Publish" title="Publish Post" style="margin-left: 20px; color: blue; font-size: 18px; cursor: pointer;"></i>
                        <i class="bi bi-trash" onclick="checkFunction(this);" alt="<?= $post['postid'];  ?>" id="Trash" title="Mark As Trash" style="margin-left: 20px; color: red; font-size: 18px; cursor: pointer;"></i>
                      <?php } elseif ($post['status'] == "Publish") { ?>
                        <i class="bi bi-history" onclick="checkFunction(this);" alt="<?= $post['postid'];  ?>" id="Draft" title="Draft Post" style="margin-left: 20px; color: blue; font-size: 18px; cursor: pointer;"></i>
                        <i class="bi bi-trash" onclick="checkFunction(this);" alt="<?= $post['postid'];  ?>" id="Trash" title="Mark As Trash" style="margin-left: 20px; color: red; font-size: 18px; cursor: pointer;"></i>
                      <?php } else { ?>
                        <i class="bi bi-history" onclick="checkFunction(this);" alt="<?= $post['postid'];  ?>" id="Draft" title="Draft Post" style="margin-left: 20px; color: blue; font-size: 18px; cursor: pointer;"></i>
                      <?php } ?>
                    </td>
                    
                  </tr>
                  <?php } } ?>
                </tbody>
            </table>

        </div>

        </div>
    </div><!-- End Recent Sales -->





        </div>

      </div>
    </section>

  </main><!-- End #main -->






<?php

include 'Layout/footer.php';

?>
<?php

  include 'Layout/top.php';
  include 'Layout/navbar.php';
  include 'Layout/sidebar.php';

?>

  <title>Create Blog Post | <?= $adminInfo['username']; ?> Dashboard | Admin Area | <?= getenv('APP_NAME')?></title>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1><b id="grtnMsg" style="font-size: 20px;"></b> <i style="font-size: 16px; text-transform: capitalize;"> <?= $adminInfo['username']; ?></i></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= baseURL('ad-index/'); ?><?= $adminInfo['uniqueid']; ?>/">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active"><?php if ($_GET['id']) { ?> Update <?php } else { ?>Create <?php } ?> Post</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <?php include 'Layout/alert.php';?>
        
        <?php if ($_GET['id']) { ?>

            <?php include 'update-post-inside.php';?>

        <?php } else { ?>

            <?php include 'create-post-inside.php';?>

        <?php } ?>

        </div>

      </div>
    </section>

  </main><!-- End #main -->






<?php

include 'Layout/footer.php';

?>
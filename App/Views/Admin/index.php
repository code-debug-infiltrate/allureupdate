<?php

  include 'Layout/top.php';
  include 'Layout/navbar.php';
  include 'Layout/sidebar.php';

?>

  <title><?= $adminInfo['username']; ?> Dashboard | Admin Area | <?= getenv('APP_NAME')?></title>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1><b id="grtnMsg" style="font-size: 20px;"></b> <i style="font-size: 16px; text-transform: capitalize;"> <?= $adminInfo['username']; ?></i></h1>
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

            <?php include 'index-counter-inside.php'; ?>
            <?php include 'recent-transactions-inside.php'; ?>

        </div>
        <!-- End Left side columns -->


        <!-- Right side columns -->
        <div class="col-lg-4">

          <?php include 'activities-inside.php'; ?>
          <?php include 'visitors-inside.php'; ?>

        </div>
        <!-- End Right side columns -->




        <?php include 'index-others-inside.php'; ?>





        </div>

      </div>
    </section>

  </main><!-- End #main -->






<?php

include 'Layout/footer.php';

?>
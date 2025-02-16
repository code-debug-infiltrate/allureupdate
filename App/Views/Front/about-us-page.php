<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>
<!-- preloader -->
 <div class="preloader"></div>
<!-- preloader -->
<title>About Us | Who We Are |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>



    <!-- about-banner -->
    <section class="about-banner" style="background-image: url(/Images/Banner/3.jpg);">
        <div class="container">
            <div class="content-box">
                <h1>Holistic Dating Approach</h1>
                <div class="text"><b> Unmatched Global Reach:</b> <br>We offer the most direct and successful approach to meeting singles anywhere in the world.</div>
            </div>
        </div>
    </section>
    <!-- about-banner end -->


  <?php 
  
  include 'about-inside.php';

  include 'counter-inside.php';
  
  include 'statistics-inside.php';

 
 ?>

<?php include 'Layout/footer.php'; ?>
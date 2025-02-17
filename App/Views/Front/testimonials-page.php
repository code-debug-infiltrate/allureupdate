<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>


<title>Testimonials | Love Stories |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>




    <!-- case-banner -->
    <section class="case-banner centred" style="background-image: url(/Images/Banner/4.jpg);">
        <div class="container">
            <div class="content-box" style="margin-top: 150px;">
                <h1>Love Stories</h1>
                <h3>Since Inception, Singles Have <br />Depended on <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> For a More Fulfilling Relationship Journey.</h3>
            </div>
        </div>
    </section>
    <!-- case-banner end -->


    <?php include 'love-story-inside.php'; ?>

<?php include 'Layout/footer.php'; ?>
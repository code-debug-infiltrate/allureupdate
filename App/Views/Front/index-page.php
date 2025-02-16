<?php 
include 'Layout/top.php'; 
include 'Layout/navbar.php';
?>
<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->
<title>Welcome | Home Page |  <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?></title>

<?php include 'home-banner.php'; ?>

<?php include 'why-us-inside.php'; ?>

<?php include 'sign-board-inside.php'; ?>

<?php include 'counter-inside.php'; ?>

<?php include 'testimonial-inside.php'; ?>
 
<?php include 'statistics-inside.php'; ?>

<?php include 'blog-posts-inside.php'; ?>

<?php include 'subscribe-inside.php'; ?>

<?php include 'join-channel-inside.php'; ?>

<?php include 'Layout/footer.php'; ?>
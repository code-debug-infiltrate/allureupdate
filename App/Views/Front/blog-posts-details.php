<?php 
include 'Layout/location.php'; 
include 'Layout/timeAgo.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stop Searching, Start Dating — all you need is a device connected to the internet" />
    <meta name="keywords" content="Dating, Relationship, Marriage, Casual, Fun, Marriage, Love Making, Theraphist." />
	
	<!-- FAVICONS ICON ============================================= -->
	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/Images/Logo/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Images/Logo/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Images/Logo/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/Images/Logo/favicon.png">
    <link rel="icon" type="image/png" sizes="128x128" href="/Images/Logo/favicon.png">
    <link rel="manifest" href="/Images/Logo/favicon.png">
    <link rel="mask-icon" href="/Images/Logo/favicon.png" color="#666666">
    <link rel="shortcut icon" href="/Images/Logo/favicon.png">
    <meta name="apple-mobile-web-app-title" content="<?= getenv('APP_NAME')?>">
    <meta name="application-name" content="<?= getenv('APP_NAME')?>">
    <meta name="msapplication-TileColor" content="#6262e3">
    <meta name="msapplication-config" content="/Images/Logo/favicon.png">
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Facebook Integration -->
	<meta property="og:site_name" content="<?= getenv('APP_NAME')?>"/>
	<meta property="og:title" content="<?= $blogPostDetails['title']; ?>"/>
	<meta property="og:description" content="<?= $blogPostDetails['subject']; ?>"/>
	<meta property="og:image" content="/Images/Blog/<?= $blogPostDetails['file']; ?>"/>
	<meta property="og:url" content="<?= $blogPostDetails['url']; ?>"/>
	<meta property="og:image:width" content="1280"/>
	<meta property="og:image:height" content="640"/>

	<!-- Article Integration -->
	<meta property="article:publisher" content="<?= getenv('APP_LINK')?>"/>
	<meta property="article:section" content="<?= $blogPostDetails['category']; ?>"/>
	<meta property="article:tag" content="<?= $blogPostDetails['tags']; ?>"/>

	<!-- Twitter Integration -->
	<meta property="twitter:title" content="<?= $blogPostDetails['title']; ?>" />
	<meta property="twitter:description" content="<?= $blogPostDetails['subject']; ?>"/>
	<meta property="twitter:image" content="/Images/Blog/<?= $blogPostDetails['file']; ?>" />
	<meta property="twitter:url" content="<?= $blogPostDetails['url']; ?>"/>
	<meta property="twitter:card" content="@<?= getenv('APP_NAME')?>"/>
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
    
    <link rel="stylesheet" href="<?= public_asset('/other_assets/Front/css/main.min.css') ?>">
    <link rel="stylesheet" href="<?= public_asset('/other_assets/Front/css/style.css') ?>">
    <link rel="stylesheet" href="<?= public_asset('/other_assets/Front/css/color.css') ?>">
    <link rel="stylesheet" href="<?= public_asset('/other_assets/Front/css/responsive.css') ?>">
    <link rel="stylesheet" href="<?= public_asset('/other_assets/Front/css/addtohomescreen.css') ?>">

    <script src="<?= public_asset('/other_assets/Front/js/jquery.min.js') ?>"></script>
    <script src="<?= public_asset('/other_assets/Front/js/addtohomescreen.js') ?>"></script>

	<link rel="canonical" href="<?= $blogPostDetails['url']; ?>" />

</head>

<?php
include 'Layout/navbar.php';
?>

<title><?= $blogPostDetails['title']; ?> | <?php if(isset($coyInfo['coyname'])) { echo $coyInfo['coyname']; } else { echo getenv('APP_NAME'); } ?> News</title>












<?php include 'Layout/footer.php'; ?>
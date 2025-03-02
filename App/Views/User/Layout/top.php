<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION['uniqueid'])) {
    echo '<meta http-equiv="refresh" content="1; URL=../../login/">';
  }
if ((empty($userInfo['uniqueid'])) || ($userInfo['login_status'] == "Logged_out") ) {
    echo '<meta http-equiv="refresh" content="1; URL=../../login/">';
 }
if (($_SESSION['log_session'] != $userInfo['log_session']) || ($userInfo['log_session'] == "End Session")) {
    echo '<meta http-equiv="refresh" content="1; URL=../../login/">';
 }
include 'location.php';
include 'timeAgo.php';
//include 'cache-top.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stop Searching, Start Dating — all you need is a device connected to the internet" />
    <meta name="keywords" content="Dating, Relationship, Marriage, Casual" />

    <!-- Facebook and Twitter integration -->
	<meta property="og:title" content="<?= getenv('APP_NAME')?>"/>
	<meta property="og:image" content="/Images/Logo/favicon.png"/>
	<meta property="og:url" content="<?= getenv('APP_LINK')?>"/>
	<meta property="og:site_name" content="<?= getenv('APP_NAME')?>"/>
	<meta property="og:description" content="Stop Searching, Start Dating — all you need is a device connected to the internet"/>
	<meta name="twitter:title" content="<?= getenv('APP_NAME')?>" />
	<meta name="twitter:image" content="/Images/Logo/favicon.png" />
	<meta name="twitter:url" content="<?= getenv('APP_LINK')?>" />
	<meta name="twitter:card" content="Stop Searching, Start Dating — all you need is a device connected to the internet." />
	
	<!-- FAVICONS ICON ============================================= -->
	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/Images/Logo/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Images/Logo/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Images/Logo/favicon.png">
    <link rel="manifest" href="/Images/Logo/favicon.png">
    <link rel="mask-icon" href="/Images/Logo/favicon.png" color="#666666">
    <link rel="shortcut-icon" href="/Images/Logo/favicon.png">
    <meta name="apple-mobile-web-app-title" content="Stop Searching, Start Dating">
    <meta name="application-name" content="<?= getenv('APP_NAME')?>">
    <meta name="msapplication-TileColor" content="#6262e3">
    <meta name="msapplication-config" content="/Images/Logo/favicon.png">
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/Images/Logo/favicon.png" type="image/x-icon"/>

	<link href="/Images/Logo/logo.png" rel="icon">
    <link href="/Images/Logo/logo.png" rel="apple-touch-icon">
    
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    
    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= public_asset('/other_assets/User/css/assets.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= public_asset('/other_assets/User/vendors/calendar/fullcalendar.css') ?>">
    
    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= public_asset('/other_assets/User/css/typography.css') ?>">
    
    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= public_asset('/other_assets/User/css/shortcodes/shortcodes.css') ?>">
    
    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="<?= public_asset('/other_assets/User/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= public_asset('/other_assets/User/css/dashboard.css') ?>">
    <link class="skin" rel="stylesheet" type="text/css" href="<?= public_asset('/other_assets/User/css/color/color-1.css') ?>">

    <script src="<?= public_asset('/other_assets/User/js/jquery.min.js') ?>"></script>
    
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar" onCut="return false" onDrag="return false" onDrop="return false" style="">

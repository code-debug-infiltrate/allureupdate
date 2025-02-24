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

    <!-- Fonts and icons -->
    <script src="<?= public_asset('/other_assets/User/js/plugin/webfont/webfont.min.js'); ?>"></script>
    <script src="<?= public_asset('/other_assets/User/css/fonts.min.css'); ?>"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["<?= public_asset('/other_assets/User/css/fonts.min.css') ?>"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= public_asset('/other_assets/User/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= public_asset('/other_assets/User/css/plugins.min.css') ?>" />
    <link rel="stylesheet" href="<?= public_asset('/other_assets/User/css/kaiadmin.min.css') ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= public_asset('/other_assets/User/css/font-awesome.min.css') ?>">
  </head>
  <body>
    <div class="wrapper">
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION['uniqueid'])) {
    echo '<meta http-equiv="refresh" content="1; URL=../../login/">';
  }
if (empty($userInfo['uniqueid'])) {
    echo '<meta http-equiv="refresh" content="1; URL=../../login/">';
 }
if ($_SESSION['log_session'] != $userInfo['log_session']) {
    echo '<meta http-equiv="refresh" content="1; URL=../../login/">';
 }
 
include 'location.php';
include 'timeAgo.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= getenv('APP_NAME'); ?>, Buy Cheap Data &amp; Airtime | Pay Electricity Bills Online | Cable TV Subscription | Print Recharge Cards Online, Fund Acounts Online." />
    <meta name="keywords" content="Buy Cheap Data &amp; Airtime, Pay Electricity Bills Online, Cable TV Subscription, Print Recharge Cards, Fund Account, Online Account, Deposits, Transfers, Business Loans" />
    <meta name="author" content="ITM-Network">

    <!-- Facebook and Twitter integration -->
	<meta property="og:title" content="<?= getenv('APP_NAME')?>"/>
	<meta property="og:image" content="/Images/Logo/favicon.png"/>
	<meta property="og:url" content="<?= getenv('APP_LINK')?>"/>
	<meta property="og:site_name" content="<?= getenv('APP_NAME')?>"/>
	<meta property="og:description" content="<?= getenv('APP_NAME'); ?>, Buy Cheap Data &amp; Airtime | Pay Electricity Bills Online | Cable TV Subscription | Print Recharge Cards Online, Fund Acounts Online."/>
	<meta name="twitter:title" content="<?= getenv('APP_NAME')?>" />
	<meta name="twitter:image" content="/Images/Logo/favicon.png" />
	<meta name="twitter:url" content="<?= getenv('APP_LINK')?>" />
	<meta name="twitter:card" content="<?= getenv('APP_NAME'); ?>, Buy Cheap Data &amp; Airtime | Pay Electricity Bills Online | Cable TV Subscription | Print Recharge Cards Online, Fund Acounts Online." />
	
	<!-- FAVICONS ICON ============================================= -->
	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/Images/Logo/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Images/Logo/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Images/Logo/logo.png">
    <link rel="manifest" href="/Images/Logo/logo.png">
    <link rel="mask-icon" href="/Images/Logo/logo.png" color="#666666">
    <link rel="shortcut icon" href="/Images/Logo/logo.png">
    <meta name="apple-mobile-web-app-title" content="<?= getenv('APP_NAME')?>">
    <meta name="application-name" content="<?= getenv('APP_NAME')?>">
    <meta name="msapplication-TileColor" content="#6262e3">
    <meta name="msapplication-config" content="/Images/Logo/favicon.png">
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
<body class="ttr-opened-sidebar ttr-pinned-sidebar" onCut="return false" onDrag="return false" onDrop="return false">

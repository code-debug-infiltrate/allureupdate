<?php 
include 'location.php'; 
include 'timeAgo.php';

//Parse URL
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$u = explode("/", $url);
//Clean Input
$currentPage = $u[1];

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
    <link rel="icon" type="image/png" sizes="192x192" href="/Images/Logo/favicon.png">
    <link rel="icon" type="image/png" sizes="128x128" href="/Images/Logo/favicon.png">
    <link rel="manifest" href="/Images/Logo/favicon.png">
    <link rel="mask-icon" href="/Images/Logo/favicon.png" color="#666666">
    <link rel="shortcut icon" href="/Images/Logo/favicon.png">
    <meta name="apple-mobile-web-app-title" content="<?= getenv('APP_NAME')?>">
    <meta name="application-name" content="<?= getenv('APP_NAME')?>">
    <meta name="msapplication-TileColor" content="#6262e3">
    <meta name="msapplication-config" content="/Images/Logo/favicon.png">	

    <!-- Stylesheets -->
    <link href="<?= public_asset('/other_assets/Front/css/style.css') ?>" rel="stylesheet">
    <link href="<?= public_asset('/other_assets/Front/css/responsive.css') ?>" rel="stylesheet">

    <link rel="icon" href="/Images/Logo/favicon.png" type="image/x-icon">

    <!-- jequery plugins -->
    <script src="<?= public_asset('/other_assets/Front/js/jquery.js') ?>"></script>


</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

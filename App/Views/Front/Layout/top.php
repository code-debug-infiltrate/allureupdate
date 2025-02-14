<?php
include 'location.php';
include 'timeAgo.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<meta name="keywords" content="Sports Academy, Football, Scouting, Tournament, Splendid, Splendid Global">
<meta name="description" content="<?= getenv('APP_NAME')?> uses a unique approach that trains the body, mind, character, and team culture simultaneously">
<meta name="author" content="ITM-Network">

<!-- Facebook and Twitter integration -->
<meta property="og:title" content="<?= getenv('APP_NAME')?>"/>
<meta property="og:image" content="/Images/Logo/favicon.png"/>
<meta property="og:url" content="<?= getenv('APP_LINK')?>"/>
<meta property="og:site_name" content="<?= getenv('APP_NAME')?>"/>
<meta property="og:description" content="<?= getenv('APP_NAME')?> uses a unique approach that trains the body, mind, character, and team culture simultaneously"/>
<meta name="twitter:title" content="<?= getenv('APP_NAME')?>" />
<meta name="twitter:image" content="/Images/Logo/favicon.png" />
<meta name="twitter:url" content="<?= getenv('APP_LINK')?>" />
<meta name="twitter:card" content="<?= getenv('APP_NAME')?> uses a unique approach that trains the body, mind, character, and team culture simultaneously" />


<!-- Stylesheets -->
<link href="<?= public_asset('/other_assets/Front/css/style.css') ?>" rel="stylesheet">
<link href="<?= public_asset('/other_assets/Front/css/responsive.css') ?>" rel="stylesheet">

<link rel="icon" href="/Images/Logo/favicon.png" type="image/x-icon">


<!-- jequery plugins -->
<script src="<?= public_asset('/other_assets/Front/js/jquery.js') ?>"></script>


</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

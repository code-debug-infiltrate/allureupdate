<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION['uniqueid'])) {
    echo '<meta http-equiv="refresh" content="1; URL=../../login/">';
  }

if (empty($adminInfo['uniqueid'])) {
    echo '<meta http-equiv="refresh" content="1; URL=../../login/">';
 }
 
/*
if ($_SESSION['log_session'] != $adminInfo['log_session']) {
    echo '<meta http-equiv="refresh" content="1; URL=../../login/">';
 }*/


include 'location.php';
include 'timeAgo.php';

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="Used Construction Equipment &amp; Heavy Machinery For Sale | Escavators, Industrial Machines, Equipments, Buldozers, Loaders, Professional engineering machinery, construction machinery overall solution provider" />

    <meta name="Description" content="Used Construction Equipment &amp; Heavy Machinery For Sale | Professional engineering machinery, construction machinery overall solution provider, Sales and Services, Escavators, Industrial Machines, Equipments, Buldozers, Loaders" />

    <meta name="author" content="ITM Network" />

  <!-- Favicons -->

  <link href="/Images/Logo/favicon.png" rel="icon">

  <link href="/Images/Logo/favicon.png" rel="apple-touch-icon">



  <!-- Google Fonts -->

  <link href="https://fonts.gstatic.com" rel="preconnect">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



  <!-- Vendor CSS Files -->

  <link href="<?= public_asset('/other_assets/Admin/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <link href="<?= public_asset('/other_assets/Admin/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">

  <link href="<?= public_asset('/other_assets/Admin/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">

  <link href="<?= public_asset('/other_assets/Admin/vendor/quill/quill.snow.css') ?>" rel="stylesheet">

  <link href="<?= public_asset('/other_assets/Admin/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">

  <link href="<?= public_asset('/other_assets/Admin/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">

  <link href="<?= public_asset('/other_assets/Admin/vendor/simple-datatables/style.css') ?>" rel="stylesheet">



  <!-- Template Main CSS File -->

  <link href="<?= public_asset('/other_assets/Admin/css/style.css') ?>" rel="stylesheet">

  <!--Display -->   

  <script src="<?= public_asset('/other_assets/Admin/js/ajaxviewall.js') ?>"></script>

</head>



<body class="text-capitalize" onCut="return false" onDrag="return false" onDrop="return false">


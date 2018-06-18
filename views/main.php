<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Robust Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo ROOT_URL; ?>/app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo ROOT_URL; ?>/app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo ROOT_URL; ?>/app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo ROOT_URL; ?>/app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="<?php echo ROOT_URL; ?>/app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/app-assets/css/pages/login-register.css">
     <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/assets/css/style.css">
    <!-- END Custom CSS-->






    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo ROOT_URL; ?>/app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL; ?>/app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL; ?>/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL; ?>/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL; ?>/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL; ?>/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL; ?>/app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL; ?>/app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL; ?>/app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?php echo ROOT_URL; ?>/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="<?php echo ROOT_URL; ?>/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->


  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="<?php echo ROOT_URL; ?>/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
 
  <script src="<?php echo ROOT_URL; ?>/app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
 <script src="<?php echo ROOT_URL; ?>/app-assets/js/scripts/charts/chartjs/line/line.js" type="text/javascript"></script>
        <script src="<?php echo ROOT_URL; ?>/app-assets/js/scripts/charts/chartjs/line/line-area.js" type="text/javascript"></script>
        <script src="<?php echo ROOT_URL; ?>/app-assets/js/scripts/charts/chartjs/line/line-stacked-area.js" type="text/javascript"></script>
        <script src="<?php echo ROOT_URL; ?>/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
        <script src="<?php echo ROOT_URL; ?>/app-assets/js/scripts/charts/chartjs/radar/radar.js" type="text/javascript"></script>
        <script src="<?php echo ROOT_URL; ?>/app-assets/js/scripts/charts/chartjs/radar/radar-skip-points.js" type="text/javascript"></script>

  </head>
 
   
    <?php
   
    include ('includes/nav.php'); 
    include ('includes/nav_header.php');

    ?>
   
     <?php require($view); ?>
</html>
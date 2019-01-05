<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>CIT COOP MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php if (!empty($charts)) { ?>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/jqvmap/jqvmap.min.css"/>
    <?php } ?>
    <?php if (!empty($select2)) { ?>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/select2/css/select2.min.css"/>
    <?php } ?>
    <?php if (!empty($slider)) { ?>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/bootstrap-slider/css/bootstrap-slider.min.css"/>
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="<?=base_url('themes/beagle/'); ?>assets/css/app.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/jquery.gritter/css/jquery.gritter.css"/>
  </head>

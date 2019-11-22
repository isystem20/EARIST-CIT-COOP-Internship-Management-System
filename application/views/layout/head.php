<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="<?=base_url('themes/beagle/'); ?>assets/img/logo-fav.png"> -->

    <link rel="icon" href="http://earist.edu.ph/wp-content/uploads/2016/11/cropped-Untitled-1-32x32.png" sizes="32x32" />
    <link rel="icon" href="http://earist.edu.ph/wp-content/uploads/2016/11/cropped-Untitled-1-192x192.png" sizes="192x192" />

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
    <?php if (!empty($datatable)) { ?>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css"/>
    <?php } ?>
    <?php if (!empty($editor)) { ?>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/summernote/summernote-bs4.css"/>
    <?php } ?>        
    <?php if (!empty($formelements)) { ?>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/bootstrap-slider/css/bootstrap-slider.min.css"/>
    <?php } ?>  

    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="<?=base_url('themes/beagle/'); ?>assets/css/app-red.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?=base_url('themes/beagle/'); ?>assets/lib/jquery.gritter/css/jquery.gritter.css"/>


    <script src="<?=base_url();?>themes/ckeditor/ckeditor.js"></script>
  </head>

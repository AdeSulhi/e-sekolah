<?php 
  include "../config/koneksi.php"; 
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>e-Sekolah | Sistem Informasi Sekolah</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="<?php echo $domain; ?>/assets/bootstrap/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?php echo $domain; ?>/assets/font-awesome/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="<?php echo $domain; ?>/assets/ionicons/css/ionicons.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?php echo $domain; ?>/assets/DataTables/css/datatables.min.css"/>
   <script type="text/javascript" src="<?php echo $domain; ?>/assets/DataTables/js/datatables.min.js"></script>
   <!-- Theme style -->
   <link rel="stylesheet" href="<?php echo $domain; ?>/assets/AdminLTE/css/AdminLTE.min.css">
   <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
   <link rel="stylesheet" href="<?php echo $domain; ?>/assets/AdminLTE/css/skins/skin-blue.min.css">
   <!-- e-Sekolah Style -->
   <link rel="stylesheet" href="<?php echo $domain; ?>/assets/css/e-Sekolah.css">
   <!-- Date Picker -->
   <link href="<?php echo $domain; ?>/assets/css/datepicker.min.css" rel="stylesheet">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
   <!-- Favicon -->
   <link rel="shortcut icon" href="<?php echo $domain; ?>/assets/images/favicon.ico" type="image/x-icon">
   <link rel="icon" href="<?php echo $domain; ?>/assets/images/favicon.ico" type="image/x-icon">
   <!-- Google Font -->
   <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic|Unlock|Leckerli+One">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>e-Sekolah</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">e-Sekolah</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="<?php echo $domain;?>" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#">
              <!-- The user image in the navbar-->
              <img src="<?php echo $domain; ?>/assets/AdminLTE/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION["username"] ?> </span>
            </a>
          </li>
          <li>                  
            <a href="<?php echo $domain; ?>/logout.php" class="btn btn-info btn-flat"><i class="fa fa-sign-out"></i>Sign out</a>
         </li>
        </ul>
      </div>
    </nav>
  </header>
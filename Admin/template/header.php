<?php if (!defined('header_file')) {exit("Page Not Found!!!");} ?>
<!DOCTYPE html>
<html dir="<?php echo $dir;?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo $css;?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $css;?>ionicons.min.css">
    <link rel="stylesheet" href="<?php echo $css;?>skin-blue.min.css">

        <?php if($_SESSION['lang'] == "ar") {?>

        <link rel="stylesheet" href="<?php echo $css;?>font-awesome-rtl.min.css">
        <link rel="stylesheet" href="<?php echo $css;?>AdminLTE-rtl.min.css">
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $css;?>bootstrap-rtl.min.css">
        <link rel="stylesheet" href="<?php echo $css;?>rtl.css">

        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>

        <?php } elseif($_SESSION['lang'] == "ku") {?>
            
        <link rel="stylesheet" href="<?php echo $css;?>font-awesome-rtl.min.css">
        <link rel="stylesheet" href="<?php echo $css;?>AdminLTE-rtl.min.css">
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $css;?>bootstrap-rtl.min.css">
        <link rel="stylesheet" href="<?php echo $css;?>rtl.css">

      <style>
          body, h1, h2, h3, h4, h5, h6 {
              font-family: "UniQAIDAR_SAMi" !important;
          }
      </style>

    
        <?php } else {

            ?>

            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
            <link rel="stylesheet" href="<?php echo $css;?>font-awesome.min.css">
            <link rel="stylesheet" href="<?php echo $css;?>AdminLTE.min.css">

            <?php
            
        } ?>


    <style>
        .mr-2{
            margin-right: 5px;
        }

        .loader {
            border: 5px solid #f3f3f3;
            border-radius: 50%;
            border-top: 5px solid #367FA9;
            width: 60px;
            height: 60px;
            -webkit-animation: spin 1s linear infinite; /* Safari */
            animation: spin 1s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

    </style>
    <!-- jQuery 3 -->
    <script src="<?php echo $js;?>jquery.min.js"></script>

    
    <link rel="stylesheet" href="<?php echo $plugin;?>noty/noty.css">
    <script src="<?php echo $plugin;?>noty/noty.min.js"></script>

    
    <link rel="stylesheet" href="<?php echo $plugin;?>morris/morris.css">

    <link rel="stylesheet" href="<?php echo $plugin;?>icheck/all.css">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <!-- Header  -->
    <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
         <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <!-- Nav -->
        <?php
        define('nav_file', TRUE); 
        include 'nav.php';
        ?>

    </header>

    <!-- Aside Bar -->
    <?php
    define('aside_file', TRUE);  
    include 'asid.php';
    ?>


    <!-- Middle Content  -->
    <div class="content-wrapper">

        <section class="content-header">

            <h1>Dashboard</h1>

            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
        </section>

        <section class="content">
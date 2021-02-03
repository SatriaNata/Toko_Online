<!DOCTYPE html>
<html lang="en">
<!-- <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Master Template CodeIgniter</title>

      Bootstrap core CSS
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      Custom styles for this template
      <link href="starter-template.css" rel="stylesheet">

      Just for debugging purposes. Don't actually copy these 2 lines!
      [if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]
      <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
      [if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]
      <style>
            body {
               padding-top: 50px;
         }
         .master-template {
               padding: 40px 15px;
               text-align: center;
         }
         </style>
   </head> -->

   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Integrasi Bootstap Dengan CodeIgniter 3</title>
      <!-- Bootstrap -->
      <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
      <script src="<?php echo base_url()?>assets/css/bootstrap.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
   <div class="container-fluid">
      <img class="rounded" src="<?php echo base_url(); ?>assets/foto/logo.jpg" class="card-img-top" alt="..." width="50">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= site_url('C_Template/index') ?>">Home</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?= site_url('C_Shopping/index') ?>">Daftar Barang</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?= site_url('C_Shopping/Keranjang') ?>">Keranjang</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?= site_url('C_Login/logout') ?>">Logout</a>
         </li>
         <!-- </ul>
         <form class="d-flex">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success" type="submit">Search</button>
         </form> -->
         
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li>
         <?php 
         $keranjang = 'Keranjang Belanja: '.$this->cart->total_items(). ' barang' 
         ?>
         <?php echo anchor('C_Cart/detailCart', $keranjang) ?>
            <a href=" "><i class="fas fa-cart-arrow-down"></i></a>
         </li>
      </div>
   </div>
</nav>

<center>
   <div><?= $_content; ?></div>
      
</center>
      <!-- <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="<?= site_url('main') ?>">Project name</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li><a href="<?= site_url('main') ?>">Home</a></li>
                  <li><a href="<?= site_url('main/about') ?>">About</a></li>
                  <li><a href="<?= site_url('main/contact') ?>">Contact</a></li>
               </ul>
            </div>
         </div>
      </nav>

      <div class="container">

         <div class="master-template">
         </div> -->

      <!-- </div>/.container -->
</body>
</html>
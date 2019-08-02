<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- CSS -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css">

    

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/no-more-table.css" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style type="text/css">
#langdrop:hover .dropdown-menu {display: block;}
</style>


 <title>IFA Academy</title> 

   <!--  <title>Date picker</title> -->

  </head>

  <body>

   <!--header-->

    <div class="container">

    <div class="header">

        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-top">

  <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo.png"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>



  <div class="collapse navbar-collapse nav-right" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown" id="langdrop">

        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          <i class="fas fa-globe"></i>Language

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="<?php echo base_url(); ?>user/switchLang/english">English</a>

        <!--   <a class="dropdown-item" href="<?php echo base_url(); ?>user/switchLang/spanish">Spanish</a> -->

          <a class="dropdown-item" href="<?php echo base_url(); ?>user/switchLang/greek">Greek</a>

        </div>

      </li>

      <li class="nav-item active">

          <a class="nav-link" href="<?php echo base_url();?>"><span>|</span><i class="fas fa-home"></i><?php echo $this->lang->line('DASHBOARD'); ?></a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="<?php echo base_url();?>logout"><span>|</span><i class="fas fa-sign-out-alt"></i>Logout</a>

      </li>

    </ul>

  </div>

</nav>

   </div>

    </div>

    <!--header-end-->

<div class="clearfix"></div>
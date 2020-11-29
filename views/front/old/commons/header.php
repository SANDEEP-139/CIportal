<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/');?>css/select2.min.css">
<link href="images/favicon.png" rel="icon" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<title></title>

<!-- Web Fonts
============================================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
============================================= -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/');?>vendor/bootstrap/css/bootstrap.min.css" />
<!--
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/');?>vendor/owl.carousel/assets/owl.carousel.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/');?>vendor/owl.carousel/assets/owl.theme.default.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/');?>vendor/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/');?>css/stylesheet.css" />
</head>
<body>
<!-- Preloader -->
<div id="preloader"><div data-loader="dual-ring"></div></div><!-- Preloader End -->

<!-- Document Wrapper   
============================================= -->

<div class="feedback feedback-toggle rotate" style="width: 170px;margin-left: -20px;" ><small>Request Callback</small></div>
<div class="feedback feedback-form-wrapper">
    <form id="feedback-form" class="form-horizontal" method="post">
        <legend class="text-center">Interested? provide your contact details below</legend>

        <div class="form-group">
          <label class="sr-only">Your Name</label>
          <input id="username" name="username" class="form-control" autocomplete="off" placeholder="Your Name *" required="required" type="text">   
        </div>
    <div class="form-group">
          <label class="sr-only">Email ID</label>
          <input name="emailquery" id="emailquery" class="form-control" autocomplete="off" placeholder="Your Email *" required="required" type="email">
        </div>
        <div class="form-group">
          <label class="sr-only">Phone Number</label>
          <input name="phoneno" id="phoneno" class="form-control" autocomplete="off" placeholder="Phone Number *" required="required" type="number">
        </div>
        <div class="form-group">
            <label class="sr-only">Issue</label>
            <textarea id="issue" name="issue" class="form-control" rows="3" autocomplete="off" placeholder="Write Your Issue *" required="required"></textarea>
        </div>
        <div class="form-group">
          <label class="control-label">I need service on</label>
          <input class="form-control" name="dateOfReg" id="dateOfReg" autocomplete="off" placeholder="02/03/2014" required="required" min="2015-05-1" type="text">
        </div>
    
        <div class="form-group">
      <button type="submit" name="sendissuedetails" id="sendissuedetails" class="btn btn-default">Send Details</button>
        </div>
    </form>
</div>

<div id="main-wrapper"> 
  
  <!-- Header
  ============================================= -->
  <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          
          <!-- Logo
          ============================================= -->
          <div class="logo">
            <a href="index.html"><img src="images\make-logo\logo.png" alt="Quickai" width="127" /></a>
          </div><!-- Logo end -->
          
        </div>


        <div class="header-column justify-content-end">
        
          <!-- Primary Navigation
          ============================================= -->
          <nav class="primary-menu navbar navbar-expand-lg hidden-xs">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav">
        <li class="dropdown"> <a class="dropdown-toggle" href="index.html">Home</a>
                  
        
                </li>
                <li class="dropdown"> <a class="dropdown-toggle" href="#">Track My Ad</a> 
                 
                </li>
                <li class="dropdown dropdown-mega"> <a class="dropdown-toggle" href="howtobook.html">How To Booking</a> 
                  
                </li>
                 <li class="dropdown dropdown-mega"> <a class="dropdown-toggle" href="bookads.html">Category</a> 
                  
                </li>

                <li class="dropdown active"> <a class="dropdown-toggle" href="#">Pages</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                   
                    <li><a class="dropdown-item" href="profile.html">TOP NEWSPAPERS</a></li>
                    <li><a class="dropdown-item" href="support.html">Support</a></li>
                    <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                  </ul>
                </li>
               <li class="login-signup ml-lg-2"><a class="pl-lg-4 pr-0" data-toggle="modal" data-target="#login-signup" href="#" title="Login / Sign up">Login / Sign up <span class="d-none d-lg-inline-block"><i class="fa fa-user"></i></span></a></li>
                <li><div id="mySidenav" class="sidenav"  >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div id="co3">
  <a href="#">ABOUT US PAGE</a><hr>
  <a href="#">TESTIMONIAL</a><hr>
  <a href="#">CARRIER</a><hr>
   <a href="#">QUICK PAYMENT</a><hr>
  <a href="#">TOP NEWSPAPERS</a><hr>
  <a href="#">TOP CATEGORIES</a><hr>
  <a href="#">TOP CITIES TO ADVERTISE</a><hr>
  <a href="#">OUR CLIENTS</a><hr>
  <a href="#">TESTIMONIALS</a><hr>
  <a href="#">PRESS/MEDIA</a><hr>
  <a href="#">CAREER</a><hr>
  <a href="#">OUR BLOG</a><hr>
  <a href="#">QUICK PAYMENT LINK</a><hr>
  <a href="#">CONTACT US</a><hr>
  </div>
</div>

<span id="toggal-btn" onclick="openNav()">&#9776;</span></li>
              </ul>
            </div>
                 
          </nav><!-- Primary Navigation end --> 
          
        </div>
        
        <!-- Collapse Button
        ============================================= -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
      </div>
    </div>
  </header>
  <!-- Header end --> 
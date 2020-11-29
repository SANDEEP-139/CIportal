<?php
    $CI= get_instance();
    $CI->load->model('common_model');
    $site_data = $CI->common_model->getSettingsValue();
    // print_r($site_data);die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Talents Jobs</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
     <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/front/'); ?>images/header/favicon.ico" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/responsive2.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.simple-login-container {
width: 300px;
max-width: 100%;
 margin: 50px auto;
}

.simple-login-container h2 {
text-align: center;
font-size: 20px;
}

.simple-login-container .btn-login {
background-color: #FF5964;
color: #fff;
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153460368-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153460368-1');
</script>


</head>

<body>


    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="<?php echo base_url('assets/front/');?>images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <div class="jp_top_header_main_wrapper" style="border:0px solid red;margin-top:-18px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <!--
                            <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+123456789</p>
                            <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="<?=base_url('assets/front/'); ?>">Email@example.com</a></p>-->
                        </div>
                    </div>
                </div>
 	            <head><script data-ad-client="ca-pub-9268075008862469" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script></head>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_right_wrapper">
                        <div class="jp_top_header_right_cont dropdown" >
                            <ul >
                                <?php if($this->session->userdata('email')!='' && $this->session->userdata('type')=='candidate'){ ?>
                               
							   <li id="dropbtn"  style="border:0px solid green;width:250px;background-color:#23c0e9;">
									<div class="w3-bar"  style="margin-top:5px;">
										<div class="w3-dropdown-hover w3-mobile">
										  <button class="w3-button" style="width:250px;background-color:#23c0e9;color:#fff;border:0px solid red;"><i class="fa fa-user"></i>&nbsp; DASHBOARD <i class="fa fa-caret-down"></i></button>
										  <div class="w3-dropdown-content w3-bar-block w3-dark-grey" style="z-index:16;background-color:#23c0e9;">
												<a style="width:250px;" class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/candidateProfile');?>" title="Profile"  class="dropdown-item">Profile</a>
												<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/candidateEdit/');?><?php echo $this->session->userdata('id');?>" title="Edit Profile"  class="dropdown-item">Edit Profile</a>
												<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/candidateJobStatus');?>" title="My Application" class="dropdown-item"  class="dropdown-item">Applied Job Status</a>
												<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/check');?>" title="Refer & Get Premium" class="dropdown-item"  class="dropdown-item">Refer & Earn Program</a>
												<a class="w3-bar-item w3-button w3-mobile par" href="#<?php //echo base_url('home/chat');?>" title="Candidate Chat" class="dropdown-item"  class="dropdown-item">Call HR</a>
												<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/chat');?>" title="Candidate Chat" class="dropdown-item"  class="dropdown-item">Chat To HR</a>
											   
												<a class="w3-bar-item w3-button w3-mobile par" href="#" title="Account Settings"  class="dropdown-item">Account Settings</a>
												<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/logout');?>" title="Logout"  class="dropdown-item">Logout</a>
										  
										  </div>
										</div>
									</div>
                                   <!-- <a href="<?=base_url('home/dashboard'); ?>"><i class="fa fa-user"></i>&nbsp; DASHBOARD
                                    </a>-->
                                </li>
								
                                <li>
                                    <a href="<?=base_url('home/logout'); ?>" title="Logout"><i class="fa fa-sign-out"></i>&nbsp;LOGOUT
                                   </a> 
                                </li>
                     
                                <?php }else if($this->session->userdata('email')!='' && $this->session->userdata('type')=='employee'){?>
                                <li style="border:0px solid green;width:250px;background-color:#23c0e9;">
									<div class="w3-bar"  style="margin-top:5px;">
										<div class="w3-dropdown-hover w3-mobile">
										  <button class="w3-button" style="width:250px;background-color:#23c0e9;color:#fff;border:0px solid red;"><i class="fa fa-user"></i>&nbsp; DASHBOARD <i class="fa fa-caret-down"></i></button>
										  <div class="w3-dropdown-content w3-bar-block w3-dark-grey" style="z-index:15;background-color:#23c0e9;">
										  
											<a style="width:250px;" class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/employee_dashboard');?>" title="Dashbaord" class="dropdown-item">Dashboard</a>
											<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/employeeProfile');?>" title="Profile" class="dropdown-item">Profile</a>
											<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/companyJobStatus');?>" title="Free Posted" class="dropdown-item">Candidate Appied Job</a>
											<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/getJobListById');?>" title="Profile" class="dropdown-item">Free Posted Jobs</a>
											<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/dataAccess');?>" title="Free Posted" class="dropdown-item">Free Access Candidate Data</a>
											<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/employeeEdit/');?><?php echo $this->session->userdata('id');?>" title="Edit Profile" class="dropdown-item">Edit Profile</a>
											<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/empchat');?>" title="Candidate Chat" class="dropdown-item"  class="dropdown-item">Message</a>
											<a class="w3-bar-item w3-button w3-mobile par" href="#" title="Account Settings" class="dropdown-item">Account Settings</a>		
											<a class="w3-bar-item w3-button w3-mobile par" href="<?php echo base_url('home/logout');?>" title="Logout" class="dropdown-item">Logout</a>
										</div>
										</div>
									</div>
									<!---<a href="<?=base_url('home/employee_dashboard'); ?>"><i class="fa fa-user"></i>&nbsp; DASHBOARD
                                    </a>--> 
                                </li>
                                <li>
                                    <a href="<?=base_url('home/logout'); ?>" title="Logout"><i class="fa fa-sign-out"></i>&nbsp;LOGOUT
                                    </a>
                                </li>
                                <?php }else{ ?>
                                <li>
                                    <a href="<?=base_url('home/registerView'); ?>"><i class="fa fa-user"></i>&nbsp; SIGN UP  </a>
                                </li>
                                <li>
                                    <a href="<?=base_url('home/loginView'); ?>"><i class="fa fa-sign-in"></i>&nbsp; LOGIN </a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
						
                        <div class="jp_top_header_right__social_cont">
                            <ul>
								 <?php if($this->session->userdata('email')!='' && $this->session->userdata('type')=='candidate'){ ?>
									<li><a href="<?php echo base_url('home/chat/')?>" style="text-decoration:none;"><i  style="color:white;font-size:25px" class="fa fa-wechat"  aria-hidden="true"></i><sup style="text-decoration:none;color:#fff;font-size:bold;background-color:#4cd137; border-radius: 100px;"> <span id="can_message_count"></span></sup> Notification</a></li>
								
								<?php  }else if($this->session->userdata('email')!='' && $this->session->userdata('type')=='employee'){ ?>
									<li><a href="<?php echo base_url('home/empchat/')?>" style="text-decoration:none;"><i style="color:white;font-size:25px"  class="fa fa-wechat" aria-hidden="true"></i><sup style="text-decoration:none;color:#fff;font-size:bold;background-color:#4cd137; border-radius: 100px;"><span id="message_count"></span></sup> Notification</a></li>
								<?php }?>
                            </ul>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- main -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9268075008862469"
     data-ad-slot="6220165203"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<style>
.img-logo {
 margin-left: -50px;
           
width:55%;
padding-top: 0px;
margin-top: -20px;
        }
.jp_tittle_main_wrapper{
        padding-top: 15px;
    padding-bottom: 15px;
}
</style>
    <!-- Header Wrapper Start -->
    <div class="jp_top_header_img_wrapper">
        <div class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width"  >
                        <div class="gc_header_wrapper" >
                            <div class="gc_logo">
                                <a  href="<?=base_url(); ?>"><img style="width:150px;height:150px;border:0px solid red;" src="<?php echo base_url('assets/front/'); ?>images/header/f3.png"  alt="Logo" title="Talents Job" class="img-responsive 1img-logo"></a>
                            </div>
                           
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                         </div>
                                  	
                        
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 full_width" style="margin-left: 88px;">
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="mainmenu">
                                <div class="gc_right_menu">
                                    <ul>
                                        <li>
                                            <div id="search_open" class="gc_search_box">
                                                <input type="text" placeholder="Search here">
                                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
     
                                <ul class="float_left">
                                    <li class="parent gc_main_navigation"><a href="<?=base_url('home/'); ?>" class="gc_main_navigation">Home&nbsp;</a>

                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="<?=base_url(); ?>" class="gc_main_navigation"> Job Search&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <!--<li class="parent"><a href="<?=base_url(); ?>">All Jobs</a></li>-->
                                             <li class="parent"><a href="<?=base_url('home/jobs'); ?>">All Jobs</a></li>
                                            <li class="parent"><a href="<?=base_url('home/searchJob2/private'); ?>">Private Job</a></li>
                                            <li class="parent"><a href="<?=base_url('home/searchJob2/government'); ?>">Govt. Jobs</a></li>
                                            <li class="parent"><a href="<?=base_url('home/searchJob2/fresher'); ?>">Fresher</a></li>
                                            <li class="parent"><a href="<?=base_url('home/jobs/walkin'); ?>">Walk In Jobs</a></li>
                                            <li class="parent"><a href="<?=base_url('home/jobs/contract'); ?>">Internship </a></li>
                                            <li class="parent"><a href="<?=base_url('home/jobs/contract'); ?>">COVID-19 Resources </a></li>
                                            <li class="parent"><a href="<?=base_url('home/searchJob2/fresher'); ?>">Work From Home</a></li>
                                        </ul>
                                   </li>
                                    <li class="has-mega gc_main_navigation"><a href="<?=base_url('home/searchJob2/fresher'); ?>" class="gc_main_navigation">Work From Home Jobs&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <!--<li class="parent"><a href="<?=base_url(); ?>">All Jobs</a></li>-->
                                             <li class="parent"><a href="<?=base_url('home/searchJob2?type=Work+from+Home&find_type=Job&city='); ?>">Work From Home Jobs</a></li>
                                            <li class="parent"><a href="<?=base_url('home/searchJob2?type=internship&find_type=Job&city='); ?>">Internship</a></li>
                                            <li class="parent"><a href="<?=base_url('home/searchJob2/fresher'); ?>">Fresher Jobs</a></li>
                                            <li class="parent"><a href="<?=base_url('home/jobs/contract'); ?>">Part Time Jobs </a></li>
                                            <li class="parent"><a href="<?=base_url('home/jobs/contract'); ?>">COVID-19 Resources </a></li>
                                        </ul>
                                   </li>
                                   
                                         <li class="has-mega gc_main_navigation"><a href="<?=base_url('home/searchJob2?type=usa&find_type=Job&city=USA'); ?>" class="gc_main_navigation"> International Jobs&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <ul>
                        
                                                                <li>
                                                                    <a href="<?=base_url('home/searchJob2?type=usa&find_type=Job&city=USA'); ?>">Jobs in USA</a>
                                                                </li>
																 <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Australia'); ?>">Jobs in Australia</a>
                                                                </li>
																 <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=UAE'); ?>">Jobs in UAE</a>
                                                                </li>
																 <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Canada'); ?>">Jobs in Canada</a>
                                                                </li>
																 <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=United+Kingdom'); ?>">Jobs in United Kingdom </a>
                                                                </li>
                                                                <!-- .has-children -->
                                                                 <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Ireland'); ?>">Jobs in Ireland </a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Germany'); ?>">Jobs in Germany </a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=South Africa'); ?>">Jobs in South Africa </a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Saudi Arabia'); ?>">Jobs in Saudi Arabia </a>
                                                                </li>
                                                               <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Poland'); ?>">Jobs in Poland</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Pakistan'); ?>">Jobs in Pakistan</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Nigeria'); ?>">Jobs in Nigeria</a>
                                                                </li>
                                                                 <li>
                                                                    <a href="<?=base_url('home/Jobs'); ?>">View More Countries</a>
                                                                </li>
                                                            </ul>
                                   </li>
                                   
                                </ul>
                            </div>
                  
                            <!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu" >
                                <div class="container-fluid">
                                    <div class="row" >
                                        <div class="col-xs-6 col-sm-6" style="border:0px solid red;margin-left:-50px;" >
                                              <a href="<?=base_url(); ?>"><img style="width:150px;height:150px;border:0px solid red;" src="<?php echo base_url('assets/front/'); ?>images/header/f3.png"  alt="Logo" title="Talents Jobs" class="img-responsive img-logo"></a>
                                          
                                        </div>
                                        <div class="col-xs-4 col-sm-4" style="border:0px solid red;margin-left:30px;">
                                            <div class="cd-dropdown-wrapper">
                                                <a class="house_toggle" href="<?=base_url(); ?>" style=" text-align: center;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                                        <g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#000000" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#000000" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#000000" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#000000" />
                                                            </g>
                                                            <g>
                                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#000000" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <nav class="cd-dropdown">
                                                    <h2><a href="<?=base_url(); ?>">Talent <span> Jobs</span></a></h2>
                                                    <a href="<?=base_url(); ?>" class="cd-close">Close</a>
                                                    <ul class="cd-dropdown-content">
                                                    <li class="">
                                                            <a href="<?=base_url('home/'); ?>">Home</a>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="<?=base_url(); ?>">Job Search</a>
                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <!--    <li class="go-back"><a href="<?=base_url(); ?>">All JOb</a></li>-->
                                                                <li class="parent"><a href="<?=base_url('home/jobs'); ?>">All Jobs</a></li>
                                                                <li class=""><a href="<?=base_url('home/searchJob2/private'); ?>">Private Job</a></li>
                                                                <li class=""><a href="<?=base_url('home/searchJob2/government'); ?>">Govt. Jobs</a></li>
                                                                <li class=""><a href="<?=base_url('home/searchJob2/fresher'); ?>">Fresher</a></li>
                                                                <li class=""><a href="<?=base_url('home/searchJob2/walkin'); ?>">Walk In Jobs</a></li>
                                                                <li class=""><a href="<?=base_url('home/jobs/contract'); ?>">Internship </a></li>
                                                                <li class=""><a href="<?=base_url('home/jobs/contract'); ?>">COVID-19 Resources </a></li>
                                                                <li class=""><a href="<?=base_url('home/searchJob2/fresher'); ?>">Work From Home</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li class="">
                                                            <a href="<?=base_url('home/searchJob2?type=Internship&find_type=Job&city='); ?>">Internship</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?=base_url('home/searchJob2?type=Work+from+Home&find_type=Job&city='); ?>">Work From Home</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?=base_url('home/searchJob2?type=Fresher&find_type=Job&city='); ?>">Fresher Jobs</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="<?=base_url('home/searchAllCandidate'); ?>">People Search</a>
                                                        </li>
                                                     <li class="has-children">
                                                            <a href="<?php echo base_url('home/searchJob2?type=usa&find_type=Job&city=USA'); ?>#">International Jobs</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                              
                                                                <li>
                                                                    <a href="<?=base_url('home/searchJob2?type=usa&find_type=Job&city=USA'); ?>">Jobs in USA</a>
                                                                </li>
																 <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Australia'); ?>">Jobs in Australia</a>
                                                                </li>
																 <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=UAE'); ?>">Jobs in UAE</a>
                                                                </li>
																 <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Canada'); ?>">Jobs in Canada</a>
                                                                </li>
																 <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=United+Kingdom'); ?>">Jobs in United Kingdom </a>
                                                                </li>
                                                                <!-- .has-children -->
                                                                 <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Ireland'); ?>">Jobs in Ireland </a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Germany'); ?>">Jobs in Germany </a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=South Africa'); ?>">Jobs in South Africa </a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Saudi Arabia'); ?>">Jobs in Saudi Arabia </a>
                                                                </li>
                                                               <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Poland'); ?>">Jobs in Poland</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Pakistan'); ?>">Jobs in Pakistan</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?=base_url('Home/searchJob2/?profile=Nigeria'); ?>">Jobs in Nigeria</a>
                                                                </li>
                                                                 <li>
                                                                    <a href="<?=base_url('home/Jobs'); ?>">View More Countries</a>
                                                                </li>
                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->  
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li class="has-children">
                                                            <a href="#">Career Tips</a>
                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class=""><a href="<?=base_url('home/interviewTips'); ?>">Interview Tips</a></li>
                                                                <li class=""><a href="https://www.resumemaker.online/">Resume Samples</a></li>
                                                                <li class=""><a href="<?=base_url(); ?>">Courses</a></li>
                                                                <li class=""><a href="https://www.job-hunt.org/job_interviews/pre-interview-preparation.shtml"> Interview Preparation</a></li>
                                                            </ul>
                                                        </li>
														<!--go-back-->
                                                       <!-- <li class="has-children">
                                                            <a href="#">MORE</a>
                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="<?=base_url('home/check'); ?>" class="gc_main_navigation">Reffer & Earn</a></li>
                                                                <!--<li class="go-back"><a href="#">Company Search</a></li>
                                                            </ul>
                                                        </li>-->

														<?php if($this->session->userdata('email')!='' && $this->session->userdata('type')=='candidate'){ ?>
														
															 <li class="has-children">
																<a href="<?=base_url(); ?>">DASHBOARD</a>
																<ul class="cd-secondary-dropdown is-hidden">
																<li class="go-back"><a href="<?php echo base_url('#'); ?>#0">Menu</a></li>
																	<li class="parent"><a href="<?=base_url('home/candidateProfile'); ?>">Profile</a></li>
																	<li class=""><a href="<?php echo base_url('home/candidateEdit/');?><?php echo $this->session->userdata('id');?>">Edit Profile</a></li>
																	<li class=""><a href="<?php echo base_url('home/candidateJobStatus');?>">Applied Job Status</a></li>
																	<li class=""><a href="<?php echo base_url('home/candidateJobStatus');?>">Call HR</a></li>
																	<li class=""><a href="<?php echo base_url('home/chat');?>">Chat To HR</a></li>
																	<li class=""><a href="<?php echo base_url('home/check');?>">Refer & Earn Program</a></li>
																	<li class=""><a href="#<?php //echo base_url('home/refer_earn');?>">Account Settings</a></li>
																</ul>
															</li>
															<li>
																<a href="<?=base_url('home/logout'); ?>" title="Logout"><i class="fa fa-sign-out"></i>&nbsp;LOGOUT </a> 
																<a href="<?=base_url('home/chat'); ?>" title=""><i style="color:black;font-size:25px"  class="fa fa-wechat" aria-hidden="true"></i> <sub style="text-decoration:none;color:#fff;font-size:bold;background-color:#4cd137; border-radius: 100px;"><span id="mobcannoti"></span></sup> Notification</a> 
															</li>
														<?php }else if($this->session->userdata('email')!='' && $this->session->userdata('type')=='employee'){?>
														<li>
														<li class="has-children">
															<a href="<?=base_url(); ?>">DASHBOARD</a>
															<ul class="cd-secondary-dropdown is-hidden">
																<li class="go-back"><a href="<?php echo base_url('#'); ?>#0">Menu</a></li>
																<li class="parent"><a href="<?=base_url('home/employee_dashboard'); ?>">DASHBOARD</a></li>
																<li class=""><a href="<?php echo base_url('home/employeeProfile/');?><?php echo $this->session->userdata('id');?>">Profile</a></li>
																<li class=""><a href="<?php echo base_url('home/companyJobStatus');?>">Candidate Appied Job</a></li>
																<li class=""><a href="<?php echo base_url('home/getJobListById');?>">Free Posted Jobs</a></li>
																<li class=""><a href="<?php echo base_url('home/dataAccess');?>">Free Access Candidate Data</a></li>
																<li class=""><a href="<?php echo base_url('home/employeeEdit/');?><?php echo $this->session->userdata('id');?>">Edit Profile</a></li>
																<li class=""><a href="<?php echo base_url('home/empchat');?>">Message</a></li>
																<li class=""><a href="#<?php //echo base_url('home/refer_earn');?>">Account Settings</a></li>
															</ul>
														</li>
														</li>
														<li>
															<a href="<?=base_url('home/logout'); ?>" title="Logout"><i class="fa fa-sign-out"></i>&nbsp;LOGOUT </a>
															<a href="<?=base_url('home/empchat'); ?>" title=""><i style="color:black;font-size:25px"  class="fa fa-wechat" aria-hidden="true"></i> <sub style="text-decoration:none;color:#fff;font-size:bold;background-color:#4cd137; border-radius: 100px;"><span id="mobempnoti"></span></sup> Notification</a> 
														</li>
														<?php }else{ ?>
														<li>
															<a href="<?=base_url('home/registerView'); ?>"><i class="fa fa-user"></i>&nbsp; SIGN UP
															</a>
														</li>
														<li>
															<a href="<?=base_url('home/loginView'); ?>"><i class="fa fa-sign-in"></i>&nbsp; LOGIN
															</a>
														</li>
														<?php }?>

														<?php if($this->session->userdata('type')=='candidate'){?>

														<?php }else{?>

													   <!-- <li><a href="<?=base_url('home/jobPostView'); ?>" class="bg-danger"><i class="fa fa-plus-circle" ></i>&nbsp; POST JOB FREE</a></li>-->
														<?php }?>

                                                    </ul>
                                                    <!-- .cd-dropdown-content -->
                                                </nav>
                                                <!-- .cd-dropdown -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                  
                                <!-- .cd-dropdown-wrapper -->
                            </header>
                        </div>
                    </div
                      		      
                    <!-- mobile menu area end -->
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="jp_navi_right_btn_wrapper">
                            <ul>
                                <?php if($this->session->userdata('type')=='candidate'){?>

                                <?php }else{?>

                               <!-- <li><a href="<?=base_url('home/jobPostView'); ?>"><i class="fa fa-plus-circle"></i>&nbsp;  POST JOB FREE</a></li>-->
                                <?php }?>

                            </ul>
                        </div>
       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper End -->

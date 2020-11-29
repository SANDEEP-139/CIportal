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
    <link rel="icon" 
      type="image/png"  href="https://cdn4.iconfinder.com/data/icons/line-icons-for-apps-46-grid-svg/47/Send-512.png"/>
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/'); ?>css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/front/'); ?>css/style_II.css" />
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/'); ?>css/responsive.css" />
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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

    <!--    steps libaray-->
    <!--
    <link rel="stylesheet" href="http://talentsjobs.in/assets/d19m59y37dris4.cloudfront.net/jobs/2-0-2/css/stepform.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js"></script>
-->

    <!-- favicon links -->
    <!--
    <link rel="shortcut icon" type="image/png" href="<?=base_url('assets/front/'); ?>images/header/favicon.ico" />
         <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
-->
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="<?php echo base_url('assets/front/');?>images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
    <div class="jp_top_header_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <!--
                            <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+123456789</p>
                            <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="<?=base_url('assets/front/'); ?>">Email@example.com</a></p>
-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_right_wrapper">
                        <div class="jp_top_header_right_cont">
                            <ul>
                                <?php if($this->session->userdata('candidate_email')!='' && $this->session->userdata('type')=='candidate'){ ?>
                                <li>
                                    <a href="<?=base_url('home/candidateProfile'); ?>"><i class="fa fa-user"></i>&nbsp; DASHBOARD
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=base_url('home/logout'); ?>" title="Logout"><i class="fa fa-sign-out"></i>&nbsp;LOGOUT
                                    </a> 
                                </li>
                                <?php }else if($this->session->userdata('employee_email')!='' && $this->session->userdata('type')=='employee'){?>
                                <li>
                                    <a href="<?=base_url('home/employeeProfile'); ?>"><i class="fa fa-user"></i>&nbsp; Dashboard
                                    </a> 
                                </li>
                                <li>
                                    <a href="<?=base_url('home/logout'); ?>" title="Logout"><i class="fa fa-sign-out"></i>&nbsp;LOGOUT
                                    </a>
                                </li>
                                <?php }else{ ?>
                                <li>
                                    <a href="<?=base_url('home/registerView'); ?>"><i class="fa fa-user"></i>&nbsp; SIGN UP
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=base_url('home/loginView'); ?>"><i class="fa fa-sign-in"></i>&nbsp;LOGIN
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="jp_top_header_right__social_cont">
                            <ul>
                                <li><a href="https://m.facebook.com/talentnetworkjobs/?view_public_for=307769783240829&_rdr"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/delhincr.jobs/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?=base_url(); ?>"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="<?=base_url(); ?>"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="<?=base_url(); ?>"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="<?=base_url(); ?>"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Wrapper End -->
    <style>
        .img-logo {
            margin-left: 35px;

               width: 170px;
    height: 117px;
            padding-top: 0px;
            margin-top: -30px;
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
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                        <div class="gc_header_wrapper">
                            <div class="gc_logo">
                                <a href="<?=base_url(); ?>"><img src="<?php echo base_url('assets/front/');?>images/header/logo.png" alt="Logo" title="Talents Job" class="img-responsive img-logo"></a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 full_width">
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
                                    <li class="has-mega gc_main_navigation"><a href="<?=base_url(); ?>" class="gc_main_navigation">Job Search&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <!--                                            <li class="parent"><a href="<?=base_url(); ?>">All JOb</a></li>-->
                                             <li class="parent"><a href="<?=base_url('home/jobs'); ?>">All Jobs</a></li>

                                            <li class="parent"><a href="<?=base_url('home/jobs/private'); ?>">Private Job</a></li>
                                            <li class="parent"><a href="<?=base_url('home/jobs/government'); ?>">Govt. Jobs</a></li>
                                            <li class="parent"><a href="<?=base_url('home/jobs/fresher'); ?>">Fresher</a></li>
                                            <li class="parent"><a href="<?=base_url('home/jobs/walkin'); ?>">Walk In Jobs</a></li>
                                            <li class="parent"><a href="<?=base_url('home/jobs/contract'); ?>">Contract Jobs </a></li>


                                        </ul>

                                    </li>
                                    <li class="parent gc_main_navigation"><a href="<?=base_url('home/searchAllCandidate'); ?>" class="gc_main_navigation">People Search &nbsp;</a>

                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="<?=base_url(); ?>" class="gc_main_navigation"> Career Tips&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start -->
                                        <ul>
                                            <li class="parent"><a href="<?=base_url('home/interviewTips'); ?>">Interview Tips</a></li>
                                            <li class="parent"><a href="https://www.resumemaker.online/">Resume Samples</a></li>
                                            <li class="parent"><a href="<?=base_url(); ?>">Courses</a></li>
                                            <li class="parent"><a href="https://www.job-hunt.org/job_interviews/pre-interview-preparation.shtml"> Interview Preparation</a></li>

                                        </ul>
                                    </li>

                                  	<li class="has-mega gc_main_navigation"><a href="<?php echo base_url('home/registerView'); ?>#" class="gc_main_navigation">  Post a Job / Employer Zone&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start -->
                                        <ul>
                                            
                                            <li class="parent"><a href="<?php echo base_url('home/registerView'); ?>add_postin.html">Free Add-Posting</a></li>
                                            <li class="parent"><a href="<?php echo base_url('home/registerView'); ?>add_postin.html">Free Access data</a></li>
                                            <li class="parent"><a href="<?=base_url('home/searchallcandidate'); ?>">Candidate Search</a></li>
											 <li class="parent"><a href="<?=base_url('home/loginView'); ?>">Login</a></li>
                                            <li class="parent"><a href="<?=base_url('home/registerView'); ?>">Register</a></li>
                                          
                                        </ul>
                                    </li>
                                  
                                </ul>
                            </div>
                            <!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="gc_logo">
                                                <a href="<?=base_url(); ?>"><img src="<?php echo base_url('assets/front/');?>images/header/logo.png" alt="Logo" title="Talents Jobs" class="img-responsive img-logo"></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="cd-dropdown-wrapper">
                                                <a class="house_toggle" href="<?=base_url(); ?>">
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

                                                        <li class="has-children">
                                                            <a href="<?=base_url(); ?>">Job Search</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <!--                                                                <li class="go-back"><a href="<?=base_url(); ?>">All JOb</a></li>-->
                                                                <li class="parent"><a href="<?=base_url('home/jobs'); ?>">All Jobs</a></li>
                                                                <li class="go-back"><a href="<?=base_url('home/jobs/private'); ?>">Private Jobs</a></li>
                                                                <li class="go-back"><a href="<?=base_url('home/jobs/government'); ?>">Govt. Jobs</a></li>
                                                                <li class="go-back"><a href="<?=base_url('home/jobs/fresher'); ?>">Fresher Jobs</a></li>
                                                                <li class="go-back"><a href="<?=base_url('home/jobs/walkin'); ?>">Walk In Jobs</a></li>
                                                                <li class="go-back"><a href="<?=base_url('home/jobs/contract'); ?>">Contract Jobs </a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- .has-children -->

                                                        <li class="">
                                                            <a href="<?=base_url('home/searchAllCandidate'); ?>"> People Search </a>
                                                        </li>
                                                     
                                                        <!-- .has-children -->
                                                        <li class="has-children">
                                                            <a href="#">CAREER TIPS</a>
                                                            <ul class="cd-secondary-dropdown is-hidden">

                                                                <li class="go-back"><a href="<?=base_url('home/interviewTips'); ?>">Interview Tips</a></li>
                                                                <li class="go-back"><a href="https://www.resumemaker.online/">Resume Samples</a></li>
                                                                <li class="go-back"><a href="<?=base_url(); ?>">Courses</a></li>
                                                                <li class="go-back"><a href="https://www.job-hunt.org/job_interviews/pre-interview-preparation.shtml"> Interview Preparation</a></li>
                                                            </ul>
                                                        </li>

                                                       <li class="has-children">
                                                            <a href="<?php echo base_url('#'); ?>#">Post a Job / Employer Zone</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="<?php echo base_url('#'); ?>#0">Menu</a></li>
                                                                <li>
                                                                   <a href="<?=base_url('home/registerView'); ?>"><i class="fa fa-user"></i>&nbsp; Sign up</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?=base_url('home/loginView'); ?>"><i class="fa fa-sign-in"></i>&nbsp; Login</a>
                                                                </li>
                                                                <li><a href="<?=base_url('home/jobPostView'); ?>" class="bg-danger"><i class="fa fa-plus-circle" ></i>&nbsp; Post Job Free</a></li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="<?php echo base_url('home/registerView'); ?>blog_right.html">Free Access data</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="<?=base_url('home/searchAllCandidate'); ?>">Candidate Search</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>

                                <?php if($this->session->userdata('candidate_email')!='' && $this->session->userdata('type')=='candidate'){ ?>
                                <li>
                                    <a href="<?=base_url('home/candidateProfile'); ?>"><i class="fa fa-user"></i>&nbsp;DASHBOARD
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=base_url('home/logout'); ?>" title="Logout"><i class="fa fa-sign-out"></i>&nbsp;LOGOUT
                                    </a> 
                                </li>
                                <?php }else if($this->session->userdata('employee_email')!='' && $this->session->userdata('type')=='employee'){?>
                                <li>
                                    <a href="<?=base_url('home/employeeProfile'); ?>"><i class="fa fa-user"></i>&nbsp; DASHBOARD
                                    </a> 
                                </li>
                                <li>
                                    <a href="<?=base_url('home/logout'); ?>" title="Logout"><i class="fa fa-sign-out"></i>&nbsp;LOGOUT
                                    </a>
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

                                <li><a href="<?=base_url('home/jobPostView'); ?>" class="bg-danger"><i class="fa fa-plus-circle" ></i>&nbsp; POST JOB FREE</a></li>
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
                    </div>
                    <!-- mobile menu area end -->
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">

                        <div class="jp_navi_right_btn_wrapper">
                            <ul>
                                <?php if($this->session->userdata('type')=='candidate'){?>

                                <?php }else{?>

                                <li><a href="<?=base_url('home/jobPostView'); ?>"><i class="fa fa-plus-circle"></i>&nbsp;POST JOB FREE</a></li>
                                <?php }?>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper End -->

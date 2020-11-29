
<?php //echo "<pre>";print_r($this->session->userdata('id'));die;?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="TalentsCrew" />
<meta name="author" content="TalentsCrew" />
<meta name="copyright" content="TalentsCrew" />
<meta charset="utf-8">
        <title>Dashboard - Talents Jobs</title>
<meta name="generator" content="Jobgator 1.0" /><meta name="author" content="TalentsCrew.com - The Jobs Explorer" /><meta name="copyright" content="TalentsCrew.com - The Jobs Explorer" /><meta name="description" content="Dashboard - TalentsCrew" /><meta name="keywords" content="Dashboard - TalentsCrew" />
<meta property="og:url" content="https://talentscrew.com/Dashboard" /><meta property="og:title" content="Dashboard - TalentsCrew" /><meta property="og:locale" content="en_US" /><meta property="og:type" content="article" /><meta property="og:image" content="https://talentscrew.com/themes-nct/images/tc_link_logo3.jpg" /><meta property="og:image:alt" content="TalentsCrew Logo" /><meta property="og:description" content="Dashboard - TalentsCrew" />
<meta http-equiv = "content-language" content = "en">
<meta name="google-site-verification" content="YhxkkoMycFmOJPpFfeysBIbIo7AdPdQkr2cEb-4AM4k" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@TC_Jobportal" />
<meta name="twitter:creator" content="@TC_Jobportal" />

 <link rel="canonical" href="https://talentscrew.com/seeker-dashbord">
 <link rel="shortcut icon" type="image/png" href="http://talentsjobs.in/assets/front/images/header/favicon.ico" />    </head>
    <body>
        <div class="loading-page">Loading&#8230;</div>
        <div class="page-wrap">
        <!-- Bootstrap Core CSS -->
<link href="https://talentscrew.com/themes-nct/assets/css/bootstrap4.min.css" rel="stylesheet">
<link href="https://talentscrew.com/themes-nct/css/toastr.css" rel="stylesheet">
<!-- Fonts CSS -->
<link href="https://talentscrew.com/themes-nct/css/font-awesome.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="https://talentscrew.com/themes-nct/css/nct-style.css?v=14" rel="stylesheet">
<link href="https://talentscrew.com/themes-nct/css/developer.css?v=2" rel="stylesheet">
<link href="https://talentscrew.com/themes-nct/css/select2/select2.css" rel="stylesheet">
 <style type="text/css">
 
 
 
@media only screen and (max-width:505px){
    .drop1  {
    top: -404px!important;
}
  }

  @media only screen and (max-width: 767px){
    .navbar-collapse {
    background: #000!important;
}
}
.select2-container--classic .select2-selection--multiple .select2-selection__choice {
    background-color: #dcdcdc!important;
    border: 1px solid #ffffff!important;
    border-radius: 15px!important;
    color: #000!important;
    padding: 4px 9px!important;
}
.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove {
    color: #000!important;
    float: right!important;
    margin-left: 5px!important;
}
  .whatsapp{
  display: none;
  color: #1DC143;
}

.whatsapp:hover, .whatsapp:focus{
  background: #1DC143;
  color: #fff;
  text-shadow: 0 0 1px rgba(0,0,0,0.2);
}

.whatsapp.activeWhatsapp{
  display: inline-block;
}
/*.select2-container .select2-search--inline {
    float: none!important;
}*/
.select2-container--classic .select2-selection--multiple .select2-selection__rendered {
    width: 100%!important;
}
</style>

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "TalentsCrew",
  "url": "https://talentscrew.com/seeker-dashbord",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://talentscrew.com/seeker-dashbord/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="text/javascript">
  
  var SESSION_UID   = "593869";
  var SESSION_TYPE  = "2";
  var SITE_URL    = "https://talentscrew.com/";
  var SITE_IMG    = "https://talentscrew.com/themes-nct/images/";

</script>

<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/jquery-1.11.1.min.js"></script>

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5d0c8bd2ea61190012a62052&product=inline-share-buttons' async='async'></script>
<!-- <script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/image_crop/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/image_crop/bootstrap.min.js"></script>  -->
<!-- <script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/validation.js"></script> -->
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/toastr.js"></script>
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/paging/jquery.twbsPagination.min.js"></script>
<script type="text/javascript">

    $(document).on('click',function(e) {
        if (e.target.id == "job_title" || e.target.id == "resume_title" || e.target.id == "test"){
            
        } else { 
           $("#test").hide();
        }
    });



$(document).ready(function() {

   $(document).on('keyup','#job_title',function() {       
    var val=$(this).val();
    if(val !=''){
      $.ajax({
         url:"https://talentscrew.com/modules-nct/home-nct/ajax.home-nct.php",
        //dataType: "json",
        type:"POST",
        data: {
           job_title: val
        },
        success: function(dataRes) {
           if(dataRes != ''){
            $("#test").show();
            $("#test").html(dataRes);
            $('.test').css('cursor','pointer');
            $('.test').css('padding','10px 15px');
            $('.test').css('border-bottom','1px solid #ccc');
            $('.test').css('background','white')
           }else{
             $("#test").hide();
             $("#test").html('');
           }
        }
      });
    }else{
      $("#test").hide();
    }
    });

   $(document).on('keyup','#post_job_title',function() {      
    var val=$(this).val();
    if(val !=''){
      $.ajax({
         url:"https://talentscrew.com/modules-nct/home-nct/ajax.home-nct.php",
        
        type:"POST",
        data: {
           post_job_title: val
        },
        success: function(dataRes) {
           if(dataRes != ''){
            $("#test").show();
            $("#test").html(dataRes);
            $('.test').css('cursor','pointer');
            $('.test').css('padding','10px 15px');
            $('.test').css('border-bottom','1px solid #ccc');
            $('.test').css('background','white')
           }else{
             $("#test").hide();
             $("#test").html('');
           }
        }
      });
    }else{
      $("#test").hide();
    }
    });

    $(document).on('keyup','#resume_title',function() {       
    var val=$(this).val();
    if(val !=''){
      $.ajax({
         url:"https://talentscrew.com/modules-nct/home-nct/ajax.home-nct.php",
        //dataType: "json",
        type:"POST",
        data: {
           resume_title: val
        },
        success: function(dataRes) {
           if(dataRes != ''){
            $("#test").show();
            $("#test").html(dataRes);
            $('.test').css('cursor','pointer');
            $('.test').css('padding','10px 15px');
            $('.test').css('border-bottom','1px solid #ccc');
            $('.test').css('background','white')
           }else{
             $("#test").hide();
             $("#test").html('');
           }
        }
      });
    }else{
      $("#test").hide();
    }
    });

});

function getval(str)
{
  var va = str.replace(/\&amp;+/g,'&');
  $("#job_title").val(va);
  $("#post_job_title").val(va);
  $("#test").hide();
}

function getval_resume(str)
{
  var va = str.replace(/\&amp;+/g,'&');
  $("#resume_title").val(va);
  $("#test").hide();
}

function hide_page_loader()
{
  $('.loading-page').css('display','none');
}

function show_page_loader()
{
  $('.loading-page').css('display','block');
}

// $(document).ready(function(){
//   dispRatting();
// });

// function dispRatting(){ 
//   $('.disp_rating').raty({
//     readOnly: true,
//     score: function() {return $(this).data('score');} 
//   }); 
// }



// $(document).ready(function() {
//     var e2;
//     e2=$("#location_emp")[0];
//     return new google.maps.places.Autocomplete(e2,{types:['geocode']});

//     var e3;
//     e3=$("#location_filter")[0];
//     return new google.maps.places.Autocomplete(e3,{types:['geocode']});

// });

// $(document).ready(function() {
//     var e2;
//     e2=$("#location_seeker")[0];
//     return new google.maps.places.Autocomplete(e2,{types:['geocode']});

// });
</script>
<style>
.test:hover{
  color:#F00;
}

 .tokenfield{
    border: white;
}
</style>
<style type="text/css">
  .st-backdrop {
    background: rgba(53, 85, 65, 0.8)!important;
}
 .st-logo {
    display: none!important;
}
.st-disclaimer {
    display: none!important;
}
.st-btn[data-network='blogger'], .st-btn[data-network='buffer'], .st-btn[data-network='delicious'], .st-btn[data-network='diaspora'], .st-btn[data-network='digg'], .st-btn[data-network='douban'], .st-btn[data-network='evernote'], .st-btn[data-network='flipboard'], .st-btn[data-network='getpocket'], .st-btn[data-network='github'], .st-btn[data-network='googlebookmarks'], .st-btn[data-network='hackernews'], .st-btn[data-network='instapaper'], .st-btn[data-network='line'], .st-btn[data-network='livejournal'], .st-btn[data-network='mailru'], .st-btn[data-network='medium'], .st-btn[data-network='meneame'],  .st-btn[data-network='odnoklassniki'], .st-btn[data-network='pinterest'], .st-btn[data-network='qzone'], .st-btn[data-network='reddit'], .st-btn[data-network='refind'], .st-btn[data-network='renren'], .st-btn[data-network='snapchat'], .st-btn[data-network='soundcloud'], .st-btn[data-network='spotify'], .st-btn[data-network='surfingbird'], .st-btn[data-network='telegram'], .st-btn[data-network='tumblr'], .st-btn[data-network='twitch'], .st-btn[data-network='vk'], .st-btn[data-network='odnoklassniki'], .st-btn[data-network='wechat'], .st-btn[data-network='weibo'], .st-btn[data-network='wordpress'], .st-btn[data-network='xing'], .st-btn[data-network='yelp'] , .st-btn[data-network='print'], .st-btn[data-network='quora'], .st-btn[data-network='email'], .st-btn[data-network='gmail'], .st-btn[data-network='yahoomail'], .st-btn[data-network='skype'], .st-btn[data-network='messenger']       {
    display: none!important;
}
.st-close {
    bottom: 50%!important;
}
.st-btns {
    top: 142px!important;
}
</style>
<style type="text/css">
   @media only screen and (max-width:480px){
      .top-menu{
         background: #000;
      } 
   }
   .learning_list a:hover{
      color:#fff!important;
      text-decoration:none!important;
   }
   .learning_navbar{
      background: #000!important;
   }
   @media only screen and (max-width: 767px){
      .learning_list a {
           border-bottom:none!important;
       }
       .learning_list{
         border-bottom:1px solid #fff!important;
       }
   }
    .job_seeker .dropdown-menu{
      padding: 0!important;
      
    }
  .job_seeker .dropdown-item{
    border-bottom: 1px solid #ccc!important;
    padding: 14px 19px!important;
  }  
  .dropdown-item{
    padding: 6px 27px!important;
    border-bottom: 1px solid #ccc!important;
  }
</style>
<style type="text/css">
   .navbar-dark .navbar-nav .nav-link {
    color: rgb(255, 255, 255);
}
   .select2-container--classic .select2-search--inline .select2-search__field {
    width: 100%!important;
}
  .select2-container--classic .select2-selection--single .select2-selection__rendered {
    line-height: 40px;
}
.select2-container .select2-selection--single {
    height: 41px;
  }
  .select2-container--classic .select2-selection--single .select2-selection__arrow {
    height: 40px;
  }
   .select2-container .select2-selection--multiple {
    min-height: 41px;
  }
  .select2-container .select2-search--inline .select2-search__field {
    padding: 5px;
}
.inner-header .text-blue.navbar-nav > li > a i {
    font-size: 27px;
    color: #00BCD4;
    background: beige;
    padding-right: 7px;
    box-shadow: 0px 0px 2px 10px #00bcd499;
    padding-left: 7px;
    padding-bottom: 1px;
    padding-top: 0px;
    border-radius: 18px;
}
</style>
<nav class="navbar navbar-expand-sm navbar-dark bg-custome navbar-fixed-top bg-white " style="margin-top: -90px;
    background-color: #000!important;z-index: 9999;width: 100%;">
  
      <a class="navbar-brand" href="<?php echo base_url();?>" title="Talent Jobs"><img src="<?php echo base_url('assets/front/'); ?>images/header/logo.png"  alt="Talent Jobs" height="55" style="border-radius: 5px;"></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse learning_navbar" id="navbarCollapse2" style="flex-flow: row-reverse;
    margin-right: 10%;height: 80px;">
        <form method="POST" action="https://TalentJobs.com/Find-Jobs">
        <ul class="navbar-nav ml-auto" style="display: flex;align-items: center; flex-direction:row!important;justify-content: space-between;
  height:100px;">
            <li class="nav-item">
              <a href="https://Talent Jobs.com/seeker-dashbord" title="Dashboard" class="nav-link">Dashboard</a>
            </li>
             <li class="nav-item ">
                  <a href="https://talentscrew.com/learning" title="Learning" class="nav-link" style="border-bottom:none!important;">Learning</a>
               </li> 
             <li class="nav-item active">
                  <a href="https://Talent Jobs.com/Seeker-Messages" class="nav-link" title="Messages" style="border-bottom:none!important;"><i class="fa fa-envelope" aria-hidden="true"></i><span class="badge badge-info badge-pill" style="position: relative; top: -13px;left: -8px;"></span></a>
               </li>
               <li class="nav-item">
                  <a href="https://Talent Jobs.com/Seeker-Notification" title="Notification" class="nav-link" style="border-bottom:none!important;"><i class="fa fa-bell" aria-hidden="true"></i><span class="badge badge-info badge-pill" style="position: relative; top: -13px;left: -8px;"></span></a>
                  
               </li>
              
			<li class="nav-item dropdown job_seeker">
                  <div class="round-img border-d61">
                                          <a class="nav-link dropdown-toggle" href="https://talentscrew.com/seeker-dashbord" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="https://talentscrew.com/themes-nct/images/user_img.png"
                        alt="Seeker-Dashbord" style="border-radius:50%"/></a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: -327%;width: 222px;position: absolute;">
                       <!--  <i class="fa fa-caret-up caret-one" aria-hidden="true"></i> -->
                        <a href="<?php echo base_url('home/dashboard');?>" title="Dashboard"  class="dropdown-item">Dashboard</a>
                        <a href="<?php echo base_url('home/candidateProfile');?>" title="Profile"  class="dropdown-item">Profile</a>
                        <a href="<?php echo base_url('home/candidateEdit/');?><?php echo $this->session->userdata('id');?>" title="Edit Profile"  class="dropdown-item">Edit Profile</a>
                        <a href="<?php echo base_url('home/candidateJobStatus');?>" title="My Application" class="dropdown-item"  class="dropdown-item">Applied Job Status</a>
                        <a href="<?php echo base_url('home/refer_earn');?>" title="Refer & Get Premium" class="dropdown-item"  class="dropdown-item">Refer & Earn Program</a>
                       
                        <a href="<?php echo base_url('home/logout');?>" title="Logout"  class="dropdown-item">Logout</a>
                     </div>
                  </div>
               </li>
                             

        </ul>
      </form>
      </div>
    
  </nav>
<div class="clearfix"></div>
<script type="text/javascript">
   $(document).ready(function() {
       $(document).on("change", "#expData", function() {
           var a = $("#expData").val();
           $("#experience").val(a);
       });
       $(function() {
           var myselect = "div.form-control select";
           $(myselect).each(function(index) {
               //$(this).closest("div.root").find("span.value").text($(this).val());
               $(this).closest("div.root").find("span.value").text($(this).find("option:selected").text());
           });
           $(document).on("change", myselect, function(e) {
               $(this).closest("div.root").find("span.value").text($(this).find("option:selected").text());
           });
       });
       //function for load
       $(document).on('click','.socialHeader',function(){
           var to = $(this).data('to');
           if(to == 'facebook' || to == 'gmail')
           {
              
               window.location.href ='#/'+'social/'+to+'/';
           }
           else
           {
               disMessage('err','Something went wrong');
               return false;
           }
       });
   })
   $("#frm_emp_login").validate({
       errorClass: "dev-error-class",
       validClass: "dev-valid-class",
       rules: {
           login_email: {
               required: true,
               validemail: true
           },
           login_password: {
               required: true
           }
       },
       messages: {
           login_email: {
               required: "Please enter your email address",
               validemail: "Please enter valid email address"
           },
           login_password: {
               required: "Please enter your password"
           }
       }
   });
</script>        
        <script type="text/javascript">
            toastr.options = {
              "closeButton": true,
              "debug": false,
              "positionClass": "toast-top-full-width",
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "8000",
              "extendedTimeOut": "0",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }
            //toastr['error']('Hello test', '');
        </script>
                <style type="text/css">
   .widget-small.primary.coloured-icon .icon {
    background-color: #009688;
    color: #fff;
}
.widget-small .icon {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    min-width: 85px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 100px 0 0 100px;
    font-size: 2.5rem;
    }
    .widget-small .info {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding: 0 20px;
    -ms-flex-item-align: center;
    align-self: center;
}
.widget-small.primary.coloured-icon {
    background-color: #fff;
    color: #2a2a2a;
}
.widget-small.primary.coloured-icon:hover{
  box-shadow: 0px 7px 8px 6px #ccc;
  transition: box-shadow .5s;

}
.widget-small {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-radius: 100px;
    color: #FFF;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}
.widget-small .info h4 {
    text-transform: capitalize;
    margin: 0;
    margin-bottom: 5px;
    font-weight: 400;
    font-size: 1.1rem;
}
.widget-small .info p {
    margin: 0;
    font-size: 16px;
}
.widget-small.info.coloured-icon .icon {
    background-color: #17a2b8;
    color: #fff;
}
.widget-small .info {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding: 0 20px;
    -ms-flex-item-align: center;
    align-self: center;
}
.widget-small.info.coloured-icon {
    background-color: #fff;
    color: #2a2a2a;
}

.widget-small.info.coloured-icon:hover{
    box-shadow: 0px 7px 8px 6px #ccc;
    transition: box-shadow .5s;
}
.widget-small.warning.coloured-icon .icon {
    background-color: #ffc107;
    color: #fff;
}
.widget-small.warning.coloured-icon {
    background-color: #fff;
    color: #2a2a2a;
}

.widget-small.warning.coloured-icon:hover {
     box-shadow: 0px 7px 8px 6px #ccc;
     transition: box-shadow .5s;
}
</style>
<link href="https://talentscrew.com/themes-nct/css/jquery.lineProgressbar.css" rel="stylesheet">
<link href="https://talentscrew.com/themes-nct/css/bootstrap-switch.css" rel="stylesheet">
<!-- Contain Section -->
<section>
  

  <div class="menu-part">
    <div class="container">
      <ul class="menu-inner">
        <li><a href="<?php echo base_url();?>">Home<i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
        <li><a href="<?php echo base_url('home/dashboard');?>">Dashboard</a></li>
      </ul>
    </div>
  </div>

  <div class="">
    <div class="container" style="padding-top:10px;">
    
      
    <!-- <div class="col-md-12">
      <p>
        70% Profile is completed
                <a class="view-more" href="https://Talent Jobs.com/edit-seeker-profile">Complete your profile now</a>
              </p>
      <div id="jq"></div>
      
     </div> -->
    </div>
  </div>
  
  <div class="general-padding1 jobseeker_dash">
    <div class="container">
      <div class="job-detail-main1">
       <!--  .........................top menu.................... -->
      <div class="row" style="margin-bottom: -4%;margin-top: 1%;">
        <div class="col-md-6 col-lg-4">
          <a href="https://talentscrew.com/seeker-application" title="View Your Job Applications" style="text-decoration: none;">
          <div class="widget-small primary coloured-icon" style="width: 88%;height: 51%;"><i class="icon fa fa-file-text-o fa-3x" aria-hidden="true"></i>
            <div class="info">
              <h4 style="color:#009688;">Applied Jobs Status</h4>
              <p style="text-align: center;"><b>1</b></p>
            </div>
          </div>
        </a>
        </div>

         <div class="col-md-6 col-lg-4">
          <a href="https://talentscrew.com/Seeker-Notification" title="View Your Notifications" style="text-decoration: none;">
          <div class="widget-small info coloured-icon" style="width: 88%;height: 51%;"><i class=" icon fa fa-bell fa-3x" aria-hidden="true"></i>
            <div class="info">
              <h4 style="color:#17a2b8;">Relevant Jobs</h4>
              <p style="text-align: center;"><b>0</b></p>
            </div>
          </div>
        </a>
        </div>

        <div class="col-md-6 col-lg-4">
          <a href="https://talentscrew.com/jobs" target="_blank" title="View Your Relevant Job" style="text-decoration: none;">
          <div class="widget-small warning coloured-icon" style="width: 88%;height: 51%;"><i class=" icon fa fa-black-tie fa-3x" aria-hidden="true"></i>
            <div class="info">
              <h4 style="color:#28a745;;">Jobs For Me/Search Jobs</h4>
              <p style="text-align: center;"><b>100+</b></p>
            </div>
          </div>
        </a>
        </div>
      </div>
         <!-- .........................top menu up to here.................... -->
<div class="">
 <div class="job-detail1 bg-white">
<div class="job-heder" style="border-radius: 21px;">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #fff;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #fff;
}
 .text-black, .weight200, li{
    list-style: unset!important;
    }
 /*....................................*/   
 .job-heder{
  padding: 0!important;
 }
 .text-black, .weight200, li{
    list-style: unset!important;
    }
    div#main-card {
    max-width: 256px;
    box-shadow: -5px 2px 18px 4px #ccc;
    border-radius: 21px;
   /* width: 100%;*/
   margin-bottom: 2%;
  
}
 
.cover-photo {
    /*background: #0ab581;*/
    width: 256px;
    height: 100px;
    border-radius: 21px 21px 0px 0px;
    background: linear-gradient(45deg, #30354d,#05ccda, #2980b9);
}

.photo {
    background: #f9f9f9;
    width: 256px;
    height: 100px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}
.photo img {
    position: relative;
    top: -50px;
    max-width: 100%;
    max-height: 100%;
    border-radius: 50%;
    box-shadow: -1px 1px 11px 6px rgba(189, 172, 172, 0.33);
}
.content {
    background: #f9f9f9;
   width: 256px;
   
    position: relative;
  /*  top: -35px;*/
  border-radius: 0px 0px 21px 21px;
}

.contact {
    background: #30354d;
    width: 256px;
    height: 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-radius: 0px 0px 21px 21px;
}

h3.name,
h4,
a {
    margin: 0;
    text-align: center;
}

h3.name {
    padding-bottom:5px;
}

h4.fullstack {
    padding-bottom:5px;
}

a {
    color: #0ab581;
    text-decoration: none;
}

a:hover {
    color: black;
}

ul {
    padding: 0;
}

.exp .fa {
    font-size: 22px;
    padding: 10px;
    text-decoration: none;
    color: #0ab581;
}

.fa:hover {
    color: #000;
}

.exp{
  border-bottom:1px solid #ccc;
  border-radius: 100px;
}
.exp:hover{
  background-color: #fff;
}
#circleBar {
  margin-top: 20px;
  text-align: center;
  font-family: 'Staatliches', cursive;
  height:320px;
 
}
#circleBar .round {
  min-height: 255px;
  /*margin-top: 30px;*/
  position: relative;
  margin-bottom: 20px;
}
#circleBar .round strong {
  position: absolute;
    top: 53%;
    left: 53%;
    margin-top: -50px;
    transform: translate(-50%);
    font-size: 29px;
    color: red;
    font-weight: 100;
    font-family:sans-serif!important;
}
.tile:hover{
  box-shadow: 0px 1px 4px 2px #0ab581;
}
.job-skills:hover{
	box-shadow: -3px 3px 7px black!important;
}
/*.............................................................*/
</style>
<!-- <div class="col-sm-1 col-lg-1 col-md-1 col-xs-12">
	<div class="leftpart">
		<img src="https://talentscrew.com/themes-nct/images/user_img.png"  alt="HGHJ" title="HGHJ">
	</div>
    
	<p style="margin-top:10px;">Profile <i class="fa fa-info-circle" onclick="getInfo();"></i> <input type="checkbox" name="my-checkbox" class="clsEmailNotification" checked>
</div>
<div class="col-sm-5 col-lg-5 col-md-5 col-xs-12">
	<div class="rightpart">
		<div class="job-heder-title">
			<h4>HGHJ</h4>
		</div>
		<div class="martop5"></div>
		<p></p>
		<p class="city-exp"><i class="fa fa fa-map-marker"></i> Delhi <span>|</span> </p>
		<p>Average Star Rating</p>
		<p><i class="fa fa-eye"></i> 0 Viewed Your Profile</p>
		<p><i class="fa fa-file"></i> 0 Downloaded Your Resume</p>
	</div>
</div>
<div class="col-sm-6 col-lg-6 col-md-6 col-xs-12">
	<div class="job-skills  " style="background: #f6f6f6;padding: 10px;border: 1px solid #ccc;box-shadow: 0 0 5px #999;">
                  <div class="admin-ratings hide">
                            <p>Ratings By Admin: N/A</p>
                            <p>Feedback By Admin: </p>
                        </div>
                <h2 class="job-title text-black">Talents Crew's Feedback</h2>
                <p><strong></strong>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</p>
                 <table border="1" >
                  <tr>
                    <th style="">Commnication Level</th>
                    <th style="">Confidence Level</th>
                    <th style="">Skill Level</th>
                  </tr>
                  <tr>
                    <td style="">N/A</td>
                    <td style="">N/A</td>
                    <td style="">N/A</td>
                  </tr>
                  
                </table><br> -->
                <!-- <p class="text-black weight200"><strong>Communication Level:</strong> N/A</p>
                <p class="text-black weight200"><strong>Confidence Level:</strong> N/A</p>
                <p class="text-black weight200"><strong>Skill Level:</strong> N/A</p> -->
             <!--    <p class="text-black weight200"><strong>Experts Feedback: </strong>“”</p>
              </div>
</div> -->
<header><h3 style="padding: 20px;text-align: center;background-color: #191919;color: #fff;border-radius: 21px 0px;margin-bottom:1%;">Profile Information</h3></header>
<div class="row">
<div class="col-md-3 col-sm-12">
  <div id="main-card">
          <div class="cover-photo"></div>
          <div class="photo">
             <img src="https://talentscrew.com/themes-nct/images/user_img.png"  alt="HGHJ" title="HGHJ">
          </div>
          <div class="content">
              <h3 class="name" style="margin-top: -48px;">HGHJ</h3>
              <h4 class="fullstack"></h4>
             <div class="exp" style="display: flex;align-items: center;">
                <span><i class="fa fa fa-map-marker"></i></span>
                <span style="margin-left:10px;">Delhi </span>
            </div>

            <div class="exp" style="display: flex;align-items: center;">
                <span><i class="fa fa-eye"></i></span>
                <span style="margin-left:10px;">0 Viewed Your Profile</span>
            </div>

            <div class="exp" style="display: flex;align-items: center;">
                <span><i class="fa fa-file"></i></span>
                <span style="margin-left:10px;">0 Downloaded Your Resume</span>
            </div>
          <div class="contact">
             <p style="margin-top:10px;color: #ffff;display: flex;justify-content: space-between;width: 61%;align-items: center;">Profile <i class="fa fa-info-circle" onclick="getInfo();"></i> <input type="checkbox" name="my-checkbox" class="clsEmailNotification" checked></p>
          </div>
      </div>
      
  </div> 
</div>   
<div class="col-md-6 col-sm-12">
    <div class="job-skills  " style="  background: linear-gradient(45deg, #51feb8,#05ccda, #2980b9);padding: 10px;border: 1px solid #ccc;box-shadow: 0 0 5px #999;border-radius: 21px;">
          
        <h2 class="job-title text-black" >Talents Jobs Feedback</h2>
        <p><strong></strong>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</p>
         <table border="1" >
          <tr>
            <th style="">Applied Jobs</th>
            <th style="">Saved Jobs</th>
            <th style="">My Interviews</th>
          </tr>
          <tr>
            <td style="">08</td>
            <td style="">19</td>
            <td style="">11</td>
          </tr>
          
        </table><br>
        <!-- <p class="text-black weight200"><strong>Communication Level:</strong> N/A</p>
        <p class="text-black weight200"><strong>Confidence Level:</strong> N/A</p>
        <p class="text-black weight200"><strong>Skill Level:</strong> N/A</p> 
        <p class="text-black weight200"><strong>Experts Feedback: </strong>“”</p>-->
  </div>
</div>
 <div class="col-md-3 col-sm-12">
    <div class="tile" style="background-color: #fff;border-radius: 10px;border: 1px solid #ccc;">                  
      <h6 class="tile-title text-center" style="padding:11px;border-radius:5px 5px 0px 0px;  background: linear-gradient(45deg, #30354d,#05ccda, #2980b9);color:#fff;font-size: 25px;">Profile Completed</h6>
        <!--  <div class="embed-responsive embed-responsive-16by9">
            <canvas class="embed-responsive-item" id="pieChartProfile"></canvas>
          </div> -->
           <section id="circleBar" style="height:287px!important;">
            <div class="round" data-value=".70" data-size="198" data-thickness="10">
              <strong></strong>
            </div>
             <a class="view-more" href="https://talentscrew.com/edit-seeker-profile" style="bottom: 18px;text-decoration: none;position: relative;display: flex;justify-content: center;width: 100%;top: -13%;font-family:sans-serif!important;background: #30354d;padding:15px;border-radius: 0px 0px 10px 10px;color:#fff!important;text-transform:capitalize;">Edit Profile</a>
          </section>   
    </div>
</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.0/circle-progress.min.js'></script>
<script>
  function Circlle(el){
  $(el).circleProgress({fill: {color: 'green'}})
    .on('circle-animation-progress', function(event, progress, stepValue){
      $(this).find('strong').text(Math.round(stepValue.toFixed(2)*100)+'%');
    //$(this).find('strong').text(String(stepValue.toFixed(2)).substr(2)+'%');
    });  
};
Circlle('.round');
</script>                           </div>
            <div class="clearfix"></div>
          </div>
        </div>
   <!--        <div class="col-sm-8 col-lg-8 col-md-8 col-xs-12">
            <div class="postedjobs">
              <h4 class="common-title">My Applications
                <a class="view-more" href="https://talentscrew.com/seeker-application">View All</a>
              </h4>
              <div class="border2">
                <div class="bg-white">
                                      <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div> -->
 <!--            <div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">
              <div class="notify fic">
                <h4 class="common-title">Notifications
                  <a class="view-more" href="">View All</a>
                </h4>
                  <div class="border2">
                      <div class="bg-white">
                          <div id="notification">
                                                        </div>
                      </div>
                  </div>
               </div>
            </div> -->
          <div class="clearfix"></div>
          <div class="martop40"></div>
      <!--     <div class="notify">
            <h4 class="common-title">Saved Searches <a class="view-more" href="">View All</a></h4>
              <div class="border2">
              <div class="bg-white">
                <div class="pull-left">
                                    <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="clearfix"></div>
          <div class="martop40"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<div class="clearfix"></div>


<div class="modal fade" id="assesmentReqModal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm pd-0">
              <ul class="navtab">
                <h4 style="width:100%"> <a class="prev-step active" href="javascript:void(0)">Schedule Profile Assessment Call.</a> </h4>
              </ul>
              <div class="tab-content">
                <form  action="https://talentscrew.com/modules-nct/seeker_dashbord-nct/index.php" name="assesmentRequest" id="assesmentRequest"  method="post" >
                  <div class="panel-body">
                    <p >You just need to select Your Suitable Date & Time. We'll call you back.</p>
                    <fieldset>
                      <div class="form-group" style="display: inline-flex;">
                        <p>  Select Date <br> & Time</p>
                                                <input type="text"  name="assesmentRequestDate" id="datepicker" class="form-control datepicker" value="22-01-2020" style="width: 200px;">   
                        <select name="assesmentRequestTime" id="assesmentRequestTime"
                         class="form-control" style="width: 200px;">
                          <option value="">Select Time</option>
                          <option value="10:00:00">10 AM</option>
                          <option value="11:00:00">11 AM</option>
                          <option value="12:00:00">12 PM</option>
                          <option value="13:00:00">01 PM</option>
                          <option value="14:00:00">02 PM</option>
                          <option value="15:00:00">03 PM</option>
                          <option value="16:00:00">04 PM</option>
                          <option value="17:00:00">05 PM</option>
                          <option value="18:00:00">06 PM</option>
                        </select>                     
                        <input  name="action" type="hidden" value="assesmentRequest">
                      </div>
                    </fieldset>
                    <fieldset style="float: right;">
                    <button type="submit" class="btn btn-primary" name="assesmentRequestBtn" id="assesmentRequestBtn" value="assesmentRequest">Request</button>
                    </fieldset>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/jquery.lineProgressbar.js"></script>
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/bootstrap-switch.js"></script>


<script type="text/javascript">

$(document).ready(function() {

 

    $(document).on("click",".notification",function(){

        var val=$(this).attr('data-id');

        $.ajax({
            url:"https://talentscrew.com/modules-nct/seeker_dashbord-nct/ajax.seeker_dashbord-nct.php",
            dataType: "json",
            type:"POST",

            data: {
               notification: val
            },
            beforeSend : function(){
                   $("#notificationBlock_"+val).html('<img src="https://talentscrew.com/themes-nct/images/ajax-loader.gif"/>');
            },
            success: function(dataRes) {

                $("#notification").html(dataRes);
            }
        });

  });

    $('#jq').LineProgressbar({
      percentage: 70,
      radius: '3px',
      height: '20px',
      fillBackgroundColor: '#3498db',
      backgroundColor: '#EEEEEE',
      duration: 3000,
      ShowProgressCount: false
    });

    $("[name='my-checkbox']").bootstrapSwitch({
      size: 'large',
      onSwitchChange: function (event, state) {
        event.preventDefault();
        var chkStatus = state;
        //var chkType = $(this).data("type");
        //var mainNotiId = $(this).data("id");
        $.ajax({
            url: "https://talentscrew.com/modules-nct/seeker_dashbord-nct/ajax.seeker_dashbord-nct.php",
            type: "post",
            dataType: "json",
            data: {
                action: "emailNotification",
                //notificationType: chkType,
                notificationStatus: chkStatus,
                //mainNotiId: mainNotiId
            },
            async: false,
            success: function(data) {
                if (data.type == "success") {
                    toastr[data.type](data.message);
                } else {
                    toastr[data.type](data.message);
                }
            }
        });
        //return console.log(state, event.isDefaultPrevented())
      }
    });
});




function getInfo(){
  toastr['info']('*If user\'s profile is In-active, no email notifications will be sent to him/her.','');
}

</script>
<script type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var dateToday = new Date();
   //var endingDate= date.setDate(date.getDate() + 30);
    $( "#datepicker" ).datepicker({
      startDate: '+1d',
      endDate: '+15d',
       format: "dd-mm-yyyy",
        autoclose: true
    }).datepicker( null,"setDate" );

  });
</script>
<style>
.bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-on, .bootstrap-switch.bootstrap-switch-large .bootstrap-switch-handle-off, .bootstrap-switch.bootstrap-switch-large .bootstrap-switch-label{
  padding:4px 10px;
  font-size:12px;
  white-space:nowrap;
}
</style>
        </div>
        
        
  <!-- Fonts -->
  <link href="https://talentscrew.com/themes-nct/css/image_crop_css/main.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- Bootstrap Core CSS -->
<link href="https://talentscrew.com/themes-nct/css/datepicker.css" rel="stylesheet">
  <link href="https://talentscrew.com/themes-nct/css/sp-style.css" rel="stylesheet">
  <link href="https://talentscrew.com/themes-nct/assets/css/jquery-ui.min.css?v=3" rel="stylesheet">
  <link href="https://talentscrew.com/themes-nct/css/jquery.raty.css" rel="stylesheet">
<link href="https://talentscrew.com/themes-nct/css/image_crop_css/cropper.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="https://talentscrew.com/themes-nct/assets/js/jquery-ui.min.js?v=6"></script>

<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/image_crop/main.js?v=2"></script>
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/image_crop/main_ins_logo.js?v=2"></script>
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/image_crop/cropper.js"></script>
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/image_crop/tooltip.min.js"></script>

<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/enscroll-0.6.0.min.js"></script>
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/oauthpopup.js"></script>
<!-- <script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/validation.js"></script> -->
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/jquery.raty.js"></script>

<script type="text/javascript">
  
$(document).ready(function(){
  dispRatting();
});
function dispRatting(){ 
  $('.disp_rating').raty({
    readOnly: true,
    score: function() {return $(this).data('score');} 
  }); 
}
</script>

<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/additional-methods.min.js"></script>
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnCayAHDpzvnkU51AU1Haz5XMy7WdGyVs&libraries=places" ></script>
<script type="text/javascript">
  
$(document).ready(function() {
    var e2;
    e2=$("#location_emp")[0];
    return new google.maps.places.Autocomplete(e2,{types:['geocode']});
    var e3;
    e3=$("#location_filter")[0];
    return new google.maps.places.Autocomplete(e3,{types:['geocode']});
});
$(document).ready(function() {
    var e2;
    e2=$("#location_seeker")[0];
    return new google.maps.places.Autocomplete(e2,{types:['geocode']});
});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- <script src="https://talentscrew.com/includes-nct/javascript-nct/gmaps/gmaps.js" type="text/javascript"></script> -->
<script type="text/javascript">
  waShBtn = function() {
  if( this.isIos === true ) {
    var b = [].slice.call( document.querySelectorAll(".wa_btn") );
    for (var i = 0; i < b.length; i++) {
      var t = b[i].getAttribute("data-text");
      var u = b[i].getAttribute("data-href");
      var o = b[i].getAttribute("href");
      var at = "?text=" + encodeURIComponent( t );
      if (t) {
          at += "%20%0A";
      }
      if (u) {
          at += encodeURIComponent( u );
      } else {
          at += encodeURIComponent( document.URL );
      }
      b[i].setAttribute("href", o + at);
      b[i].setAttribute("target", "_top");
      b[i].setAttribute("target", "_top");
      b[i].className += ' activeWhatsapp';
    }
  }
}
waShBtn.prototype.isIos = ((navigator.userAgent.match(/Android|iPhone/i) && !navigator.userAgent.match(/iPod|iPad/i)) ? true : false);
var theWaShBtn = new waShBtn();
</script>
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/custom.js"></script>



<style type="text/css">
  .content-list{
    display: flex;
  }
  footer .footer-top .foo_link ul li{
   
    padding: 0!important;
  }

  /*footer .footer-top{
   padding: 11px 0!important;
   padding: 11px 0!important;
    background-image: url(http://pmtcr.com/wp-content/uploads/2018/06/CurvaAzul2.png);
   background-image: url('https://talentscrew.com/themes-nct/images/footer.png');
   background-position: center;
   background-size: cover;
  }
*/
  footer .footer-top .foo_link ul li a{
    font-weight: 0!important;
  }
  footer{
    background:#161616ed;
    /* height: 241px; */
    overflow: hidden;
  }
</style>
<style>
ul {
 padding:0;
 margin:0;
}
li {
 list-style:none;
}
a:focus,a:hover {
 text-decoration:none;
 -webkit-transition:.3s ease;
 -o-transition:.3s ease;
 transition:.3s ease;
}
a:focus {
 outline:0
}
img {
 max-width:100%
}
.footer-area{
  background:#fff!important;
}
.footer-area p {
 font-size:16px;
 line-height:30px;
 color:#898b96;
 font-weight:300;
}
.footer-area h4 {
 
 margin:0;
 font-weight:400;
 padding:0;
 color:#fff;
}
.footer-area a {
 color:#5867dd;
}
.no-padding {
 padding:0!important
}

.footer-big .footer-widget {
 margin-bottom:40px
}

.footer-big .footer-menu ul li a,.footer-big ul li {
 /* color:#898b96; */
 color:#fff!important;
}
.footer-big p{
  color:#000;
}
.footer-menu {
 padding-left:48px;
}
.footer-menu ul li a {
 font-size:15px;
 line-height:32px;
 -webkit-transition:.3s;
 -o-transition:.3s;
 transition:.3s;
 color:#fff!important;
}

.footer-menu--1 {
 width:100%
}
.footer-widget-title {
 line-height:42px;
 margin-bottom:10px;
 font-size:20px;
 font-weight: bold;
padding:27px 2px!important;
}
.mini-footer {
  background: #0b9ba2;
  text-align: center;
  box-shadow: -2px -1px 4px #f8f9fa;
}
.mini-footer p {
 margin:0;
 line-height:26px;
 font-size:15px;
 color:#999;
}
.mini-footer p a {
 color:#5867dd;
}
.mini-footer p a:hover {
 color:#34bfa3;
}
.widget-about img {
 display:block;
 margin-bottom:30px;
}
.widget-about p {
 font-weight:400
}
.widget-about .contact-details {
 margin:30px 0 0 0
}
.widget-about .contact-details li {
 margin-bottom:10px
}
.widget-about .contact-details li:last-child {
 margin-bottom:0
}
.widget-about .contact-details li span {
 padding-right:12px
}
.widget-about .contact-details li a {
 color:#5867dd
}
.txt-brown{
  font-size: 18px;
    color: #292b2c;
    margin-top: 1%;
    font-weight: bold;
}
.job-in-loc{
  margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    vertical-align: baseline;
    font-weight: 400;
    line-height: 18px;
    
    font-smoothing: antialiased;
    font-smooth: antialiased;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -webkit-font-smoothing: subpixel-antialiased;
    font-smoothing: subpixel-antialiased;
    font-smooth: subpixel-antialiased;
    /* color: #fff; */
    font-size: 14px;
    width: 100%;
    float: left;
    display: block;
}
.job-in-loc::before{
  content: "";
    display: table;
}
.job-in-loc::after{
  content: "";
    display: table;
    clear:both;
}
.unorder-list{
  text-align: left;
    margin: 0 auto;
    width: auto;
    display: block;
    padding: 0;
}
.unorder-list>li{
  text-align: center;
    display: block;
    padding: 0;
    margin: 0;
    display:grid;
}
.list-row-content{
  padding-left: 140px;
    position: relative;
    margin-bottom: 4px;
    float: left;
}
.accordion-header{
  color: #5d4da8;
    position: absolute;
    left: 0;
    display: block;
    width: 140px;
}
.accordion-header::after{
  
    color: #3c3c3c;
    content: ":";
    position: absolute;
    right: 0;
}
.different_typ_job{
  float: left;
  font-size: 1em;
}
.footer-area .site-links{
  padding: 0 10px 8px 7px;
    position: relative;
    display: block;
    color: #3c3c3c;
    float: left!important;
    font-size: 1em;
}
.footer-area .site-links::after{
  content: "|";
    position: absolute;
    right: 0;
}
.article p{
  font-family: sans-serif;
}

.moretext {
  display: none;
  color:#3c3c3c!important;
}
.social_link li a {
    display: block;
    width: 46px;
    height: 46px;
    line-height: 46px;
    text-align: center;
    color: #006684;
    background: #fff;
    font-size: 26px;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    -ms-border-radius: 100%;
    border-radius: 100%;
}
.social_link{
  display: flex;
    justify-content: flex-end;;
    align-items: center;
    padding: 12px;
    background:#0b9ba2!important;
}
.social_link>li{
  padding: 4px 3px;;
}
.f_p{
  font-weight:bold!important;
  color:#000!important;
}
.foo-about{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
@media (max-width:991px) {
 .footer-menu {
  padding-left:0
 }
}
@media only screen and (max-width:481px){
  .top{
    display:block!important;
  }
  .mini-footer{
    position: relative;
    top:-40px;
  }
  
  .appstore{
    display: none!important;
  }
  .footer-big, .footer_bottom,.tlt_abt,.copyright{
    display:none;
  }
  footer{
    overflow: inherit!important;
  }
  .footer-area{
    margin-top: 22%;
  }
 
  .foo-about {
   
    position: absolute;
    width: 100%;
    top: 0;
    background: #0fa77e;
    left: 0;
    bottom:0;
}
.footer_mobile{
 
      display: block!important;
    margin-top: -36px;
   
}
.social_link{
     margin-top: 4%;
    width: 100%;
    position: absolute;
    display: flex;
    justify-content: center;
}
.apps-con{
  margin-bottom:14%;
}
.login-content {
    min-height: 153vh;
 
}
</style>

<!-- Modal For send message to seeker -->

<div class="modal fade" id="seekerSendMsg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content" id="showLoader1">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

        <h4 class="modal-title" id="myModalLabel1">Send User Message</h4>

      </div>

        <form name="sendMessage" id="sendMessage" method="POST" >

            <div class="modal-body">

                <div class="container">

                        

                        <div class="form-group row" >

                            <div class="col-sm-4">

                                <div class="form-check">

                                    <label class="form-check-label">

                                        <input class="form-check-input msgTypes" type="radio" name="msgType" id="sndMsg" data-id="sndMsg" value="sndMsg" checked="">

                                        Send Only Message

                                    </label>

                                </div>

                                <div class="form-check">

                                    <label class="form-check-label">

                                        <input class="form-check-input msgTypes" type="radio" name="msgType" id="sndInv" data-id="sndInv" value="sndInv">

                                        Send Invitation

                                    </label>

                                </div>

                            </div>

                        </div>                            

                        <div class="form-group row" id="showJobs" >

                            <label for="jobList" class="col-sm-2 col-form-label">Please Select Job *</label>

                            <div class="col-sm-4">

                                <select class="form-control" name="jobList" id="jobList">

                                    <option value=''>Select Folder</option>

                                </select>

                            </div>

                        </div>

                        <div class="form-group row" id="showSubjects" >

                            <label for="msgsubject" class="col-sm-2 col-form-label">Enter Subject *</label>

                            <div class="col-sm-4">

                                <input type="text" class="form-control" id="msgsubject" name="msgsubject" placeholder="Enter subject Name">

                            </div>

                        </div>

                        <div class="form-group row"  >

                            <label for="msgdesciption" class="col-sm-2 col-form-label">Enter Description *</label>

                            <div class="col-sm-4">



                                <textarea class="form-control" name="msgdesciption" id="msgdesciption" placeholder="Enter Description"></textarea>

                            </div>

                        </div>

                </div>

            </div>

            <div class="modal-footer">

                <input type="hidden" name="allUserId" id="allUserId" >

                <input type="hidden" name="action" value="sendMsgToSeeker">

                <input type="hidden" name="invUserId" id="invUserId" >

                <div id="btnClass">   
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <button type="button" name="sendMsg" id="sendMsg" value="sendMsg" class="btn btn-primary">Send Message</button>

                    <button type="button" name="sendInvitaionBtn" id="sendInvitaionBtn" value="sendInvitaionBtn" class="btn btn-primary">Send Invitation</button>

                </div>

                <div id="loaderClassMsg"></div>

                <div id="loaderClassInvite"></div>

            </div>

        </form>

    </div>

  </div>

</div>



<div class="clearfix"></div>

<footer>

<div class="footer-top" style="padding: 13px 0!important;">

  <div class="container">

    <div class="row">

      <div class="col-md-4 col-sm-12">

        <div class="foo-about" style="box-shadow: 0px 1px 4px 0px black; padding: 10px; border-radius: 12px;">

        <a href="https://talentscrew.com/seeker-dashbord" class="link"><h5 style="text-transform:capitalize;margin:0!important;color:#fff;font-size: 15px!important">Request For Assessment</h5></a>
          
          <p style="font-size:13px!important;line-height:none!important;">We can help you regarding your career building and resume improvment. Click on the above link to  register yourself on our Job Portal and give your career a positive path.</p>
         

        </div>

      </div>

      <div class="col-md-8 col-sm-12">

        <div class="row">

          <div class="col-md-4 col-sm-12">

            <div class="foo_link" style="box-shadow: 0px 1px 4px 0px black; padding: 10px; border-radius: 12px;">
<!-- 
              <h3>For Candidates</h3> -->

              <ul>

                <li><a href="https://talentscrew.com/Find-Jobs">All Jobs</a></li>

                <li><a href="https://talentscrew.com/learning">Learning</a></li>

                <li><a href="https://talentscrew.com/Account-Settings">Account Setting</a></li>

                <li><a href="https://talentscrew.com/saved-searches-seeker">Saved Searches</a></li>

              </ul>

            </div>

          </div>

          <div class="col-md-4 col-sm-12">

            <div class="foo_link" style="box-shadow: 0px 1px 4px 0px black; padding: 10px; border-radius: 12px;">

           <!--    <h3>For Employers</h3> -->

              <ul>

                <li><a href="https://talentscrew.com/seeker-dashbord">Dashboard</a></li>

                <li><a href="https://talentscrew.com/seeker-profile">Profile</a></li>

                <li><a href="https://talentscrew.com/edit-seeker-profile">Edit Profile</a></li>

                <li><a href="#">Applied Jobs Status</a></li>

              </ul>

            </div>

          </div>

          <div class="col-md-4 col-sm-12">

            <div class="foo_link" style="box-shadow: 0px 1px 4px 0px black; padding: 10px; border-radius: 12px;">

             <!--  <h3>Information</h3> -->

              <ul>

              <!--<li> <a href="https://talentscrew.com/content/28/features" title="Features" target="_blank">Features</a></li>

              <li> <a href="https://talentscrew.com/content/29/how-it-works" title="How It Works" target="_blank">How It Works</a></li>-->

              <li> <a target="blank"  href="https://talentscrew.com/terms-conditions" title="Terms &amp; Conditions" target="_blank">Terms &amp; Conditions</a></li>

              <li> <a target="blank"  href="https://talentscrew.com/privacy-policy" title="Privacy Policy" target="_blank">Privacy Policy</a></li>

              <li> <a target="blank"  href="https://talentscrew.com/about-us" title="About us " target="_blank">About us </a></li>

              <li> <a target="blank"  href="https://talentscrew.com/faq" title="FAQs" target="_blank">FAQs</a></li> 

              </ul>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

  <div class="footer-bottom" style="background:#262626;;">

    <div class="container">

      <div class="row">

        <div class="col-md-6 col-sm-12">

          <div class="copyright">

            <p style="color:#fff!important;">© © 2020-21 Talents Jobs. All Rights Reserved.</p>

          </div>

        </div>
       
       <div class="col-md-6 col-sm-12"> 
          <div class="foo-about" style="display: flex;justify-content: center;align-items: center;padding: 12px;">
            
            <ul class="social_link">

             <li><a href="https://www.facebook.com/TC.jobportal/?ref=bookmarks" style="background-color:#3b5998;color:#fff;"><i class="fa fa-facebook" ></i></a></li>

              <li><a href="https://twitter.com/TC_Jobportal" style="background-color: #00aced;color:#fff;"><i class="fa fa-twitter"></i></a></li>

              <li><a href="https://www.youtube.com/channel/UCj8LaQn9eYC86krAlh8lALA?view_as=subscriber" style="background-color:#df1c31;color:#fff;"><i class="fa fa-youtube"></i></a></li>

              <li><a href="https://www.instagram.com/talentscrew/" style="background-color:#5258cf;color:#fff;"><i class="fa fa-instagram"></i></a></li>

              <li><a href="https://www.linkedin.com/company/talentscrew-indias-favourite-job-portal/" style="background-color:#007bb6;color:#fff;"><i class="fa fa-linkedin"></i></a></li>

            </ul>

          </div>
        </div>  

    </div>
      
  </div>
</div>

</footer>




<!--modal-->

<div id="updateMobileModal11111" class="modal fade forget-pwd" tabindex="-1" role="dialog" aria-hidden="true">

  <div class="modal-dialog">

  <div class="modal-content" style="    margin-top: 22%;">

      <div class="modal-header">
         <h5 class="text-center" style="text-align: center;">Please Update your Contact No.</h5>

         <!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->

         

      </div>

      <div class="modal-body">

          <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-body">

                        <div class="text-center">

                          

                           <!--  <form  action="https://talentscrew.com/modules-nct/home-nct/index.php" name="forgotPassword" id="forgotPassword"  method="post" > -->

                            <form  action="https://talentscrew.com/verifyotp" name="updateSeekerMobile" id="updateSeekerMobile"  method="post" >

                            <input  name="action" type="hidden" value="" id="updateMobileRedirectUrl">

                                <div class="panel-body">

                                    <h4 >Enter your Mobile No.</h4><br>

                                    <input type="text" placeholder="Enter your 10 digit mobile no." class="form-control required" pattern="^[6-9]\d{9}$" title="Please enter a valid Contact No. (Max 10 char)" id="update_mobile" name="contact_no" style="margin-bottom: 10px;">

                                     <p id="update_mobile_msg" style="display: none;color: red;"></p>


                                    <input name="updateMobileBtn" id="updateMobileBtn" class="btn btn-lg btn-primary btn-block" value="Update Mobile No." type="button"> 

                                </div>

                            </form>    

                        </div>

                    </div>

                </div>

            </div>

      </div>

      <div class="modal-footer">

         <!--  <div class="col-md-12">

          <input name="forgotPasswordBtn" class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">

          <button class="btn btn-primary" name="forgotPasswordBtn" id="forgotPasswordBtn" value="Send My Password" type="submit" aria-hidden="true">Submit</button>

          <button class="btn e-zone-btn" data-dismiss="modal" aria-hidden="true">Cancel</button>

          </div>  -->   

      </div>

  </div>

  </div>

</div> 






<!--modal-->

<div id="pwdModal" class="modal fade forget-pwd" tabindex="-1" role="dialog" aria-hidden="true">

  <div class="modal-dialog">

  <div class="modal-content" style="    margin-top: 22%;">

      <div class="modal-header">
         <h5 class="text-center" style="text-align: center;">What's My Password?</h5>

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

         

      </div>

      <div class="modal-body">

          <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-body">

                        <div class="text-center">

                          

                           <!--  <form  action="https://talentscrew.com/modules-nct/home-nct/index.php" name="forgotPassword" id="forgotPassword"  method="post" > -->

                            <form  action="https://talentscrew.com/verifyotp" name="forgotPassword" id="forgotPassword"  method="post" >

                            <input  name="action" type="hidden" value="" id="pwdChangeCode">

                            <input  name="sms_for" type="hidden" value="otp_password_change" id="sms_for">

                                <div class="panel-body">

                                    <h4 >Enter your registered mobile no. to reset password.</h4><br>

                                    <input type="text" placeholder="Enter your registered 10 digit mobile no." class="form-control required" pattern="^[6-9]\d{9}$" title="Please enter a valid Contact No. (Max 10 char)" id="reset_mobile" name="contact_no" style="margin-bottom: 10px;">

                                   <!--   <label for="no_walk">An email</label>
                                    <input type="radio" name="reset_option" id="reset_option_email" value="email" >
                                    <label for="yes_walk" style="margin-left: 12px;">A text message</label>
                                    <input type="radio" name="reset_option" id="reset_option_mobile" value="mobile">
                                    <br><br>
                                    <fieldset>

                                      <div class="row" id="email_div" style="display: none;">

                                        <div class="form-group">

                                            <input class="form-control" placeholder="E-mail Address" id="reset_email" name="email" type="email">




                                        </div>

                                      </div>  

                                        <div class="row" id="mobile_div" style="display: none;">
                                           <input type="text" placeholder="Enter your registered 10 digit mobile no." class="form-control required" pattern="^[6-9]\d{9}$" title="Please enter a valid Contact No. (Max 10 char)" id="reset_mobile" name="contact_no" >
                                           
                                           
                                        </div>

                                    </fieldset> -->

                                    <input name="forgotPasswordBtn" id="forgotPasswordBtn" class="btn btn-lg btn-primary btn-block" value="Get OTP" type="submit"> 

                                </div>

                            </form>    

                        </div>

                    </div>

                </div>

            </div>

      </div>

      <div class="modal-footer">

         <!--  <div class="col-md-12">

          <input name="forgotPasswordBtn" class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">

          <button class="btn btn-primary" name="forgotPasswordBtn" id="forgotPasswordBtn" value="Send My Password" type="submit" aria-hidden="true">Submit</button>

          <button class="btn e-zone-btn" data-dismiss="modal" aria-hidden="true">Cancel</button>

          </div>  -->   

      </div>

  </div>

  </div>

</div>    

    







<!-- ENd of Footer template file Desing  -->

<style>

#toast-container > div {

    opacity: 1;

  width:50% !important;

}

#toast-container {

  background:rgba(0,0,0,0.4);

    width: 100%;

  height:100%;

    margin: auto;

    padding-top: 150px;

  top:0;

    right: 0;

    left: 0;

}

</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

<script type="text/javascript">

   //button click form submit

    $(document).ready(function() {

  function validateContactForUpdateMobile() {

            var result;

            var site_url= 'https://talentscrew.com/'

            var contact_no = $("#update_mobile").val();


                  var mob =/^[6-9]\d{9}$/;

                if (mob.test(contact_no)) {
                $("#update_mobile_msg").html("");
                console.log(' ok');
                $("#update_mobile_msg").hide();
            } else {
              console.log('not ok');
              $("#update_mobile_msg").show();
                $("#update_mobile_msg").html("Please enter a valid Contact No. (Max 10 char)");
                return false;
            }

              $('#updateMobileBtn').prop("disabled",true);

            // var email = $("#reset_email").val();

            if(contact_no!=''){

               $.ajax({

              

                url: site_url+"modules-nct/home-nct/ajax.home-nct.php",

                type: "POST",

                data: {action:'check_if_mobile_exists','contact_no':contact_no},

                dataType: "json",

                async: false,



                success: function(data) {

                  console.log(data);

                    if (data.type == "suc") {

                       result= true;
                          $('#updateMobileRedirectUrl').val(data.updateMobileRedirectUrl);

                                $.toast({
                      heading: 'Success',
                      text: data.message,
                      position: 'bottom-center',
                      showHideTransition: 'slide',
                      icon: 'success'
                       });

                                $('#updateMobileModal').modal('hide');

                                setTimeout(
                                function() {
                                  window.location = site_url+"edit-seeker-profile";
                                }, 1000);

                    

                    } else {

                        event.preventDefault();

                        //toastr[data.type](data.message);

                        $.toast({
                      heading: 'Error',
                      text: data.message,
                      position: 'bottom-center',
                      showHideTransition: 'slide',
                      icon: 'error'
                       });

                       // $("#password_mobile_msg").show();

                       // $("#password_email_msg").show();

                       //  $("#password_mobile_msg").html(data.phone);

                       //  $("#password_email_msg").html(data.email);

                       //  $("#password_mobile_msg").css("color","red");

                       //  $("#password_email_msg").css("color","red");

                       $('#updateMobileBtn').prop("disabled",false);

                        result= false;

                    }

                },

                error: function(data) {

                  console.log(data);

                }

            }); 

        }

     //event.preventDefault();  

    

     return result; 

   };




   $('#updateMobileBtn').click(function() {



  if (!validateContactForUpdateMobile()) {

    //console.log(validateContact);

  }

});


     
     function is_seeker_mobile_updated(){

               var seeker_id = '593869';



               var is_seeker_mobile_updated=false;

                 var site_url= 'https://talentscrew.com/'
          $.ajax({

               

                url: site_url+"modules-nct/home-nct/ajax.home-nct.php",

                type: "POST",

                data: {action:'is_seeker_mobile_updated','seeker_id':seeker_id},

                dataType: "json",

                async: false,

                success: function(data) {

                  console.log(data);

                    if (data.type == "err") {

                      is_seeker_mobile_updated= false;
                    

                    } else {

                      is_seeker_mobile_updated= true;

                    }

                },

                error: function(data) {

                  console.log(data);

                }

            }); 

         return is_seeker_mobile_updated;
     }

             var is_seeker_mobile_available = is_seeker_mobile_updated();

            

             if(is_seeker_mobile_available==false){
              //$('#updateMobileModal').modal('show');
               $('#updateMobileModal').modal({backdrop: 'static', keyboard: false}) ;
             }

     

});



</script>


<script type="text/javascript">

   //button click form submit

    $(document).ready(function() {

  function validateContactForPasswordChange() {

            var result;

            var site_url= 'https://talentscrew.com/'

            var contact_no = $("#reset_mobile").val();

            // var email = $("#reset_email").val();

            if(contact_no!=''){

               $.ajax({

              

                url: site_url+"modules-nct/home-nct/ajax.home-nct.php",

                type: "POST",

                data: {action:'check_creds_for_pwdchange','contact_no':contact_no},

                dataType: "json",

                async: false,



                success: function(data) {

                  console.log(data);

                    if (data.type == "suc") {

                      if(data.reset_with=='mobile'){
                          result= true;
                          $('#pwdChangeCode').val(data.pwdChangeCode);

                                $.toast({
                      heading: 'Success',
                      text: data.message,
                      position: 'bottom-center',
                      showHideTransition: 'slide',
                      icon: 'success'
                       });

                      }else{

                         result= false;

                          event.preventDefault();

                             $.toast({
                      heading: 'Success',
                      text: data.message,
                      position: 'bottom-center',
                      showHideTransition: 'slide',
                      icon: 'success'
                       });
                      }

                    

                    } else {

                        event.preventDefault();

                        //toastr[data.type](data.message);

                        $.toast({
                      heading: 'Error',
                      text: data.message,
                      position: 'bottom-center',
                      showHideTransition: 'slide',
                      icon: 'error'
                       });

                       $("#password_mobile_msg").show();

                       $("#password_email_msg").show();

                        $("#password_mobile_msg").html(data.phone);

                        $("#password_email_msg").html(data.email);

                        $("#password_mobile_msg").css("color","red");

                        $("#password_email_msg").css("color","red");

                      

                        result= false;

                    }

                },

                error: function(data) {

                  console.log(data);

                }

            }); 

        }

     //event.preventDefault();  

    

     return result; 

   };



   $('#forgotPassword').submit(function(e) {

  if (!validateContactForPasswordChange()) {

    //console.log(validateContact);

    e.preventDefault(); 

  }

});





$('#reset_email').on('change', function() {

   $("#password_email_msg").html('');

});

$('#reset_mobile').on('change', function() {

   $("#password_mobile_msg").html('');

});

});



</script>

<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/select2/select2.full.min.js"></script> 
<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/select2/select2.min.js"></script> 
<!-- <script>
  $( function() {
    $('input[type="radio"]').checkboxradio();
  } );
  </script> -->
<script type="text/javascript">
$(".js-example-basic-multiple").select2({
    tags: true,
    casesensitive: false
});
$(".Select2MultipleNotOther").select2({
    tags: false,
    casesensitive: false
});
</script>
<script type="text/javascript">
   $('input[type=radio][name=reset_option]').change(function() { 
     if(this.value == 'email'){
      $('#email_div').show();
      $('#mobile_div').hide();
      $("#reset_email").prop('required',true);
      $("#reset_mobile").prop('required',false);
     }else{
      $('#email_div').hide();
      $('#mobile_div').show();
      $("#reset_email").prop('required',false);
      $("#reset_mobile").prop('required',true);
     }
  });
</script>
 <script type="text/javascript">
    $('.single_location').select2({
  width:'100%',
  minimumInputLength: 3,
  placeholder: "Select a Location",
  casesensitive: false,
  width: 'resolve',
  theme: "classic",
  ajax: {
    url: SITE_URL+"includes-nct/json.get_location.php",
    type: 'POST',
    dataType: 'json',
    data: function (params) {
      var query = {
      q: params.term,
      grp: ''
      }
      return query;
    },
    processResults: function (data) {
      var array = [];
      
      $.each(data, function(i, val) {
        array.push({
          id: val.item_id, 
          text : val.item_name
        });
      });
      var result = {'results':array};
      return result;
    }
    }
});
   $('.preferred_locations').select2({
  minimumInputLength: 3,
  maximumSelectionLength: 5,
  casesensitive: false,
  placeholder: "Enter Preferred Locations",
  width: 'resolve',
  theme: "classic",
  ajax: {
    url: SITE_URL+"includes-nct/json.get_location.php",
    type: 'POST',
    dataType: 'json',
    data: function (params) {
      var query = {
      q: params.term,
      grp: ''
      }
      return query;
    },
    processResults: function (data) {
      var array = [];
      
      $.each(data, function(i, val) {
        array.push({
          id: val.item_id, 
          text : val.item_name
        });
      });
      var result = {'results':array};
      return result;
    }
    }
});

         $('.preferred_city_state').select2({
  minimumInputLength: 3,
  maximumSelectionLength: 5,
  casesensitive: false,
  placeholder: "Enter Preferred Locations",
  width: 'resolve',
  theme: "classic",
  ajax: {
    url: "https://talentscrew.com/includes-nct/json.get_state_or_city.php",
    type: 'POST',
    dataType: 'json',
    data: function (params) {
      var query = {
      q: params.term,
      grp: ''
      }
      return query;
    },
    processResults: function (data) {
      var array = [];
      
      $.each(data, function(i, val) {
        array.push({
          id: val.item_id, 
          text : val.item_name
        });
      });
      var result = {'results':array};
      return result;
    }
    }
});
      $('.multi_locations').select2({
  minimumInputLength: 3,
  casesensitive: false,
  placeholder: "Enter Locations",
  width: 'resolve',
  theme: "classic",
  ajax: {
    url: SITE_URL+"includes-nct/json.get_location.php",
    type: 'POST',
    dataType: 'json',
    data: function (params) {
      var query = {
      q: params.term,
      grp: ''
      }
      return query;
    },
    processResults: function (data) {
      var array = [];
      
      $.each(data, function(i, val) {
        array.push({
          id: val.item_id, 
          text : val.item_name
        });
      });
      var result = {'results':array};
      return result;
    }
    }
});
$('.addskills').select2({
  width:'100%',
  tags: true,
  minimumInputLength: 2,
  placeholder: "Enter Skills",
  casesensitive: false,
  theme: "classic",
  ajax: {
    url: SITE_URL+"includes-nct/json.get_skills.php",
    type: 'POST',
    dataType: 'json',
    data: function (params) {
      var query = {
      q: params.term,
      grp: ''
      }
      return query;
    },
    processResults: function (data) {
      var array = [];
      
      $.each(data, function(i, val) {
        array.push({
          id: val.item_id, 
          text : val.item_name
        });
      });
      var result = {'results':array};
      return result;
    }
    }
});

$('.search_education').select2({
  width:'100%',
  tags: true,
  minimumInputLength: 2,
  placeholder: "Search Education",
  casesensitive: false,
  theme: "classic",
  ajax: {
    url: SITE_URL+"includes-nct/json.get_educations.php",
    type: 'POST',
    dataType: 'json',
    data: function (params) {
      var query = {
      q: params.term,
      grp: ''
      }
      return query;
    },
    processResults: function (data) {
      var array = [];
      
      $.each(data, function(i, val) {
        array.push({
          id: val.item_id, 
          text : val.item_name
        });
      });
      var result = {'results':array};
      return result;
    }
    }
});
$('.search_designations').select2({
  width:'100%',
  tags: true,
  minimumInputLength: 2,
  placeholder: "Search Designations",
  casesensitive: false,
  theme: "classic",
  ajax: {
    url: SITE_URL+"includes-nct/json.get_functional_area.php",
    type: 'POST',
    dataType: 'json',
    data: function (params) {
      var query = {
      q: params.term,
      grp: ''
      }
      return query;
    },
    processResults: function (data) {
      var array = [];
      
      $.each(data, function(i, val) {
        array.push({
          id: val.item_id, 
          text : val.item_name
        });
      });
      var result = {'results':array};
      return result;
    }
    }
});

$('.job_search_keywords').select2({
  width:'100%',
  tags:true,
  minimumInputLength: 2,
  placeholder: "Search by skills, job title or keywords",
  casesensitive: false,
  theme: "classic",
  ajax: {
    url: SITE_URL+"includes-nct/json.get_skills.php",
    type: 'POST',
    dataType: 'json',
    data: function (params) {
      var query = {
      q: params.term,
      grp: ''
      }
      return query;
    },
    processResults: function (data) {
      var array = [];
      
      $.each(data, function(i, val) {
        array.push({
          id: val.item_id, 
          text : val.item_name
        });
      });
      var result = {'results':array};
      return result;
    }
    }
});
 </script>


<!-- <script type="text/javascript" src=""></script>

 -->

<script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/jquery.cycle.all.js"></script>



<!-- Bootstrap Core JavaScript --> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script><script src="https://talentscrew.com/themes-nct/assets/js/bootstrap4.min.js"></script>







<script>

$(window).load(function() {

    $("#showJobs").hide();

    $("#sendInvitaionBtn").hide();

});



    





    $(document).on("change", ".msgTypes", function() {



        var type = $(this).data("id");

        if (type == "sndMsg") {

            $("#showSubjects").show();

            $("#showJobs").hide();



            $("#sendInvitaionBtn").hide();

            $("#sendMsg").show();

            $("input[type=hidden][name=action]").attr('value','sendMsgToSeeker');

            $("#myModalLabel1").html('Send User Message');



        } else {

            $("#showSubjects").hide();

            $("#showJobs").show();



            $("#sendMsg").hide();

            $("#sendInvitaionBtn").show();

            $("input[type=hidden][name=action]").attr('value','sendInvitaion');

            $("#myModalLabel1").html('Send User Invitation');



            $.ajax({



                url: SITE_URL + "Ajax_Home",

                type: "post",

                dataType: "json",

                data: {

                    action: 'loadJobs'

                },

                cache: false,

                beforeSend: function() {



                },

                ajaxComplete: function() {



                },

                success: function(data) {

                    if (data.errorType == "success") {

                        $("#jobList").empty();

                        $("#jobList").append(data.optionData);

                    } else {

                        toastr[data.errorType](data.message);

                        $('#seekerSendMsg').data('bs.modal', null);

                        $(".close").click();

                    }

                }

            });

    }

});





  $(document).ready(function() {



    







    //old syntax - 





    //code send single data

    // popup for single resume save

    $(document).on('click','.clsUserSendMsg',function(event){

        
                    toastr['error']("Employer/Consultancy will only have privilege to access this feature.");

        
    });  





    //code for chekck all check box 

    $("#selecteAllUser").on("change",function(){

        if($(this).is(":checked")) 

        {

            $(".userchk").prop('checked',true);

        }else{

            $(".userchk").prop('checked',false);

        }

    });



    // Code for multiple

    $(document).on("click",'#allUserSendMsg',function(){

            getAllCheckIdSeeker();

             
                        toastr['error']("Employer/Consultancy will only have privilege to access this feature.");

            
    });

    //single Check box change event

    $(".userchk").on("change",function(){

            getAllCheckIdSeeker();

    });

    function getAllCheckIdSeeker()

    {

            var AllCheckedId = [];

            $.each($("input[name='selectedUser']:checked"),function(){

                AllCheckedId.push($(this).val());

            });

            var allId = (AllCheckedId.join(","));

            if(allId == "" || allId == null )

            {   

                $("#allUserId").val('');

                $("#invUserId").val('');

            }else{

                $("#allUserId").val(allId);

                $("#invUserId").val(allId); 

            }

    }

        

    // send message popup validate

    $("#sendMsg").on("click",function(){



        if($("#sendMessage").valid())

        {

            var formData = $("#sendMessage").serialize();

            $.ajax({

                        url     : "https://talentscrew.com/Ajax_Home",

                        type    : "POST",

                        dataType : "json",

                        data    :  formData,

                        async   : false,

                        beforeSend : function(){

                            $("#btnClass").hide();

                            $("#loaderClassMsg").html('<img src="https://talentscrew.com/themes-nct/images/ajax-loader.gif"/>');

                        },

                        success : function(data){

                            $("#btnClass").show()

                            $("#loaderClassMsg").hide();

                            if(data.errorType == "success")

                            {

                              toastr[data.errorType](data.message);

                            }else{

                              toastr[data.errorType](data.message);

                            }

                            $('#seekerSendMsg').data('bs.modal', null);

                            $(".close").click();

                        },

                        complete : function(){

                           

                        }



            });

        }



    });



    $("#sendInvitaionBtn").on("click", function() {



        if ($("#sendMessage").valid()) {

            var formData = $("#sendMessage").serialize();

            var ImgPath = SITE_IMG + "ajax-loader.gif";

            $.ajax({

                url: SITE_URL + "Ajax_Home",

                type: "POST",

                dataType: "json",

                data: formData,

                async: false,

                beforeSend: function() {

                    $("#btnClassInvite").hide();

                    $("#loaderClassInvite").html('<img src="' + ImgPath + '"/>');

                },

                success: function(data) {

                    $("#btnClassInvite").show()

                    $("#loaderClassInvite").hide();

                    if (data.errorType == "success") {

                        toastr[data.errorType](data.message);

                    } else {

                        toastr[data.errorType](data.message);

                    }

                    $('#seekerSendMsg').data('bs.modal', null);

                    $(".close").click();

                },

                complete: function() {



                }



            });

        }



    });





    $('#seekerSendMsg').on('hidden.bs.modal', function () {

            $('.modal-body').find('lable,input,textarea').val('');

    });        



    $("#sendMessage").validate({

            rules : {

                        msgsubject : {required : true},

                        msgdesciption : {required : true}

            },

            messages : {

                        msgsubject : "Please Enter Subject",

                        msgdesciption : "Please Enter Description"

            }



    });



    //old code

    $("#loginform").click(function() {

            if($(this).parent().hasClass('relative dropdown open')){

        $("#loginarrow").hide();

      }else{

        $("#loginarrow").show();        

      }

        });

    });



    // $("#forgotPasswordBtn").on("click",function(){

    //     if($("#forgotPassword").valid() == true)

    //     {

    //         $("#forgotPassword").submit();

    //     }

    // });



    // $("#forgotPassword").validate({



    //         rules : {

    //                         email : {

    //                                     required : true,

    //                                     email : true

    //                         }

    //         },

    //         messages : {

    //                         email : {

    //                                     required : "Please Enter Email Address",

    //                                     email : "Please Enter Valid Email Address"

    //                         }

    //         }

    // });

</script>



<!-- <script type="text/javascript">function add_chatinline(){var hccid=50578851;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}

add_chatinline(); </script> -->



<script src="https://talentscrew.com/themes-nct/assets/tinymce/tinymce.min.js"></script>



<script type="text/javascript">

  tinymce.init({

    selector: '.tinymceEditor', 

    height:200,

    browser_spellcheck: true,

    valid_elements: 'p,br,a[title|target|href],strong,em,ul,ol,li,--[*]',

    plugins: [

    'advlist lists paste'

    ],

    menubar: false,

    toolbar: "undo redo | bold italic | bullist numlist | alignleft aligncenter alignright alignjustify | sizeselect | bold italic  |  fontsizeselect ",

  external_plugins: {"nanospell": "https://talentscrew.com/includes-nct/nanospell/plugin.js"},
  nanospell_server: "php" // choose "php" "asp" "asp.net" or "java"
});
  

</script>

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130215115-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-130215115-1');
  
  $(document).ready(function(){
          $('.moreless-button').click(function() {
            $('.moretext').slideToggle();
            if ($('.moreless-button').text() == "Read more") {
              $(this).text("Read less")
            } else {
              $(this).text("Read more")
            }
          });
        });

</script>

    </body>
</html>
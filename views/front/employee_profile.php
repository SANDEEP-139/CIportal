<?php $this->load->view('common/header'); ?>
    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper jp_cs_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                
                <div id="removing">
                    <?php
                        echo validation_errors('<div  class=" error alert alert-danger text-center text-sm" style="">', '</div>'); 
                        echo $this->session->flashdata('action_message'); 
                     ?>
                  </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                       
                            <h2><?=$employeeDetail[0]->companyName?></h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Company</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">IT</a> <i class="fa fa-angle-right"></i></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_cs_com_info_wrapper">
						<div class="jp_cs_com_info_img">
                            <?php if($employeeDetail[0]->image==''){?>
                            <img src="<?php echo base_url('assets/')?>profile.jpg" alt="job_img" style="height: 150px; width:80%;">
                            <?php }else{?>
								<img src="<?php echo base_url('assets/upload/')?><?=$employeeDetail[0]->image?>" alt="job_img" style="height:150px; width: 100%;">
                            <?php }?>
							
						</div>
						<div class="jp_cs_com_info_img_cont">
							<h2><?=$employeeDetail[0]->companyName?></h2>
							<p><?=$employeeDetail[0]->Specialization?></p>
							<h3 ><i class="fa fa-map-marker"></i> &nbsp;&nbsp;<?=$employeeDetail[0]->address?> <?=$employeeDetail[0]->city?></h3>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp listing Single cont Wrapper Start -->
    <div class="jp_listing_single_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_listing_left_sidebar_wrapper">
                        <div class="jp_job_des">
                            <h2>Company Description</h2>
                            <p><?=$employeeDetail[0]->companyDetail?></p>
                            <ul>
                                <li><i class="fa fa-globe"></i>&nbsp;&nbsp; <a href="#"><?=$employeeDetail[0]->website?></a></li>
<!--                                <li><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp; <a href="#">Download Info</a></li>-->

                            </ul>
                        </div>
                        <div class="jp_job_map">
                            <h2>Loacation</h2>
                            <div style="font-weight:bold; font-size:20px;margin-top:25px;"><?=$employeeDetail[0]->address?> <?=$employeeDetail[0]->city?></div>
                        </div>
                    </div>
<!--
                    <div class="jp_listing_left_bottom_sidebar_wrapper">
                        <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                            <ul class="hidden-xs">
                                <li>SHARE :</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
-->
              </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_rightside_listing_single_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Company Overview</h4>
                                </div>
<!--
                                <div class="jp_jop_overview_img_wrapper">
                                    <div class="jp_jop_overview_img">
                                        <img src="images/content/web.png" alt="post_img" />
                                    </div>
                                </div>
                                <div class="jp_job_listing_single_post_right_cont">
                                    <div class="jp_job_listing_single_post_right_cont_wrapper">
                                        <h4>Webstrot Technology</h4>
                                        <p>MARKETING JOB</p>
                                    </div>
                                </div>
                                <div class="jp_job_post_right_overview_btn_wrapper">
                                    <div class="jp_job_post_right_overview_btn">
                                        <ul>
                                            <li><a href="#">141 Jobs</a></li>
                                        </ul>
                                    </div>
                                </div>
-->
                                
                                  <div class="jp_job_post_right_overview_btn_wrapper">
                                    <div class="jp_job_post_right_overview_btn">
                                        <ul>
                                            <li><a href="<?php echo base_url('home/companyJobStatus');?>">141 Jobs</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jp_listing_overview_list_outside_main_wrapper">
                                    <div class="jp_listing_overview_list_main_wrapper">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Location:</li>
                                                <li><?=$employeeDetail[0]->address?> <?=$employeeDetail[0]->city?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--<div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">-->
                                    <!--    <div class="jp_listing_list_icon">-->
                                    <!--        <i class="fa fa-info-circle"></i>-->
                                    <!--    </div>-->
                                        <!--<div class="jp_listing_list_icon_cont_wrapper">-->
                                        <!--    <ul>-->
                                        <!--        <li>Jobs:</li>-->
                                        <!--        <li>141 Jobs</li>-->
                                        <!--    </ul>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Category:</li>
                                                <li><?=$employeeDetail[0]->Specialization?></li>
                                            </ul>
                                        </div>
                                    </div>
<!--
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Experience:</li>
                                                <li><?=$employeeDetail[0]->TotalExperienceYr?></li>
                                            </ul>
                                        </div>
                                    </div>
-->
                                    <style>
                                        .fg>li{
                                            margin:10px 0px;
                                        }
                                    </style>
                                    <div class="jp_listing_right_bar_btn_wrapper">
                                        <div class="">
                                            <ul class="fg">
                                                 <li><a href="<?=base_url('home/companyJobStatus'); ?>" class="btn btn-success btn-lg" style="    width: 85%;"><i class="fa fa-plus-circle"></i> Candidate Applied</a></li>
                                                 <li><a href="<?php echo base_url('home/getJobListById');?>" class="btn btn-success btn-lg" style="width: 85%;"><i class="fa fa-plus-circle"></i> Post Job &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </a></li> 
                                                <li><a href="<?php echo base_url('home/employeeEdit/'.$this->session->userdata('id'));?>" class="btn btn-success btn-lg" style="    width: 85%;"><i class="fa fa-plus-circle"></i> Update Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></li>
                                               
                                                
                                                
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp listing Single cont Wrapper End -->
 
   
         <?php $this->load->view('common/footer'); ?>
<style>
.content {min-height:450px;}
/*Pagination*/
.pagination {
	float:right;
}
.pagination li a { 
	padding:5px 10px;
	border:1px solid #0056b3;
	margin:2px;
}
.pagination li a:hover{
	text-decoration:none;
	background-color:#0056b3;
	color:#fff;
}

.pagination li a.current_page{
	background-color:#0056b3;
	color:#fff;
}
</style>
			
			<div class="col-lg-9 col-md-10 col-sm-12 col-xs-12">
                <div class="text-justify" style="font-size:15px;">
                    <div id="list" class="tab-pane fade in active">
						<div class="row">
							<?php foreach($emp_rec as $joblist[0]){ $job_skils=substr($joblist[0]->job_skill,0,50); ?>
                                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12" >
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont" >
                                                <div class="jp_job_post_main_wrapper"  style="border:0px solid red;">
                                                    <div class="row" style="border:0px solid red;width:110%;">
                                                        
																<?php if($this->session->userdata('type')=='candidate'){?>
																		
																			<a style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;color:green!important;font-size: 20px;" href="<?php echo base_url('home/singleJob/'.$joblist[0]->id.'?profile='.$joblist[0]->job_title.'&ml='.$joblist[0]->email.'&on='.$joblist[0]->email_show_hide)?>"	>
																				<h4><?php $test = $joblist[0]->job_title;echo $msgTrimmed = mb_substr($test,0,25);?></h4> </a>
																	  
																	<?php }else{?>
																		
																		<a style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;color:green!important;font-size:20px;" >
																			<h4><?php $test = $joblist[0]->job_title;echo $msgTrimmed = mb_substr($test,0,25); ?></h4> </a>
																		
																	<?php }?>
																<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:0px solid red;width:100%;">
																 <br>
																	
																	<span style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;;"><i style="color: #007bff;border:0px solid red;" class="fa fa-university"></i> <?php echo $joblist[0]->companyName; ?>   </span> 
																	<hr>
																  
																   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border:0px solid red;">
																	<ul style="border:0px solid red;margin-left:-30px;">
																		 <li style="width:120%;font-size:13px;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;"><i class="fa fa-map-marker"></i> <?php echo $joblist[0]->job_location; ?></li><br>
																		 <li style="width:120%;font-size:13px;"><i class="fa fa-briefcase"></i> <?php echo $joblist[0]->min_job_exp; ?>-<?php echo $joblist[0]->max_job_exp; ?> Years</li><br />
																		 <li style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;font-size:13px;"><i class="fa fa-university"></i> <?php echo $joblist[0]->industry_type; ?></li>
																	</ul>
																	</div>
																	 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border:0px solid red;margin-left:-20px;">
																		<ul style="border:0px solid red;margin-right:-60px;">
																			<br />
																			 <li style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;font-size:13px;"><i class="fa fa-inr"></i> <?php echo $joblist[0]->job_salary_min; ?>-<?php echo $joblist[0]->job_salary_max; ?> <?php echo ucfirst($joblist[0]->salary_type) ?></li>
																			 <br >
																			 <li style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;font-size:13px;" ><i class="fa fa-bookmark"></i>&nbsp; <?php echo $joblist[0]->job_type; ?></li>
																		</ul>
																	</div>
																</div>
																<hr>
																<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper" >
                                                                    <ul style="border:0px solid red;">
                                                                         <?php if($this->session->userdata('type')=='candidate' ){?>
                                                                       
																		  <li style="border:0px solid green;width:90%;margin-right:145px;;margin-top:-2px;">
																			<div class="row">
																				<div class="col-md-6 col-sm-6 col-xs-6">
																					<a class="btn-md" style="background-color:red;width:95px;margin-left:-3px;"   href="<?php echo base_url('home/singleJob/'.$joblist[0]->id.'?profile='.$joblist[0]->job_title.'&ml='.$joblist[0]->email.'&on='.$joblist[0]->email_show_hide)?>"><i class="fa fa-share"></i> Apply</a>
																				</div>
																				
																				<div class="col-md-6 col-sm-6 col-xs-6">
																					<a class="btn-md" style="background-color:green;width:109px;margin-left:-15px;" href="<?php echo base_url('home/singleJob/'.$joblist[0]->id.'?profile='.$joblist[0]->job_title.'&ml='.$joblist[0]->email.'&on='.$joblist[0]->email_show_hide)?>"><i class="fa fa-phone"></i> Call HR</a>
																				</div >
																			</div>
																		</li>
                                                                       
                                                                         <?php } else if($this->session->userdata('type')=='employee') {?>
                                                                            
																			  <li style="border:0px solid green;width:90%;margin-right:145px;;margin-top:-2px;">
																				<div class="row">
																					<div class="col-md-6 col-sm-6 col-xs-6">
																						<a class="homepagebtnapply" style="background-color:red;width:95px;margin-left:-3px;"  href="<?php echo base_url('home/singleJob/')?><?php echo $joblist[0]->id; ?>"><i class="fa fa-share"></i> Apply</a>
																					</div>
																					<div class="col-md-6 col-sm-6 col-xs-6">
																						<a  style="background-color:green;width:109px;margin-left:-15px;" href="#<?php //echo base_url('home/singleJob/')?><?php //echo $joblist[0]->id; ?>"><i class="fa fa-phone"></i>  Call HR</a>
																					</div >
																				</div>
																			</li>
                                                                         <?php }else{ ?>
																			 
																		
																		<?php }?>
																			
																		<?php if($this->session->userdata('type')!='candidate'  && $this->session->userdata('type')!='employee'){?>
																		
																		<li style="border:0px solid green;width:90%;margin-right:145px;;margin-top:-2px;">
																		 <div class="row">
																			
																			<div class="col-md-6 col-sm-6 col-xs-6">
																				<a href="javascript:void();" style="background-color:red;width:95px;margin-left:-3px;" class=" btn-danger " data-toggle="modal" data-target="#modalRegisterForm"><i class="fa fa-share"></i> Apply</a>
																			</div>
																			<div class="col-md-6 col-sm-6 col-xs-6">
																				<a href="javascript:void();" style="background-color:green;width:109px;margin-left:-15px;" class="btn-success" data-toggle="modal" data-target="#modalRegisterForm"><i class="fa fa-phone"></i> Call HR</a>
																			</div>
																		</div>
																		</li>
																	
																		<?php }?>
																			
                                                                    </ul>
                                                                </div>
                                                            </div>

															<!--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="">
                                                                <ul>
                                                                    <li><a href="<?php //echo base_url('home/singleJob/')?><?php //echo $joblist[0]->id; ?>" class="btn btn-success" style="margin:10px 0px;">View</a></li>
                                                                    
                                                                    <li><a href="<?php ///echo base_url('home/singleJob/')?><?php //echo $joblist[0]->id; ?>" class="btn btn-danger" style="margin:10px 0px;">Apply</a></li>
                                                                    
                                                                    <li><button type="button" class="btn btn-success" style="margin:10px 0px;" data-toggle="modal" data-target="#myModal">CALL HR</button></li>
                                                                </ul>
                                                            </div>
															</div>-->
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper" style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;">
                                                    <ul>
														<a href="#" style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;font-size:13px;"> <i class="fa fa-tags"></i>Job Skills :<?php echo $job_skils;?></a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        </div>
                                        </div>
<!--
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                            <div class="pager_wrapper gc_blog_pagination">
                                                <ul class="pagination">
                                                    <li><a href="#">Priv.</a></li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li class="hidden-xs"><a href="#">4</a></li>
                                                    <li><a href="#">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
-->
                                    </div>
									
									<div class="box-footer">
									<ul class="pagination">
										<?php echo $pagelinks ?>
									</ul>
								</div>
						</div>
								
								
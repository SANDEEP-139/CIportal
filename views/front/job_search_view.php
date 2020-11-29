<?php $this->load->view('common/header');?>
  
 <!---  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
   
    <!-- jp listing sidebar Wrapper Start -->
	
		<div class="container-fluid">
		
		<div class="jp_listing_sidebar_main_wrapper" style="background-color:#333; padding:10px;"> 
            <div class="row">
            <div class="" style="margin-top:30px;">
               <div class="col-sm-3 hidden-sm hidden-xs">
                   <h3 style="text-align:center; font-weight:bold; color:#fff;"><i class="fa fa-filter" aria-hidden="true"> Filter By</i></h3>
               </div>
			  <form method="get" action="<?php echo base_url('Home/searchJob2/');?>">
				<div class="col-sm-8">
				<div class="input-group">
					<!---<input type="hidden" name="search_param" value="all" id="search_param">-->
					<input type="text" class="form-control alltags" name="profile" placeholder="Keyword e.g. (Job Title, Description, Tags)" required >
					<span class="input-group-btn">
						<button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
				</div>
			</form>
                <div class="col-sm-1"></div>
            </div>
            </div>
           <!--
           
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_listing_heading_wrapper">
                        <h2>We found <span>
                        <//?php if($searchtype!=''){echo $searchtype;}else{} ?> Jobs</span> Matches for you.</h2>
                    </div>
                </div>-->
               		
               <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                     <?php echo form_open('home/searchJobFun');?>
                   <div class="row">
                       <div class="col-lg-12">
                           <center><label><b  style="color:#fff;">Preferred Job Locations</b></label></center>
                           <input type="text" placeholder="Preferred Location" class="form-control city" ><br>
                            
							<select name="" id="exp" class="form-control">
                                <option value="">Experience</option>
                                <option value="0">0 Year</option>
                                <option value="1">1 Year</option>
                                <option value="2">2 Year</option>
                                <option value="3">3 Year</option>
                                <option value="4">4 Year</option>
                                <option value="5">5 Year</option>
                                <option value="6">6 Year</option>
                                <option value="7">7 Year</option>
                                <option value="8">8 Year</option>
                                <option value="9">9 Year</option>
                                <option value="10">10 Year</option>
                                <option value="11">11 Year</option>
                                <option value="12">12 Year</option>
                                <option value="13">13 Year</option>
                                <option value="14">14 Year</option>
                                <option value="15">15 + Year</option>
                            </select><br>
                            
                            <select name="minsal" id="minsal" class="form-control">
                                <option value="">Min Salary Per Annum</option>
                                <option value="0">1 Lac</option>
                                <option value="1">2 Lac</option>
                                <option value="2">3 Lac</option>
                                <option value="3">4 Lac</option>
                                <option value="4">5 Lac</option>
                                <option value="5">6 Lac</option>
                                <option value="6">7 Lac</option>
                                <option value="7">8 Lac</option>
                                <option value="8">9 Lac</option>
                                <option value="9">10 Lac</option>
                                <option value="10">11 Lac</option>
                                <option value="11">12 Lac</option>
                                <option value="12">13 Lac</option>
                                <option value="13">14 Lac</option>
                                <option value="14">15 Lac</option>
                                <option value="15">16 Lac</option>
                                <option value="16">17 Lac</option>
                                <option value="17">18 Lac</option>
                                <option value="18">19 Lac</option>
                                <option value="19">20 Lac</option>
                                <option value="20">21 Lac</option>
                                <option value="22">22 Lac</option>
                                <option value="23">23 Lac</option>
                                <option value="24">24 Lac</option>
                                <option value="25">25 Lac</option>
                                <option value="26">26 Lac</option>
                                <option value="27">27 Lac</option>
                                <option value="28">28 Lac</option>
                                <option value="29">29 Lac</option>
                                <option value="30">30 Lac</option>
                                <option value="31">31 Lac</option>
                                <option value="32">32 Lac</option>
                                <option value="33">33 Lac</option>
                                <option value="34">34 Lac</option>
                                <option value="35">35 Lac</option>
                                <option value="36">36 Lac</option>
                                <option value="37">37 Lac</option>
                                <option value="38">38 Lac</option>
                                <option value="39">39 Lac</option>
                                <option value="40">40 Lac</option>
                            </select>
                           
								<div class="jp_rightside_job_categories_wrapper hidden-sm hidden-xs">
								<div class="jp_rightside_job_categories_heading">
									<h4>Jobs Types</h4>
								</div>
										<div class="jp_rightside_job_categories_content">
											<div class="handyman_sec1_wrapper">
												<div class="content">
												<div class="box">
											<a href="<?php base_url('home/searchJob/')?>">
												 <input type="checkbox" id="c1" name="type" value="Government">
											<label for="c1">Freelancers (1024)</label>  </a><br>
										   <a href="<?php base_url('home/searchJob/')?>">
												<input type="checkbox" id="c1" name="type" value="Government">
											<label for="c1">Full Time (1024)</label>  </a><br>
										   <a href="<?php base_url('home/searchJob/')?>"> 
										   <input type="checkbox" id="c2" name="type" value="Private">
											<label for="c2">Internship (2045)</label> </a> <br>
										   <a href="<?php base_url('home/searchJob/')?>"> 
										   <input type="checkbox" id="c3" name="type" value="Walk-In">
											<label for="c3">Part Time(254)</label>  </a><br>
										   <a href="<?php base_url('home/searchJob/')?>"> 
										   <input type="checkbox" id="c4" name="type" value="Contract">
											<label for="c4">Work From Home (124)</label> </a> <br>
									   </div>
									 </div>
									</div>
								  </div>
								 </div>
							   </div>
							
							 <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12 hidden-sm hidden-xs">
								<div class="jp_rightside_job_categories_wrapper">
								<div class="jp_rightside_job_categories_heading">
								<h4>Jobs by category</h4>
							 </div>
							<div class="jp_rightside_job_categories_content">
							<div class="handyman_sec1_wrapper">
							<div class="content">
							<div class="box">
							   <a href="<?php base_url('home/searchJob/')?>">
									<input type="checkbox" id="c1" name="type" value="Government">
								<label for="c1">Government (1024)<span></span></label>  </a><br>
							   <a href="<?php base_url('home/searchJob/')?>"> 
								  <input type="checkbox" id="c2" name="type" value="Private">
								<label for="c2">Private (2045)<span></span></label> </a> <br>
							   <a href="<?php base_url('home/searchJob/')?>">
									 <input type="checkbox" id="c3" name="type" value="Walk-In">
								<label for="c3">Walk-In (254)<span></span></label>  </a><br>
							   <a href="<?php base_url('home/searchJob/')?>">
									 <input type="checkbox" id="c4" name="type" value="Contract">
								<label for="c4">Contract (124)<span>
									
								</span>
								</label>
								</a> <br>
							</div>
								</div>
									  </div>
								   </div>
								 </div>
								 <p class="text-center" >
									  <input type="submit" name="submit" class="btn btn-info btn-block" value="search" style="margin:40px 0px;"></p>
							  </div>
					</div><?php echo form_close(); ?>
				</div>
             
            
				<div class="col-lg-9 col-md-10 col-sm-12 col-xs-12" style="border:0px solid red;">
                <div class="text-justify" style="font-size:15px;">
                    <div id="list" class="tab-pane fade in active">
						<div class="row">
							<?php foreach($searchJob as $joblist[0]){ $job_skils=substr($joblist[0]->job_skill,0,50); ?>
                                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12" >
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont" >
                                                <div class="jp_job_post_main_wrapper"  style="border:0px solid red;">
                                                    <div class="row" style="border:0px solid red;width:110%;">
                                                         
														 <?php if($this->session->userdata('type')=='candidate'){?>
																	<b> 
																		<a style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;color:green!important;font-size: 20px;" href="<?php echo base_url('home/singleJob/'.$joblist[0]->id.'?profile='.$joblist[0]->job_title.'&ml='.$joblist[0]->email.'&on='.$joblist[0]->email_show_hide)?>"	>
																			<h4><?php 
																			
																			$test = $joblist[0]->job_title;
																			echo $msgTrimmed = mb_substr($test,0,25);
																			
																		 ?></h4>
																	   </a>
																   </b>
																<?php }else{?>
																	<b> 
																	<a style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;color:green!important;font-size:20px;" href="<?php echo base_url('home/singleJob/'.$joblist[0]->id.'?profile='.$joblist[0]->job_title)?>"	>
																	<h5><?php 
																			$test = $joblist[0]->job_title;
																			echo $msgTrimmed = mb_substr($test,0,25); ?></h5>
																	   </a>
																	</b>
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

                                    </div>
							</div>
						  </div>
               
   
    
						  <!-- Modal -->
						  <div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog modal-sm">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h6 class="modal-title">GREATE! CALL THE COMPANY NOW!</h6>
								</div>
								<div class="modal-body">
								  <p>Job Title.</p>
								  <p style="color:#5858d6">Back Office Excutive</p>
								  <p>Company Address</p>
								  <p style="color:#5858d6">Nirmla Heights Building New Delhi 203301</p>
								  
								  <p>Contact Person</p>
								  <p style="color:#5858d6">Simran Mam </p>
								</div>
								<a href="tel:123-456-7890"><div class="modal-footer" style="background-color:green;color: white">
								  <h4 style="text-align:center;color: white;">CALL HR</h4>
								</div></a>
							  </div>
							</div>
						  </div>
						  
						  <!-- Modal -->
						  <div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog modal-sm">
							  <div class="modal-content">
								<div class="modal-header">
								  <button type="button" class="close" data-dismiss="modal">&times;</button>
								  <h5 class="modal-title">CALL TIMING ARE BETWEEN 09 AM To 07 PM!</h5></br>
								  <h5>Monday To Saturday Only</h5>
								</div>
								<a href="javascript:void(0)" data-dismiss="modal"><div class="modal-footer" style="background-color:green;color: white">
								  <h4 style="text-align:center;color: white;">GO BACK</h4>
								</div></a>
							  </div>
							</div>
						  </div> 
							
					<!-- jp listing sidebar Wrapper End -->
					<!-- jp downlord Wrapper Start -->
					<!--<div class="jp_downlord_main_wrapper">
						<div class="jp_downlord_img_overlay"></div>
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
									<div class="jp_down_mob_img_wrapper">
										<img src="images/content/mobail.png" alt="mobail_img" />
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="ss_download_wrapper_details">
										<h1><span>Download</span><br>Job Portal App Now!</h1>
										<p>Fast, Simple & Delightful. All it takes is 30 seconds to Download.</p>
										<a href="#" class="ss_appstore"><span><i class="fa fa-apple" aria-hidden="true"></i></span> App Store</a>
										<a href="#" class="ss_playstore"><span><i class="fa fa-android" aria-hidden="true"></i></span> Play Store</a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 visible-sm visible-xs">
									<div class="jp_down_mob_img_wrapper">
										<img src="images/content/mobail.png" class="img-responsive" alt="mobail_img" />
									</div>
								</div>
							</div>
						</div>
					</div>-->
					<!-- jp downlord Wrapper End -->
					<!-- The Modal -->
					 <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
					  aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header text-center">
							<h4 class="modal-title w-100 font-weight-bold">Register</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <form  id="savepop">
						  <div class="modal-body mx-3">
							  
							  <div class="md-form mb-5">
							  <label data-error="wrong" data-success="right" for="orangeForm-name">Resume Title / Designation&nbsp;*</label>
							  <input type="text" id="resume_title" name="resume_title" class="form-control validate" placeholder="Ex Php Developer , Network Engineer etc">
							  
							</div>
							  
							<div class="md-form mb-5">
							  <label data-error="wrong" data-success="right" for="orangeForm-name">Full Name&nbsp;*</label>
							  <input type="text" id="full_name" name="full_name" class="form-control validate" placeholder="Enter Your Full Name">
							  
							</div>
							<div class="md-form mb-5">
							  <label data-error="wrong" data-success="right" for="orangeForm-email">Email&nbsp;*</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label id="erremail" style="color:red;display:none;">This Email already exists</label>
							  <input type="email" id="email" name="email" class="form-control validate" placeholder="Enter Your Email" >
							  
							</div>

							<div class="md-form mb-4">
							  <label data-error="wrong" data-success="right" for="orangeForm-pass">Password&nbsp;*</label>
							  <input type="password" id="password" name="password" class="form-control validate" placeholder="Enter Your Password">
							</div>

						   <div class="md-form mb-4">
							 <label data-error="wrong" data-success="right" for="orangeForm-pass">10 Digit Mobile No.&nbsp;*</label>
							  <input type="text" id="mobile" name="mobile" class="form-control validate" placeholder="Enter Your Mobile" onkeypress="return isNumberKey(event)" maxlength="10">
							</div>
							
							<div class="md-form mb-4">
							 <label data-error="wrong" data-success="right" for="orangeForm-pass">Current Location&nbsp;*</label>
							  <input type="text" id="location" name="location" class="form-control validate" placeholder="Enter Your Current Location">
							</div>

							 <div class="md-form mb-4">
							  <label data-error="wrong" data-success="right" for="orangeForm-pass">Fresher / Experience&nbsp;*</label>
							<select class="form-control validate" name="select_exp" id="select_exp" onchange="showexp(this.value)">
								<option value="fresher">Fresher</option>
								<option value="experience">Experience</option>
							</select>
							</div>
							
							<div class="md-form mb-4" id="clickonexp" style="display:none;">
							 <label data-error="wrong" data-success="right" for="orangeForm-pass">Select Experience</label>
							<select class="form-control validate" name="select_exp2" id="select_exp2">
								<option value="0">Less Than 1 Year</option>
								<option value="1">1 Year</option>
								<option value="2">2 Year</option>
								<option value="3">3 Year</option>
								<option value="4">4 Year</option>
								<option value="5">5 Year</option>
								<option value="6">6 Year</option>
								<option value="7">7 Year</option>
								<option value="8">8 Year</option>
								<option value="9">9 Year</option>
								<option value="10">10+ Year</option>
							</select>
							</div>
						  </div>
						  <div class="modal-footer d-flex justify-content-center" style="text-align:center;">
							<button type="submit" id="btnSave"  class="btn btn-success">Register & Apply</button></br></br>
							 Already a user?<a style="color:blue;margin-top:20px;" href="<?php echo base_url('home/loginView'); ?>"> &nbsp;Login Here</a>
						  </div>
						  </form>
						</div>
					  </div>
					</div>



  <script>
    function showexp(value){
       if(value=='fresher'){
           $('#clickonexp').hide();
       } else{
           $('#clickonexp').show();
       }
    }
</script>
     
    <!-- jp footer Wrapper End -->
    <!--main js file start-->
    
    <script src="<?php echo base_url('assets/front/'); ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url('assets/front/'); ?>js/jquery.menu-aim.js"></script>
    <script src="<?php echo base_url('assets/front/'); ?>js/jquery.countTo.js"></script>
    <script src="<?php echo base_url('assets/front/'); ?>js/jquery.inview.min.js"></script>
    <script src="<?php echo base_url('assets/front/'); ?>js/owl.carousel.js"></script>
    <script src="<?php echo base_url('assets/front/'); ?>js/modernizr.js"></script>
    <script src="<?php echo base_url('assets/front/'); ?>js/custom.js"></script>
    
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  
<script src="<?php echo base_url('assets/front/'); ?>js/jquery_min.js"></script>
<?php $this->load->view('front/city');?>
<?php $this->load->view('front/alltags');?>
<?php $this->load->view('front/qualification');?>
  
<?php $this->load->view('common/footer'); ?>

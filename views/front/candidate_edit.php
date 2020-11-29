<?php $this->load->view('common/header'); ?>
<!-- jp Tittle Wrapper Start -->
<div class="jp_tittle_main_wrapper">
    <div class="jp_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_tittle_heading_wrapper">
                    <div class="jp_tittle_heading">
                        <h2>Edit Profile</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Tittle Wrapper End -->

<!-- jp register wrapper start -->
<div class="register_section">
    <!-- register_form_wrapper -->
    <div class="register_tab_wrapper">
        <div class="container">
            <div class="row">
               
                <div class="col-sm-3"></div>
                <div class="col-md-12 col-md-offset-0">
                    <div role="tabpanel" >
                        <!-- Tab panes -->
                        <div class="tab-content" style="border:solid #ccc;margin-top:-100px;">
                            <div class="tab-pane fade in active register_left_form" >
							<form method="post" action="<?php echo base_url('home/candidateUpdate');?>" enctype="multipart/form-data">
							
							
							
							 <div class="col-sm-3"></div>
								<div class="col-sm-6">
								  <div id="removing">
									  <?php
										  echo validation_errors('<div  class="error alert alert-danger text-center text-sm" style="">', '</div>'); 
										   echo $this->session->flashdata('action_message'); 
									  ?>
								  </div>
								</div>
							   
                                <div class="row">
									 <div class="form-group col-md-12 col-sm-12 col-xs-12 alert alert-info">
									 Basic Informaition
									 </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label>Full Name</label>
                                        <input type="text" name="name" value="<?=$candidateDetail[0]->username?>" placeholder="Username*">
                                     
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
										<label>Email</label>
                                        <input type="text" name="email" value="<?=$candidateDetail[0]->email?>" placeholder="Email*">
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
										<label>DOB</label>
                                        <input type="date" class="form-control" style="height:50px;" name="dob" value="<?=$candidateDetail[0]->dob?>" placeholder="Date Of Birth*">
                                    </div>
                                 <div class="col-md-12"></div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
										<label>City</label>
                                        <input type="text" name="city" class="city" value="<?=$candidateDetail[0]->city?>" placeholder="current City">
                                    </div>
                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                       <label>Mobile</label>
									   <input type="text" name="phone" value="<?=$candidateDetail[0]->mobileNo?>" placeholder="phone">
                                    </div>
									
									 <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label>Gender</label>
                                        <select class="form-control" name="gender">
										<option value="" >Select Gender</option>
											<option value="Male" <?php if($candidateDetail[0]->gender=='Male') { ?> selected="selected" <?php } ?> >Male</option>
											<option value="Female" <?php if($candidateDetail[0]->gender=='Female') { ?> selected="selected" <?php } ?>>Female</option>
										</select>
                                    </div> 
									
									<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <label>Preferred Location</label>
                                       <input type="text" name="preferred_location" value="<?=$candidateDetail[0]->preferred_location?>" placeholder="Preferred Location">
                                    </div>
									
									 <div class="form-group col-md-4 col-sm-6 col-xs-12">
										<label>Address </label>
                                        <input type="text" name="address" value="<?=$candidateDetail[0]->address?>" placeholder="Address">
                                    </div>
									
									 <div class="form-group col-md-12 col-sm-12 col-xs-12 alert alert-success">
										Education
									 </div>
                                     <div class="form-group col-md-4 col-sm-6 col-xs-12">
										<label>Highest Qualification</label>
                                        <input type="text" name="HighestQualification" value="<?=$candidateDetail[0]->HighestQualification?>" placeholder="Highest Qualification">
                                    </div>
                                     <div class="form-group col-md-4 col-sm-6 col-xs-12">
										<label>University Name</label>
                                        <input type="text" name="UniversityName" value="<?=$candidateDetail[0]->UniversityName?>" placeholder="University Name">
                                    </div>
                                     <div class="form-group col-md-4 col-sm-6 col-xs-12">
										<label>Passing Year</label>
                                        <input type="text" name="passingYr" value="<?=$candidateDetail[0]->passingYr?>" placeholder="Passing Year">
                                    </div>
                                     <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                      <label>Course </label>
									  <input type="text" name="course" value="<?=$candidateDetail[0]->course?>" placeholder="Course">
                                    </div>
                                     <div class="form-group col-md-4 col-sm-6 col-xs-12">
										<label>Specialization </label>
                                        <input type="text" name="Specialization" value="<?=$candidateDetail[0]->Specialization?>" placeholder="Specialization">
                                    </div>

                                     <div class="form-group col-md-12 col-sm-12 col-xs-12 alert alert-danger">
										Resume Details
									 </div>
									
									
									<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                         <label>Resume Title/ Designation</label>
                                        <input type="text" name="resume_title" class="form-control" value="<?=$candidateDetail[0]->resume_title_designation?>" placeholder="Resume Title">
                                    </div>
									
									<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                         <label>Skill</label>
                                        <input type="text" name="skill" value="<?=$candidateDetail[0]->skill?>" class="form-control" value="" placeholder="Skill">
                                    </div>
									
									<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                         <label>Total Experiance</label>
                                        <select type="text" name="totalexp" class="form-control" value="" >
											<option value="" >Select Total Experiance</option>
											<option value="0-1" <?php if($candidateDetail[0]->total_experiance=='0-1') { ?> selected="selected" <?php } ?>>0-1 Year</option>
											<option value="1-2" <?php if($candidateDetail[0]->total_experiance=='1-2') { ?> selected="selected" <?php } ?>>1-2 Year</option>
											<option value="2-3" <?php if($candidateDetail[0]->total_experiance=='2-3') { ?> selected="selected" <?php } ?>>2-3 Year</option>
											<option value="3-4" <?php if($candidateDetail[0]->total_experiance=='3-4') { ?> selected="selected" <?php } ?>>3-4 Year</option>
											<option value="4-5" <?php if($candidateDetail[0]->total_experiance=='4-5') { ?> selected="selected" <?php } ?>>4-5 Year</option>
											<option value="5-6" <?php if($candidateDetail[0]->total_experiance=='5-6') { ?> selected="selected" <?php } ?>>5-6 Year</option>
											<option value="6-7" <?php if($candidateDetail[0]->total_experiance=='6-7') { ?> selected="selected" <?php } ?>>6-7 Year</option>
											<option value="7-8" <?php if($candidateDetail[0]->total_experiance=='7-8') { ?> selected="selected" <?php } ?>>7-8 Year</option>
											<option value="8-9" <?php if($candidateDetail[0]->total_experiance=='8-9') { ?> selected="selected" <?php } ?>>8-9 Year</option>
											<option value="9-10" <?php if($candidateDetail[0]->total_experiance=='9-10') { ?> selected="selected" <?php } ?>>9-10 Year</option>
											<option value="10-11" <?php if($candidateDetail[0]->total_experiance=='10-11') { ?> selected="selected" <?php } ?>>10-11 Year</option>
											<option value="11-12" <?php if($candidateDetail[0]->total_experiance=='11-12') { ?> selected="selected" <?php } ?>>11-12 Year</option>
											<option value="12-13" <?php if($candidateDetail[0]->total_experiance=='1213') { ?> selected="selected" <?php } ?>>12-13 Year</option>
											<option value="13-14" <?php if($candidateDetail[0]->total_experiance=='13-14') { ?> selected="selected" <?php } ?>>13-14 Year</option>
											<option value="14-15" <?php if($candidateDetail[0]->total_experiance=='14-15') { ?> selected="selected" <?php } ?>>14-15 Year</option>
										
										</select>
                                    </div>
									
									<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                         <label>Desired Employment Type</label>
                                        <select type="text" name="desiremptype" class="form-control" value="" >
											<option value="" >Select Desired Employment Type</option>
											<option value="Freelancers" <?php if($candidateDetail[0]->desired_employment_type=='Freelancers') { ?> selected="selected" <?php } ?>>Freelancers</option>
											<option value="Full Time" <?php if($candidateDetail[0]->desired_employment_type=='Full Time') { ?> selected="selected" <?php } ?>>Full Time</option>
											<option value="Internship" <?php if($candidateDetail[0]->desired_employment_type=='Internship') { ?> selected="selected" <?php } ?>>Internship</option>
											<option value="Volunteers" <?php if($candidateDetail[0]->desired_employment_type=='Volunteers') { ?> selected="selected" <?php } ?>>Volunteers</option>
											<option value="Weekend Workforce" <?php if($candidateDetail[0]->desired_employment_type=='Weekend Workforce') { ?> selected="selected" <?php } ?>>Weekend Workforce</option>
											<option value="Work From Home" <?php if($candidateDetail[0]->desired_employment_type=='Work From Home') { ?> selected="selected" <?php } ?>>Work from Home</option>
										</select>
                                    </div>
									
									<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                         <label>Preferred Industry</label>
										 <input type="text" name="preferred_industry" class="form-control"value="<?=$candidateDetail[0]->preferred_industry?>"  placeholder="Preferred Industry">
                                       
                                    </div>
									
									<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                         <label>Upload Image</label>
                                        <input type="file" name="user_image" class="form-control" value="" placeholder="Profile image">
                                        <input type="hidden" name="user_imageprev" class="form-control" value="<?=$candidateDetail[0]->image?>" >
                                    </div>
									<div class="col-md-12"></div>
									<div class="form-group col-md-3 col-sm-5 col-xs-11">
                                         <label>Upload Resume</label>
                                        <input type="file" name="upload_resume" class="form-control"  placeholder="">
                                        <p style="color:red;font-size:10px;">Resume only upload pdf extenstion</p>
                                        <input type="hidden" name="resumeprev" class="form-control" value="<?=$candidateDetail[0]->final_file?>" placeholder="">
                                        
                                    </div>
                                    
                                    <div class="form-group col-md-1 col-sm-1 col-xs-1">
                                        <br >
                                       <?php   if($candidateDetail[0]->final_file!='') {?> 
                                        <i class="fa fa-check" style="color:green;font-size:15px;"></i>
                                          <?php  }else{?> 
                                           <i class="fa fa-close" style="color:red;font-size:15px;"></i>
                                         <?php  }?> 
                                       
									</div>
									
                                </div>
                                <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                    <input type="submit" name="submit"  value="Update" class="btn btn-primary login_btn" id="account-option_2">
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
<!-- jp register wrapper end -->



    <?php $this->load->view('common/footer'); ?>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php include"city.php";?>

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
 <style>
input.larger {
width: 20px;
height: 20px;
}
</style>
<!-- jp register wrapper start -->
<div class="register_section">
    <!-- register_form_wrapper -->
    <div class="register_tab_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                  <div id="removing">
                    <?php  echo validation_errors('<div  class=" error alert alert-danger text-center text-sm" style="">', '</div>'); 
                           echo $this->session->flashdata('action_message');  ?>
                  </div>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-md-12 col-md-offset-0">
                    <div role="tabpanel">
                        <!-- Tab panes -->
                        <div class="tab-content" style="border:solid 0px red;margin-top:-100px;">
                            <div class="tab-pane fade in active register_left_form">
                                <?php echo form_open_multipart('home/employeeUpdate/'.$this->session->userdata('id')); ?>

                                <div class="jp_regiter_top_heading">
                                    <h2 style="padding-bottom:25px;">Edit Profile </h2>
                                </div>
                              
                                <div class="row">
                                    <!--Form Group-->
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                         <label>Company Name</label>
                                        <input type="text" name="name" value="<?=$employeeDetail[0]->companyName?>" placeholder="Username*">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                         <label>Company Email</label>
                                        <input type="text" name="email" value="<?=$employeeDetail[0]->email?>" placeholder="Email*">
                                    </div>
                                   
								   <div class="form-group col-md-4 col-sm-4 col-xs-12">
										<label style="font-size:12px;">Should candidate Email you.?</label>
                                       <select name="email_show_hide" >
										<?php if($employeeDetail[0]->email_show_hide=="0") {?>
												<option value="1" >Yes</option>
												<option value="0" selected>No</option>
										<?php } else if($employeeDetail[0]->email_show_hide==""){?>
												<option value="">Select Option</option>
												<option value="1" >Yes</option>
												<option value="0">No</option>
										<?php }else{?>
												<option value="1" selected>Yes</option>
												<option value="0">No</option>
										<?php }?>
                                           
                                        </select>
										
                                    </div>
									
									
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                          <label>Location</label>
                                        <input type="text" name="city" value="<?=$employeeDetail[0]->city?>" placeholder="current City">
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                          <label>Company Number</label>
                                        <input type="number" name="phone" value="<?=$employeeDetail[0]->mobileNo?>" placeholder="phone" class="form-control">
                                    </div>
									
									<div class="form-group col-md-3 col-sm-3 col-xs-10">
                                          <label>Call Hr Number</label>
                                        <input type="number" name="alternate_phone" value="<?=$employeeDetail[0]->alternate_contact?>" placeholder="alternate phone" class="form-control">
                                    </div>
									
									 
									<div class="form-group col-md-1 col-sm-1 col-xs-2">
										<center><label style="font-size:12px;"><i class="fa fa-check"></i>Show /<i class="fa fa-close"></i> Hide </label>
										<br />
										<?php if($employeeDetail[0]->on_off=='1') {?>
											<input type="checkbox" class="larger" name="onoff" checked >
										<?php }else{?>
											<input type="checkbox" class="larger" name="onoff" value="1" ></center>
										<?php }?>
                                    </div>
                                     <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                           <label>Number Of Employees</label>
                                        <input type="text" name="TotalExperienceYr" value="<?=$employeeDetail[0]->TotalExperienceYr?>" placeholder="Company Experience">
                                    </div>
                                     <div class="form-group col-md-4 col-sm-4 col-xs-12 hidden">
                                        <input type="text" name="UniversityName" value="null" placeholder="UniversityName">
                                    </div>
                                    
                                     <!--<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                          <label>Company Name</label>
                                        <input type="text" name="companyName" value="<?=$employeeDetail[0]->companyName?>" placeholder="companyName">
                                    </div>-->
                                     <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                          <label>Company Industry Type</label>
                                        <input type="text" name="Specialization" value="<?=$employeeDetail[0]->Specialization?>" placeholder="Specialization">
                                    </div>
                                     
                                      <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                            <label>Company Address</label>
                                        <input type="text" name="address" value="<?=$employeeDetail[0]->address?>" placeholder="Address">
                                    </div>
                                    <!--  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <label>Company Pincode</label>
                                        <input type="number" name="pincode" value="<?=$employeeDetail[0]->pincode?>" placeholder="Pincode">
                                    </div>-->
                                     <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                         <label>Upload Company Logo</label>
                                        <input type="file" name="user_image" class="form-control" value="<?=$employeeDetail[0]->image?>" placeholder="Profile image">
                                    </div>
                                     <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                          <label>About Company</label>
                                        <textarea name="companyDetail"  value="<?=$employeeDetail[0]->companyDetail?>" placeholder="companyDetail"><?=$employeeDetail[0]->companyDetail?></textarea>
                                    </div>
                                </div>
                                <div class="login_btn_wrapper register_btn_wrapper login_wrapper">
                                    <button type="submit" name="submit"  value="Update" class="btn btn-primary btn-md login_btn" id="account-option_2"><i class="fa fa-forward"></i> Update</button>
                                </div>
                                <?php echo form_close(); ?>

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

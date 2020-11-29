<?php $this->load->view('common/header'); ?>
<!-- jp Tittle Wrapper Start -->
<div class="jp_tittle_main_wrapper"  style="padding-top: 15px;
    padding-bottom: 15px;">
    <div class="jp_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_tittle_heading_wrapper">
                    <div class="jp_tittle_heading">
                        <h2>Register</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                <!--<li><a href="#"></a> <i class="fa fa-angle-right"></i></li>-->
                                <li>Register</li>
                            </ul>
                        </div>
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
                <div class="col-sm-6">
                    <div id="removing">
                        <?php 
                              validation_errors(); 
                           echo $this->session->flashdata('action_message'); 
						?>
                    </div>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-md-10 col-md-offset-1">
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul id="tabOne" class="nav register-tabs">
                            <li class="active"><a href="#contentOne-1" data-toggle="tab">Candidate account <br> <span>i am looking for a job</span></a>
                            </li>
                            <li><a href="#contentOne-2" data-toggle="tab">company account <br> <span>We are hiring Employees</span></a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active register_left_form" id="contentOne-1">
                              
							  <form method="post" action="<?php echo base_url('home/candidate_register'); ?>">
                                <div class="jp_regiter_top_heading">
                                    <p>Fields with * are mandetory </p>
                                </div>

                                <div class="row">
                                    <!--Form Group-->
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="name"  value="<?php echo set_value('name'); ?>" placeholder="Candidate Full Name*"   >
											<span style="color:red;"><?php echo form_error('name'); ?></span>
										</div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="email"  value="<?php echo set_value('email'); ?>" placeholder="Email id*" >
										<span style="color:red;"><?php echo form_error('email'); ?></span>
                                    </div>
									
                                     <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12" >
                                        <select name="gender" class="form-control" value="<?php echo set_value('gender'); ?>" >
                                            <option value="">Select Gender</option> 
                                            <option value="Male"> Male</option>  
                                            <option value="Female">Female</option> 
                                        </select>
										<span style="color:red;"><?php echo form_error('gender'); ?></span>
                                    </div>
                                    
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="password"  name="password" value="<?php echo set_value('password'); ?>" placeholder="password*" >
										<span style="color:red;"><?php echo form_error('password'); ?></span>
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" name="cpassword"  value="<?php echo set_value('cpassword'); ?>" placeholder="re-enter password*" >
										<span style="color:red;"><?php echo form_error('cpassword'); ?></span>
									</div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                         <input type="text" class="form-control city" name="city" id="city" value="<?php echo set_value('city'); ?>" placeholder="Current City" >
										 <span style="color:red;"><?php echo form_error('city'); ?></span>
                                    </div>
                                    <!--Form Group-->
                                       <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="designation" class="alltags" value="<?php echo set_value('designation'); ?>" placeholder="Job Tittle/Designation" >
										<span style="color:red;"><?php echo form_error('designation'); ?></span>
									 </div>
                                    <!--Form Group-->
                                       <div class="form-group col-md-6 col-sm-6 col-xs-12" >
                                           <select name="exp_type" id="exp" value="" >
                                           <option value="fresher" selected>Fresher</option>
                                           <option value="experience">Experience</option>
                                           </select>
                                    </div>
                                    <div id="addfield">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12" >
										<select name="exp" class="form-control" >
											<option hidden value="null">Select Experience</option> 
											<option value="0"> less than 1 year</option> 
											<option value="1">1 year</option> <option value="2">2 year</option> 
											<option value="3">3 year</option> <option value="4">4 year</option> 
											<option value="5">5 year</option> <option value="6">6 year</option> 
											<option value="7">7 year</option> <option value="8">8 year</option>
											<option value="9">9 year</option> <option value="10">10+ year</option>
											</select>
										</div>
                                    </div>
                                    <!--Form Group-->
                                       <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="HighestQualification"  value="<?php  echo set_value('HighestQualification'); ?>" id="qualification" class="qualification" placeholder="Current Qualification">
										<span style="color:red;"><?php echo form_error('HighestQualification'); ?></span>
                                    </div>
                                    <!--Form Group-->
                                      <!--Form Group-->
                                       <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="skill"  value="<?php  echo set_value('skill'); ?>" class="" placeholder="Key Skill">
										<span style="color:red;"><?php echo form_error('skill'); ?></span>
                                    </div>
                                    <!--Form Group-->
                                    <!--
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input">
                                            <input type="file" name="resume">
                                            <p>DOC, DOCX, RTF, PDF - 300KB MAX PREFERRED CV FORMAT - DOCX FILE</p>
                                        </div>
-->
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="text" name="phone"  placeholder="phone" value="<?php  echo set_value('phone'); ?>">
                                        <span style="color:red;"><?php echo form_error('phone'); ?></span>
                                    </div>
                                   
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="check-box text-center">
                                            <input type="checkbox" name="agree" id="account-option_1"  > &ensp;
                                            <label for="account-option_1">I agreed to the <a href="#" class="check_box_anchr">Terms and Conditions</a> governing the use of jobportal</label>
											<span style="color:red;"><?php echo form_error('agree'); ?></span>
										</div>
                                    </div>
								
                                    <div id="addfieldreffer">
										<div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<div class="check-box text-center">
												<input type="text" name="friend_name" id="fn" placeholder="Reffer name" > &ensp;
											 
											</div>
										</div>  
										<div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="check-box text-center">
												<input type="email" name="friend_email" id="fm" placeholder="Reffer Email" > &ensp;
											   
											</div>
										</div>
                                        <span id="close">X</span>
                                    </div>
								</div>
									<div class="login_btn_wrapper register_btn_wrapper login_wrapper ">

										<input type="submit" name="submit" value="Submit" class="btn btn-primary login_btn" id="account-option_2">
									</div>
								</form>
                                <div class="login_message">
                                    <p>Already a member? <a href="<?php echo base_url('home/loginView');?>"> Login Here </a> </p>
                                </div>
                            </div>

                            <div class="tab-pane fade register_left_form" id="contentOne-2">
                               <form method="post" action="<?php echo base_url('home/employe_register'); ?>"> 
                                <div class="jp_regiter_top_heading">
                                    <p>Fields with * are mandetory </p>
                                </div>
                                <div class="row clearfix">
                                    <!--Form Group-->
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <input type="text" name="ename"  placeholder="Employer Name*" value="<?php  echo set_value('ename'); ?>" >
										 <span style="color:red;"><?php echo form_error('ename'); ?></span>
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">
                                        <input type="text" name="eemail"  placeholder="Email Id*" value="<?php  echo set_value('eemail'); ?>" >
										<span style="color:red;"><?php echo form_error('eemail'); ?></span>
                                    </div>
									
									<div class="form-group col-md-4 col-sm-4 col-xs-12">
									   <P>Should candidate can send you CV in your given Mail id.?</P> 
                                       <select name="email_show_hide" >
                                           <option value="1" selected>Yes</option>
                                           <option value="0">No</option>
                                        </select>
									
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="password" name="epassword"  placeholder="password*" value="<?php  echo set_value('epassword'); ?>" >
										<span style="color:red;"><?php echo form_error('epassword'); ?></span>
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" name="ecpassword"  placeholder="re-enter password*" value="<?php  echo set_value('ecpassword'); ?>" >
										<span style="color:red;"><?php echo form_error('ecpassword'); ?></span>
                                    </div>

                                    <!--Form Group-->
                                   

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="ecompany"  placeholder="company name" value="<?php  echo set_value('ecompany'); ?>" >
										<span style="color:red;"><?php echo form_error('ecompany'); ?></span>
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
									  <input type="number" name="ephone"  placeholder="Company Contact Number" value="<?php  echo set_value('ephone'); ?>" >
									  <span style="color:red;"><?php echo form_error('ephone'); ?></span>
                                     </div>
									
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
									
                                        <input type="text" name="ecity" class="city"  placeholder="City Name" value="<?php  echo set_value('ecity'); ?>" >
										<span style="color:red;"><?php echo form_error('ecity'); ?></span>
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12" >
                                        <input type="text" name="website"  placeholder="website" value="" >
                                    </div>
                                   <div class="form-group col-md-6 col-sm-6 col-xs-12" >
										<P>Should Candidate can call you in your alternative number.?</P>
                                        <select name="hrcall" id="hrcall" >
                                           <option value="1" selected>Yes</option>
                                           <option value="0">No</option>
                                        </select>
                                    </div>
									<div class="hrcallfields">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12" >
											<P>Please enter the alternative number so candidate can contact you.</P>
                                            <input type="number" name="alternate_phone"  placeholder="Ex. 9876543210" >
                                         </div>
                                    </div>
									
									
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="check-box text-center">
                                         <input type="checkbox" name="agree" id="account-option_2"   > &ensp;
                                         <label for="account-option_2">I agreed to the <a href="#" class="check_box_anchr">Terms and Conditions</a> governing the use of jobportal</label>
											<span style="color:red;"><?php echo form_error('agree'); ?></span>
										</div>
                                    </div>
                                </div>

                                <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                    <input type="submit" name="submit" class="btn btn-primary login_btn"  value="Submit" id="account-option_2">
                                </div>
								</form>
                                <div class="login_message">
                                    <p>Already a member? <a href="<?php echo base_url('home/loginView');?>"> Login Here </a> </p>
                                </div>
                            </div>

                        </div>
                        <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>
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
  <?php include"designation.php";?>
  <?php include"qualification.php";?>
  <?php include"course.php";?>
  <?php include"alltags.php";?>

<script>
    
        $(".hrcallfields").show();
        $('#hrcall').change(function(){
            $(".hrcallfields").toggle();
        });
		
        $(document).ready(function(){
            $("#addfield").hide();
            $('#exp').change(function(){
                $("#addfield").toggle();
            });
//});
//    
//$(document).ready(function(){
//    
   $("#addfieldreffer").hide();
    $('#reffer').click(function(){
    
        $("#addfieldreffer").show();
    });
    
     $('#close').click(function(){
    
        $("#addfieldreffer").hide();
    });
    
});

</script>
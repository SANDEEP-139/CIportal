<?php $this->load->view('common/header'); 
//
//print_r($this->session->userdata());
//print_r($getCompanyDetail);
//print_r($getSingleJob);
?>
  <div id="removing">
 <?php  echo $this->session->flashdata('action_message'); ?>
                    </div>
    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper hidden-sm hidden-xs" style="padding-top: 15px;
    padding-bottom: 15px;">
        <div class="jp_tittle_img_overlay" ></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2><?=$getSingleJob[0]->job_title?></h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Jobs</a> <i class="fa fa-angle-right"></i></li>
                                    <li><?=$getSingleJob[0]->job_title?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<head>
<style>
ul.b {
  list-style-type: square;
}
</style>


    <!-- jp Tittle Wrapper End -->
    <!-- jp listing Single cont Wrapper Start -->
    <div class="jp_listing_single_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="jp_listing_left_sidebar_wrapper">
                        <div class="1jp_job_des">
                            <h2>Job Description</h2>
							
							<ul class="b">
								<li> <?php echo $getSingleJob[0]->job_description?></li>
							</ul>

							
							<br />
							<p style="font-weight:400; padding-top: 0px;font-weight: bold;">Profile : <?=$getSingleJob[0]->job_title?></p>
                            <p style="font-weight:400; padding-top: 0px;font-weight: bold;">Experience : <?=$getSingleJob[0]->min_job_exp?>-<?=$getSingleJob[0]->max_job_exp?></p>
                            <p style="font-weight:400; padding-top: 0px;font-weight: bold;">Location : <?=$getSingleJob[0]->job_location?></p>
                        </div>
                        <div class="jp_job_apply">
                            <h2>About Company Profile:-</h2>
                            <p style="font-weight:400"><?=$getCompanyDetail[0]->companyDetail?></p>
                        </div>
                        <div class="jp_job_map">
                            <h2>Location</h2>
                            <div id="" style="font-size:18px; padding-top:30px"><b><?=$getSingleJob[0]->job_location?></b></div>
                        </div>
                    </div>
                 
                    <div class="jp_listing_left_bottom_sidebar_key_wrapper">
                        <ul>
                            <li><i class="fa fa-tags"></i><?=$getSingleJob[0]->job_skill?></li>
                          
                        </ul>
                    </div>
                    <div class="jp_listing_related_heading_wrapper">
                        <h2>Recent Jobs</h2>
                        <div class="jp_listing_related_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="row">
                                    <?php 
                                        foreach($searchJob as $joblist[0]){ ?>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="https://cdn2.iconfinder.com/data/icons/employment-business/256/Employment_News-512.png" alt="post_img" style="height:100px; width:100px" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4><?php echo $joblist[0]->job_title; ?></h4>
                                                                <p></p>
                                                                <ul>
                                                                    <li>Salary : <?php echo $joblist[0]->job_salary_max; ?> Per/Month</li>
                                                                    <li><i class="fa fa-map-marker"></i>&nbsp; <?php echo $joblist[0]->job_location; ?></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li class="btn btn-danger hidden"><a  >View</a></li>
                                                                    <li><a href="<?php echo base_url('home/singleJob/'.$joblist[0]->id)?>?ml=<?php echo @$_GET['ml'];?>&on=<?php echo @$_GET['on'];?>">View</a></li>
                                                                    <?php if($this->session->userdata('type')!='employee'){?>
                                                                    <li><a class="call_hr_button" href="<?php echo base_url('home/singleJob/'.$joblist[0]->id)?>?ml=<?php echo @$_GET['ml'];?>&on=<?php echo @$_GET['on'];?>">Apply</a></li>
                                                                    
																		<li><a href="<?php echo base_url('home/singleJob/')?><?php echo $joblist[0]->id; ?>?ml=<?php echo @$_GET['ml'];?>&on=<?php echo @$_GET['on'];?>">Call hr</a></li>
																	<?php } ?>
																	 
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Job Skills :</li>
                                                        
                                                        <li><a href="#"><?php echo $joblist[0]->job_skill; ?></a></li>
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
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                    <div class="row" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                            <div class="jp_rightside_job_categories_wrapper jp_rightside_listing_single_wrapper" >
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Job Overview</h4>
                                </div>
                                <div class="jp_job_listing_single_post_right_cont">
                                    <div class="jp_job_listing_single_post_right_cont_wrapper">
                                        <h4><?=$getSingleJob[0]->job_title?></h4>
                                        <p><?=$getCompanyDetail[0]->companyName?></p>
                                    </div>
                                </div>
                                <div class="jp_job_post_right_overview_btn_wrapper">
                                    <div class="jp_job_post_right_overview_btn">
                                        <ul>
                                           
                                            <li><a href="#"><?=$getSingleJob[0]->job_type?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jp_listing_overview_list_outside_main_wrapper">
                                    <div class="jp_listing_overview_list_main_wrapper">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Date Posted:</li>
                                                <li><?php echo date('d-M-Y',strtotime($getSingleJob[0]->created_at));?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Location:</li>
                                                <li><?=$getSingleJob[0]->job_location?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Job Title:</li>
                                                <li><?=$getSingleJob[0]->job_title?></li>
                                            </ul>
                                        </div>
                                    </div>
                                  
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Salary</li>
                                                <li><?=$getSingleJob[0]->job_salary_min?> - <?=$getSingleJob[0]->job_salary_max?> Per/Month</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Experience</li>
                                                <li><?=$getSingleJob[0]->min_job_exp?> - <?=$getSingleJob[0]->max_job_exp?> Year</li>
                                            </ul>
                                        </div>
                                    </div> 
									
									<div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-university"></i>
                                        </div>
                                       <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Industry</li>
                                                <li><?=$getSingleJob[0]->industry_type?></li>
                                            </ul>
                                        </div>
                                    </div>
									 <?php if($this->session->userdata('type')!='employee'){?>
										<div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
											<div class="jp_listing_list_icon">
												<i class="fa fa-envelope-o"></i>
											</div>
											<div class="jp_listing_list_icon_cont_wrapper">
												<ul>
													<li><a  class="btn btn-primary" type="button" data-toggle="modal" data-target="#emailhr" style=""><i class="fa fa-at"></i> Email HR </a></li>
												</ul>
											</div>
										</div>
									 <?php }?>
                                  <?php if($this->session->userdata('type')!='employee'){?>
                                    <div class="jp_listing_right_bar_btn_wrapper">
                                        <div class="jp_listing_right_bar_btn">
                                              <?php echo form_open_multipart('home/applyjob'); ?>
                                            <ul>
                                                <input type="hidden" name="jobTitle" value="<?=$getSingleJob[0]->job_title?>" >
                                                <input type="hidden" name="jobDescrip" value="<?=$getSingleJob[0]->job_description?>" >
                                                <input type="hidden" name="loc" value="<?=$getSingleJob[0]->job_location?>" >
                                                <input type="hidden" name="type" value="<?=$getSingleJob[0]->job_type?>" >
                                                <input type="hidden" name="company_name" value="<?=$getCompanyDetail[0]->companyName?>" >
                                                <input type="hidden" name="job_id" value="<?=$getSingleJob[0]->id?>" >
                                                <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('candid')?>" >
                                                <input type="hidden" name="emp_id" value="<?=$getSingleJob[0]->empid?>" >
                                                <input type="hidden" name="ml" value="<?php echo @$_GET['ml'];?>" >
                                                <input type="hidden" name="on" value="<?php echo @$_GET['on'];?>" >
                                                <?php if($this->session->userdata('type')=='employee'){}else{?>
                                                 <button type="submit" name="submit" class="btn btn-info" ><i class="fa fa-share"></i> Apply Now</button>
                                              

											  <?php  }
												
												 date_default_timezone_set('Asia/kolkata');
                                                 $current_time= date('H:i:s');
                                                 $start_time='10:00:00';
                                                 $end_time='18:00:00';
                                                
                                                $current_day= date('l');
                                                 if($current_day!='Sunday'){
                                                 if($current_time >=$start_time && $current_time <=$end_time){ 
                                                
												?>
												&nbsp;
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-phone"></i> CALL HR</button>
												
                                                <?php  }else{ ?>
												
													<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2"><i class="fa fa-phone"></i> CALL HR</button>
                                               <?php } ?> 
                                                <?php }else{ ?>
												
													<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2"><i class="fa fa-phone"></i> CALL HR</button>
                                                <?php }?>
												
                                            </ul>
                                            <?php echo form_close(); ?>
                                        
                                        </div>
										<form id="savechat">
											
											<div class="col-md-12" style="border:0px solid red;width:130%;margin-left:-40px;">
												<textarea rows="5" style="border:1px solid #ccc;width:100%; margin-top:8px;resize:none;" id="message" name="message" placeholder="CHAT TO HR" class="form-control"  /></textarea>
												<input type="hidden" name="empid" value="<?=$getSingleJob[0]->empid?>" >
												<input type="hidden" name="jobid" value="<?=$getSingleJob[0]->id?>" >
												<button type="submit"  class="pull-right btn-danger" id="btnSave" style="border:px solid red;margin-top:3px;"><i class="fa fa-wechat"></i> Chat</button>
											</div>
										</form>
                                    </div>
									
								  <?php }?>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp listing Single cont Wrapper End -->



  <div class="modal fade" id="emailhr" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title">NOTE:- Please Mail Your Resume at Given below Mail Id </h5> <br>
		   <?php if(@$_GET['on']!="") {?>
			<?php if(@$_GET['on']=="1") {?>
				<h4><?php echo @$_GET['ml'];?></h4>
				<?php }else{?>
				<h4> If you unable to see the mail id then Please apply this Job at Job description mail id or Apply this Job.
				</h4>
				<?php }?>
			
			<?php }else{ ?>
			If you unable to see mail id then Please apply this Job at Job description mail id or Apply this Job.</h4>
			<?php } ?>
        </div>
        <a href="javascript:void(0)" data-dismiss="modal"><div class="modal-footer" style="background-color:green;color: white">
         
          <h4 style="text-align:center;color: white;">GO BACK</h4>
        </div></a>
      </div>
    </div>
  </div>
  
  
		<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="modal-title">Greate! Call the Company Now ! NOTE:- If you unable to find the HR Number then Please apply this Job or Mail your Resume in given mail id.
          </h6>
        </div>
        <div class="modal-body">
          <p>Job Title.</p>
          <p style="color:#5858d6"><?=$getSingleJob[0]->job_title?></p>
          <p>Company Address</p>
          <p style="color:#5858d6"><?=$getCompanyDetail[0]->companyName.' , '.$getCompanyDetail[0]->address?></p>
          
          <p>Contact Person</p>
          <p style="color:#5858d6"><?=$getCompanyDetail[0]->username?> </p>

		<?php if($getCompanyDetail[0]->on_off=='1') {?>
			 <p>Contact Number</p>
			 <p style="color:#5858d6"><?=$getCompanyDetail[0]->alternate_contact?> </p>
		<?php }?>
	   </div>
		<?php if($getCompanyDetail[0]->on_off=='1') {?>
        <a href="tel:<?=$getCompanyDetail[0]->alternate_contact?>">
			<div class="modal-footer" style="background-color:green;color: white">
			  <h4 style="text-align:center;color: white;">CALL HR</h4>
			</div>
		</a>
		<?php }?>
		
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title">CALL TIMING ARE BETWEEN <br/>10 AM To 07 PM!</h5></br>
          <h5>Monday To Saturday Only</h5>
        </div>
       
        <a href="javascript:void(0)" data-dismiss="modal"><div class="modal-footer" style="background-color:green;color: white">
          <h4 style="text-align:center;color: white;">GO BACK</h4>
        </div></a>
      </div>
    </div>
  </div>
</div>

 <?php $this->load->view('common/footer'); ?>
 <script type="text/javascript">
$(document).ready(function() {

	$(document).on("submit","#savechat",function(e){
		e.preventDefault();
		if($('#message').val()!='')
		{
			$.ajax({
				url:"<?php echo base_url('Home/savechat1')?>",
				method:"POST",
				data: new FormData(this),
				contentType:false,
				processData:false,
				dataType:"json",
				beforeSend:function(){ 
				$('#btnSave').attr('disabled',true);},
				success:function(data){
					
					$('#savechat')[0].reset();
					$('#btnSave').attr('disabled',false);
					
					
					}
				});
		}else{
			alert('empty');
		}
		});
});
</script>
 
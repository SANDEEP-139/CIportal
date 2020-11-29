<?php $this->load->view('common/header'); ?>
<!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>candidate-Profile</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Candidate-Profile</li>
<!--                                    <?php //print_r($candidateDetail)?>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp profile Wrapper Start -->
	<div class="jp_cp_profile_main_wrapper">
		<div class="container">
			<div class="row">
                 <div id="removing">
                      <?php
                                    echo validation_errors('<div  class=" error alert alert-danger text-center text-sm" style="">', '</div>'); 
                                    echo $this->session->flashdata('action_message'); 
                                    ?>
                  </div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="jp_cp_left_side_wrapper">
						<div class="jp_cp_left_pro_wallpaper">
							 <?php if(!empty($candidateDetail[0]->image)){?>
                                                                <img src="<?php echo base_url('assets/upload/')?><?php echo $candidateDetail[0]->image; ?>" alt="post_img" style="height: 250px; width:80%;" />
                                                                <?php
                                                                    }else{
                                                                        ?>
                                                                        <img src="<?php echo base_url('assets/profile.jpg')?>" alt="post_img" style="height:100px; width:100px" />
                                                                        <?php
                                                                    }
                                                                ?>
				       	<h2><?=$candidateDetail[0]->designation?></h2>
							<p><?=$candidateDetail[0]->Specialization?></p>
						</div>
					</div>
                
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="jp_cp_right_side_wrapper">
						<div class="jp_cp_right_side_inner_wrapper">
							<h2>PERSONAL DETAILS</h2>
							<table>
                                <tbody>
                                    <tr>
                                        <td class="td-w25">Full Name</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?=$candidateDetail[0]->username?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Experience</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?=$candidateDetail[0]->exp?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Data Of Birth</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?=$candidateDetail[0]->dob?></td>
                                    </tr>
                                    <tr>
                                        <td class="td-w25">Email</td>
                                        <td class="td-w10">:</td>
                                        <td class="td-w65"><?=$candidateDetail[0]->email?></td>
                                    </tr>
                                  

                                </tbody>
                            </table>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
							<div class="jp_cp_accor_heading_wrapper">
								<h2>Education</h2>
<!--								<p>Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</p>-->
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
							<div class="accordion_wrapper abt_page_2_wrapper">
								<div class="panel-group" id="accordion_threeLeft">


									<!-- /.panel-default -->
									<div class="panel panel-default">
										<div class="panel-heading bell">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree" aria-expanded="false">
										UNIVERSITY NAME
									  </a>
											</h4>
										</div>
										<div id="collapseTwentyLeftThree" class="panel-collapse collapse" aria-expanded="false" role="tablist">
											<div class="panel-body">
												<h3><?=$candidateDetail[0]->UniversityName?></h3>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading bell">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree2" aria-expanded="false">
										HIGHEST EDUCATION 
									  </a>
											</h4>
										</div>
										<div id="collapseTwentyLeftThree2" class="panel-collapse collapse" aria-expanded="false" role="tablist">
											<div class="panel-body">
                                                <h3><?=$candidateDetail[0]->HighestQualification?></h3>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading bell">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree3" aria-expanded="false">
										PASSING YEAR
									  </a>
											</h4>
										</div>
										<div id="collapseTwentyLeftThree3" class="panel-collapse collapse" aria-expanded="false" role="tablist">
											<div class="panel-body">
												    <h3><?=$candidateDetail[0]->passingYr?></h3>
											</div>
										</div>
									</div>
									<!-- /.panel-default -->
								</div>
								<!--end of /.panel-group-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- jp profile Wrapper End -->

    <!-- jp downlord Wrapper End -->

        <!-- jp Newsletter Wrapper End -->
   <?php $this->load->view('common/footer'); ?>
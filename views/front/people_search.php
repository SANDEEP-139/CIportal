<?php $this->load->view('common/header'); ?>
<!-- Header Wrapper End -->
    <div class="jp_bottom_footer_Wrapper_header_img_wrapper">
        <div class="jp_slide_img_overlay"></div>
        <div class="jp_banner_heading_cont_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_job_heading_wrapper">
                            <div class="jp_job_heading">
                                <h1><span>100,000+</span> Browse Jobs</h1>
                                <p>Find Jobs, Employment & Career Opportunities</p>
                            </div>
                        </div>
                    </div>
                    <?php echo form_open('home/searchJob');?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_header_form_wrapper">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <input type="text" class="" name="type" placeholder="Keyword e.g. (Profile name,People Name, Company, Tags)">
                                <input type="hidden" class="tags" name="find_type" value="Job">
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="jp_form_location_wrapper">
                                    <i class="fa fa-dot-circle-o first_icon"></i><select name="city" class="city">
								<option value="Delhi">Delhi</option>
								<option value="Noida">Noida</option>
								<option value="Ghaziabad">Ghaziabad</option>
								<option value="Haryana">Haryana</option>
								<option value="Lucknow">Lucknow</option>
							</select><i class="fa fa-angle-down second_icon"></i>
                                </div>
                            </div>
                            
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="jp_form_btn_wrapper">
                                    <ul>
                                        <li><input type="submit" name="submit" class="btn btn-primary" value="Search"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php echo form_close();?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_banner_main_jobs_wrapper">
                            <div class="jp_banner_main_jobs">
                                <ul>
                                    <li><i class="fa fa-tags"></i> Trending Jobs :</li>
                                    <li><a href="#">ui designer,</a></li>
                                    <li><a href="#">developer,</a></li>
                                    <li><a href="#">senior developer</a></li>
                                    <li><a href="#">Seo</a></li>
                                    <li><a href="#">CMS</a></li>
                                    <li><a href="#">call center</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header W rapper End -->
<?php $this->load->view('common/footer'); ?>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <?php include"city.php";?>
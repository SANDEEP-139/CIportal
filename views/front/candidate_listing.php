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
                                <h1><span>3,000+</span> Browse Jobs</h1>
                                <p>Find Jobs, Employment & Career Opportunities</p>
                            </div>
                        </div>
                    </div>
                    <?php echo form_open('home/searchCandidate');?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_header_form_wrapper">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <input type="text" class="tags" name="username" placeholder="Keyword e.g. (People Name, Tags)">
                                <input type="hidden" class="tags" name="find_type" value="People">
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="jp_form_location_wrapper">
                               <input type="text" name="city" class="city" placeholder="City Name">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="jp_form_btn_wrapper">
                                    <ul>
                                        <li><input type="submit" name="submit" class="" value="Search"></li>
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
    <!-- jp listing sidebar Wrapper Start -->
    <div class="jp_listing_sidebar_main_wrapper">
        <div class="container">
            <div class="row">
			
			 <?php if(@$getAllCandidate!='') {foreach(@$getAllCandidate as $getCand[0]){?>
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="jp_recent_resume_box_wrapper" >
								<div class="jp_recent_resume_img_wrapper">
                                    <?php if(!empty($getCand[0]->image)){?>
                                        <img src="<?php echo base_url('assets/upload/')?><?php echo $getCand[0]->image; ?>" alt="" style="width:80px; height:80px;padding:15px;" />
                                    <?php }else{ ?>
                                        <img src="<?php echo base_url('assets/profile.jpg')?>" alt="" style="height:80px; width:80px; padding:15px;"  />
                                    <?php } ?>
								</div>
								<div class="jp_recent_resume_cont_wrapper">
									<h3><?=$getCand[0]->username?></h3>
									<p><i class="fa fa-folder-open-o"></i> <a href="#"><?=$getCand[0]->designation ?></a></p>
								</div>
							<div class="jp_recent_resume_btn_wrapper">
								<ul>
									<li><a href="<?php echo base_url('home/getCandidateProfile/'.$getCand[0]->id); ?>">View Profile</a></li>
								</ul>
							</div>
					</div>   
				</div>
			 <?php } 
			 }else {?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jp_cl_right_bar">
                    <div class="row">
						<span id="ajax_table"></span>
						<br />
						<br />
						<div class="col-md-12">	
							<div class="container" style="text-align: center; width:80%;">
								<button class="btn btn-info" id="load_more" data-val = "0"> More Load..
								<img style="display: none" id="loader" src="http://www.trycatchclasses.com/code/demo/load-more-records-ci/asset/loader.GIF"> 
								</button>
							</div>
						</div>
                    </div>
                </div>
			 <?php }?>
            </div>
        </div>
    </div>
    <!-- jp listing sidebar Wrapper End -->
 
   
 <?php $this->load->view('common/footer'); ?>
  <?php include"city.php";?>
   
 <script>
 $(document).ready(function(){
   getcountry(0);
   
    $("#load_more").click(function(e){
       e.preventDefault();
         var page = $(this).data('val');
        getcountry(page);
		
	});
    
});

   var getcountry = function(page){
        $("#loader").show();
        $.ajax({
            url:"<?php echo base_url() ?>/home/gtAllcandidateProfiie",
            type:'GET',
			beforeSend:function(){ $('#data_loading').html('Please wait..').css('color','green'); },
            data: {page:page}
        }).done(function(response){
			$('#data_loading').html('');
            $("#ajax_table").append(response);
            $("#loader").hide();
            $('#load_more').data('val', ($('#load_more').data('val')+1));
            scroll();
        });
    };

    var scroll  = function(){
        $('html, body').animate({
            scrollTop: $('#load_more').offset().top
        }, 1000);
    };
</script>  
   
   
 
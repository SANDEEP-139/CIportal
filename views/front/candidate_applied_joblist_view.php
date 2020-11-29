<?php $this->load->view('common/header'); ?>

<!-- jp Tittle Wrapper Start -->
<div class="jp_tittle_main_wrapper">
    <div class="jp_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_tittle_heading_wrapper">
                    <div class="jp_tittle_heading">
                        <h2>Posted Job Status</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li>Posted Job Status</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
#overflowTest {
height: 400px;
overflow: auto;
}
</style>
<!-- jp Tittle Wrapper End -->
<!-- jp ad post Wrapper Start -->
<div class="jp_adp_main_section_wrapper">
    
    <div class="1container">

        <div class="row" style="border:0px solid red;margin-top:-80px;">
            <div class="col-md-12 col-sm-4 col-xs-12 " id="overflowTest ">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Job Location</th>
                        <th>Candidate Name</th>
                        <th>Mobile</th>
                        <th>Experience</th>
                        <th>Date Applied</th>
                        <th>Who Applied</th>
                        <th>Resume</th>
                         <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                    foreach($companyJobStatus as $joblst[0]){ ?>
                    <tr>
                        <td><?php echo $joblst[0]->jobTitle;?></td>
                        <td><?php echo $joblst[0]->loc;?></td>
                        <td><?php echo $joblst[0]->username;?></td>
                        <td><?php echo $joblst[0]->mobileNo;?></td>
                        <td><?php echo $joblst[0]->exp;?></td>
                         <td><?php echo date('d-M-Y', strtotime($joblst[0]->created_at)); ?></td>
                        <td><a href="<?php echo base_url('home/getCandidateProfileForCompany/'.$joblst[0]->user_id)?>">View Candidate Profile</a></td>
                          <td><a href="<?php echo base_url('assets/resume/'.$joblst[0]->final_file)?>" style="color:blue">resume</td>
                        
						
						<?php if($joblst[0]->applied_status=='pending'){?>
                        <td><a href="<?php echo base_url('home/jobAppliedStatus/')?><?php echo $joblst[0]->id;?>/Close"  class="btn btn-danger">Pending</a></td>
                      <?php } if($joblst[0]->applied_status=='close'){ ?>
                         <td><a href="<?php echo base_url('home/jobAppliedStatus/')?><?php echo $joblst[0]->id;?>/Pending"  class="btn btn-warning">Close</a></td>
                         <?php } ?>
                    </tr>
                    <?php } ?>
                  
                </tbody>
            </table>
        </div>
        </div>

    </div>
</div>
<!-- jp ad post Wrapper End -->


<?php $this->load->view('common/footer'); ?>
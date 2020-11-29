<?php $this->load->view('common/header'); ?>

<!-- jp Tittle Wrapper Start -->
<div class="jp_tittle_main_wrapper">
    <div class="jp_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_tittle_heading_wrapper">
                    <div class="jp_tittle_heading">
                        <h2>View Posted Job</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li>View Posted Job</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Tittle Wrapper End -->
<!-- jp ad post Wrapper Start -->
<div class="jp_adp_main_section_wrapper">
    
    <div class="container">
 <a href="<?php echo base_url('home/jobPostView');?>" style="font-size:24px;margin-bottom:40px;" class="btn btn-primary"><i class="fa fa-plus-circle"></i> &nbsp;Post Job!</a>
        <div class="row">
             
            <table class="table table-bordered  table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Job Title</th>
                        <th>Job Category</th>
                        <th>Job Location</th>
                        <th>Job Post Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $a=1;
                    foreach($getJobList as $joblst[0]){ ?>
                    <tr>
                        <td><?php echo $a; $a++;?></td>
                        <td><?php echo $joblst[0]->job_title;?></td>
                        <td><?php echo $joblst[0]->job_category;?></td>
                        <td><?php echo $joblst[0]->job_location;?></td>
                        <td><?php echo date('d-M-Y', strtotime($joblst[0]->created_at)); ?></td>
                        <?php if($joblst[0]->status=='active'){?>
                        <td><a class="btn btn-success" href="<?php echo base_url('home/jobActive/')?><?php echo $joblst[0]->id;?>/inactive" style="color:black;" class="text-primary">ACTIVE</a></td>
                        <?php }else{ ?>
                      <td><a class="btn btn-danger" href="<?php echo base_url('home/jobActive/')?><?php echo $joblst[0]->id;?>/active" style="color:black;" class="text-danger">INACTIVE</a></td>
                      <?php } ?>
                    </tr>
                    <?php } ?>
                  
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- jp ad post Wrapper End -->


<?php $this->load->view('common/footer'); ?>
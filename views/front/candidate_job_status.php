<?php $this->load->view('common/header'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
#overflowTest {
 height:450px;
 overflow: auto;
}
</style>
<!-- jp Tittle Wrapper Start -->
<div class="jp_tittle_main_wrapper">
    <div class="jp_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_tittle_heading_wrapper">
                    <div class="jp_tittle_heading">
                        <h2>View Applied Job</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li>View Applied Job</li>
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
        <div class="row"  style="border:0px solid red;margin-top:-95px;">
        <div class="col-md-12 col-sm-12 col-xs-12" id="overflowTest" >
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Job Title</th>
                        <th>Job Location</th>
                        <th>Company Name</th>
                        <th>Call Hr</th>
                        <th>Job Post Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $a=1; 
						foreach($companyJobStatus as $joblst[0]){ ?>
                    <tr>
                        <td><?php echo $a; $a++;?></td>
                        <td><?php echo $joblst[0]->jobTitle;?></td>
                        <td><?php echo $joblst[0]->loc;?></td>
                        <td><?php echo $joblst[0]->company_name;?></td>
						<?php if($joblst[0]->on_off!='' && $joblst[0]->on_off!='0'){?>
							<script>
								$(document).ready(function(){ 
										$('#cll').show();
									});
							</script>
							<td><?php echo $joblst[0]->alternate_contact;?></td>
						<?php }else{?>
							<td></td>
						<?php }?>
						
                        <td><?php echo date('d-M-Y', strtotime($joblst[0]->created_at));//echo $joblst[0]->created_at;?></td>
                        
                        
                        <?php if($joblst[0]->applied_status=='pending'){?>
                        <td><a href="#"  class="btn btn-warning">Application Received</a></td>
                      <?php } if($joblst[0]->applied_status=='close'){ ?>
                         <td><a href="#"  class="btn btn-danger">Closed</a></td>
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
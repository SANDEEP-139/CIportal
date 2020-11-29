<?php $this->load->view('common/header'); ?>

<!-- jp Tittle Wrapper Start -->
<!--<div class="jp_tittle_main_wrapper">-->
<!--    <div class="jp_tittle_img_overlay"></div>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                <div class="jp_tittle_heading_wrapper">-->
<!--                    <div class="jp_tittle_heading">-->
<!--                        <h2>Forget-Password</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- jp Tittle Wrapper End -->
<div id="wrapper" class="wrapper-login" >
    <div class="login-inner">

        <div class="form-wrapper" >
<div class="simple-login-container">
            <?php if($this->session->flashdata('action_message')){ ?>
            <div class="message">
                <?php echo $this->session->flashdata('action_message');?>
            </div>
            <?php }	?>
    </div>
            <?php echo form_open('home/forgot_password'); ?>

            <div class="simple-login-container" >
<!--                <h2>Password Request</h2>-->
                <div class="row">
					<div class="col-md-12">
						<label class="alert alert-info">Forget-Password</label>
                  </div> 
                    <div class="col-md-6 form-inline">
                        <label>Candidate</label>
                        <input type="radio" class="form-control" name="type" value="candidate_tbl" style="height:15px;">
                    </div>
                    <div class="col-md-6 form-inline">
                        <label>Employee</label>
                        <input type="radio" class="form-control" name="type" value="employee_tbl" style="height:15px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="submit" class="btn btn-block btn-login" name="submit" value="submit">
                    </div>
                </div>

            </div>
            <?php echo form_close(); ?>

        </div>

    </div>
</div>




<?php $this->load->view('common/footer'); ?>
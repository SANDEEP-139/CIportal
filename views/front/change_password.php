<?php $this->load->view('common/header'); ?>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://chrome.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<div id="wrapper" class="wrapper-login">
    
    <div class="login-inner">
   
        <div class="form-wrapper">
            <div class="simple-login-container">
            <?php if($this->session->flashdata('action_message')){ ?>
            <div class="message">
                <?php echo $this->session->flashdata('action_message');?>
            </div>
            <?php
							}
							?>
            </div>
            <?php echo form_open('home/passwordChange'); ?>
            
            <div class="simple-login-container">
                                <h2 style="padding-bottom:45px;">Password Change</h2>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="password" id="psw" name="password"  required class="form-control" placeholder="Enter Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="password" id="psw" name="confirm" required class="form-control" placeholder="Enter Confirm Password" required>
                        <input type="hidden" name="type" value="<?php echo $type?>">
                        <input type="hidden" name="reset_key" value="<?php echo $reset_key?>">
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

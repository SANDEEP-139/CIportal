<?php $this->load->view('common/header.php'); ?>
<div id="removing" class="simple-login-container" style="width:50%">
    <?php 
                                    echo validation_errors('<div  class=" error alert alert-danger text-center text-sm" style="">', '</div>'); 
                                    echo $this->session->flashdata('action_message'); 
                                    ?>
</div>
<?php echo form_open('home/checkOtpPassword'); ?>

<div class="simple-login-container">
                   <h2>Please Enter OTP We have send to your registerd Email</h2>

    <div class="row">
        <div class="col-md-12 form-group">
            <label for="psw" style="    margin: 20px 0px;">Enter OTP here</label>
            <input type="number" id="psw" name="otp" class="form-control" required>
            <input type="hidden" id="psjw" name="type" value="<?php echo $type;?>" required>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="submit" class="btn btn-block btn-login" name="submit" value="submit">
        </div>
    </div>

</div>

<?php echo form_close(); ?>

<?php $this->load->view('common/footer.php'); ?>

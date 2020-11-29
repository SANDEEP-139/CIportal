<?php $this->load->view('common/header.php'); ?>
<div id="removing">
    <?php 
                                    echo validation_errors('<div  class=" error alert alert-danger text-center text-sm" style="">', '</div>'); 
                                    echo $this->session->flashdata('action_message'); 
                                    ?>
</div>
<?php echo form_open('home/resetPasswordValidation'); ?>
<div class="simple-login-container">
    <!--                <h2>Password Request</h2>-->
    <div class="row">
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
            <input type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required class="form-control" placeholder="Enter email" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="password" id="psw" name="confirm" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required class="form-control" placeholder="Enter email" required>
            <input type="hidden" id="psw" name="reset_key" value="<?php echo $key;?>">
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
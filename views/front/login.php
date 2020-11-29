
<?php $this->load->view('common/header'); ?>
	  <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Login</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                       
                                    <li>Login</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
	    
	<!-- jp login wrapper start -->
	<div class="login_section"  style="background-color:#333;">
		<!-- login_form_wrapper -->
		<div class="login_form_wrapper">

			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
                              <div id="removing">
                                    <?php 
                                        echo validation_errors('<div  class=" error alert alert-danger text-center text-sm" style="">', '</div>'); 
                                        echo $this->session->flashdata('action_message'); 
                                    ?>
                                </div>
						<!-- login_wrapper -->
						<h1  style="color:#fff;">LOGIN TO YOUR ACCOUNT</h1>
						<div class="login_wrapper">
                            <?php echo form_open('home/loginMember'); ?>
							<div class="row" style="text-align:center">
								<center><table>
								    <tr>
								         <td style="width:40%;"><a  class=""><b>Candidate Login</b><i class="fa fa-login"></i> </a></td>
								         <td style="width:10%;"><input type="radio" class="form-control" name="type" value="candidate" style="height: 18px;"></td>
								         <td style="width:40%;"><a  class=""><b>Employee Login</b><i class="fa fa-login"></i> </a></td>
								         <td style="width:10%;"><input type="radio" class="form-control" name="type" value="employee"    style="height: 18px;"></td>
								    </tr>
								</table></center>
							<h2>or</h2>
							<div class="formsix-pos">
								<div class="form-group i-email">
									<input type="email" class="form-control"  value="<?php echo set_value('email'); ?>"  name="email" required="" id="email2" placeholder="Email id*">
									<span class="small" style="color:red;">
									<?php echo form_error('email'); ?>
								 </span>
								
								</div>
							</div>
							<div class="formsix-e">
								<div class="form-group i-password">
									<input type="password" class="form-control" value="<?php echo set_value('password'); ?>" name="password" required="" id="password2" placeholder="Password*">
								<span class="small" style="color:red;">
									<?php echo form_error('password'); ?>
								 </span>
								</div>
							</div>
							<div class="login_remember_box">
								<label class="control control--checkbox pull-left" >Remember me
									<input type="checkbox">
									<span class="control__indicator"></span>
								</label>
								
								<a href="<?php echo base_url('home/forgetPasswordView');?>" class="forget_password">
									Forgot Password
								</a>
							</div>
							<div class="">
                                <input type="submit" class="form-control btn btn-primary " name="submit" value="Submit" style="background:#23c0e9">
							</div>
                            <?php echo form_close(); ?>
							<div class="login_message">
								<p>Don’t have an account ? <a href="<?php echo base_url('home/registerView');?>"> Register Now </a> </p>
							</div>
						</div>
						<p>In case you are using a public/shared computer we recommend that
							you logout to prevent any un-authorized access to your account</p>
						<!-- /.login_wrapper-->
					</div>
				</div>
			</div>
		</div>
		 <body><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- job -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9268075008862469"
     data-ad-slot="5227436759"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></body>  
		<!-- /.login_form_wrapper-->
	</div>
	<!-- jp login wrapper end -->
	
    <?php $this->load->view('common/footer'); ?>

<?php $this->load->view('common/header'); ?>

    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Post Job</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
									<ins class="adsbygoogle"
										 style="display:block; text-align:center;"
										 data-ad-layout="in-article"
										 data-ad-format="fluid"
										 data-ad-client="ca-pub-9268075008862469"
										 data-ad-slot="1278499176"></ins>
									<script>
										 (adsbygoogle = window.adsbygoogle || []).push({});
									</script>
                                    <li>Post Job</li>
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
	
	  <?php 
             echo validation_errors('<div  class=" error alert alert-danger text-center text-sm" style="">', '</div>'); 
             echo $this->session->flashdata('action_message'); 
       ?>
		<div class="container">
              <?php echo form_open_multipart('home/jobPost'); ?>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="jp_adp_form_heading_wrapper">
						<h2 style="color:red;">Job Details</h2>
					</div>
					
					<div class="jp_adp_form_wrapper">
						<label>Job Title</label>
						<input type="text" name="job_title" id="job_title" placeholder="Job Title" onkeypress="return check(event)"  required>
					</div>
					
					<div class="jp_adp_form_wrapper">
					<label>Job Category</label>
						<select name="job_category" required>
							<option value="">Select Job Category</option>
							<option value="government">Government</option>
							<option value="private">Private</option>
							<option value="fresher">Fresher</option>
							<option value="walkin">Walk in</option>
							<option value="contract">Contract</option>
						</select>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-xs-12">
							<div class="jp_adp_form_wrapper">
								<label>Minimum Salary</label>
								<input type="text" name="job_salary_min" placeholder="Salary Min per/month" required>
								<!----<select  placeholder="Salary Min per/month" name="job_salary_min" required>
									<option value="">Select Minimum Salary</option>
									<option value="10000">10000</option>
									<option value="15000">15000</option>
									<option value="20000">20000</option>
									<option value="25000">25000</option>
									<option value="30000">30000</option>
									<option value="35000">35000</option>
									<option value="40000">40000</option>
									<option value="45000">45000</option>
									<option value="50000">50000</option>
									<option value="55000">55000</option>
								</select>-->
							</div>
						</div>
						<div class="col-lg-6 col-md-6  col-xs-12">
							<div class="jp_adp_form_wrapper">
								<label>Maximum Salary</label>
								<input type="text" name="job_salary_max" placeholder="Salary Max per/month" required>
								<!---<select  placeholder="Salary Max per/month" name="job_salary_max" required>
									<option value="">Select Maximum Salary</option>
									<option value="10000">10000</option>
									<option value="15000">15000</option>
									<option value="20000">20000</option>
									<option value="25000">25000</option>
									<option value="30000">30000</option>
									<option value="35000">35000</option>
									<option value="40000">40000</option>
									<option value="45000">45000</option>
									<option value="50000">50000</option>
									<option value="55000">55000</option>
								</select>-->
							</div>
						</div>
						<div class="col-lg-6 col-md-6  col-xs-12">
							<div class="jp_adp_form_wrapper">
								<label>Salary Type</label>
								<select name="salary_type" required>
								<option value="">Select Salary Type</option>
								<option value="Per/Month">Per/Month</option>
								<option value="Per/Annual">Per/Annual</option>
								
								</select>
							</div>
						</div>
						
                        <div class="col-lg-6 col-md-6 col-xs-12">
							<div class="jp_adp_form_wrapper">
								<label>Job Type</label>
								<select name="job_type" required>
								<option value="">Select Job Type</option>
								<option value="Internship">Internship</option>
								<option value="Part-time">Part-time</option>
								<option value="Fulltime">Fulltime</option>
								</select>
							</div>
						</div>
						
					</div>
					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
					<div class="jp_adp_form_heading_wrapper">
						<p style="color:red;">Fields with * are mandetory</p>
					</div>
					<div class="jp_adp_form_wrapper">
						<label>Enter City</label>
                         <input  name="job_location" id="city" placeholder="Current City" required>
<!--
						<select name="job_location">
							<option hidden>Job Location</option>
							<option value="Noida">Noida</option>
							<option value="Delhi">Delhi</option>
							<option value="Ghaziabad">Ghaziabad</option>
						</select>
-->
					</div>
					
					<div class="jp_adp_form_wrapper">
						<label>Job Skill</label>
						<input type="text" placeholder="Skills required" name="job_skill" required>
					</div>
					<div class="jp_adp_form_wrapper">
						<label>Industry Type</label>
						<select  placeholder="Skills required" name="industry_type" required >
							<option value="">Select Industry Type</option>
							<option value="Accounts">Accounts</option>
							<option value="Agriculture">Agriculture</option>
							<option value="Airlines">Airlines</option>
							<option value="Architectural">Architectural</option>
							<option value="Automobile Industry">Automobile Industry</option>
							<option value="Banking">Banking</option>
							<option value="BPO / Call Center">BPO / Call Center</option>
							<option value="BPO / Call Center / ITES">BPO / Call Center / ITES</option>
							<option value="Civil Engineering">Civil Engineering</option>
							<option value="Catering">Catering</option>
							<option value="IT-Software">IT-Software</option>
							<option value="Software Development">Software Development</option>
							<option value="Software Services">Software Services</option>
							<option value="Social Services">Social Services</option>
							<option value="Warehousing">Warehousing</option>
							<option value="Wealth Managment">Wealth Managment</option>
							<option value="Bakery">Bakery</option>
							<option value="Texttile / Garments / Fashion">Texttile / Garments / Fashion</option>
							<option value="Cleaning">Cleaning</option>
							<option value="Cosunlting Services">Cosunlting Services</option>
							<option value="Human Resource & Consultancy">Human Resource & Consultancy</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<!--<div class="jp_adp_form_wrapper">-->
					<!--	<input type="text" placeholder="Notic Period" name="job_notice_period">-->
					<!--</div>-->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="jp_adp_form_wrapper">
						<label>Minimum Experience</label>
						<select  placeholder="Job Experience" name="min_job_exp" required>	
							<option value="">Select Minimum Experience</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
						</select>
					</div>
					</div>
					
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="jp_adp_form_wrapper">
						<label>Maximum Experience</label>
						<select  placeholder="Job Experience" name="max_job_exp" required>
						<option value="">Select Maximum Experience</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
						</select>
					</div>
					</div>
					
					
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_textarea_main_wrapper">
					<label>Job Description</label>
						<textarea rows="7" placeholder="Job Description" name="job_description" required></textarea>
					</div>
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_choose_resume_bottom_btn_post">
					<ul>
						<li>
						<button type="submit" name="submit"   class="btn btn-primary login_btn  btn-lg" id="account-option_2"><i class="fa fa-save"></i> Post Job</button>
                        </li>
					</ul>
					</div>
				</div>
			</div>
            <?php echo form_close();?>
		</div>
	</div>
    <!-- jp ad post Wrapper End -->
   
   
  <?php $this->load->view('common/footer'); ?>
  <?php include"city.php";?>
 <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<script> 
$(window).load(function(){
	
	
/*CKEDITOR.replace('job_description',{
allowedContent:true,
toolbar : 'standard',
 allowedContent: 'p b i ul li; img[!src]',
    
});*/



CKEDITOR.editorConfig = function( config ) {
        

        config.toolbar_standard = [
            { name: 'stuff', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
            { name: 'morestuff', items: ['NumberedList', 'BulletedList'] },

            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Superscript', 'Subscript'] },
            { name: 'colors', items: ['TextColor'] },
            { name: 'paragraph2', items: ['JustifyLeft', 'JustiftyCenter', 'JustifyRight', 'Outdent', 'Indent'] },
            '/',
            { name: 'document', items: ['Source'] }
        ]
    };
CKEDITOR.replace('job_description',
            {
                toolbar : 'standard',
                allowedContent: 'p b i ul li; img[!src]',
               
            });
});
</script>

<script language="javascript" type="text/javascript">
function check(e){
    var keynum
    var keychar
    var numcheck
    // For Internet Explorer
    if (window.event) {
        keynum = e.keyCode;
    }
    // For Netscape/Firefox/Opera
    else if (e.which) {
        keynum = e.which;
    }
    keychar = String.fromCharCode(keynum);
    //List of special characters you want to restrict
    if (keychar == "'" || keychar == "`" || keychar =="!" || keychar =="@" || keychar =="#" || keychar =="$" || keychar =="%" || keychar =="^" || keychar =="&" || keychar =="*" || keychar =="(" || keychar ==")" || keychar =="-" || keychar =="_" || keychar =="+" || keychar =="=" || keychar =="/" || keychar =="~" || keychar =="<" || keychar ==">" || keychar =="," || keychar ==";" || keychar ==":" || keychar =="|" || keychar =="?" || keychar =="{" || keychar =="}" || keychar =="[" || keychar =="]" || keychar =="¬" || keychar =="£" || keychar =='"' || keychar =="\\") {
        return false;
    } else {
        return true;
    }
}


</script>


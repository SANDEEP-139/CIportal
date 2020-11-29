<?php $this->load->view('common/header'); ?>

    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Register</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Register</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->

    <!-- jp ragister Wrapper Start -->
    <div class="jp_register_section_main_wrapper">
        <div class="jp_regis_left_side_box_wrapper">
            <div class="jp_regis_left_side_box">
                <img src="<?php echo base_url('assets/front/')?>images/content/regis_icon.png" alt="icon" />
                <h4>I’m an EMPLOYER</h4>
                <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                <ul>
                    <li><a href="<?php echo base_url('home/registerView')?>"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS EMPLOYER</a></li>
                </ul>
            </div>
        </div>
        <div class="jp_regis_right_side_box_wrapper">
            <div class="jp_regis_right_img_overlay"></div>
            <div class="jp_regis_right_side_box">
                <img src="<?php echo base_url('assets/front/')?>images/content/regis_icon2.png" alt="icon" />
                <h4>I’m an candidate</h4>
                <p>Signed in companies are able to post new<br> job offers, searching for candidate...</p>
                <ul>
                    <li><a href="<?php echo base_url('home/registerView')?>"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COMPANY</a></li>
                </ul>
            </div>
            <div class="jp_regis_center_tag_wrapper">
                <p>OR</p>
            </div>
        </div>

    </div>
    <!-- jp ragister Wrapper End -->
   
      <?php $this->load->view('common/footer'); ?>
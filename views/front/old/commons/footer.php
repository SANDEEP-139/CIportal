 <!-- Footer
  ============================================= -->

    <!-- Modal Dialog - Login/Signup end --> 
<section id="footer">
<div class="container">
<div class="row">
<div class="eq5">
<h6>Company</h6>
<ul>
<li><a href="#">About us</a></li>
<li><a href="#">Our Blog</a></li>
<li><a href="#">Press/Media</a></li>
<li><a href="#">Career</a></li>
<li><a href="#">Terms &amp; Conditions</a></li>
<li><a href="#">Site Map</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</div>
<div class="eq5">
<h6>Need help</h6>
<ul>
<li><a href="#">How to Book</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Cancellation &amp; Refund </a></li>
<li><a href="#">Feedback / Complaints</a></li>
<li><a href="#">E-papers</a></li>
<li><a href="#">Track My Ad</a></li>
</ul>
</div>
<div class="clearfix hide-md"></div>
<div class="eq5">
<h6>Payment Method</h6>
<ul>
<li><a href="#">Quick Payment Link</a></li>
<li><a href="#">Payment Terms</a></li>
<li><a href="#">Net banking</a></li>
<li><a href="#">Debit/Credit Card</a></li>
<li><a href="#">NEFT/RTGS</a></li>
<li><a href="#">Bank Deposit/Cheque/DD</a></li>
<br>

</ul>
</div>

<div class="eq5 ft_vid">
<h6>Video introduction</h6>
<iframe src="#" frameborder="0" allowfullscreen=""></iframe>
<ul>
<li style="display:inline-block; vertical-align:top"><a href="https://www.facebook.com/bookmyad" target="_blank"><img src="images\make-logo\facebook.jpg"></a></li>
<li style="display:inline-block; vertical-align:top"><a href="https://plus.google.com/+BookmyadOfficial/posts" target="_blank"><img src="images\make-logo\gmail.jpg"></a></li>
<li style="display:inline-block; vertical-align:top"><a href="https://twitter.com/bookmy_ad" target="_blank"><img src="images\make-logo\Twitter.jpg"></a></li>
<li style="display:inline-block; vertical-align:top"><a href="https://www.youtube.com/channel/UCHiRvwYVChyRb8isRQClejA" target="_blank"><img src="images\make-logo\Youtube.jpg"></a></li>
<li style="display:inline-block; vertical-align:top"><a href="https://www.instagram.com/bookmyad/" target="_blank"><img src="images\make-logo\Instagram.jpg"></a></li>
</ul>
</div>
</div>
</div>
</section>
</footer>
</section>
  <footer id="footer" class="mt-0">
    <section class="hero-wrap bg-secondary shadow-md pt-4 pb-3">
      <div class="hero-bg" style="background-image:url('./images/make-logo/image-5.jpg');"></div>
      <div class="hero-content">
        <div class="container">
          <div class="row text-light">
            <div class="col-sm-6 col-md-3">
              <div class="featured-box style-1">
                <div class="featured-box-icon text-light"> <i class="fa fa-lock"></i> </div>
                <h4 class="text-light">100% Secure</h4>
                <p>Moving your card details to a much more secured place.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="featured-box style-1">
                <div class="featured-box-icon text-light"> <i class="fa fa-thumbs-up"></i> </div>
                <h4 class="text-light">Trust pay</h4>
                <p>100% Payment Protection. Easy Return Policy.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="featured-box style-1">
                <div class="featured-box-icon text-light"> <i class="fa fa-bullhorn"></i> </div>
                <h4 class="text-light">Refer & Earn</h4>
                <p>Invite a friend to sign up and earn up to $100.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="featured-box style-1">
                <div class="featured-box-icon text-light"> <i class="fa fa-life-ring"></i> </div>
                <h4 class="text-light">24X7 Support</h4>
                <p>We're here to help. Have a query and need <a href="#">help</a> ?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Script --> 
<script src="<?php echo base_url('public/');?>vendor/jquery/jquery.min.js"></script> 
<script src="<?php echo base_url('public/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="<?php echo base_url('public/');?>vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="<?php echo base_url('public/');?>vendor/bootstrap-spinner/bootstrap-spinner.js"></script> 
<script src="<?php echo base_url('public/');?>vendor/daterangepicker/moment.min.js"></script> 
<script src="<?php echo base_url('public/');?>vendor/daterangepicker/daterangepicker.js"></script>

<!-- Script -
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="js/theme.js"></script> 
-->
<script>

$(function(){
	$("document").on("click","#bt_form",function(e){
		e.preventDefault();
		alert("okkk")
	})
})



$(function() {
 'use strict';
  // Hotels Check In Date
  $('#hotelsCheckIn').daterangepicker({
	singleDatePicker: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#hotelsCheckIn').val(chosen_date.format('MM-DD-YYYY'));
  });
  
  // Hotels Check Out Date
  $('#hotelsCheckOut').daterangepicker({
	singleDatePicker: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#hotelsCheckOut').val(chosen_date.format('MM-DD-YYYY'));
  });
  
  // Flight Depart Date
  $('#flightDepart').daterangepicker({
	singleDatePicker: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#flightDepart').val(chosen_date.format('MM-DD-YYYY'));
  });
  
  // Flight Return Date
  $('#flightReturn').daterangepicker({
	singleDatePicker: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#flightReturn').val(chosen_date.format('MM-DD-YYYY'));
  });
  
  // Train Depart Date
  $('#trainDepart').daterangepicker({
	singleDatePicker: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#trainDepart').val(chosen_date.format('MM-DD-YYYY'));
  });
  
  // Bus Depart Date
  $('#busDepart').daterangepicker({
	singleDatePicker: true,
	minDate: moment(),
	autoUpdateInput: false,
	}, function(chosen_date) {
  $('#busDepart').val(chosen_date.format('MM-DD-YYYY'));
  });
});
</script> 
<script type="text/javascript">
      // This is the Feedback toggle functionality it slides the feedback form in and out
    // of view when the user clicks the div with the class .feedback-toggle
    $('.feedback-toggle').click( function(){
        var   left = parseFloat($('.feedback')[0].style.left.match(/[0-9]+/g)) || 50,
                tgl  = '+=280';
        (left > 50)  ? tgl = '-=280' : tgl = '+=280';
        $('.feedback').animate({ left: tgl}, 500);
    });
  
  
  // This is the form submission AJAX code which also
    // hides the feednack form.

    $("#feedback-form .btn").click(function() {
        var url   = "path/to/your/script.php", // the script where you handle the form input.
                data  = $("#feedback-form").serialize(),
                isValid   = validate("#feedback-form");
        if(isValid){
            $.ajax({
                type  : "POST",
                url : url,
                data  : data , // serializes the form's elements.
                success : function(data){
                    $('.feedback').find('.alert-error').fadeIn('fast');
                    $('.feedback').animate({ left: '-=350'}, 500);
                },
                error : function(data){
                    $('.feedback').find('.alert-block').fadeIn('fast');
                    return false;
                }
            });
        }
        return false; // avoid to execute the actual submit of the form.
    });







</script>
 
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <script>
            $('.select2').select2();
        </script>
<script src="<?php echo base_url('public/');?>js/theme.js"></script>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>
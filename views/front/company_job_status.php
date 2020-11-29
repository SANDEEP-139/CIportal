<?php $this->load->view('common/header'); ?>

<!-- jp Tittle Wrapper Start -->
<div class="jp_tittle_main_wrapper">
    <div class="jp_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_tittle_heading_wrapper">
                    <div class="jp_tittle_heading">
                        <h2>Posted Job Status</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li>Posted Job Status</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
#overflowTest {
 height: 350px;
 overflow: auto;
}
</style>
<!-- jp Tittle Wrapper End -->
<!-- jp ad post Wrapper Start -->
<div class="jp_adp_main_section_wrapper">
    
    <div class="container">
	<div class="row">
		<div class="col-md-12">	
			<span id="ajax_table"></span>
		</div>
		<br />
		<div class="col-md-12">	
			<div class="container" style="text-align: center; width:80%;">
				<button class="btn btn-info" id="load_more" data-val = "0"> More Load..
				<img style="display: none" id="loader" src="http://www.trycatchclasses.com/code/demo/load-more-records-ci/asset/loader.GIF"> 
				</button>
			</div>
		</div>
	</div>
	

    </div>
</div>
<!-- jp ad post Wrapper End -->


<?php $this->load->view('common/footer'); ?>


<script>
 $(document).ready(function(){
   getcountry(0);
   
    $("#load_more").click(function(e){
       e.preventDefault();
         var page = $(this).data('val');
        getcountry(page);
		
	});
    
});

   var getcountry = function(page){
        $("#loader").show();
        $.ajax({
            url:"<?php echo base_url() ?>/home/canJobAppliedPagig",
            type:'GET',
			beforeSend:function(){ $('#data_loading').html('Please wait..').css('color','green'); },
            data: {page:page}
        }).done(function(response){
			$('#data_loading').html('');
            $("#ajax_table").append(response);
            $("#loader").hide();
            $('#load_more').data('val', ($('#load_more').data('val')+1));
            scroll();
        });
    };

    var scroll  = function(){
        $('html, body').animate({
            scrollTop: $('#load_more').offset().top
        }, 1000);
    };
</script>
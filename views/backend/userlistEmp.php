<?php $this->load->view('backend/header'); ?>
        <div class="wrapper-page">

            <div class="page-title">
                <h1><i class="icon-ghost"></i>Candidate list</h1>
            </div>
            <span class="flashmessage"></span>
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="content_wrapper">
                            <div class="table_banner clearfix">
                                <h5 class="table_banner_title">Candidate</h5>
                            </div>
                            <div class="table_body text-left">
                                <table id="example" class="table table-condensed responsive table_custom" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                                                                 
                                            <th>User Id</th>
                                            <th>Comapnay Name</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>City</th>
                                            <th>Mobile</th>
                                            <th>Date Joined</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach($userlist as $value): ?>
                                        <tr>
                                      
                                            <td><?php echo $value->id ?></td>
                                            <td><?php echo $value->username ?></td>
                                            <td><?php echo $value->email ?></td>
                                            <td><?php echo $value->type ?></td>
                                            <!--<td><?php echo $value->Specialization ?></td>-->
                                            <td><?php echo $value->city ?></td>
                                            <td><?php echo $value->mobileNo ?></td>
                                            <td><?php echo $value->created_at ?></td>
                                            
                                            <td class="action-buttons">
                                         
                                                  <?php if($value->status=='active'){?>
                                                <a onclick="return confirm('Are you sure to Deactivate this?')" href="<?php echo base_url('crud/')?>updateValueEmp?status=inactive&id=<?php echo $value->id; ?>" >
                                                    <i class="icon-open"></i>
                                                </a>  
                                                  <?php }else{?>
                                                  <a onclick="return confirm('Are you sure to Activate this data?')" href="<?php echo base_url('crud/')?>updateValueEmp?status=active&id=<?php echo $value->id; ?>" >
                                                    <i class="icon-close"></i>
                                                </a> 
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <?PHP endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>          

        </div>            
        </div>
        </div>
        
		<div class="modal fade" id="usermodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                            <div class="modal-header modal-primary">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="modal-label">User Modal</h4>
							</div>
 	
                            
			            <form role="form" action="updateValue"  id="UserValueUpdate" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                            <div class="modal-body">
    						
                                <div class="form-group clearfix">
                                    <label for="textareaMaxLength" class="col-md-3">Active/Deactivate</label>
    								<div class="col-md-9">
                                        <select name="status" id="role" class="form-control" style="width: 100%" required>                                    
                                            <option value="">Select Here</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>  
                                        </select>                        
                                    </div>
                                </div>                                
                              									
                            </div>
                            <div class="modal-footer">
						        <div class="col-md-6">
                                    <input type="hidden" name="userid" id="userid" value=''>
                                    <span class="pull-left"></span>                  
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" id="btnSubmit" name="submit" class="btn btn-default btn-custom">Ok</button>
                                    <button type="button" onclick="location.reload()" class="btn btn-success btn-custom" data-dismiss="modal">Close</button>
                                </div>
                            </div>
						</form>
                </div>
            </div>
        </div>
    <script type="text/javascript">
        $(document).ready(function () {
        $("#btnSubmit").click(function (event) {

            //stop submit the form, we will post it manually.
            event.preventDefault();

            // Get form
            var formval = $('#UserValueUpdate')[0];

            // Create an FormData object
            var data = new FormData(formval);
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "<?php echo base_url(); ?>crud/updateValue",
                data: data,
                dataType:'json',
                processData: false,
                contentType: false,
                cache: false,
                timeout: 600000,
          success: function(response) {
                if (response.status == 'error') {
                    $(".flashmessage").fadeIn('fast').delay(3000).fadeOut('fast').html(response.message);
                } else if (response.status == 'success') {
                    console.log(response.status);
                    $(".flashmessage").fadeIn('fast').delay(3000).fadeOut('fast').html(response.message);
                    window.setTimeout(function() {
                        location.reload();
                    }, 3000);
                }             
          },
          error: function(response) {
            console.error();
          }
            });

        });

    });
    </script>        			
<script type="text/javascript">
    $(document).ready(function () {
        $(".userbutton").click(function (e) {
            e.preventDefault(e);
            // Get the record's ID via attribute  
            var iid = $(this).attr('data-id');
            $('#UserValueUpdate').trigger("reset");
            $('#usermodel').modal('show');
            $.ajax({
                url: '<?php echo base_url(); ?>crud/viewUserDataBYID?id=' + iid,
                method: 'GET',
                data: '',
                dataType: 'json',
            }).done(function (response) {
                // Populate the form fields with the data returned from server
				$('#UserValueUpdate').find('[name="userid"]').val(response.uservalue.user_id).end();
                $('#UserValueUpdate').find('[name="name"]').val(response.uservalue.full_name).end();
                $('#UserValueUpdate').find('[name="email"]').val(response.uservalue.email).end();
				$('#UserValueUpdate').find('[name="contact"]').val(response.uservalue.contact).end();
                $('#UserValueUpdate').find('[name="address"]').val(response.uservalue.address).end();													
                $('#UserValueUpdate').find('[name="dob"]').val(response.uservalue.dob).end();
				$('#UserValueUpdate').find('[name="country"]').val(response.uservalue.country).end();
				$('#UserValueUpdate').find('[name="gender"]').val(response.uservalue.gender).end();
				$('#UserValueUpdate').find('[name="role"]').val(response.uservalue.user_type).end();
				$('#UserValueUpdate').find('[name="product_image"]').val(response.uservalue.image).end();
			});
        });
    });
</script>

			
<?php $this->load->view('backend/footer'); ?>
<?php $this->load->view('backend/header'); ?>
<!--Include header section-->
<div class="wrapper-page">

    <div class="page-title">
        <h1><i class="icon-list"></i> View city</h1>
    </div>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content_wrapper">
                        <div class="table_banner clearfix">
                            <h5 class="table_banner_title">city List</h5>
                            <div class="buy_button">
                                <button type="button" id="city" class="btn btn-custom pull-right">
                                Add city
                            </button>
                            </div>
                        </div>
                        <div class="table_body text-left">
                            <table id="example" class="table table-condensed responsive table_custom" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = 1; foreach($citys as $city): ?>
                                    <tr>
                                        <td>
                                            <?php echo $a; ?>
                                        </td>
                                        <td>
                                            <?php echo $city['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $city['status']; ?>
                                        </td>
                                        <td class="action-buttons">
                                            <button type="button" id="city" data-id="<?php echo $city['id']; ?>" name="submit" class="catbutton">
                                                    <i class="icon-pencil"></i>
                                                </button>
                                        </td>
                                    </tr>
                                    <?PHP $a++; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<span class="flashmessage"></span>
<!--city validation modal-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="cityform" role="dialog" style="display: none;" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-primary">
                <button aria-label="Close" class="close" data-dismiss="modal" onclick="location.reload()" type="button"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label">city</h4>
            </div>
            <div class="successUpdate" style="color:green;padding:10px;font-size:20px"></div>
            <form enctype="multipart/form-data" id="catmodal" method="post" name="catmodal" role="form" accept-charset="utf-8">
                <div class="modal-body">
                    <div class="form-group clearfix">
                        <label class="col-md-3" for="inputMaxLength">city Name</label>
                        <div class="col-md-9">
                            <input class="form-control" id="name" name="name" placeholder="city name" required type="text" value=''>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="col-md-3" for="textareaMaxLength">city Status</label>
                        <div class="col-md-9">
                            <select class="form-control" id="status" name="status" required>
                                    <option value="">
                                        Select Here...
                                    </option>
                                    <option value="ACTIVE">
                                        ACTIVE
                                    </option>
                                    <option value="INACTIVE">
                                        INACTIVE
                                    </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="setmessage"></div>
                <div class="modal-footer">
                    <input id="cityid" name="cityid" type="hidden" value="">
                    <button class="btn btn-custom" id="addcity" name="submit" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--city modal show-->
<script type="text/javascript">
    $(document).ready(function() {
        $("#city").click(function(e) {
            e.preventDefault(e);
            $('#cityform').modal('show');
        });
    });
</script>
<!--city update and insert script-->
<script>
    $("#addcity").on("click", function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url();?>crud/doAddAdcityData",
            type: "POST",
            dataType: 'json',
            data: {
                'id': $('#cityid').val(),
                'name': $('#name').val(),
                'status': $('#status').val(),
            },
            beforeSend: function() {
                $('#addcity').html('Saving...');
            },
            success: function(response) {
                if (response.status == 'error') {
                    $(".flashmessage").fadeIn('fast').delay(3000).fadeOut('fast').html(response.message);
                } else if (response.status == 'success') {
                    $('#addcity').html('Saved');
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
</script>
<!--city form data show in field-->
<script type="text/javascript">
    $(document).ready(function() {
        $(".catbutton").click(function(e) {
            e.preventDefault(e);
            // Get the record's ID via attribute  
            var iid = $(this).attr('data-id');
            $('#catmodal').trigger("reset");
            $('#cityform').modal('show');
            $.ajax({
                url: '<?php echo base_url();?>crud/adcityById?id=' + iid,
                method: 'GET',
                data: '',
                dataType: 'json',
            }).done(function(response) {
                // alert(response.catvalue.status)
                /*console.log(response);*/
                // Populate the form fields with the data returned from server
                $('#catmodal').find('[name="cityid"]').val(response.catvalue.id).end();
                $('#catmodal').find('[name="name"]').val(response.catvalue.name).end();
                $('#catmodal').find('[name="status"]').val(response.catvalue.status).end();
            });
        });
    });
</script>
<!--Include footer section-->
<?php $this->load->view('backend/footer'); ?>
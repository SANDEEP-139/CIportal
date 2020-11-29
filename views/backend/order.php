<?php $this->load->view('backend/header') ?>
        <div class="wrapper-page">
            <div class="page-title">
                <h1>All Order List</h1>
            </div>
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="content_wrapper">
                            <div class="table_banner clearfix">
                                <h5 class="table_banner_title">Order List</h5>
                            </div>
                            <div class="table_body text-left">
                                <table id="example" class="table table-condensed responsive table_custom" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Order Id</th>
                                            <th>Order Date</th>
                                            <th>Order Status</th>
                                            <th>Order Type</th>
                                            <th>Category</th>
                                            <th>Order Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!--
                                    <tfoot>
                                        <tr>
                                            <th>Order Id</th>
                                            <th>Order Date</th>
                                            <th>Order Status</th>
                                            <th>Category</th>
                                            <th>Sub-Category</th>
                                            <th>Order Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>-->
                                    <tbody>
                                        <tr>
                                            <td>566356</td>
                                            <td>21/06/2019</td>
                                            <td>Placed</td>
                                            <td>News Paper</td>
                                            <td>Matrimonial</td>
                                            <td>Rs.320,800</td>
                                            <td class="action-buttons">
                                                <a href="<?php echo base_url();?>crud/product_details?P=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-eye"></i>
                                                </a>
                                                <a href="<?php echo base_url();?>crud/Getprodatabyid?P=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a onclick="confirm('Are you sure want to delet this product?')" href="<?php echo base_url();?>crud/Delet_ProductInfo?D=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-close"></i>
                                                </a>                           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>566356</td>
                                            <td>21/06/2019</td>
                                            <td>Placed</td>
                                            <td>News Paper</td>
                                            <td>Matrimonial</td>
                                            <td>Rs.320,800</td>
                                            <td class="action-buttons">
                                                <a href="<?php echo base_url();?>crud/product_details?P=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-eye"></i>
                                                </a>
                                                <a href="<?php echo base_url();?>crud/Getprodatabyid?P=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a onclick="confirm('Are you sure want to delet this product?')" href="<?php echo base_url();?>crud/Delet_ProductInfo?D=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-close"></i>
                                                </a>                           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>566356</td>
                                            <td>21/06/2019</td>
                                            <td>Placed</td>
                                            <td>News Paper</td>
                                            <td>Matrimonial</td>
                                            <td>Rs.320,800</td>
                                            <td class="action-buttons">
                                                <a href="<?php echo base_url();?>crud/product_details?P=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-eye"></i>
                                                </a>
                                                <a href="<?php echo base_url();?>crud/Getprodatabyid?P=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a onclick="confirm('Are you sure want to delet this product?')" href="<?php echo base_url();?>crud/Delet_ProductInfo?D=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-close"></i>
                                                </a>                           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>566356</td>
                                            <td>21/06/2019</td>
                                            <td>Placed</td>
                                            <td>News Paper</td>
                                            <td>Matrimonial</td>
                                            <td>Rs.320,800</td>
                                            <td class="action-buttons">
                                                <a href="<?php echo base_url();?>crud/product_details?P=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-eye"></i>
                                                </a>
                                                <a href="<?php echo base_url();?>crud/Getprodatabyid?P=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a onclick="confirm('Are you sure want to delet this product?')" href="<?php echo base_url();?>crud/Delet_ProductInfo?D=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-close"></i>
                                                </a>                           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>566356</td>
                                            <td>21/06/2019</td>
                                            <td>Placed</td>
                                            <td>News Paper</td>
                                            <td>Matrimonial</td>
                                            <td>Rs.320,800</td>
                                            <td class="action-buttons">
                                                <a href="<?php echo base_url();?>crud/product_details?P=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-eye"></i>
                                                </a>
                                                <a href="<?php echo base_url();?>crud/Getprodatabyid?P=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a onclick="confirm('Are you sure want to delet this product?')" href="<?php echo base_url();?>crud/Delet_ProductInfo?D=<?php echo base64_encode(1) ?>">
                                                    <i class="icon-close"></i>
                                                </a>                           
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div> 
<?php $this->load->view('backend/footer') ?>

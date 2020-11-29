<?php include 'header.php';?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="invoice">
                <div class="invoice-print">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-title">
                                <h2>Order Details</h2>
                                <div class="invoice-number text-right">Order #12345
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <address>
                                        <strong>Order Date:</strong><br>
                                        June 26, 2018<br><br>
                                    </address>
                                </div>

                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Billed To:</strong><br>
                                        Vishal Smith<br>
                                        NC, 27591, India
                                    </address>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="section-title">Order Summary</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th data-width="40">#</th>
                                        <th>Item</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-right">Totals</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Blog</td>
                                        <td class="text-center">$10.99</td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$10.99</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Artical</td>
                                        <td class="text-center">$20.00</td>
                                        <td class="text-center">3</td>
                                        <td class="text-right">$60.00</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title">Coupon Code : <span>sds sds</span></div>
                                    <div class="section-title">Payment Method</div>
                                    <p>The payment method that we provide is to make it easier for you to pay invoices.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Available Balance</label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="$232">
                                </div>
                                <div class="col-md-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">PayuMoney</label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="$453.99">
                                </div>
                                <div class="col-lg-6 text-right">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Total Content Cost</div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">$685.99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="text-md-right">
                    <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process
                        Payment</button>
                    <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                </div>
            </div>
        </div>
    </section>

</div>
<?php include 'footer.php';?>

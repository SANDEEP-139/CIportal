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
                                <h2>Invoice</h2>
                                <div class="invoice-number text-right">Order #12345 <br><button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <address>
                                        <strong>Order Date:</strong><br>
                                        June 26, 2018<br><br>
                                    </address>
                                    <address>
                                        <strong>Payment Method:</strong><br>
                                        Visa ending **** 5687<br>
                                        test@example.com
                                    </address>
                                </div>

                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Billed To:</strong><br>
                                        Sarah Smith<br>
                                        6404 Cut Glass Ct,<br>
                                        Wendell,<br>
                                        NC, 27591, USA
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
                                <p class="section-title">Coupon Code : <span>sds sds</span></p>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-8">
                                    <div class="section-title">Payment Method</div>
                                    <p class="section-lead">The payment method that we provide is to make it easier for you to pay
                                        invoices.</p>
                                    <div class="images">
                                        <img src="assets/img/cards/visa.png" alt="visa">
                                        <img src="assets/img/cards/mastercard.png" alt="mastercard">
                                        <img src="assets/img/cards/paypal.png" alt="paypal">
                                    </div>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <hr class="mt-2 mb-2">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Total</div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">$685.99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>

            </div>
        </div>
    </section>

</div>
<?php include 'footer.php';?>

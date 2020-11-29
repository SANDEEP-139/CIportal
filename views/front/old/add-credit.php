<?php include 'header.php';?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-8 col-sm-12 offset-lg-2">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Available Amount :</h4>
                            <h4>Rs. 400</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-wallet"></i>
                                            </div>
                                        </div>
                                        <input type="number" class="form-control" autofocus placeholder="Amount">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-lg btn-round btn-primary">
                                        Add Amount
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include 'footer.php';?>

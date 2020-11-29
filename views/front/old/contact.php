<?php include 'header.php';?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-8 col-sm-12 offset-lg-2">
                    <div class="card card-primary">
                        <div class="row m-0">
                            <div class="col-12 col-md-12 col-lg-12 p-0">
                                <div class="card-header text-center">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="form-group floating-addon">
                                            <label>Name</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="far fa-user"></i>
                                                    </div>
                                                </div>
                                                <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group floating-addon">
                                            <label>Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                </div>
                                                <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control" placeholder="Type your message" data-height="150"></textarea>
                                        </div>
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-round btn-lg btn-primary">
                                                Send Message
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php include 'footer.php';?>

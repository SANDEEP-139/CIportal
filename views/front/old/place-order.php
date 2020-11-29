<?php include 'header.php';?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>New Order</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Project Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Project Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Number of Content</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Content type</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>Blog</option>
                                        <option>Web Page</option>
                                        <option>Copywriting</option>
                                        <option>Product Description</option>
                                        <option>Affiliate Blog Post</option>
                                        <option>Review Blog Post</option>
                                        <option>Educational Blog Post</option>
                                        <option>Promotional Blog Post</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <form class="form-inline">
                                        <div class="input-group mb-2 mr-sm-1">
                                            <input type="text" class="form-control" placeholder="Topic">
                                        </div>
                                        <div class="input-group mb-2 mr-sm-1">
                                            <input type="text" class="form-control" placeholder="Keywords">
                                        </div>
                                        <div class="input-group mb-2 mr-sm-1">
                                            <input type="number" class="form-control" placeholder="Website">
                                        </div>
                                        <div class="input-group mb-2 mr-sm-1">
                                            <input type="number" class="form-control" placeholder="Wordcount">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Special Instructions</label>
                                <div class="col-sm-9">
                                    <textarea type="" class="form-control" placeholder="Special Instructions" rows="10" cols="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">File Upload</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Writer Level</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option value="Premium">Premium</option>
                                        <option value="Elite">Elite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Total Order Fee</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" placeholder="Rs. 2323">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Coupon</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Coupon">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Place Order</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>


<?php include 'footer.php';?>

<?php include 'header.php';?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Track Orders</h4>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th class="text-center">Order No</th>
                                    <th>Task Name</th>
                                    <th>Order Date</th>
                                    <th>Progress</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">XY56987</td>
                                    <td>
                                        Create a mobile app
                                    </td>
                                    <td>20-01-2019</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                            <div class="progress-bar bg-success" data-width="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td><a href="invoice.php" class="btn btn-primary">View Order</a></td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#QueryformModal">Query</a></td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">XY56987</td>
                                    <td>
                                        Create a mobile app
                                    </td>
                                    <td>20-01-2019</td>
                                    <td class="align-middle">
                                        <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                            <div class="progress-bar bg-success" data-width="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td><a href="invoice.php" class="btn btn-primary">View Order</a></td>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#QueryformModal">Query</a></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'footer.php';?>

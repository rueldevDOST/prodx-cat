<!DOCTYPE html>
<html lang="en">

<head>
<?php include('includes/header.php'); ?>

<!-- page dependent css libraries -->
<link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons.min.css">
<link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons-wind.min.css">
<link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css"><link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

<!-- page specific inline css -->
<style type="text/css">

</style>

</head>

<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <?php 
        include('includes/topnav.php');
        include ('includes/sidebar.php');
        ?>
        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>PRODUCT DASHBOARD</h1>
                </div>

                <div class="section-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Published Products</h4>
                                </div>
                                <div class="card-body">
                                    5
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-secondary">
                                <i class="far fa-exclamation"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>For Approval</h4>
                                </div>
                                <div class="card-body">
                                    2
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="far fa-thumbs-down"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Declined</h4>
                                </div>
                                <div class="card-body">
                                    5
                                </div>
                            </div>
                        </div>
                    </div>                 
                </div>
                </div>
            </section>

           <section class="section">
                <div class="section-header">
                        <H1>LIST OF UPLOADED PRODUCTS</H1>
                        <a href="add-new-product.php" class="btn btn-outline-primary" style="margin-left:85em">Add New Product</a>
                </div>
                <div class="section-body">

                <div class="row">
                        <div class="col-12">
                            <div class="card">
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped v_center" id="table-1">
                                            <thead>
                                                <tr>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Company</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- FIRST ROW -->
                                                <tr>
                                                <td>Lampakanay Basket Product</td>
                                                <td>Basket Products</td>
                                                <td>
                                                   Sudsud Company
                                                </td>
                                                <td><div class="badge badge-success">Approved</div></td>
                                                <td><div class="badge badge-success">Published to site</div></td>
                                                <td><a href="#" class="btn btn-success">Edit</a></td>
                                                </tr>
                                                
                                                <!-- SECOND ROW -->
                                                <tr>
                                                <td>Slers Food Products</td>
                                                <td>Food Products</td>
                                                <td>
                                                  Slers Company Inc.
                                                </td>
                                                <td><div class="badge badge-secondary">Under Review</div></td>
                                                <td><div class="badge badge-secondary">Under Review</div></td>
                                                <td><a href="#" class="btn btn-success">Edit</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php 
        include('includes/footer.php'); 
        ?>
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->
<script src="assets/modules/datatables/datatables.min.js"></script>
<script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="js/page/modules-datatables.js"></script>

</body>
</html>
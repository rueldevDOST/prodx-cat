<!DOCTYPE html>
<html lang="en">

<head>
<?php include('includes/header.php'); ?>

<!-- PAGE SPECIFIC CSS -->
<link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
<link rel="stylesheet" href="assets/modules/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="assets/modules/codemirror/theme/duotone-dark.css">
<link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">
<link rel="stylesheet" href="assets/modules/select2/dist/css/select2.min.css">


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
                    <h1>Add New Product</h1>
                </div>

                <div class="section-body">
                <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Name</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Customer</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control select2">
                                                <option>Lampakanay Company</option>
                                                <option>Slers Food</option>
                                                <option>Political</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary">Publish</button>
                                        </div>
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
<script src="js/page/forms-advanced-forms.js"></script>
<script src="assets/modules/apexcharts/apexcharts.min.js"></script>
<script src="assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="assets/modules/codemirror/lib/codemirror.js"></script>
<script src="assets/modules/codemirror/mode/javascript/javascript.js"></script>
<script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<script src="assets/modules/select2/dist/js/select2.full.min.js"></script>

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
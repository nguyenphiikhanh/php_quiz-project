<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trình quản lí admin</title>
    <meta name="description" content="Admin C-panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custome_style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- sidenav   -->
    <?php include_once("./layout/sidenav.php") ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- header  -->
        <?php include_once("./layout/header.php") ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Thông tin chung</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Học viên</strong>
                                    </div>
                                    <div class="card-body">

                                        <a href="javascript:0">Tổng số học viên <span class="badge badge-primary">5</span></a>
                                        <br>
                                        <a href="javascript:0">Học viên mới <span class="badge badge-success">2</span></a>
                                    </div>
                                </div><!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Khóa học trên hệ thống </strong><span class="badge badge-primary">5</span></a>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <a href="javascript:0">
                                                <li class="list-group-item">JS cơ bản</li>
                                            </a>
                                            <a href="javascript:0">
                                                <li class="list-group-item">JS cơ bản</li>
                                            </a>
                                            <a href="javascript:0">
                                                <li class="list-group-item">JS cơ bản</li>
                                            </a>
                                            <a href="javascript:0">
                                                <li class="list-group-item">JS cơ bản</li>
                                            </a>
                                            <a href="javascript:0">
                                                <li class="list-group-item">JS cơ bản</li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

    <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- alpine JS -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <script src="assets/js/main.js"></script>

</body>

</html>
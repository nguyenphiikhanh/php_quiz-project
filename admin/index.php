<?php
session_start();
if (!isset($_SESSION['username'])) {   //checl login
    header("location: login.php");
}

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {  // check role
    header("location: ../index.php");
}
include_once("./config/connection.php");
$link = new Connection;
?>

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

                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-one">
                                            <div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
                                            <div class="stat-content dib">
                                                <div class="stat-text">Tổng số thành viên</div>
                                                <div class="stat-digit"><?php
                                                                        $users = mysqli_query($link->link, "SELECT * FROM users");
                                                                        echo mysqli_num_rows($users);
                                                                        ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-one">
                                            <div class="stat-icon dib"><i class="ti-agenda text-warning border-warning"></i></div>
                                            <div class="stat-content dib">
                                                <div class="stat-text">Khóa học</div>
                                                <div class="stat-digit"><?php
                                                                        $courses = mysqli_query($link->link, "SELECT * FROM khoa_hoc");
                                                                        echo mysqli_num_rows($courses);
                                                                        ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-one">
                                            <div class="stat-icon dib"><i class="ti-help-alt text-danger border-danger"></i></div>
                                            <div class="stat-content dib">
                                                <div class="stat-text">Tổng số câu hỏi</div>
                                                <div class="stat-digit"><?php
                                                                        $questions = mysqli_query($link->link, "SELECT * FROM cau_hoi");
                                                                        echo mysqli_num_rows($questions);
                                                                        ?></div>
                                            </div>
                                        </div>
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
    <script src="assets/js/main.js"></script>
</body>

</html>
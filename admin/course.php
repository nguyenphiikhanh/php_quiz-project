<?php 
session_start();
if(!isset($_SESSION['username'])){   //checl login
    header("location: login.php");
}

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){  // check role
    header("location: ../index.php");
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản lí khóa học</title>
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
                        <h1>Quản lí khóa học</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="col-lg-12 mt-2">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Khóa học trên hệ thống</strong>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Khóa học</th>
                                                        <th>Tùy chọn</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php include_once("./config/connection.php");
                                                    $query = "SELECT * FROM khoa_hoc";
                                                    $link = new Connection;
                                                    $res = mysqli_query($link->link, $query);
                                                    while ($row = $res->fetch_assoc()) { ?>
                                                        <tr>
                                                            <td><?php echo $row['name']; ?></td>
                                                            <td>
                                                                <a href="./course-edit.php?course=<?php echo $row['id']; ?>" class="btn btn-warning btn-md test">
                                                                    <i class="ti-pencil-alt"></i> Chỉnh sửa
                                                                </a>
                                                                <a href="./exam.php?course=<?php echo $row['id']; ?>" class="btn btn-outline-info btn-md">
                                                                    <i class="ti-book"></i> Danh sách đề thi
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

    <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>
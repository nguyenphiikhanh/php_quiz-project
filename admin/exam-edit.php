<?php

session_start();
if(!isset($_SESSION['username'])){   //checl login
    header("location: login.php");
}

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){  // check role
    header("location: ../index.php");
}

include_once("./config/connection.php");
$link = new Connection;
$query = "SELECT * FROM de_thi WHERE ma_de_thi ='$_GET[exam]'";
$exam = mysqli_query($link->link, $query)->fetch_assoc();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sửa đề thi</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- sidenav   -->
    <?php include_once("./layout/sidenav.php") ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- header  -->
        <?php include_once("./layout/header.php") ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Sửa đề thi</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row justify-content-center">

                    <div class="col-md-6">
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Tên đề thi</label>
                                <input class="form-control form-control-lg" name="name" value="<?php echo $exam['ten_de_thi'] ?>" required type="text" placeholder="Tên đề thi">
                            </div>

                            <hr>
                            <strong>Số lượng câu hỏi</strong>

                            <div class="form-group">
                                <label for="">Câu hỏi cơ bản</label>
                                <input value="<?php echo $exam['cau_hoi_coban'] ?>" class="form-control" min="2" name="coban" required type="number">
                            </div>

                            <div class="form-group">
                                <label for="">Câu hỏi trung bình</label>
                                <input value="<?php echo $exam['cau_hoi_trungbinh'] ?>" class="form-control" min="2" name="trungbinh" required type="number">
                            </div>

                            <div class="form-group">
                                <label for="">Câu hỏi nâng cao</label>
                                <input value="<?php echo $exam['cau_hoi_nangcao'] ?>" class="form-control" min="2" name="nangcao" required type="number">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="save" class="btn btn-lg btn-info">Lưu lại</button>
                        </div>
                    </form>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

    <!-- sweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <?php
    if (isset($_POST['save'])) {
        include_once("./config/connection.php");
        $link = new Connection;
        $query = "UPDATE de_thi SET ten_de_thi = '$_POST[name]',
        cau_hoi_coban ='$_POST[coban]', cau_hoi_trungbinh = '$_POST[trungbinh]',
        cau_hoi_nangcao='$_POST[nangcao]' WHERE ma_de_thi = '$_GET[exam]'";
        mysqli_query($link->link, $query);
    ?>
        <script>
            swal({
                title: "Thành công!",
                text: "Đã sửa đề thi!",
                icon: "success",
                button: "Đóng",
            }).then((close)=>{
                window.location.href = window.location.href;
            })
        </script>
    <?php }
    ?>

</body>

</html>
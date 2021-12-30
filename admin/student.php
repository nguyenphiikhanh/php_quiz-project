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
$query = "SELECT users.username,fullname, COUNT(ket_qua.username) AS so_lan_thi,MAX(diem) AS diem_cao_nhat,ngay 
FROM users LEFT OUTER JOIN ket_qua ON ket_qua.username = users.username GROUP BY users.id;";
$results = mysqli_query($link->link, $query);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Danh sách học viên</title>
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
                        <h1>Danh sách học viên</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <strong class="card-title">Học viên trên hệ thống</strong>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Học viên</th>
                                            <th>Số lần thi trên hệ thống</th>
                                            <th>Điểm cao nhât</th>
                                            <th>Lần thi cuối</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($result = $results->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $result['username'] ?> - <?php echo $result['fullname'] ?></td>
                                                <td><?php echo ($result['so_lan_thi'] > 0)?$result['so_lan_thi']:"Chưa tham gia thi" ?></td>
                                                <td><?php echo ($result['diem_cao_nhat']!=null)?$result['diem_cao_nhat']:"Chưa tham gia thi" ?></td>
                                                <td><?php echo ($result['ngay']!=null)?$result['ngay']:"Chưa tham gia thi" ?></td>
                                            </tr>
                                        <?php }
                                        ?>


                                    </tbody>
                                </table>
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

    <script>
        function delete_exam(event) {
            event.preventDefault();

            let link_redirect = event.currentTarget.getAttribute('href');
            swal({
                    title: "Bạn có chắc chắn muốn xóa đề thi này?",
                    text: "Chú ý: hành động không thể hoàn tác!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Đã xóa đề thi", {
                            icon: "success",
                        }).then((ok) => {
                            window.location.href = link_redirect;
                        });
                    }
                });
        }
    </script>

    <?php
    if (isset($_POST['add'])) {
        include_once("./config/connection.php");
        $link = new Connection;
        $query = "INSERT INTO de_thi VALUES(NULL,'$_POST[name]','$_GET[course]','$_POST[coban]','$_POST[trungbinh]','$_POST[nangcao]')";
        mysqli_query($link->link, $query);
    ?>
        <script>
            swal({
                title: "Thành công!",
                text: "Đã thêm đề thi mới!",
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
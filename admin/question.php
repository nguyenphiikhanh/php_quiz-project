<?php
include_once("./config/connection.php");
$link = new Connection;
$query = "SELECT * FROM cau_hoi";
$questions = mysqli_query($link->link, $query);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản lí câu hỏi</title>
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
                        <h1>Quản lý câu hỏi</h1>
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
                                        <strong class="card-title">Ngân hàng câu hỏi</strong>
                                    </div>

                                    <div class="col-sm-8">
                                        <div class="row justify-content-end">
                                            <a href="question-add.php" class="btn btn-info"><i class="ti-plus"></i> Thêm câu hỏi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Câu hỏi</th>
                                            <th>Loại câu hỏi</th>
                                            <th>Mức độ</th>
                                            <th>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($question = $questions->fetch_assoc()) { ?>
                                            <tr>
                                                <td class="col-md-6"><?php echo $question['noidung'] ?></td>
                                                <td><?php if ($question['loai'] == "one") {
                                                        echo "Một đáp án";
                                                    } elseif ($question['loai'] == "multi") {
                                                        echo "Nhiều đáp án";
                                                    } else echo "Điền từ";
                                                    ?></td>
                                                <td><?php if ($question['mucdo'] == "coban") {
                                                        echo "Cơ bản";
                                                    } elseif ($question['mucdo'] == "trungbinh") {
                                                        echo "Trung bình";
                                                    } else echo "Nâng cao";
                                                    ?></td>
                                                <td>
                                                    <a href="./question-edit.php?question=<?php echo $question['id'] ?>" class="btn btn-warning btn-md test">
                                                        <i class="ti-pencil-alt"></i> Sửa
                                                    </a>
                                                    <a href="" onclick="delete_course(event)" class="btn btn-outline-danger btn-md">
                                                        <i class="ti-trash"></i> Xóa
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }
                                        ?>


                                        <!-- <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>$327,900</td>
                                        </tr> -->
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


</body>

</html>
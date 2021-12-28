<?php
include_once("./config/connection.php");
$link = new Connection;
$query = "SELECT * FROM khoa_hoc INNER JOIN de_thi ON de_thi.khoa_hoc = khoa_hoc.id
WHERE khoa_hoc.id ='$_GET[course]';
";
$exams = mysqli_query($link->link, $query);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản lí đề thi</title>
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
                        <h1>Quản lý đề thi</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- add exam Form -->
        <div class="modal fade" id="exam-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tạo đề thi mới</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Tên đề thi</label>
                                <input class="form-control form-control-lg" name="name" required type="text" placeholder="Tên đề thi">
                            </div>

                            <hr>
                            <strong>Số lượng câu hỏi</strong>

                            <div class="form-group">
                                <label for="">Câu hỏi cơ bản</label>
                                <input class="form-control" min="1" name="coban" required type="number">
                            </div>

                            <div class="form-group">
                                <label for="">Câu hỏi trung bình</label>
                                <input class="form-control" min="1" name="trungbinh" required type="number">
                            </div>

                            <div class="form-group">
                                <label for="">Câu hỏi nâng cao</label>
                                <input class="form-control" min="1" name="nangcao" required type="number">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Nhập lại</button>
                            <button type="submit" name="add" class="btn btn-primary">Tạo đề thi</button>
                        </div>
                    </form>
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
                                        <strong class="card-title">Khóa học JS cơ bản</strong>
                                    </div>

                                    <div class="col-sm-8">
                                        <div class="row justify-content-end">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exam-add">
                                                <i class="ti-plus"></i> Tạo đề thi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Mã đề thi</th>
                                            <th>Tên</th>
                                            <th>Câu hỏi cơ bản</th>
                                            <th>Câu hỏi trung bình</th>
                                            <th>Câu hỏi nâng cao</th>
                                            <th>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($exam = $exams->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?php echo $exam['ma_de_thi'] ?></td>
                                                <td><?php echo $exam['ten_de_thi'] ?></td>
                                                <td><?php echo $exam['cau_hoi_coban'] ?></td>
                                                <td><?php echo $exam['cau_hoi_trungbinh'] ?></td>
                                                <td><?php echo $exam['cau_hoi_nangcao'] ?></td>
                                                <td>
                                                    <a href="./exam-edit.php?exam=<?php echo $exam['id'] ?>" class="btn btn-warning btn-md test">
                                                        <i class="ti-pencil-alt"></i> Sửa
                                                    </a>
                                                    <a href="./actions/exam-delete.php?exam=<?php echo $exam['id'] ?>" onclick="delete_question(event)" class="btn btn-outline-danger btn-md">
                                                        <i class="ti-trash"></i> Xóa
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
        function delete_question(event) {
            event.preventDefault();

            let link_redirect = event.currentTarget.getAttribute('href');
            swal({
                    title: "Bạn có chắc chắn muốn xóa câu hỏi này?",
                    text: "Chú ý: hành động không thể hoàn tác!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Xóa câu hỏi thành công", {
                            icon: "success",
                        }).then((value) => {
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
                text: "Đã thêm câu hỏi!",
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
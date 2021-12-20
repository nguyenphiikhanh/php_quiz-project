<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thêm khóa học</title>
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
                                        <div class="card-header"><strong>Thêm khóa học</strong></div>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="card-body card-block">
                                                <div class="form-group">
                                                    <label class=" form-control-label">Tên khóa học</label>
                                                    <input type="text" placeholder="Tên khóa học" required name="name" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label class=" form-control-label">Mô tả</label>
                                                    <textarea name="description" placeholder="Mô tả khóa học..." class="form-control" rows="6"></textarea>
                                                </div>

                                                <div class="form-group row justify-content-center">
                                                    <button type="submit" name="add" class="btn btn-info btn-lg">
                                                        <i class="ti-check"></i> Thêm
                                                    </button>
                                                    <button type="reset" class="btn btn-outline-secondary btn-lg ml-2">
                                                        <i class="ti-back-left"></i> Nhập lại
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

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
                                                    <?php include_once("../config/connection.php");
                                                    $link = new Connection;
                                                    $query = "SELECT * FROM khoa_hoc ORDER BY id DESC";
                                                    $res = mysqli_query($link->link, $query);
                                                    while ($row = $res->fetch_assoc()) { ?>
                                                        <tr>
                                                            <td><?php echo $row['name']; ?></td>
                                                            <td>
                                                                <a href="./course-edit.php?course=<?php echo $row['id']; ?>" class="btn btn-warning btn-md test">
                                                                    <i class="ti-pencil-alt"></i> Sửa
                                                                </a>
                                                                <a href="./actions/course-delete.php?course=<?php echo $row['id']; ?>" onclick="delete_course(event)" class="btn btn-outline-danger btn-md">
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



    <!-- sweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="assets/js/main.js"></script>

    <?php if (isset($_POST['add'])) {
        include_once("../config/connection.php");
        $link = new Connection;
        $query = "INSERT INTO khoa_hoc VALUES(NULL,'$_POST[name]','$_POST[description]')";
        $res = mysqli_query($link->link, $query);
        if ($res) {
    ?>
            <script>
                swal({
                    title: "Thành công!",
                    text: "Đã thêm khóa học mới!",
                    icon: "success",
                    button: "Đóng",
                }).then((value) => {
                    window.location.href = window.location.href;
                })
            </script>

    <?php }
        $link->close_connect();
    } ?>


    <!-- delete by sweetAlert -->
    <script>
        function delete_course(event) {
            event.preventDefault();
            let link_redirect = event.currentTarget.getAttribute('href');
            // alert('clicked: '+link_redirect)
            swal({
                    title: "Bạn có chắc chắn muốn xóa khóa học này?",
                    text: "Chú ý: hành động không thể hoàn tác!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Xóa thành công", {
                            icon: "success",
                        }).then((value) => {
                            window.location.href = link_redirect;
                        });
                    }
                });
        }
    </script>

</body>

</html>
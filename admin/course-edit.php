<?php 

session_start();
if(!isset($_SESSION['username'])){   //checl login
    header("location: login.php");
}

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){  // check role
    header("location: ../index.php");
}

if (isset($_GET['course'])) {
    include_once("./config/connection.php");
    $link = new Connection;
    $query = "SELECT * FROM khoa_hoc WHERE id = '$_GET[course]' LIMIT 1";
    $res = mysqli_query($link->link, $query)->fetch_assoc();
} ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chỉnh sửa khóa học</title>
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
                        <h1>Chỉnh sửa khóa học</h1>
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
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="card-body card-block">
                                                <div class="form-group">
                                                    <label class=" form-control-label">Tên khóa học</label>
                                                    <input type="text" value="<?php echo $res['name'] ?>" placeholder="Tên khóa học" required name="name" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label class=" form-control-label">Mô tả</label>
                                                    <textarea name="description" placeholder="Mô tả khóa học..." class="form-control" rows="6"><?php echo $res['description'] ?></textarea>
                                                </div>

                                                <div class="form-group row justify-content-center">
                                                    <button type="submit" name="edit" class="btn btn-info btn-lg">
                                                        <i class="ti-check"></i> Sửa
                                                    </button>

                                                </div>

                                            </div>
                                        </form>
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

    <?php if (isset($_POST['edit'])) {
        include_once("../config/connection.php");
        $link = new Connection;
        $query = "UPDATE khoa_hoc SET name ='$_POST[name]',description ='$_POST[description]'
        WHERE id = '$_GET[course]'";
        $res = mysqli_query($link->link, $query);
        if ($res) {
    ?>
            <script>
                swal({
                    title: "Thành công!",
                    text: "Đã chỉnh sửa thông tin khóa học!",
                    icon: "success",
                    button: "Đóng",
                }).then((value) => {
                    window.location.href = window.location.href;
                })
            </script>

    <?php }
        $link->close_connect();
    } ?>
</body>

</html>
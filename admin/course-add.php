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
                            <div class="card-body">
                                <div class="col-lg-6 mt-2">
                                    <div class="card">
                                        <div class="card-header"><strong>Thêm khóa học</strong></div>
                                        <form action="" enctype="multipart/form-data">
                                            <div class="card-body card-block">
                                                <div class="form-group">
                                                    <label class=" form-control-label">Tên khóa học</label>
                                                    <input type="text" placeholder="Tên khóa học" required name="name" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-control-label">Hình ảnh mô tả</label>
                                                    <input type="file" required name="image" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label class=" form-control-label">Mô tả khóa học</label>
                                                    <textarea name="description" placeholder="Mô tả khóa học..." class="form-control" rows="6"></textarea>
                                                </div>

                                                <div class="form-group row justify-content-center">
                                                    <button type="submit" name="add" class="btn btn-primary btn-lg">
                                                        <i class="fa fa-dot-circle-o"></i> Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-outline-secondary btn-lg ml-2">
                                                        <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-6 mt-2">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Khóa học trên hệ thống</strong>
                                        </div>
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">STT</th>
                                                        <th scope="col">Khóa học</th>
                                                        <th scope="col">Tùy chọn</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>
                                                            <a class="btn btn-warning btn-sm">
                                                                <i class="ti-pencil-alt"></i>
                                                            </a>
                                                            <a class="btn btn-outline-danger btn-sm ml-2">
                                                                <i class="ti-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>
                                                            <a class="btn btn-warning btn-sm">
                                                                <i class="ti-pencil-alt"></i>
                                                            </a>
                                                            <a class="btn btn-outline-danger btn-sm ml-2">
                                                                <i class="ti-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>MarkMarkMarkMarkMarkMarkMarkMarkMarkMarkMarkMarkMarkMarkMarkMarkMarkMarkMarkMark</td>
                                                        <td>
                                                            <a class="btn btn-warning btn-sm">
                                                                <i class="ti-pencil-alt"></i>
                                                            </a>
                                                            <a class="btn btn-outline-danger btn-sm ml-2">
                                                                <i class="ti-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

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
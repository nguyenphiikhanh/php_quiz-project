<?php
if (isset($_GET['question'])) {
    include_once("./config/connection.php");
    $link = new Connection;
    $query = "SELECT * FROM cau_hoi where id ='$_GET[question]'";
    $question = mysqli_query($link->link, $query)->fetch_assoc();
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sửa câu hỏi</title>
    <meta name="description" content="Admin C-panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custome_style.css">

    <!-- froala editor  -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>

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
                        <h1>Sửa câu hỏi</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row justify-content-center">

                    <div class="col-lg-6">
                        <div class="card">

                            <div class="card-body card-block">
                                <form x-data="{
                                    one: false,
                                    multi: false,
                                    fill: false,
                                }" method="post" class="form-horizontal">

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Nội dung</label></div>
                                        <div class="col-12 col-md-9"><textarea id="example" name="content" required rows="9" placeholder="Nội dung câu hỏi..." class="form-control"><?php echo $question['noidung'] ?></textarea></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Mức độ</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="level" class="form-control-lg form-control">
                                                <option <?php echo $question['mucdo'] == "coban" ? "selected" : "" ?> value="coban">Cơ bản</option>
                                                <option <?php echo $question['mucdo'] == "trungbinh" ? "selected" : "" ?> value="trungbinh">Trung bình</option>
                                                <option <?php echo $question['mucdo'] == "nangcao" ? "selected" : "" ?> value="nangcao">Nâng cao</option>
                                            </select>
                                        </div>
                                    </div>

                                    

                                    <div class="card-footer row justify-content-center">
                                        <button type="submit" name="add" class="btn btn-lg btn-info">
                                            <i class="ti-check"></i> Lưu lại
                                        </button>
                                    </div>

                                </form>
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

    <!-- sweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- alpine JS -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <script src="assets/js/main.js"></script>
    <script>
        var editor = new FroalaEditor('#example')
    </script>


</body>

</html>
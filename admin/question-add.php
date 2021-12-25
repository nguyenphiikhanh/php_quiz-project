<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thêm câu hỏi</title>
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
                        <h1>Thêm câu hỏi</h1>
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
                                        <div class="col-12 col-md-9"><textarea id="example" name="content" required rows="9" placeholder="Nội dung câu hỏi..." class="form-control"></textarea></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Mức độ</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="level" class="form-control-lg form-control">
                                                <option value="coban">Cơ bản</option>
                                                <option value="trungbinh">Trung bình</option>
                                                <option value="nangcao">Nâng cao</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Loại câu hỏi</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label" @click="one=true; multi=false; fill=false">
                                                        <input type="radio" id="radio1" name="type" value="one" class="form-check-input"> One choice
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label" @click="one=false; multi=true; fill=false">
                                                        <input type="radio" id="radio2" name="type" value="multi" class="form-check-input"> Multiple choices
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio3" class="form-check-label" @click="one=false; multi=false; fill=true">
                                                        <input type="radio" id="radio3" name="type" value="fill" class="form-check-input"> Fill the blank
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <template x-if="one" x-data="{ options: [{id: 1,name:''}]}">
                                        <div class="toShow">
                                            <template x-for="(option,index) in options">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"></div>
                                                    <div class="col-12 col-md-9">
                                                        <div class="input-group">
                                                            <input type="text" name="luachon[]" required placeholder="Nhập lựa chọn" class="form-control">
                                                            <div class="input-group-btn"><button @click="options.splice(index,1)" type="button" class="btn btn-outline-danger"><i class="ti-trash"></i></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>

                                            <div class="row form-group justify-content-center">
                                                <button type="button" @click="options.push({id: 1,name:'a'})" class="btn btn-light text-primary"><i class="ti-plus"></i> Thêm lựa chọn</button>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3"></div>
                                                <div class="col-12 col-md-9">
                                                    <div class="input-group">
                                                        <input type="text" name="dapan" required placeholder="Nhập đáp án" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </template>

                                    <template x-if="multi" x-data="{ options:[{id: 1}], answers:[{id: 1}] }">
                                        <div class="toShow">
                                            <template x-for="(option,index) in options">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"></div>
                                                    <div class="col-12 col-md-9">
                                                        <div class="input-group">
                                                            <input type="text" name="luachon[]" required placeholder="Nhập lựa chọn" class="form-control">
                                                            <div class="input-group-btn"><button @click="options.splice(index,1)" type="button" class="btn btn-outline-danger"><i class="ti-trash"></i></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>


                                            <div class="row form-group justify-content-center">
                                                <button type="button" @click="options.push({id: 1})" class="btn btn-light text-primary"><i class="ti-plus"></i> Thêm lựa chọn</button>
                                            </div>

                                            <template x-for="(answer,index) in answers">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"></div>
                                                    <div class="col-12 col-md-9">
                                                        <div class="input-group">
                                                            <input type="text" name="dapan[]" required placeholder="Nhập đáp án" class="form-control">
                                                            <div class="input-group-btn"><button @click="answers.splice(index,1)" type="button" class="btn btn-outline-danger"><i class="ti-trash"></i></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>

                                            <div class="row form-group justify-content-center">
                                                <button type="button" @click="answers.push({id: 1})" class="btn btn-light text-primary"><i class="ti-plus"></i> Thêm đáp án</button>
                                            </div>
                                        </div>
                                    </template>

                                    <template x-if="fill">
                                        <div class="toShow">
                                            <div class="row form-group">
                                                <div class="col col-md-3"></div>
                                                <div class="col-12 col-md-9">
                                                    <div class="input-group">
                                                        <input type="text" name="dapan" required placeholder="Nhập đáp án" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>

                                    <div class="card-footer row justify-content-center">
                                        <button type="submit" name="add" class="btn btn-lg btn-info">
                                            <i class="ti-check"></i> Thêm
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

    <?php
    if (isset($_POST['add'])) {
        include_once("./config/connection.php");
        $link = new Connection;
        $options = null; // lua chon
        $answers = '';
        $type = $_POST['type']; //loai cau hoi
        if ($type == "one" || $type == "multi") {
            $options = serialize($_POST['luachon']);
        }

        if ($type == "multi") {
            sort($_POST['dapan']);
            $answers = serialize($_POST['dapan']);
            
        } else $answers = $_POST['dapan'];



        $query = "INSERT INTO cau_hoi VALUES(NULL,'$type','$_POST[content]','$options','$answers','$_POST[level]')";
        mysqli_query($link->link, $query);

         ?>
            <script>
                swal({
                    title: "Thành công!",
                    text: "Đã thêm câu hỏi!",
                    icon: "success",
                    button: "Đóng",
                })
            </script>
    <?php
        $link->close_connect();
    }
    ?>
</body>

</html>
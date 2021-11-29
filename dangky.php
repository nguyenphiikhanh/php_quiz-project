<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- Bootstrap and BootstrapVue CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-vue.min.css">
    <style>
        #app {
            font-family: "Roboto";
        }

        .row {
            padding: 0 0;
            margin: 0 0;
        }

        .no_transform {
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div id="app">
        <b-container class="mt-5">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="row d-flex">
                        <div class="col-md-5">
                            <div class="card-body">
                                <p class="text-center h1">Đăng ký thành viên</p>
                                <p class="text-center font-weight-normal">Điền thông tin để tạo tài khoản truy cập vào khóa học.</p>

                                <div class="row justify-content-center">
                                    <form class="col-md-10 mt-3" action="">
                                        <template>
                                            <div>
                                                <b-input-group size="sm">
                                                    <b-input-group-prepend is-text>
                                                        <b-icon icon="person-check-fill"></b-icon>
                                                    </b-input-group-prepend>
                                                    <b-form-input type="text" required name="" placeholder="Nhập họ tên đầy đủ"></b-form-input>
                                                </b-input-group>

                                                <b-input-group size="sm" class="mt-3">
                                                    <b-input-group-prepend is-text>
                                                        <b-icon icon="envelope-fill"></b-icon>
                                                    </b-input-group-prepend>
                                                    <b-form-input type="email" required placeholder="Địa chỉ email"></b-form-input>
                                                </b-input-group>

                                                <b-input-group size="sm" class="mt-3">
                                                    <b-input-group-prepend is-text>
                                                        <b-icon icon="person-circle"></b-icon>
                                                    </b-input-group-prepend>
                                                    <b-form-input type="text" required placeholder="Tên đăng nhập"></b-form-input>
                                                </b-input-group>

                                                <b-input-group size="sm" class="mt-3">
                                                    <b-input-group-prepend is-text>
                                                        <b-icon icon="key-fill"></b-icon>
                                                    </b-input-group-prepend>
                                                    <b-form-input type="password" required placeholder="Mật khẩu"></b-form-input>
                                                </b-input-group>
                                            </div>
                                        </template>

                                        <div class="row justify-content-center mt-4">
                                            <button type="submit" class="col-md-9 btn btn-primary btn-lg">Đăng ký</button>
                                            <p class="text-center">Nếu bạn đã có tài khoản, vui lòng <br><a class="no_transform" href="dangnhap.php">đăng nhập tại đây</a>.</p>
                                            <!-- <button type="submit" class="col-md-6 btn btn-outline-dark btn-lg">Đăng nhập</button> -->
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 mt-5">
                            <div class="card-body">
                                <img src="./img/intro_register.png" class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </b-container>
    </div>

    <!-- vue -->
    <script src="./js/vue.min.js"></script>
    <script src="./js/bootstrap-vue.min.js"></script>

    <!-- BootstrapVueIcons support -->
    <script src="./js/bootstrap-vue-icons.min.js"></script>

    <!-- customize -->
    <script type="text/javascript">
        var app = new Vue({
            el: '#app',
            data: {
                title: "Đăng ký thành viên"
            },
            created() {
                document.title = "Đăng ký thành viên";
            }
        })
    </script>
</body>

</html>
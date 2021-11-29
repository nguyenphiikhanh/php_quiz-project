<?php include_once("./layout/head.php"); ?>


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
                                            <b-form-input type="text" required name="fullname" placeholder="Nhập họ tên đầy đủ"></b-form-input>
                                        </b-input-group>

                                        <b-input-group size="sm" class="mt-3">
                                            <b-input-group-prepend is-text>
                                                <b-icon icon="envelope-fill"></b-icon>
                                            </b-input-group-prepend>
                                            <b-form-input type="email" name="email" required placeholder="Địa chỉ email"></b-form-input>
                                        </b-input-group>

                                        <b-input-group size="sm" class="mt-3">
                                            <b-input-group-prepend is-text>
                                                <b-icon icon="person-circle"></b-icon>
                                            </b-input-group-prepend>
                                            <b-form-input type="text" name="username" required placeholder="Tên đăng nhập"></b-form-input>
                                        </b-input-group>

                                        <b-input-group size="sm" class="mt-3">
                                            <b-input-group-prepend is-text>
                                                <b-icon icon="key-fill"></b-icon>
                                            </b-input-group-prepend>
                                            <b-form-input type="password" name="password" required placeholder="Mật khẩu"></b-form-input>
                                        </b-input-group>
                                    </div>
                                </template>

                                <div class="row justify-content-center mt-4">
                                    <button type="submit" class="col-md-9 btn btn-primary btn-lg">Đăng ký</button>
                                    <p class="text-center">Nếu bạn đã có tài khoản, vui lòng <br><a class="no_transform" href="dangnhap.php">đăng nhập tại đây</a>.</p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 mt-5">
                    <div class="card-body">
                        <img src="./img/intro_register.png" class="img-fluid">
                    </div>
                </div>
            </div>


        </div>
    </div>
</b-container>


<?php include_once("./layout/endApp.php"); ?>

<!-- JS customize -->
<script type="text/javascript">
    var app = new Vue({
        el: '#app',
        data: {

        },
        created() {
            document.title = "Đăng ký thành viên";
        }
    })
</script>
<?php include_once("./layout/foot.php"); ?>
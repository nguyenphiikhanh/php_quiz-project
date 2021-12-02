<?php include_once('./layout/head.php'); ?>

<div style="margin-top: 8rem;" class="card">
    <div class="card-body row d-flex">

        <div class="col-md-6 mt-5">
            <img class="card-img" src="./img/intro_register.png">
        </div>

        <div class="col-md-6">
            <h1 class="text-center mt-2">ĐĂNG NHẬP</h1>

            <div class="alert alert-success text-center" id="success" style="display: none;" role="alert">
                <strong>Đăng ký thành công. </strong>Bạn sẽ được chuyển đến trang đăng nhập. Vui lòng đợi...
            </div>
            <div class="alert alert-danger text-center" id="fail" style="display: none;" role="alert">
                <strong>Lỗi: Tài khoản đã tồn tại trên hệ thống.</strong> Vui lòng chọn tên đăng nhập khác.
            </div>
            <div class="row mt-2 justify-content-center">
                <form class="col-md-9" action="" method="post">

                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend border-right-0">
                            <span class="input-group-text bg-white"><i class="fas fa-user-circle"></i></span>
                        </div>
                        <input type="text" class="form-control border-left-0" name="username" required placeholder="Tên đăng nhập">
                    </div>

                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control border-left-0" required placeholder="Mật khẩu">
                    </div>

                    <!-- Default switch -->
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" name="remember" class="custom-control-input" id="switch1" name="example">
                        <label class="custom-control-label" for="switch1"><small>Nhớ tên tài khoản</small></label>
                    </div>

                    <div class="form-group row justify-content-center mb-2">
                        <button type="submit" name="submit" class="btn btn-info btn-lg">Đăng nhập</button>
                    </div>
                    <p class="text-center mb-2">hoặc</p>

                    <div class="form-group row justify-content-center mb-3">
                        <a href="dangky.php" class="btn btn-outline-secondary btn-lg">Đăng ký tài khoản</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    document.title = "Đăng nhập";
</script>

<?php include_once('./layout/foot.php'); ?>
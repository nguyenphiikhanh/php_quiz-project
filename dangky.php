<?php include_once('./layout/head.php'); ?>


<div style="margin-top: 8rem;" class="card">
    <div class="card-body row d-flex">
        <div class="col-md-6">
            <h1 class="text-center mt-2">Đăng ký thành viên</h1>
            <p class="card-text text-center">Điền thông tin đăng ký tài khoản truy cập vào khóa học.</p>

            <div class="alert alert-success text-center" id="success" style="display: none;" role="alert">
                <strong>Đăng ký thành công. </strong>Bạn sẽ được chuyển đến trang đăng nhập. Vui lòng đợi...
            </div>
            <div class="alert alert-danger text-center" id="fail" style="display: none;" role="alert">
                <strong>Lỗi: Tài khoản đã tồn tại trên hệ thống.</strong> Vui lòng chọn tên đăng nhập khác.
            </div>
            <div class="row mt-2 justify-content-center">
                <form class="col-md-9" action="" method="post">
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" name="fullname" required placeholder="Nhập họ tên đầy đủ">
                    </div>

                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" required name="email" placeholder="Nhập địa chỉ Email">
                    </div>

                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                        </div>
                        <input type="text" class="form-control" name="username" required placeholder="Tên đăng nhập">
                    </div>

                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" required placeholder="Nhập mật khẩu">
                    </div>

                    <div class="form-group row  justify-content-center mb-3">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Đăng ký</button>
                    </div>
                    <p class="text-center">hoặc <a href="dangnhap.php">đăng nhập tại đây</a> nếu bạn đã có tài khoản.</p>

                </form>
            </div>
        </div>

        <div class="col-md-6 mt-5">
            <img class="card-img" src="./img/intro_register.png">
        </div>
    </div>
</div>

<?php
require_once('./config/connection.php');

if (isset($_POST['submit'])) {
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $link = new Connection;
    $count = 0;
    $query = "SELECT * FROM users WHERE username = '$_POST[username]'";
    $res = mysqli_query($link->link, $query);
    $count = mysqli_num_rows($res);
    if ($count > 0) { ?>
        <script>
            document.getElementById("fail").style.display = "block";
            document.getElementById("success").style.display = "none";
            document.title = "Đăng ký thành viên"
        </script>
    <?php } else {
        $query = "INSERT INTO users VALUES(NULL,'$_POST[username]','$_POST[fullname]','$_POST[email]','$password',DEFAULT)";
        mysqli_query($link->link, $query);
    ?>
        <script>
            document.getElementById("fail").style.display = "none";
            document.getElementById("success").style.display = "block";
            document.title = "Đăng ký thành viên"
            setTimeout("location.href = 'dangnhap.php';",2000);
        </script>
<?php
    }
    $link->close_connect();
    unset($_POST);
}
?>

<script type="text/javascript">
    document.title = "Đăng ký thành viên"
</script>


<?php include_once('./layout/foot.php'); ?>
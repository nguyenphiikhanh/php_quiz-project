<?php
include "./config/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học lập trình JavaScript trên Website</title>
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- CSS customize -->
    <link rel="stylesheet" href="./css/style.css">

      <!-- google font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <div class="container">
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
                            <p class="text-center">hoặc <a href="login.php">đăng nhập tại đây</a> nếu bạn đã có tài khoản.</p>

                        </form>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <img class="card-img" src="./img/intro_register.png">
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['submit']))
        {
            $fullname="";
            $email="";
            $username="";
            $password="";
            $sql = "SELECT username FROM users;";
            $do=mysqli_query($connect,$sql);
            if($_POST['fullname']!=""&& $_POST['email']!=""&& $_POST['username']!="" && $_POST['password']!="")
            {
            $flag=true;
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            if(mysqli_num_rows($do)>0)
            {
                while ($row = mysqli_fetch_assoc($do))
                {
                    if($username==$row["username"])
                {
                    $flag=false;
                    $kq="Tên đăng nhập đã tồn tại!";
                }
                }
            }
            if($flag==true)
            {
             $sql="INSERT INTO users VALUES(NULL, '$username', '$fullname','$email','$password',DEFAULT)";

                if ($connect->query($sql) == TRUE) 
              {
              echo "Đăng ký thành công";
              }
            }
            else{
             echo "Tên đăng nhập đã tồn tại!";
            }
        }

    }
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- font awesome icon -->
    <script src="./js/fontAwesome.js"></script>
</body>
</html>
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

                <div class="col-md-6 mt-5">
                    <img class="card-img" src="./img/intro_register.png">
                </div>

                <div class="col-md-6">
                    <h1 class="text-center mt-2">ĐĂNG NHẬP</h1>

                    <div class="alert alert-danger text-center" id="user_fail" style="display: none;" role="alert">
                        Sai tên đăng nhập, vui lòng thử lại.
                    </div>
                    <div class="alert alert-danger text-center" id="pass_fail" style="display: none;" role="alert">
                        Sai mật khẩu, vui lòng thử lại.
                    </div>
                    <div class="row mt-2 justify-content-center">
                        <form class="col-md-9" action="" method="post">

                            <div class="input-group input-group-lg mb-3">
                                <div class="input-group-prepend border-right-0">
                                    <span class="input-group-text bg-white"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <input value="<?php echo isset($_POST['username']) ? $_POST['username'] : "" ?>" type="text" class="form-control border-left-0" name="username" required placeholder="Tên đăng nhập">
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
                                <label class="custom-control-label" for="switch1"><small>Nhớ tên đăng nhập</small></label>
                            </div>

                            <div class="form-group row justify-content-center mb-2">
                                <button type="submit" name="login" class="btn btn-info btn-lg">Đăng nhập</button>
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


        <?php
        include_once('./config/connection.php');

        if (isset($_POST['login'])) {
            $password = $_POST['password'];

            $count = 0;
            $query = "SELECT * FROM users WHERE username ='$_POST[username]' LIMIT 1";
            $res = mysqli_query($connect, $query);
            $count = mysqli_num_rows($res);
            $res = $res->fetch_assoc();


            if ($count == 0) {
        ?>
                <script>
                    document.getElementById("user_fail").style.display = "block";
                    document.title = "Đăng nhập";
                </script>
            <?php
            } elseif ($count > 0 && !password_verify($password, $res['password'])) { ?>
                <script>
                    document.getElementById("pass_fail").style.display = "block";
                </script>
            <?php

            } else {
            ?>
                <script>
                    window.location = "index.php";
                </script>
        <?php
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
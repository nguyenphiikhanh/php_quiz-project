<?php
include "./config/connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_index.css">
	<title></title>
	<style type="text/css">
		.div-inside{
			width: 100%;
			height: 300px;
			background-color: yellow;
		}
		table{
			margin-left:600px;
			margin-top: 100px;
		}
		td{
			padding-right: 20px;
			padding-bottom: 10px;
		}
	</style>
</head>
<body>
<div class="a">
	<div class="menu">
		<?php include("./layout/header.php")?>
	</div>
		<div class="div-inside">
			<form method="post" action="">
		<table>
			<tr><td>Tên đăng nhập:</td></tr>
			<tr><td><input type="text" name="username"></td></tr>
			<tr><td>Họ tên:</td></tr>
			<tr><td><input type="text" name="fullname"></td></tr>
			<tr><td>Email:</td></tr>
			<tr><td><input type="email" name="email"></td></tr>
			<tr><td>Mật khẩu hiện tại:</td></tr>
			<tr><td><input type="password" name="password"></td></tr>
			<tr><td>Mật khẩu mới:</td></tr>
			<tr><td><input type="password" name="newpass"></td></tr>
			<tr><td>Xác nhận lại mật khẩu:</td></tr>
			<tr><td><input type="password" name="confirm"></td></tr>
			<tr>
				<td><input type="submit" name="update" value="Cập nhật"></td>
			</tr>
		</table>
		</form>
		<?php
        if (isset($_POST['update']))
        {
        	$fullname="";
            $email="";
            $username="";
            $sql = "SELECT tai_khoan FROM user;";
            $do=mysqli_query($connect,$sql);
             if($_POST['fullname']!=""&& $_POST['email']!="")
            {
            $flag=false;
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
               if(mysqli_num_rows($do)>0)
            {
                while ($row = mysqli_fetch_assoc($do))
                {
                    if($username==$row["tai_khoan"])
                {
                    $flag=true;
                }
                }
            }
            if($flag==true)
            {
             $sql="UPDATE `user` SET `ho_ten`='$fullname',`email`='$email' WHERE `tai_khoan`='$username'";

                if ($connect->query($sql) == TRUE) 
              {
              echo "Cập nhật thông tin thành công";
              }
            }
             else{
             echo "Tên đăng nhập đã tồn tại!";
            }
            }
        }?>
	</div>
	</div>
	 <?php include_once("./layout/footer.php") ?>
</body>
</html>
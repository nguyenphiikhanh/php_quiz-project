<?php
session_start();
include "./config/connection.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/style_index.css">
	<title>Sửa thông tin</title>
	<style type="text/css">
		.div-inside {
			width: 100%;
			height: 300px;
		}

		table {
			margin-left: 600px;
			margin-top: 100px;
		}

		td {
			padding-right: 20px;
			padding-bottom: 10px;
		}
	</style>
</head>

<body>
	<div class="a">
		<div class="menu">
			<?php include("./layout/header.php") ?>
			<?php
			$sql = "SELECT * FROM users WHERE username= '$_SESSION[username]' LIMIT 1;";
			$do = mysqli_query($connect, $sql)->fetch_assoc();

			?>
		</div>
		<div class="div-inside">
			<form method="post" action="">
				<table>
					<tr>
						<td>Họ tên:</td>
					</tr>
					<tr>
						<td><input type="text" class="form-control" name="fullname" value="<?php echo $do['fullname'] ?>"></td>
					</tr>
					<tr>
						<td>Email:</td>
					</tr>
					<tr>
						<td><input type="email" class="form-control" name="email" value="<?php echo $do['email'] ?>"></td>
					</tr>
					<tr>
						<td><input type="submit" name="update" value="Cập nhật" class="btn btn-lg btn-primary"></td>
					</tr>
				</table>
			</form>

		</div>
	</div>
	<?php include_once("./layout/footer.php") ?>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-- font awesome icon -->
	<script src="./js/fontAwesome.js"></script>
	<script src="./js/funtion.js"></script>


	<?php
	if (isset($_POST['update'])) {
		$fullname = "";
		$email = "";
		$sql = "SELECT * FROM users;";
		$do = mysqli_query($connect, $sql);
		if ($_POST['fullname'] != "" && $_POST['email'] != "") {
			$flag = false;
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			if (mysqli_num_rows($do) > 0) {
				while ($row = mysqli_fetch_assoc($do)) {
					if ($_SESSION['username'] == $row["username"]) {
						$flag = true;
					}
				}
			}
			if ($flag == true) {
				$sql = "UPDATE `users` SET `fullname`='$fullname',`email`='$email' WHERE `username`='$_SESSION[username]'";
				if ($connect->query($sql) == TRUE) { ?>
					<script>
						swal("Sửa thông tin thành công!", "", "success")
							.then((ok) => {
								window.location.href = window.location.href
							});
					</script>
	<?php }
			}
		}
	} ?>
</body>

</html>
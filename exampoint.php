<?php
session_start();
include "./config/connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- CSS customize -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style_index.css">

  <!-- google font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  <meta charset="utf-8">
  <title>Xem kết quả thi</title>
  <style type="text/css">
  	td,tr{
  		padding-left: 10px;
  		border: 1px solid black;
  	}
  </style>
</head>
<body>
<?php include_once("./layout/header.php") ?>
<div class="container mt-5">
	<div class="jumbotron">
	<table class="table">
	<thead>
		<tr>
		<th>Tên người thi</th>
		<th>Khóa học</th>
		<th>Đề thi</th>
		<th>Điểm</th>
		<th>Ngày thi</th>
		</tr>
	</thead>
	<?php
	$sql="SELECT * FROM ket_qua LEFT OUTER JOIN khoa_hoc ON ket_qua.khoa_hoc = khoa_hoc.id
	LEFT OUTER JOIN de_thi ON  ket_qua.de_thi = de_thi.ma_de_thi
	 WHERE `username`='$_SESSION[username]';";
    $do=mysqli_query($connect,$sql);
    if(mysqli_num_rows($do)>0)
    {
    	while($row=mysqli_fetch_array($do))
    	{
	?>	
	<tr>
		<td><?php echo $row['username']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['ten_de_thi']?></td>
		<td><?php echo $row['diem']?></td>
		<td><?php echo $row['ngay']?></td>
	</tr>
	<?php
        }
    }
	?>	
	</table>
	</div>
</div>
<?php include_once("./layout/footer.php") ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- font awesome icon -->
<script src="./js/fontAwesome.js"></script>
<script src="./js/funtion.js"></script>
</body>
</html>
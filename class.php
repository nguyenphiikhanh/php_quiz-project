<?php
include "./config/connection.php";
?>
<?php include_once("./layout/header.php") ?>
<!DOCTYPE html>
<html>
<head>
	<!-- bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- CSS customize -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style_index.css">

  <!-- google font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<title></title>
    <style type="text/css">
        td{
            padding-right: 10px;
        }
        img{
            height: 150px;
        }
        #box
        {
            display: flex;
            flex-direction: row;
        }
    </style>
</head>
<body>
    <div >
        
        <?php
    $sql="SELECT * FROM khoa_hoc;";
    $do=mysqli_query($connect,$sql);
    if(mysqli_num_rows($do)>0)
    {
        ?>
            <?php
      while($row=mysqli_fetch_array($do)) 
        {
    ?>
    <div id="box">
        <div><img src="https://thienanblog.com/wp-content/uploads/2015/04/javascript_logo.png"></div>
        <div>
            <table>
            <tr><td><?php echo $row["name"]?></td></tr>
            <tr><td><?php echo $row["name"]?></td></tr>
            </table>
        </div>
       </div>
          <?php }
}?>

    </div>
</body>
 <?php include_once("./layout/footer.php") ?>
</html>
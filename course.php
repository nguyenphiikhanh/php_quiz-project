<?php
session_start();
include_once("./middleware/loginCheck.php");  //if user doesn't login redirect to login page
include "./config/connection.php";
?>
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
  <title>Học JavaScript trên website</title>

</head>

<body>
  <!-- header -->
  <?php include_once("./layout/header.php") ?>

  <main role="main" class="container mt-5">
      <div class="row justify-content-center">
      <?php
      $sql = "SELECT * FROM de_thi WHERE khoa_hoc = '$_GET[course]'";
      $do = mysqli_query($connect, $sql);
      while ($row = mysqli_fetch_assoc($do)) { ?>
        <div class="card col-md-5 mr-3 mt-3">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['ten_de_thi'] ?></h5>
            <a href="./course.php?course=" class="btn btn-primary">Làm bài thi</a>
          </div>
        </div>
      <?php }
      ?>
      </div>
  </main>
  <!-- footer -->
  <?php include_once("./layout/footer.php") ?>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- font awesome icon -->
  <script src="./js/fontAwesome.js"></script>
  <script src="./js/funtion.js"></script>
</body>

</html>
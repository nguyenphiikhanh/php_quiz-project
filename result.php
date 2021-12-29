<?php
session_start();
include "./config/connection.php"
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
  <?php include_once("./layout/header.php") ?>
  <main role="main" class="container mt-5">
    <div class="jmbotron">
      <?php
      $diem = 0;
      if (isset($_POST['nop'])) {
        for ($i = 0; $i < 6; $i++) {
          $id = $_POST['id' . $i];
          $sql = "SELECT `dapan`,`loai` FROM cau_hoi WHERE `id`= $id;";
          $do = mysqli_query($connect, $sql);
          $row = mysqli_fetch_assoc($do);
          if ($row['loai'] == "one" || $row['loai'] == "fill") {
            if (isset($_POST['ans_user' . $i])) {
              $ans_user[$i] = $_POST['ans_user' . $i];
            } else {
              $ans_user[$i] = "";
            }
            if ($ans_user[$i] == $row['dapan']) {
              $diem++;
            }
          } elseif ($row['loai'] == "multi") {
            if (isset($_POST['ans_user' . $i])) {
              $ans_user[$i] = $_POST['ans_user' . $i];
            } else {
              $ans_user[$i] = "";
            }
            if (serialize($ans_user[$i]) == $row['dapan']) {
              $diem++;
            }
          }
        }
        $do = mysqli_query($connect, $sql);
        $sql = "INSERT INTO ket_qua VALUES(NULL,'$_SESSION[username]','$_COOKIE[course]','$_COOKIE[exam]','$diem',CURRENT_TIMESTAMP)";
        if ($connect->query($sql) == TRUE) { ?>
          <div class="card">
            <div class="card-body row justify-content-center">
              <strong>Điểm bài làm của bạn: <?php echo $diem ?></strong>
            </div>
          </div>
      <?php } else {
          echo "Đã xảy ra lỗi!";
        }
      }
      ?>
    </div>
  </main>

  <?php include_once("./layout/footer.php") ?>
</body>

</html>
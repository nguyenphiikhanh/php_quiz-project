<?php
include "./config/connection.php";
session_start();
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
  <link rel="stylesheet" href="./css/style_index.css">

  <!-- google font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<style type="text/css">
  #nop{
    margin-left: 400px;
  }
</style>
</head>

<body>
  <!-- header -->
  <?php include_once("./layout/header.php") ?>

  <!-- timer countdown -->
  <div class="row mt-2">
    <div class="container">
      <div class="justify-content-end row text-wrap">
        <span class="bg-light btn btn-lg text-danger">15:23</span>
      </div>
    </div>
  </div>

  <main role="main" class="container mt-5">
    <form method="get" action="">
    <div class="jumbotron">
        <?php
   $sql="SELECT * FROM cau_hoi;";
   $do=mysqli_query($connect,$sql);
    $count=0;
    $diem=0;
    $ans_user=array();
    $arrayA=array();
    $arrayT=array();
    if(mysqli_num_rows($do)>0)
{
  ?>
  <table>
    <?php
   
  for ($k=0; $k <20 ; $k++) 
   // ($row=mysqli_fetch_array($do)) 
  {
      // $count++;
    $row=mysqli_fetch_array($do);
      $arrayT[$k]=$row["loai"];     
      if ($row["loai"]=="one") {
        $arrayQ=array();
        $arrayQ = unserialize($row["luachon"]);
        $arrayA[$k]=$row["dapan"];
    ?>
    <tr><td><?php echo $row["noidung"];?></td></tr>
    <?php
    for ($i=0; $i <sizeof($arrayQ) ; $i++) { 
    ?>
    <tr><td><input type="radio" name="<?php echo "ans_user".$k;?>" value="<?php echo $arrayQ[$i]?>"><?php echo $arrayQ[$i];?></td></tr>
    <?php
  }
}
    elseif ($row["loai"]=="multi") 
    {
        $arrayQ=array();
        $arrayQ = unserialize($row["luachon"]);
        $arrayA[$k] = $row["dapan"];
  ?>
   <tr><td><?php echo $row["noidung"];?></td></tr>
    <?php
    for ($i=0; $i <sizeof($arrayQ) ; $i++) { 
    ?>
    <tr><td><input type="checkbox" name='<?php echo "ans_user".$k."[]";?>' value="<?php echo $arrayQ[$i]?>"><?php echo $arrayQ[$i] ?></td></tr>
  <?php }
     }
    elseif($row["loai"]=="fill")
    {
      $arrayA[$k] = $row["dapan"];
      ?>
      <tr><td><?php echo $row["noidung"];?></td></tr>
      <tr><td><input type="text" name="<?php echo "ans_user".$k;?>"></td></tr>
      <?php
    }
  }
} 
      ?>
      </table>
       <input type="submit" name="nop" value="Nộp bài" class="btn btn-lg btn-primary" id="nop">
       <?php
       if(isset($_GET['nop']))
       {
        for ($i=0; $i <$k ; $i++) 
        { 
          if($arrayT[$i]=="multi")
          {
            if(isset($_GET['ans_user'.$i]))
            {
             $ans_user[$i]=$_GET['ans_user'.$i];
            }
            else{$ans_user[$i]="";}
            if( serialize($ans_user[$i])==$arrayA[$i]){$diem++;}
          }
          elseif($arrayT[$i]=="one")
          {
            if(isset($_GET['ans_user'.$i]))
            {
             $ans_user[$i]=$_GET['ans_user'.$i];
            }
            else{$ans_user[$i]="";}
            if($ans_user[$i]== $arrayA[$i]){$diem++;}
          }
          elseif($arrayT[$i]=="fill")
          {
            if(isset($_GET['ans_user'.$i]))
            {
             $ans_user[$i]=$_GET['ans_user'.$i];
            }
            else{$ans_user[$i]="";}
            if($ans_user[$i]== $arrayA[$i]){$diem++;}
          }   
       }                          
       $_SESSION['diem']= $diem;
       }
       ?>
    </div>

    </form>

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
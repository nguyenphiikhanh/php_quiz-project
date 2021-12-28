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



  <main role="main" class="container mt-5">
    <form method="post" action="" >
    <div class="jumbotron">
        <?php
   $sql="SELECT * FROM cau_hoi;";
   $do=mysqli_query($connect,$sql);
   $ques_ez=array();
   $ques_nor=array();
   $ques_har=array();

   /**
    * 
    */
   class quiz
   {
     public $noidung;
     public $loai;
     public $luachon=array();
     public $dapan;
     public $mucdo;
        public function __construct($noidung, $loai, $luachon,$dapan,$mucdo)
      {
        $this->noidung = $noidung;
        $this->loai= $loai;
        $this->luachon = $luachon;
        $this->dapan = $dapan;
        $this->mucdo = $mucdo;
      }
   }
    $ans_user=array();
    $diem=0;
    if(mysqli_num_rows($do)>0)
{  
  while($row=mysqli_fetch_array($do)) 
  {
    if($row["mucdo"]=="coban")
    {
     $ques_ez[] = new quiz($row["noidung"],$row["loai"],unserialize($row["luachon"]),$row["dapan"],$row["mucdo"]);
    }
    else if($row["mucdo"]=="trungbinh")
    {
     $ques_nor[] = new quiz($row["noidung"],$row["loai"],unserialize($row["luachon"]),$row["dapan"],$row["mucdo"]);
    }
    else if($row["mucdo"]=="nangcao")
    {
     $ques_har[] = new quiz($row["noidung"],$row["loai"],unserialize($row["luachon"]),$row["dapan"],$row["mucdo"]);
    }
  } 
}
$ez_rand = array_rand($ques_ez,2);
$nor_rand =array_rand($ques_nor,3);
$har_rand =array_rand($ques_har,2);
$ques_final=array();
for ($i=0; $i <count($ez_rand) ; $i++) { 
  $ques_final[]= $ques_ez[$ez_rand[$i]];
}
for ($i=0; $i <count($nor_rand) ; $i++) { 
  $ques_final[]= $ques_nor[$nor_rand[$i]];
}
for ($i=0; $i <count($har_rand) ; $i++) { 
  $ques_final[]= $ques_har[$har_rand[$i]];
}
  ?>
       <table>
        <?php
        for ($i=0; $i <count($ques_final) ; $i++) 
      { 
          if($ques_final[$i]->loai=="one")
          {
        ?>
        <tr><td><?php echo $ques_final[$i]->noidung; ?></td></tr>
        <?php
            for ($j=0; $j <count($ques_final[$i]->luachon) ; $j++) 
            {
        ?>
        <tr><td><input type="radio" name="<?php echo "ans_user".$i;?>" value="<?php echo $ques_final[$i]->luachon[$j]; ?>"><?php echo $ques_final[$i]->luachon[$j]; ?></td></tr>
        <?php
             }
          }
          else if ($ques_final[$i]->loai=="multi") 
          {
              ?>
          <tr><td><?php echo $ques_final[$i]->noidung; ?></td></tr>
          <?php
             for ($j=0; $j<count($ques_final[$i]->luachon) ; $j++) 
             { 
          ?>
           <tr><td><input type="checkbox" name="<?php echo "ans_user".$i."[]";?>" value="<?php echo $ques_final[$i]->luachon[$j]; ?>"><?php echo $ques_final[$i]->luachon[$j]; ?></td></tr>
           <?php
             }
          }
          else if ($ques_final[$i]->loai=="fill")
          {
           ?>
           <tr><td><?php echo $ques_final[$i]->noidung; ?></td></tr>
           <tr><td><input type="text" name="<?php echo "ans_user".$i;?>"></td></tr>
           <?php
          }
      }
           ?>
       </table>
       <input type="submit" name="nop" value="Nộp bài" class="btn btn-lg btn-primary">
         <?php
        if(isset($_POST['nop']))
        {
            for ($i=0; $i <count($ques_final); $i++) 
            {
                if(isset($_POST['ans_user'.$i]))
                {
                 $ans_user[$i]=$_POST['ans_user'.$i];
                }
                else{$ans_user[$i]="";}
            }
            for ($i=0; $i <count($ques_final) ;$i++) 
            { 
               if($ques_final[$i]->loai=="multi")
               {
                if(serialize($ans_user[$i])==$ques_final[$i]->dapan){$diem++;}
               }
               else if ($ques_final[$i]->loai=="one"||$ques_final[$i]->loai=="fill")
               {
                 if($ans_user[$i]==$ques_final[$i]->dapan){$diem++;}
               }
            }
            echo $diem;

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
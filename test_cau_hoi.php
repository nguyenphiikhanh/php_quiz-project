<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="" method="get">
            <?php
            include_once("./config/connection.php");

            $query = "SELECT * FROM cau_hoi WHERE loai ='multi' LIMIT 1";

            $res = mysqli_query($connect, $query);

            while ($question = $res->fetch_assoc()) {
                echo "<span>Câu hỏi: $question[noidung] </span><br/>";
                $options = unserialize($question['luachon']);

                foreach ($options as $option) {
                    echo "<input type='checkbox' value='$option' name='luachon[]'><label>$option</label><br/>";
                }
            }
            ?>
            <input type="submit" value="Nộp bài" name="nop">
        </form>
        
        <?php if(isset($_GET['nop'])){
            echo "Đáp án từ người dùng :";
            $userOptions = $_GET['luachon'];
            foreach($userOptions as $userOption){
                echo "<p>$userOption</p><br/>";
            }
            sort($userOptions);

            
            echo "đáp án đúng :";
            while($question = $res->fetch_assoc()){
                $dapanDung = unserialize($question['dapan']);

                foreach($dapanDung as $dapAn){
                    echo $dapAn;
                }
            }
        }
            
        ?>
    </div>
</body>

</html>
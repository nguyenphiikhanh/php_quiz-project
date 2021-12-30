<?php
if (!isset($_GET['exam'])) {
    header("location:javascript://history.go(-1)");
} else {
    include_once("../config/connection.php");
    $link = new Connection;
    $query = "DELETE FROM de_thi WHERE ma_de_thi ='$_GET[exam]'";
    mysqli_query($link->link, $query);

    header('Location: ' . $_SERVER["HTTP_REFERER"]);
    exit;
}

<?php
if (!isset($_GET['question'])) {
    header("Location: ../question.php");
} else {
    include_once("../config/connection.php");
    $link = new Connection;
    $query = "DELETE FROM cau_hoi WHERE id ='$_GET[question]'";
    mysqli_query($link->link, $query);

    header("Location: ../question.php");
}
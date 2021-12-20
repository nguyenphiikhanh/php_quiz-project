<?php
if (!isset($_GET['course'])) {
    header("Location: ../course.php");
} else {
    include_once("../config/connection.php");
    $link = new Connection;
    $query = "DELETE FROM khoa_hoc WHERE id ='$_GET[course]'";
    mysqli_query($link->link, $query);

    header("Location: ../course.php");
}

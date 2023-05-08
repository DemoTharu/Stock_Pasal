<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "Computer";

    $con = mysqli_connect($host,$user,$pass,$db);

    if (!$con) {
        die("Failed ". mysqli_connect_error());
      }
?>
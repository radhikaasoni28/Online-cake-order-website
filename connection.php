<?php
    $servernm = "localhost";
    $usernm = "root";
    $password = "";
    $dbnm = "cakedata";

    $connect = mysqli_connect($servernm,$usernm,$password,$dbnm);

    if ($connect) {
        echo"";
      }
      else {
        die("connection failed because".mysqli_connect_error());
      }
?>
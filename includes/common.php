<?php
    $con = mysqli_connect("localhost", "root", "root", "lifestylestoresql")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>

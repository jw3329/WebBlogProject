<?php
  function connect($address,$root,$password,$db_name,$command) {
    $conn = mysqli_connect($address,$root,$password);
    mysqli_select_db($conn,$db_name);
    $result = mysqli_query($conn,$command);
    return $result;
  }
?>

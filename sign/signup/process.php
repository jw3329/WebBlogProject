<?php
  require '../../connect.php';
  $sql = "INSERT INTO sign (email,firstname,lastname,password,created) VALUES ('".$_POST['email']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['password']."',now())";
  connect('localhost','root','111111','jw_web_blog',$sql);
  header('Location: /php');
?>

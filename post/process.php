<?php
  $conn = mysqli_connect('localhost','root','111111');
  mysqli_select_db($conn,'jw_web_blog');
  $sql = "INSERT INTO post (title,description,author,created) VALUES ('".$_POST['title']."', '".$_POST['desc']."', '".$_POST['author']."', now())";
  echo $sql;
  $result = mysqli_query($conn,$sql);
  header('Location: http://localhost/php/index.php?id=post');
?>

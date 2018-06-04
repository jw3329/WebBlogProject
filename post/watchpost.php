<?php 
  $conn = mysqli_connect('localhost','root','111111');
  mysqli_select_db($conn,'jw_web_blog');
  $result = mysqli_query($conn,'SELECT * FROM post');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>jw3329's web blog</title>
    <link rel="stylesheet" href="/php/css/master.css">
  </head>
  <body id = "colorChange">
    <header>
      <h1><a href="http://localhost/php/index.php">Junwon's web blog</a></h1>
    </header>
    <nav>
      <ul>
        <li>
          <a href="http://localhost/php/index.php?id=javascript">ABOUT JAVASCRIPT</a>
        </li>
        <li>
          <a href="http://localhost/php/index.php?id=post">POST</a>
        </li>
      </ul>
    </nav>
    <article>
      <?php 
        function getRow($id) {
          while(($row = mysqli_fetch_assoc($GLOBALS['result']))['id'] != $id) ;
          return $row;
        }
        $id = $_GET['postNum'];
        $row = getRow($id);
        $postid = $row['id'];
        $title = $row['title'];
        $author = $row['author'];
        $desc = $row['description'];
        $created = $row['created'];
       ?>
      <p>Post ID : <?php echo $id ?></p>
      <p>Title : <?php echo $title ?></p>
      <p>Author : <?php echo $author ?></p>
      <p>Description : <?php echo $desc ?></p>
      <p>Made by : <?php echo $created ?></p>
    </article>
  </body>
</html>

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
        if(empty($_GET['id'])) {
          echo "<h2>Prepage of Junwon's Web blog</h2>
                I'm working hard on it!";
        } else if($_GET['id'] == 'javascript'){
          echo file_get_contents($_GET['id'] . '.txt');?>
          <script type="text/javascript" src="/php/js/master.js"></script>
        <?php
      } else {
        include 'post.php';
      }
       ?>
    </article>
  </body>
</html>

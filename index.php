<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>jw3329's web blog</title>
  </head>
  <body class="container">
    <header class="blog-header">
      <div class="row">
        <div class="col-9 text-center">
          <h1><a href="/php/">Junwon's web blog</a></h1>
        </div>
        <div class="col-3 btn-group">
          <a class="btn btn-primary sign" href="sign/signin/index.html" role="button">Sign in</a>
          <a class="btn btn-primary sign" href="sign/signup/index.html" role="button">Sign up</a>
          <a class="btn btn-primary sign" href="sign/signout/process.php" role="button">Sign out</a>
        </div>
      </div>
    </header>
    <div class="row">
      <nav class="col-2 nav nav-pills flex-column">
        <a class="nav-item nav-link" id="javascript" href="/php/index.php?id=javascript">ABOUT JAVASCRIPT</a>
        <a class="nav-item nav-link" id="post" href="/php/index.php?id=post">POST</a>
      </nav>
      <article class="col-10">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="js/nav_coloring.js" charset="utf-8"></script>
  </body>
</html>

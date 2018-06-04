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
      <form class="creatingPost" action="/php/post/process.php" method="post">
        <p>
          Title : <input type="text" name="title">
        </p>
        <p>
          Author : <input type="text" name="author">
        </p>
        <p>
          Description : <textarea name="desc" rows="8" cols="80"></textarea>
        </p>
        <input type="submit" value="Create Post">
      </form>
    </article>
  </body>
</html>

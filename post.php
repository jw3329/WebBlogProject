<?php
  $conn = mysqli_connect("localhost","root","111111");
  mysqli_select_db($conn,'jw_web_blog');
  $result = mysqli_query($conn,'SELECT * FROM post');
?>
  <a href="/php/post/writing.php" class="writePost"> Go for post</a>
<?php
  echo '<ol class = "postingOrder">';
  while($row = mysqli_fetch_assoc($result)) {
    echo '<li><a href = http://localhost/php/post/watchpost.php?postNum=' . $row['id'] . '>' . $row['id'] . ' ' . $row['title'] . ' ' .
    $row['author'] . ' ' . $row['created'] . '</a></li>' . "\n";
  }
  echo '</ol>';
?>

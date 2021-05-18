<?php
    $title = 'Title 1';
    $content = 'Some content';
    $year = '2020';
?>

<html>
  <body>
    <div class='content'>
    <h1><?= $content?></h1>
    <p><?= $title?></p>
    <p><?= $year?></p>
    </div>
  <footer>
  &copy; <?php echo date('Y'); ?> Все права защищены.
  </footer>
  </body>
</html>
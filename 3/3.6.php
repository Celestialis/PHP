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
    <p>
    <?php  $menuArr = [
        'Item 1',
        'Item 2' => ['Subitem 1', 'Subitem 2', 'Subitem 3'],
        'Item 3' => ['Subitem 4' => ['One level deeper 1', 'One level deeper 2']]
    ];

    function menuRender($arr)
    {
        $renderArr[] = '<ul>';
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
            } else {
                $renderArr[] = '<li>' . $value . '</li>';
            }
        }
        $renderArr[] = '</ul>';

        return implode($renderArr);
    }

    echo menuRender($menuArr);
?></p>
    </div>
  <footer>
  &copy; <?php echo date('Y'); ?> Все права защищены.
  </footer>
  </body>
</html>
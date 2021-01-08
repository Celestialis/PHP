<?php
function replaceSpace($string)
{
    return preg_replace('/\s/', '_', $string);
}

echo replaceSpace('Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.');
?>
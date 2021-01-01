<?php
$areaArr = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Волгоградская область:' => ['Волгоград', 'Волжский', 'Камышин', 'Урюпинск', 'Иловля']
];

function displayCity($arr)
{
    foreach ($arr as $key => $value) {
        echo $key;
        for ($i = 0; $i < $arrLength = count($arr[$key]); $i++) {
            if ($i == $arrLength - 1) {
                echo $arr[$key][$i] . '. ';
            } else {
                echo $arr[$key][$i] . ', ';
            }
        }
    }
}

displayCity($areaArr);
?>
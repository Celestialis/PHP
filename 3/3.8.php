<?php
$areaArr = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Волгоградская область:' => ['Волгоград', 'Волжский', 'Камышин', 'Урюпинск', 'Иловля']
];

function searchCity($char, $arr)
{
    $wrongCity = 0;
    $cityCount = count($arr, COUNT_RECURSIVE) - count($arr);
    foreach ($arr as $key => $value) {
        for ($i = 0; $i < count($arr[$key]); $i++) {
            $explodeArr = preg_split('//u', $arr[$key][$i], 0, PREG_SPLIT_NO_EMPTY);
            if ($explodeArr[0] == $char) {
                echo implode($explodeArr). ' ';
            } else {
                $wrongCity++;
                if ($wrongCity == $cityCount) {
                    return print "Города на букву '{$char}' в массиве нет.";
                }
            }
        }
    }
}

searchCity('К', $areaArr);
?>
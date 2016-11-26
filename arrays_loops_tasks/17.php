<?php
/**
 * 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
 * месяц выведите жирным. Текущий месяц должен храниться в переменной $month
 */
$month = date('F');

$array = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July ',
    'August',
    'September',
    'October',
    'November',
    'December',
];

foreach ($array as $value) {
    if ($value == $month) {
        echo "<strong>" . $value . "</strong></br>";
    } else {
        echo $value . "</br>";
    }
}


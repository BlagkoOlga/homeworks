<?php
/**
 * Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
 * текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
 */
$day = date('l');
$timestamp = strtotime('next Monday');
$days      = array();
for ($i = 0; $i < 7; $i++) {
    $days[]    = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
}

foreach ($days as $key => $value) {
    if ($value == $day) {
        echo "<i>" . $value . "</i></br>";
    } else {
        echo $value . "</br>";
    }
}
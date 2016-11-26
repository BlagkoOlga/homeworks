<?php
/**
 * Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
 * выходные дни следует вывести жирным.
 */
$timestamp = strtotime('next Monday');
$days      = array();
for ($i = 0; $i < 7; $i++) {
    $days[]    = strftime('%A', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
}

foreach ($days as $key => $value) {
    if ($key == 5 || $key == 6) {
        echo "<strong>" . $value . "</strong></br>";
    } else {
        echo $value . "</br>";
    }
}
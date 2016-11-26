<?php
/**
 * 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами.
 */

$min = rand(1, 10);
$max = rand(11, 20);
$arr = range($min, $max);
print_r($arr);
echo "</br>";

$b = min($arr);
$c = max($arr);

foreach ($arr as $k => $v) {
    if ($v == $b) {
        $arr[$k] = $c;
    }
    if ($v == $c) {
        $arr[$k] = $b;
    }
}
print_r($arr);

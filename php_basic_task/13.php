<?php
/**
 * <p>13. Заданы две переменные: s - длина участка, который проехал автомобиль;
 * t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.</p>
 */
$s = 100;
$t = 2;
$v = $s / $t;
echo "average car's speed $v km/h </br>";
$change_val = 1000 / 3600;
$v = number_format($v * $change_val, 2);

echo "average car's speed $v m/s";
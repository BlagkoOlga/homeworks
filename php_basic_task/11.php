<?php
/**
 * <p>11. С помощью конструкции switch выведите фразу: "Это выходной день",
 * если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).</p>
 */
require_once('9.php');

switch ($day) {
    case ($day >= 1 && $day <= 5):
        echo "$day - This is working day";
        break;
    case($day >= 6 && $day <= 7):
        echo "$day - This is weekend";
        break;
}
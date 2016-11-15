<?php
/**
 * <p>10. С помощью конструкции switch выведите фразу: "Это рабочий день",
 * если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).</p>
 */
require_once ('9.php');

switch ($day)
{
    case ($day>=1 && $day<=5):
        echo "$day - This is working day";
        break;
}
<?php
/**
 * <p>7. Расширьте конструкцию if из п.5-6, выводя фразу: "Вам еще рано работать" при условии,
 * что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).</p>
 */
require_once('2.php');

if ($age >= 18 && $age <= 59) {
    echo "You should work";
}
if ($age > 59) {
    echo "It is time for you to retire";
}
if ($age >= 0 && $age <= 17) {
    echo "You still early work";
}
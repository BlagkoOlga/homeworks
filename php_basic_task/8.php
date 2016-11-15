<?php
/**
 * <p>8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии,
 * что значение переменной age является отрицательным числом, или вовсе числом не является.</p>
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
if ($age < 0) {
    echo "Unknown age";
}
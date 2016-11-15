<?php
/**
 * <p>6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной age больше 59.</p>
 */
require_once('2.php');

if ($age >= 18 && $age <= 59) {
    echo "You should work";
}
if ($age > 59) {
    echo "It is time for you to retire";
}
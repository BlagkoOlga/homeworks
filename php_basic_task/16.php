<?php
/**
 * <p>16. Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.</p>
 */
$a = rand(0, 10);
$b = rand(0, 10);

if ($a > $b) {
    echo "Max variable is a - $a";
}
if ($b > $a) {
    echo "Max variable is b - $b";
}
if ($a == $b) {
    echo "Variables the same - $a";
}
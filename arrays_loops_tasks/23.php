<?php
/**
 * Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
 * пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
 * 2, 3, т. е. 6.</p>
 * По желанию можете сделать проверку на корректность введения данных пользователем.
 */
$str  = '12345';
$i    = 0;
$summ = 0;
while ($i < strlen($str)) {
    $summ = $summ + $str[$i];
    $i++;
}
echo $summ;
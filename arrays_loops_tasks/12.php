<?php
/**
 * Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
 * меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
 * этого (итерации — это количество проходов цикла), и запишите его в переменную $num.
 */
$num = 1000;
$n = 0;

while ($num > 50) {
    $n++;
    $num = $num / 2;
}

echo $num . '</br>';
echo $n;
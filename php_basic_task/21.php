<?php
/**
 * <p>21. Приведите число 0 к типу boolean. Объясните результат.</p>
 */

$a = 0;
$b = (bool)$a;

var_dump($b); //displayed false, because  0 -  return false
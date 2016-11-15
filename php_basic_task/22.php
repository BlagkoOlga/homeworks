<?php
/**
 * <p>22. Приведите число -20 к типу boolean. Объясните результат.</p>
 */

$a = -20;
$b = (bool)$a;

var_dump($b); //displayed true, because all positive or negative integer, not a 0 -  return true
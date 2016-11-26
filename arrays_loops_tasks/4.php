<?php
/**
 *  Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
 * помощью второго — столбец элементов.
 */

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $item) {
    echo $item . '</br/>';
}

foreach ($arr as $key => $item) {
    echo $key . '</br/>';
}

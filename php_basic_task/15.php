<?php
/**
 * <p>15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число.
 * Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
 * На экран выводить результат в зависимости от значений этих переменных.
 * Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
</p>
 */
$a = rand(0, 10);
$b = rand(0, 10);
$result = "";
$operator = "/";

if(($operator=="/" || $operator=="%") && $b == 0)
    die("Divided on 0 incorrect");

switch ($operator) {
    case '+':
        $result=$a * $b;
        echo "Result of $a $operator $b is $result";
        break;
    case '-':
        $result=$a - $b;
        echo "Result of $a $operator $b is $result";
        break;
    case '*':
        $result=$a * $b;
        echo "Result of $a $operator $b is $result";
        break;
    case '/':
        $result = number_format($a / $b, 2);
        echo "Result of $a $operator $b is $result";
        break;
    case '%':
        $result = $a % $b;
        echo "Result of $a $operator $b is $result";
        break;

    default:
        echo "Unknown operator";
}

<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 23:50
 *
 * 23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.
 *
 */

$number = '123';
$sum = 0;


for($i = 0; $i <= strlen($number); $i++) {
    $sum += $number[$i];

}

echo $number."<br/>";
echo $sum;


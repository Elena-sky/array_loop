<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 00:28
 *
 * Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.
 *
 */

$arr = [2, 5, 9, 15, 0, 4];

foreach ($arr as $value){
    if ($value > 3 && $value < 10 )
    echo $value.'<br/>';
}
<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 09.07.17
 * Time: 23:36
 * 3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.</p>

 */

$array = [1, 20, 15, 17, 24, 35];
$result=0;

foreach ( $array as $value){
    $result= $value *$value;
}

echo $result;

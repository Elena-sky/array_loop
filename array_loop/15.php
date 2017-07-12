<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 21:19
 *
 * Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
5, 19, 13, 0, 10.
 *
 */

$arr = [4, 2, 5, 19, 13, 0, 10];
$count =0;

foreach ($arr as $count) {
    $count = $count +1;
}
echo 'count = ' . $count;
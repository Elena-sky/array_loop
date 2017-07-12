<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 00:59
 *
 * 11. Выведите столбец четных чисел в промежутке от нуля до 100.
 *
 */


$i = 0;

while ($i<=100){
    if ($i%2 ==0){
        echo $i.'<br/>';
    }
    $i++;
}

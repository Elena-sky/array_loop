<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 00:32
 *
 * Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
'­1­2­3­4­5­6­7­8­9­'.
 *
 */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str='';

 foreach ($arr as $value){
     $str .= $value;

 }
echo $str;
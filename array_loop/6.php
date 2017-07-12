<?php
/**
 * Created by PhpStorm.
 * User: MacBook
 * Date: 10.07.17
 * Time: 00:19
 *
 * 6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой');
 *
 */


$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = [];
$ru = [];
//$en = array_keys($arr);
//$ru = array_values($arr);
foreach ($arr as $key => $value){
//$en[]=$key;
    array_push($en, $key);
$ru[]=$value;
}

var_dump($en);
var_dump($ru);

